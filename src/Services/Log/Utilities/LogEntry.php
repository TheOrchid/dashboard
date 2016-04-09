<?php namespace Orchid\Dashboard\Services\Log\Utilities;

use Carbon\Carbon;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;

class LogEntry
{
    /* ------------------------------------------------------------------------------------------------
     |  Properties
     | ------------------------------------------------------------------------------------------------
     */
    /** @var string */
    public $env;

    /** @var string */
    public $level;

    /** @var Carbon */
    public $datetime;

    /** @var string */
    public $header;

    /** @var string */
    public $stack;

    /* ------------------------------------------------------------------------------------------------
     |  Constructor
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Construct the log entry instance.
     *
     * @param  string  $level
     * @param  string  $header
     * @param  string  $stack
     */
    public function __construct($level, $header, $stack)
    {
        $this->setLevel($level);
        $this->setHeader($header);
        $this->setStack($stack);
    }

    /* ------------------------------------------------------------------------------------------------
     |  Getters & Setters
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Set the entry level.
     *
     * @param  string  $level
     *
     * @return self
     */
    private function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Set the entry header.
     *
     * @param  string  $header
     *
     * @return self
     */
    private function setHeader($header)
    {
        $this->setDatetime($this->extractDatetime($header));

        $header = $this->cleanHeader($header);

        if (preg_match('/^[a-z]+.[A-Z]+:/', $header, $out)) {
            $this->setEnv($out[0]);
            $header = trim(str_replace($out[0], '', $header));
        }

        $this->header = $header;

        return $this;
    }

    /**
     * Set entry environment.
     *
     * @param  string  $env
     *
     * @return self
     */
    private function setEnv($env)
    {
        $this->env = head(explode('.', $env));

        return $this;
    }

    /**
     * Set the entry date time.
     *
     * @param  string  $datetime
     *
     * @return self
     */
    private function setDatetime($datetime)
    {
        $this->datetime = Carbon::createFromFormat(
            'Y-m-d H:i:s',
            $datetime
        );

        return $this;
    }

    /**
     * Set the entry stack.
     *
     * @param  string  $stack
     *
     * @return self
     */
    private function setStack($stack)
    {
        $this->stack = $stack;

        return $this;
    }

    /**
     * Get translated level name with icon
     *
     * @return string
     */
    public function level()
    {
        return $this->icon() . ' ' . $this->name();
    }

    /**
     * Get level icon
     *
     * @return string
     */
    public function icon()
    {
        return log_styler()->icon($this->level);
    }

    /* ------------------------------------------------------------------------------------------------
     |  Check Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Check if same log level
     *
     * @param  string  $level
     *
     * @return bool
     */
    public function isSameLevel($level)
    {
        return $this->level === $level;
    }

    /* ------------------------------------------------------------------------------------------------
     |  Convert Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Get the log entry as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'level'     => $this->level,
            'datetime'  => $this->datetime->format('Y-m-d H:i:s'),
            'header'    => $this->header,
            'stack'     => $this->stack
        ];
    }

    /**
     * Convert the log entry to its JSON representation.
     *
     * @param  int  $options
     *
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->toArray(), $options);
    }

    /**
     * Serialize the log entry object to json data
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /* ------------------------------------------------------------------------------------------------
     |  Check Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Check if the entry has a stack.
     *
     * @return bool
     */
    public function hasStack()
    {
        return $this->stack !== "\n";
    }

    /* ------------------------------------------------------------------------------------------------
     |  Other Functions
     | ------------------------------------------------------------------------------------------------
     */
    /**
     * Clean the entry header.
     *
     * @param  string  $header
     *
     * @return string
     */
    private function cleanHeader($header)
    {
        return preg_replace('/\[\d{4}(-\d{2}){2} \d{2}(:\d{2}){2}\][ ]/', '', $header);
    }

    /**
     * Extract datetime from the header.
     *
     * @param  string  $header
     *
     * @return string
     */
    private function extractDatetime($header)
    {
        return preg_replace('/^\[(\d{4}(-\d{2}){2} \d{2}(:\d{2}){2})\].*/', '$1', $header);
    }
}
