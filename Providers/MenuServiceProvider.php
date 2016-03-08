<?php

namespace Orchid\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Dashboard\Services\Menu\DashboardMenu;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     */
    public function boot(DashboardMenu $dashboardMenu)
    {
        $this->registerMenu($dashboardMenu);
    }

    protected function registerMenu(DashboardMenu $dashboardMenu = null)
    {

        $domainsMenu = [
            'slug' => 'Web domains',
            'icon' => 'fa fa-globe',
            'url' => route('dashboard.domains.index'), //'/dashboard/#!/settings', //route('settings'),
            'label' => trans('dashboard::menu.Web domains'),
            'groupname' => trans('dashboard::menu.General settings'),
            'childs' => false,
            'divider' => false,
        ];

        $localizationMenu = [
            'slug' => 'Localization',
            'icon' => 'fa fa-language',
            'url' => route('dashboard.domains.index'), //'/dashboard/#!/settings', //route('settings'),
            'label' => trans('dashboard::menu.Localization'),
            'groupname' => null,
            'childs' => false,
            'divider' => true,
        ];


        $errorMenu = [
            'slug' => 'Logs',
            'icon' => 'fa fa-bug',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Logs'),
            'groupname' => null,
            'childs' => false,
            'divider' => true,
        ];


        $seoMenu = [
            'slug' => 'Static pages',
            'icon' => 'fa fa-list-alt',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Static pages'),
            'groupname' => trans('dashboard::menu.Search Engine Optimization'),
            'childs' => false,
            'divider' => false,
        ];



        $siteMapMenu = [
            'slug' => 'Site Map',
            'icon' => 'fa fa-sitemap',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Site Map'),
            'childs' => false,
            'divider' => true,
        ];



        $typePostMenu = [
            'slug' => 'Types posts',
            'icon' => 'fa fa-pencil-square-o',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Types posts'),
            'childs' => false,
            'divider' => false,
        ];

        $categoryMenu = [
            'slug' => 'Categories',
            'icon' => 'fa fa-briefcase',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Categories'),
            'childs' => false,
            'divider' => false,
        ];


        $tagsMenu = [
            'slug' => 'Tags',
            'icon' => 'fa fa-tags',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Tags'),
            'childs' => false,
            'divider' => true,
        ];

        $menuMenu = [
            'slug' => 'Menu',
            'icon' => 'fa fa-bars',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Menu'),
            'groupname' => trans('dashboard::menu.Posts Managements'),
            'childs' => false,
            'divider' => false,
        ];




        $usersMenu = [
            'slug' => 'Users',
            'icon' => 'fa fa-users',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Users'),
            'groupname' => trans('dashboard::menu.Users'),
            'childs' => false,
            'divider' => false,
        ];

        $groupsMenu = [
            'slug' => 'Groups',
            'icon' => 'fa fa-lock',
            'url' => route('dashboard.domains.index'),
            'label' => trans('dashboard::menu.Groups'),
            'childs' => false,
            'divider' => true,
        ];





        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $menuMenu, 1);
        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $typePostMenu, 2);
        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $categoryMenu, 3);
        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $tagsMenu, 4);

        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $usersMenu, 5);
        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $groupsMenu, 6);


        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $seoMenu, 10);
        $dashboardMenu->add('Tools', 'dashboard::partials.leftMenu', $siteMapMenu, 30);


        $dashboardMenu->add('Systems', 'dashboard::partials.leftMenu', $errorMenu, 500);
        $dashboardMenu->add('Systems', 'dashboard::partials.leftMenu', $localizationMenu, 300);
        $dashboardMenu->add('Systems', 'dashboard::partials.leftMenu', $domainsMenu, 1);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
