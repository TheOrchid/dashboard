<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <link href="/css/app.css" rel="stylesheet">
</head>


<body>
<div class="app app-header-fixed app-aside-fixed">


    <!-- header -->
    <header id="header" class="app-header navbar" role="menu">
        <!-- navbar header -->
        <div class="navbar-header bg-dark">
            <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
                <i class="glyphicon glyphicon-cog"></i>
            </button>
            <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
                <i class="glyphicon glyphicon-align-justify"></i>
            </button>
            <!-- brand -->
            <a href="#/" class="navbar-brand text-lt">
                <i class="fa fa fa-bolt"></i>
                <span class="hidden-folded m-l-xs">Orchid</span>
            </a>
            <!-- / brand -->
        </div>
        <!-- / navbar header -->

        <!-- navbar collapse -->
        <div class="collapse pos-rlt navbar-collapse box-shadow bg-white-only">
            <!-- buttons -->
            <div class="nav navbar-nav hidden-xs">
                <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="app-aside-folded" target=".app">
                    <i class="fa fa-dedent fa-fw text"></i>
                    <i class="fa fa-indent fa-fw text-active"></i>
                </a>
                <a href="#" class="btn no-shadow navbar-btn" ui-toggle-class="show" target="#aside-user">
                    <i class="fa fa-user fa-fw"></i>
                </a>
            </div>
            <!-- / buttons -->

            <!-- link and dropdown -->
            <ul class="nav navbar-nav hidden-sm">





                <li class="dropdown pos-stc">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <span>Mega</span>
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu wrapper w-full bg-white">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="m-l-xs m-t-xs m-b-xs font-bold">Pages <span
                                            class="badge badge-sm bg-success">10</span></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Profile</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Post</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Search</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Invoice</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Price</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Lock
                                                    screen</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign
                                                    in</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sign
                                                    up</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 b-l b-light">
                                <div class="m-l-xs m-t-xs m-b-xs font-bold">UI Kits <span
                                            class="label label-sm bg-primary">12</span></div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Buttons</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Icons
                                                    <span class="badge badge-sm bg-warning">1000+</span></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Grid</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Widgets</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-6">
                                        <ul class="list-unstyled l-h-2x">
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Bootstap</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Sortable</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Portlet</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="fa fa-fw fa-angle-right text-muted m-r-xs"></i>Timeline</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 b-l b-light">
                                <div class="m-l-xs m-t-xs m-b-sm font-bold">Analysis</div>
                                <div class="text-center">
                                    <div class="inline">
                                        <div ui-jq="easyPieChart" ui-options="{
                          percent: 65,
                          lineWidth: 50,
                          trackColor: '#e8eff0',
                          barColor: '#23b7e5',
                          scaleColor: false,
                          size: 100,
                          rotate: 90,
                          lineCap: 'butt',
                          animate: 2000
                        }" class="easyPieChart" style="width: 100px; height: 100px; line-height: 100px;">
                                            <canvas width="100" height="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-fw fa-plus visible-xs-inline-block"></i>
                        <span translate="header.navbar.new.NEW">New</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#" translate="header.navbar.new.PROJECT">Projects</a></li>
                        <li>
                            <a href="">
                                <span class="badge bg-info pull-right">5</span>
                                <span translate="header.navbar.new.TASK">Task</span>
                            </a>
                        </li>
                        <li><a href="" translate="header.navbar.new.USER">User</a></li>
                        <li class="divider"></li>
                        <li>
                            <a href="">
                                <span class="badge bg-danger pull-right">4</span>
                                <span translate="header.navbar.new.EMAIL">Email</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- / link and dropdown -->

            <!-- search form -->
            <form class="navbar-form navbar-form-sm navbar-left shift" ui-shift="prependTo"
                  data-target=".navbar-collapse" role="search" ng-controller="TypeaheadDemoCtrl">
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" ng-model="selected"
                               typeahead="state for state in states | filter:$viewValue | limitTo:8"
                               class="form-control input-sm bg-light no-border rounded padder"
                               placeholder="Поиск...">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-sm bg-light rounded"><i class="fa fa-search"></i></button>
              </span>
                    </div>
                </div>
            </form>
            <!-- / search form -->

            <!-- nabar right -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                        <i class="fa fa-bell fa-fw"></i>
                        <span class="visible-xs-inline">Notifications</span>
                        <span class="badge badge-sm up bg-danger pull-right-xs">2</span>
                    </a>
                    <!-- dropdown -->
                    <div class="dropdown-menu w-xl animated fadeInUp">
                        <div class="panel bg-white">
                            <div class="panel-heading b-light bg-light">
                                <strong>You have <span>2</span> notifications</strong>
                            </div>
                            <div class="list-group">
                                <a href="" class="list-group-item">
                    <span class="pull-left m-r thumb-sm">
                      <img src="img/a0.jpg" alt="..." class="img-circle">
                    </span>
                    <span class="clear block m-b-none">
                      Use awesome animate.css<br>
                      <small class="text-muted">10 minutes ago</small>
                    </span>
                                </a>
                                <a href="" class="list-group-item">
                    <span class="clear block m-b-none">
                      1.0 initial released<br>
                      <small class="text-muted">1 hour ago</small>
                    </span>
                                </a>
                            </div>
                            <div class="panel-footer text-sm">
                                <a href="" class="pull-right"><i class="fa fa-cog"></i></a>
                                <a href="#notes" data-toggle="class:show animated fadeInRight">See all the
                                    notifications</a>
                            </div>
                        </div>
                    </div>
                    <!-- / dropdown -->
                </li>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle clear">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="img/a0.jpg" alt="...">
                <i class="on md b-white bottom"></i>
              </span>
                        <span class="hidden-sm hidden-md">Черняев Александр</span> <b class="caret"></b>
                    </a>
                    <!-- dropdown -->
                    <ul class="dropdown-menu animated fadeInRight w-full">
                        <li class="wrapper b-b m-b-sm bg-light m-t-n-xs">
                            <div>
                                <p>300mb из 500mb</p>
                            </div>
                            <div class="progress progress-xs m-b-none dker">
                                <div class="progress-bar progress-bar-info" data-toggle="tooltip"
                                     data-original-title="50%" style="width: 50%"></div>
                            </div>
                        </li>
                        <li>
                            <a href="">
                                <span class="badge bg-danger pull-right">30%</span>
                                <span>Настройки</span>
                            </a>
                        </li>
                        <li>
                            <a ui-sref="app.page.profile">Профиль</a>
                        </li>
                        <li>
                            <a ui-sref="app.docs">
                                <span class="label bg-info pull-right">новое</span>
                                Помощь
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a ui-sref="access.signin">Выйти</a>
                        </li>
                    </ul>
                    <!-- / dropdown -->
                </li>

                <li>
                    <a href="#" class="open-click hidden-sm hidden-xs" data-toggle="#quickview" role="button">
                        <i class="fa fa-outdent"></i>
                    </a>
                </li>

            </ul>
            <!-- / navbar right -->
        </div>
        <!-- / navbar collapse -->
    </header>
    <!-- / header -->


    <!-- aside -->
    <aside id="aside" class="app-aside hidden-xs bg-dark">
        <div class="aside-wrap">
            <div class="navi-wrap">
                <!-- user -->
                <div class="clearfix hidden-xs text-center hide" id="aside-user">
                    <div class="dropdown wrapper">
                        <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
                        </a>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong>
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
                        </a>
                        <!-- dropdown -->
                        <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                            <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                                <span class="arrow top hidden-folded arrow-info"></span>
                                <div>
                                    <p>300mb of 500mb used</p>
                                </div>
                                <div class="progress progress-xs m-b-none dker">
                                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%"
                                         style="width: 50%"></div>
                                </div>
                            </li>
                            <li>
                                <a href="">Settings</a>
                            </li>
                            <li>
                                <a href="page_profile.html">Profile</a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="badge bg-danger pull-right">3</span>
                                    Notifications
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_signin.html">Logout</a>
                            </li>
                        </ul>
                        <!-- / dropdown -->
                    </div>
                    <div class="line dk hidden-folded"></div>
                </div>
                <!-- / user -->

                <!-- nav -->
                <nav ui-nav="" class="navi clearfix">
                    <ul class="nav">
                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Навигация</span>
                        </li>



                        <li>
                            <a href="ui_chart.html">
                                <i class="fa fa-tachometer"></i>
                                <span>Панель</span>
                            </a>
                        </li>




                        <li class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                 <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                  </span>
                                <i class="fa fa-pencil-square-o"></i>
                                <span>Записи</span>
                            </a>
                            <ul class="dropdown-menu dropdown-full dropdown-lvl-1" aria-labelledby="dropdownMenu1">
                                <li class="dropdown-header">Интерфейс и данные</li>


                                <li><a href="#">
                                        <i class="fa fa-bars"></i>
                                        Меню</a></li>


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-pencil"></i>
                                        Общие записи
                                        <i class="fa fa-fw fa-angle-right pull-right text"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-full dropdown-lvl-2">
                                        <li class="dropdown-header">Типы</li>
                                        <li><a href="#"><i class="fa fa-file-text-o"></i> Страницы</a></li>
                                        <li><a href="#"><i class="fa fa-newspaper-o"></i> Новости</a></li>
                                        <li><a href="#"><i class="fa fa-bullhorn"></i> Акции</a></li>
                                        <li><a href="#"><i class="fa fa-cube"></i> Товары</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-cubes"></i>
                                        Общие блоки
                                        <i class="fa fa-fw fa-angle-right pull-right text"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-full dropdown-lvl-2">
                                        <li class="dropdown-header">Типы</li>
                                        <li><a href="#">Dropdown Link 1</a></li>
                                        <li><a href="#">Dropdown Link 2</a></li>
                                        <li><a href="#">Dropdown Link 3</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                            <ul class="dropdown-menu dropdown-full dropdown-lvl-3">
                                                <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                                                <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                                                <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                                                <li><a href="#">Dropdown Submenu Link 4.4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                                                <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                                                <li><a href="#">Dropdown Submenu Link 5.3</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                                                        <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                                                        <li class="divider"></li>
                                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="divider"></li>
                                <li class="dropdown-header">Поисковая оптимизация</li>
                                <li><a href="#"><i class="fa fa-clone"></i> Статические страницы</a></li>
                                <li><a href="#"><i class="fa fa-sitemap"></i> Карта сайта</a></li>


                                <li class="divider"></li>
                                <li class="dropdown-header">Медиафайлы</li>
                                <li><a href="#"><i class="fa fa-folder"></i>Библиотека</a></li>


                            </ul>
                        </li>











                        <li class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                 <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="fa fa-wrench"></i>
                                <span>Инструменты</span>
                            </a>
                            <ul class="dropdown-menu dropdown-full dropdown-lvl-1" aria-labelledby="dropdownMenu1">
                                <li class="dropdown-header">Управление записями</li>
                                <li><a href="#"><i class="fa fa-wrench"></i> Типы записей</a></li>
                                <li><a href="#"><i class="fa fa-suitcase"></i> Категории</a></li>
                                <li><a href="#"><i class="fa fa-tags"></i>Теги</a></li>


                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-users"></i>
                                        Пользователи
                                        <i class="fa fa-fw fa-angle-right pull-right text"></i></a>
                                    <ul class="dropdown-menu dropdown-full dropdown-lvl-2">
                                        <li class="dropdown-header">Пользователи</li>
                                        <li><a href="#"><i class="fa fa-user"></i> Учасники</a></li>
                                        <li><a href="#"><i class="fa fa-lock"></i> Роли</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">База данных</li>
                                <li><a href="#"><i class="fa fa-database"></i> Управление</a></li>
                                <li><a href="#"><i class="fa fa-cloud-upload"></i> Импорт</a></li>
                                <li><a href="#"><i class="fa fa-cloud-download"></i> Экспорт</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Статистика</li>


                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-area-chart"></i> Продажи
                                        <i class="fa fa-fw fa-angle-right pull-right text"></i></a>
                                    <ul class="dropdown-menu dropdown-full dropdown-lvl-2">
                                        <li class="dropdown-header">Статистика</li>
                                        <li><a href="#"><i class="fa fa-credit-card"></i> Заказы</a></li>
                                        <li><a href="#"><i class="fa fa-percent"></i> Налоги</a></li>
                                        <li><a href="#"><i class="fa fa-truck"></i> Доставка</a></li>
                                        <li><a href="#"><i class="fa fa-recycle"></i> Возвраты</a></li>
                                        <li><a href="#"><i class="fa fa-ticket"></i>    Купоны</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>


                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-cube"></i> Товары
                                        <i class="fa fa-fw fa-angle-right pull-right text"></i></a>
                                    <ul class="dropdown-menu dropdown-full dropdown-lvl-2">
                                        <li class="dropdown-header">Статистика</li>
                                        <li><a href="#">Просмотренно</a></li>
                                        <li><a href="#">Куплено</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>


                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-group"></i> Клиенты
                                        <i class="fa fa-fw fa-angle-right pull-right text"></i></a>
                                    <ul class="dropdown-menu dropdown-full dropdown-lvl-2">
                                        <li class="dropdown-header">Статистика</li>
                                        <li><a href="#">Клиенты на сайте</a></li>
                                        <li><a href="#">Активность клиентов</a></li>
                                        <li><a href="#">Заказы</a></li>
                                        <li><a href="#">Бонусы</a></li>
                                        <li><a href="#">Кредиты</a></li>
                                        <li class="divider"></li>
                                    </ul>
                                </li>


                            </ul>
                        </li>












                        <li class="dropdown">
                            <a class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                 <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                                <i class="fa fa-cogs icon"></i>
                                <span>Система</span>
                            </a>
                            <ul class="dropdown-menu dropdown-full dropdown-lvl-1" aria-labelledby="dropdownMenu1">
                                <li class="dropdown-header">Настройки</li>
                                <li><a href="#"><i class="fa fa-globe"></i> Веб домены</a></li>
                                <li><a href="#"><i class="fa fa-book"></i> Константы</a></li>
                                <li><a href="#"><i class="fa fa-language"></i> Локализация</a></li>
                                <li role="separator" class="divider"></li>

                                <li class="dropdown-header">Ошибки</li>
                                <li><a href="#"><i class="fa fa-list-alt"></i> Журнал</a></li>
                                <li><a href="#"><i class="fa fa-hand-paper-o"></i> Тестирование</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>


                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                    <ul class="dropdown-menu dropdown-full dropdown-lvl-2">
                                        <li><a href="#">Dropdown Link 1</a></li>
                                        <li><a href="#">Dropdown Link 2</a></li>
                                        <li><a href="#">Dropdown Link 3</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 4</a>
                                            <ul class="dropdown-menu dropdown-full dropdown-lvl-3">
                                                <li><a href="#">Dropdown Submenu Link 4.1</a></li>
                                                <li><a href="#">Dropdown Submenu Link 4.2</a></li>
                                                <li><a href="#">Dropdown Submenu Link 4.3</a></li>
                                                <li><a href="#">Dropdown Submenu Link 4.4</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Link 5</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Dropdown Submenu Link 5.1</a></li>
                                                <li><a href="#">Dropdown Submenu Link 5.2</a></li>
                                                <li><a href="#">Dropdown Submenu Link 5.3</a></li>
                                                <li class="divider"></li>
                                                <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Dropdown Submenu Link 5.4.1</a></li>
                                                        <li><a href="#">Dropdown Submenu Link 5.4.2</a></li>
                                                        <li class="divider"></li>
                                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.3</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.1</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.2</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.3</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.3.4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown Submenu Link 5.4.4</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.1</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.2</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.3</a></li>
                                                                <li><a href="#">Dropdown Submenu Link 5.4.4.4</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>




                            </ul>
                        </li>




                        <li class="line dk"></li>

                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span>Компоненты</span>
                        </li>



                        <li>
                            <a href="mail.html">
                                <b class="badge bg-info pull-right">9</b>
                                <i class="fa fa-send text-info-lter"></i>
                                <span class="font-bold">Email</span>
                            </a>
                        </li>


                        <li>
                            <a href="mail.html">
                                <b class="badge bg-info pull-right">9</b>
                                <i class="fa fa-send text-info-lter"></i>
                                <span class="font-bold">Email</span>
                            </a>
                        </li>

                        <li>
                            <a href="mail.html">
                                <b class="badge bg-info pull-right">9</b>
                                <i class="fa fa-send text-info-lter"></i>
                                <span class="font-bold">Email</span>
                            </a>
                        </li>


                        <li class="line dk hidden-folded"></li>

                    </ul>
                </nav>
                <!-- nav -->

                <!-- aside footer -->
                <div class="wrapper m-t">

                    <div class="text-center-folded">
                        <span class="pull-right pull-none-folded">60%</span>
                        <span class="hidden-folded">Закрытых заказов</span>
                    </div>
                    <div class="progress progress-xxs m-t-sm dk">
                        <div class="progress-bar progress-bar-info" style="width: 60%;">
                        </div>
                    </div>
                    <div class="text-center-folded">
                        <span class="pull-right pull-none-folded">35%</span>
                        <span class="hidden-folded">Заказов в процессе</span>
                    </div>
                    <div class="progress progress-xxs m-t-sm dk">
                        <div class="progress-bar progress-bar-primary" style="width: 35%;">
                        </div>
                    </div>
                </div>
                <!-- / aside footer -->
            </div>
        </div>
    </aside>
    <!-- / aside -->


    <!-- content -->
    <div id="content" class="app-content" role="main">
        <div class="app-content-body ">


            <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
    app.settings.asideFolded = false;
    app.settings.asideDock = false;
  ">
                <!-- main -->
                <div class="col">
                    <!-- main header -->
                    <div class="bg-light lter b-b wrapper-md">
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <h1 class="m-n font-thin h3 text-black">Dashboard</h1>
                                <small class="text-muted">Welcome to angulr application</small>
                            </div>
                            <div class="col-sm-6 text-right hidden-xs">
                                <div class="inline m-r text-left">
                                    <div class="m-b-xs">1290 <span class="text-muted">items</span></div>
                                    <div ng-init="d3_1=[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ]"
                                         ui-jq="sparkline"
                                         ui-options="[ 106,108,110,105,110,109,105,104,107,109,105,100,105,102,101,99,98 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}"
                                         class="sparkline inline">
                                        <canvas width="101" height="20"
                                                style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                                <div class="inline text-left">
                                    <div class="m-b-xs">$30,000 <span class="text-muted">revenue</span></div>
                                    <div ng-init="d3_2=[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ]"
                                         ui-jq="sparkline"
                                         ui-options="[ 105,102,106,107,105,104,101,99,98,109,105,100,108,110,105,110,109 ], {type:'bar', height:20, barWidth:5, barSpacing:1, barColor:'#dce5ec'}"
                                         class="sparkline inline">
                                        <canvas width="101" height="20"
                                                style="display: inline-block; width: 101px; height: 20px; vertical-align: top;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / main header -->
                    <div class="wrapper-md" ng-controller="FlotChartDemoCtrl">
                        <!-- stats -->
                        <div class="row">
                            <div class="col-md-5">
                                <div class="row row-sm text-center">
                                    <div class="col-xs-6">
                                        <div class="panel padder-v item">
                                            <div class="h1 text-info font-thin h1">521</div>
                                            <span class="text-muted text-xs">New items</span>
                                            <div class="top text-right w-full">
                                                <i class="fa fa-caret-down text-warning m-r-sm"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="" class="block panel padder-v bg-primary item">
                                            <span class="text-white font-thin h1 block">930</span>
                                            <span class="text-muted text-xs">Uploads</span>
                <span class="bottom text-right w-full">
                  <i class="fa fa-cloud-upload text-muted m-r-sm"></i>
                </span>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="" class="block panel padder-v bg-info item">
                                            <span class="text-white font-thin h1 block">432</span>
                                            <span class="text-muted text-xs">Comments</span>
                <span class="top">
                  <i class="fa fa-caret-up text-warning m-l-sm m-r-sm"></i>
                </span>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="panel padder-v item">
                                            <div class="font-thin h1">129</div>
                                            <span class="text-muted text-xs">Feeds</span>
                                            <div class="bottom">
                                                <i class="fa fa-caret-up text-warning m-l-sm m-r-sm"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 m-b-md">
                                        <div class="r bg-light dker item hbox no-border">
                                            <div class="col w-xs v-middle hidden-md">
                                                <div ng-init="d3_3=[60,40]" ui-jq="sparkline"
                                                     ui-options="[60,40], {type:'pie', height:40, sliceColors:['#fad733','#fff']}"
                                                     class="sparkline inline">
                                                    <canvas width="40" height="40"
                                                            style="display: inline-block; width: 40px; height: 40px; vertical-align: top;"></canvas>
                                                </div>
                                            </div>
                                            <div class="col dk padder-v r-r">
                                                <div class="text-primary-dk font-thin h1"><span>$12,670</span></div>
                                                <span class="text-muted text-xs">Revenue, 60% of the goal</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="panel wrapper">
                                    <label class="i-switch bg-warning pull-right" ng-init="showSpline=true">
                                        <input type="checkbox" ng-model="showSpline">
                                        <i></i>
                                    </label>
                                    <h4 class="font-thin m-t-none m-b text-muted">Latest Campaign</h4>
                                    <div ui-jq="plot" ui-refresh="showSpline" ui-options="
              [
                { data: [ [0,7],[1,6.5],[2,12.5],[3,7],[4,9],[5,6],[6,11],[7,6.5],[8,8],[9,7] ], label:'TV', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } },
                { data: [ [0,4],[1,4.5],[2,7],[3,4.5],[4,3],[5,3.5],[6,6],[7,3],[8,4],[9,3] ], label:'Mag', points: { show: true, radius: 1}, splines: { show: true, tension: 0.4, lineWidth: 1, fill: 0.8 } }
              ],
              {
                colors: ['#23b7e5', '#7266ba'],
                series: { shadowSize: 3 },
                xaxis:{ font: { color: '#a1a7ac' } },
                yaxis:{ font: { color: '#a1a7ac' }, max:20 },
                grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
                tooltip: true,
                tooltipOpts: { content: 'Visits of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
              }
            " style="height: 246px; padding: 0px; position: relative;">
                                        <canvas class="flot-base" width="521" height="246"
                                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 521px; height: 246px;"></canvas>
                                        <div class="flot-text"
                                             style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                            <div class="flot-x-axis flot-x1-axis xAxis x1Axis"
                                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 14px; text-align: center;">
                                                    0
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 69px; text-align: center;">
                                                    1
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 125px; text-align: center;">
                                                    2
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 181px; text-align: center;">
                                                    3
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 236px; text-align: center;">
                                                    4
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 292px; text-align: center;">
                                                    5
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 348px; text-align: center;">
                                                    6
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 403px; text-align: center;">
                                                    7
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 459px; text-align: center;">
                                                    8
                                                </div>
                                                <div style="position: absolute; max-width: 46px; top: 233px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 515px; text-align: center;">
                                                    9
                                                </div>
                                            </div>
                                            <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                                 style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                                <div style="position: absolute; top: 222px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                                    0
                                                </div>
                                                <div style="position: absolute; top: 166px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                                    5
                                                </div>
                                                <div style="position: absolute; top: 111px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                                    10
                                                </div>
                                                <div style="position: absolute; top: 56px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                                    15
                                                </div>
                                                <div style="position: absolute; top: 1px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                                    20
                                                </div>
                                            </div>
                                        </div>
                                        <canvas class="flot-overlay" width="521" height="246"
                                                style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 521px; height: 246px;"></canvas>
                                        <div class="legend">
                                            <div style="position: absolute; width: 43px; height: 44px; top: 12px; right: 9px; opacity: 0.85; background-color: rgb(255, 255, 255);"></div>
                                            <table style="position:absolute;top:12px;right:9px;;font-size:smaller;color:#dce5ec">
                                                <tbody>
                                                <tr>
                                                    <td class="legendColorBox">
                                                        <div style="border:1px solid #ccc;padding:1px">
                                                            <div style="width:4px;height:0;border:5px solid rgb(35,183,229);overflow:hidden"></div>
                                                        </div>
                                                    </td>
                                                    <td class="legendLabel">TV</td>
                                                </tr>
                                                <tr>
                                                    <td class="legendColorBox">
                                                        <div style="border:1px solid #ccc;padding:1px">
                                                            <div style="width:4px;height:0;border:5px solid rgb(114,102,186);overflow:hidden"></div>
                                                        </div>
                                                    </td>
                                                    <td class="legendLabel">Mag</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / stats -->

                        <!-- service -->
                        <div class="panel hbox hbox-auto-xs no-border">
                            <div class="col wrapper">
                                <i class="fa fa-circle-o text-info m-r-sm pull-right"></i>
                                <h4 class="font-thin m-t-none m-b-none text-primary-lt">Managed Services</h4>
                                <span class="m-b block text-sm text-muted">Service report of this year (updated 1 hour ago)</span>
                                <div ui-jq="plot" ui-options="
            [
              { data: [ [1,5.5],[2,6.5],[3,7],[4,8],[5,7.5],[6,7],[7,6.8],[8,7],[9,7.2],[10,7],[11,6.8],[12,7],[13,2.5],[14,3.5],[15,7],[16,7],[17,6],[18,7],[19,6.8],[20,5],[21,7],[22,8],[23,6.8],[24,7] ], lines: { show: true, lineWidth: 1, fill:true, fillColor: { colors: [{opacity: 0.2}, {opacity: 0.8}] } } }
            ],
            {
              colors: ['#e8eff0'],
              series: { shadowSize: 3 },
              xaxis:{ show:false },
              yaxis:{ font: { color: '#a1a7ac' } },
              grid: { hoverable: true, clickable: true, borderWidth: 0, color: '#dce5ec' },
              tooltip: true,
              tooltipOpts: { content: '%s of %x.1 is %y.4',  defaultTheme: false, shifts: { x: 10, y: -25 } }
            }
          " style="height: 240px; padding: 0px; position: relative;">
                                    <canvas class="flot-base" width="243" height="240"
                                            style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 243px; height: 240px;"></canvas>
                                    <div class="flot-text"
                                         style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                                        <div class="flot-y-axis flot-y1-axis yAxis y1Axis"
                                             style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                                            <div style="position: absolute; top: 226px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                                0
                                            </div>
                                            <div style="position: absolute; top: 181px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                                2
                                            </div>
                                            <div style="position: absolute; top: 136px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                                4
                                            </div>
                                            <div style="position: absolute; top: 91px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                                6
                                            </div>
                                            <div style="position: absolute; top: 46px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 6px; text-align: right;">
                                                8
                                            </div>
                                            <div style="position: absolute; top: 2px; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 11px; line-height: 13px; font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif; color: rgb(161, 167, 172); left: 0px; text-align: right;">
                                                10
                                            </div>
                                        </div>
                                    </div>
                                    <canvas class="flot-overlay" width="243" height="240"
                                            style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 243px; height: 240px;"></canvas>
                                </div>
                            </div>
                            <div class="col wrapper-lg w-lg bg-light dk r-r">
                                <h4 class="font-thin m-t-none m-b">Reports</h4>
                                <div class="">
                                    <div class="">
                                        <span class="pull-right text-primary">60%</span>
                                        <span>Consulting</span>
                                    </div>
                                    <div class="progress progress-xs m-t-sm bg-white">
                                        <div class="progress-bar bg-primary" data-toggle="tooltip"
                                             data-original-title="60%" style="width: 60%"></div>
                                    </div>
                                    <div class="">
                                        <span class="pull-right text-info">35%</span>
                                        <span>Online tutorials</span>
                                    </div>
                                    <div class="progress progress-xs m-t-sm bg-white">
                                        <div class="progress-bar bg-info" data-toggle="tooltip"
                                             data-original-title="35%" style="width: 35%"></div>
                                    </div>
                                    <div class="">
                                        <span class="pull-right text-warning">25%</span>
                                        <span>EDU management</span>
                                    </div>
                                    <div class="progress progress-xs m-t-sm bg-white">
                                        <div class="progress-bar bg-warning" data-toggle="tooltip"
                                             data-original-title="23%" style="width: 25%"></div>
                                    </div>
                                </div>
                                <p class="text-muted">Dales nisi nec adipiscing elit. Morbi id neque quam. Aliquam
                                    sollicitudin venenatis</p>
                            </div>
                        </div>
                        <!-- / service -->

                        <!-- tasks -->
                        <div class="panel wrapper">
                            <div class="row">
                                <div class="col-md-6 b-r b-light no-border-xs">
                                    <a href="" class="text-muted pull-right text-lg"><i
                                                class="icon-arrow-right"></i></a>
                                    <h4 class="font-thin m-t-none m-b-md text-muted">My Tasks</h4>
                                    <div class=" m-b">
                                        <div class="m-b">
                                            <span class="label text-base bg-warning pos-rlt m-r"><i
                                                        class="arrow right arrow-warning"></i> 19:30</span>
                                            <a href="">Feed cat</a>
                                        </div>
                                        <div class="m-b">
                                            <span class="label text-base bg-info pos-rlt m-r"><i
                                                        class="arrow right arrow-info"></i> 12:30</span>
                                            <a href="">Fishing Time</a>
                                        </div>
                                        <div class="m-b">
                                            <span class="label text-base bg-primary pos-rlt m-r"><i
                                                        class="arrow right arrow-primary"></i> 10:30</span>
                                            <a href="">Kick-off meeting</a>
                                        </div>
                                        <div class="m-b">
                                            <span class="label text-base bg-light pos-rlt m-r"><i
                                                        class="arrow right arrow-light"></i> 07:30</span>
                                            <a href="">Morning running</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row row-sm">
                                        <div class="col-xs-6 text-center">
                                            <div ui-jq="easyPieChart" ui-options="{
                    percent: 75,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#7266ba',
                    scaleColor: false,
                    size: 115,
                    rotate: 90,
                    lineCap: 'butt'
                  }" class="inline m-t easyPieChart" style="width: 115px; height: 115px; line-height: 115px;">
                                                <div>
                                                    <span class="text-primary h4">75%</span>
                                                </div>
                                                <canvas width="115" height="115"></canvas>
                                            </div>
                                            <div class="text-muted font-bold text-xs m-t m-b">Work Done</div>
                                        </div>
                                        <div class="col-xs-6 text-center">
                                            <div ui-jq="easyPieChart" ui-options="{
                    percent: 50,
                    lineWidth: 4,
                    trackColor: '#e8eff0',
                    barColor: '#23b7e5',
                    scaleColor: false,
                    size: 115,
                    rotate: 180,
                    lineCap: 'butt'
                  }" class="inline m-t easyPieChart" style="width: 115px; height: 115px; line-height: 115px;">
                                                <div>
                                                    <span class="text-info h4">50%</span>
                                                </div>
                                                <canvas width="115" height="115"></canvas>
                                            </div>
                                            <div class="text-muted font-bold text-xs m-t m-b">Started</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tasks -->

                        <!-- tasks -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel no-border">
                                    <div class="panel-heading wrapper b-b b-light">
              <span class="text-xs text-muted pull-right">
                <i class="fa fa-circle text-primary m-r-xs"></i> 12
                <i class="fa fa-circle text-info m-r-xs m-l-sm"></i> 30
                <i class="fa fa-circle text-warning m-r-xs m-l-sm"></i> 98
              </span>
                                        <h4 class="font-thin m-t-none m-b-none text-muted">Teammates</h4>
                                    </div>
                                    <ul class="list-group list-group-lg m-b-none">
                                        <li class="list-group-item">
                                            <a href="" class="thumb-sm m-r">
                                                <img src="img/a1.jpg" class="r r-2x">
                                            </a>
                                            <span class="pull-right label bg-primary inline m-t-sm">Admin</span>
                                            <a href="">Damon Parker</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="" class="thumb-sm m-r">
                                                <img src="img/a2.jpg" class="r r-2x">
                                            </a>
                                            <span class="pull-right label bg-info inline m-t-sm">Member</span>
                                            <a href="">Joe Waston</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="" class="thumb-sm m-r">
                                                <img src="img/a3.jpg" class="r r-2x">
                                            </a>
                                            <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                                            <a href="">Jannie Dvis</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="" class="thumb-sm m-r">
                                                <img src="img/a4.jpg" class="r r-2x">
                                            </a>
                                            <span class="pull-right label bg-warning inline m-t-sm">Editor</span>
                                            <a href="">Emma Welson</a>
                                        </li>
                                    </ul>
                                    <div class="panel-footer">
                                        <span class="pull-right badge badge-bg m-t-xs">32</span>
                                        <button class="btn btn-primary btn-addon btn-sm"><i class="fa fa-plus"></i>Add
                                            Teammate
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-group list-group-lg list-group-sp">
                                    <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a4.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Chris Fox</span>
                <small class="text-muted clear text-ellipsis">What's up, buddy</small>
              </span>
                                    </a>
                                    <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a5.jpg" alt="...">
                <i class="on b-white right"></i>
              </span>
              <span class="clear">
                <span>Amanda Conlan</span>
                <small class="text-muted clear text-ellipsis">Come online and we need talk about the plans that we have
                    discussed
                </small>
              </span>
                                    </a>
                                    <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a6.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Dan Doorack</span>
                <small class="text-muted clear text-ellipsis">Hey, Some good news</small>
              </span>
                                    </a>
                                    <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a7.jpg" alt="...">
                <i class="busy b-white right"></i>
              </span>
              <span class="clear">
                <span>Lauren Taylor</span>
                <small class="text-muted clear text-ellipsis">Nice to talk with you.</small>
              </span>
                                    </a>
                                    <a herf="" class="list-group-item clearfix">
              <span class="pull-left thumb-sm avatar m-r">
                <img src="img/a8.jpg" alt="...">
                <i class="away b-white right"></i>
              </span>
              <span class="clear">
                <span>Mike Jackson</span>
                <small class="text-muted clear text-ellipsis">This is nice</small>
              </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- / tasks -->
                    </div>
                </div>
                <!-- / main -->
                <!-- right col -->
                <div class="col w-md bg-white-only b-l bg-auto no-border-xs">
                    <div class="nav-tabs-alt">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active">
                                <a data-target="#tab-1" role="tab" data-toggle="tab">
                                    <i class="fa fa-user text-md text-muted wrapper-sm"></i>
                                </a>
                            </li>
                            <li>
                                <a data-target="#tab-2" role="tab" data-toggle="tab">
                                    <i class="fa fa-comment text-md text-muted wrapper-sm"></i>
                                </a>
                            </li>
                            <li>
                                <a data-target="#tab-3" role="tab" data-toggle="tab">
                                    <i class="fa fa-user text-md text-muted wrapper-sm"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab-1">
                            <div class="wrapper-md">
                                <div class="m-b-sm text-md">Who to follow</div>
                                <ul class="list-group no-bg no-borders pull-in">
                                    <li class="list-group-item">
                                        <a herf="" class="pull-left thumb-sm avatar m-r">
                                            <img src="img/a4.jpg" alt="..." class="img-circle">
                                            <i class="on b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                            <div><a href="">Chris Fox</a></div>
                                            <small class="text-muted">Designer, Blogger</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a herf="" class="pull-left thumb-sm avatar m-r">
                                            <img src="img/a5.jpg" alt="..." class="img-circle">
                                            <i class="on b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                            <div><a href="">Mogen Polish</a></div>
                                            <small class="text-muted">Writter, Mag Editor</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a herf="" class="pull-left thumb-sm avatar m-r">
                                            <img src="img/a6.jpg" alt="..." class="img-circle">
                                            <i class="busy b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                            <div><a href="">Joge Lucky</a></div>
                                            <small class="text-muted">Art director, Movie Cut</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a herf="" class="pull-left thumb-sm avatar m-r">
                                            <img src="img/a7.jpg" alt="..." class="img-circle">
                                            <i class="away b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                            <div><a href="">Folisise Chosielie</a></div>
                                            <small class="text-muted">Musician, Player</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <a herf="" class="pull-left thumb-sm avatar m-r">
                                            <img src="img/a8.jpg" alt="..." class="img-circle">
                                            <i class="away b-white bottom"></i>
                                        </a>
                                        <div class="clear">
                                            <div><a href="">Aron Gonzalez</a></div>
                                            <small class="text-muted">Designer</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="text-center">
                                    <a href="" class="btn btn-sm btn-primary padder-md m-b">More Connections</a>
                                </div>



                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane tab-2" id="tab-2">
                            <div class="wrapper-md">
                                <div class="m-b-sm text-md">Chat</div>
                                <ul class="list-group no-borders pull-in auto">
                                    <li class="list-group-item">
                                        <span class="pull-left thumb-sm m-r"><img src="img/a1.jpg" alt="..."
                                                                                  class="img-circle"></span>
                                        <a href="#" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i
                                                    class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                                        <div class="clear">
                                            <div><a href="">Chris Fox</a></div>
                                            <small class="text-muted">about 2 minutes ago</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pull-left thumb-sm m-r"><img src="img/a2.jpg" alt="..."
                                                                                  class="img-circle"></span>
                                        <a href="#" class="text-muted" ui-toggle-class="show" target=".app-aside-right"><i
                                                    class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                                        <div class="clear">
                                            <div><a href="">Amanda Conlan</a></div>
                                            <small class="text-muted">about 2 hours ago</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pull-left thumb-sm m-r"><img src="img/a3.jpg" alt="..."
                                                                                  class="img-circle"></span>
                                        <a href="" class="text-muted" ui-toggle-class="show"
                                           target=".app-aside-right"><i
                                                    class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                                        <div class="clear">
                                            <div><a href="">Dan Doorack</a></div>
                                            <small class="text-muted">3 days ago</small>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="pull-left thumb-sm m-r"><img src="img/a4.jpg" alt="..."
                                                                                  class="img-circle"></span>
                                        <a href="" class="text-muted" ui-toggle-class="show"
                                           target=".app-aside-right"><i
                                                    class="fa fa-comment-o pull-right m-t-sm text-sm"></i></a>
                                        <div class="clear">
                                            <div><a href="">Lauren Taylor</a></div>
                                            <small class="text-muted">about 2 minutes ago</small>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane tab-3" id="tab-3">
                            <div class="wrapper-md">
                                <div class="m-b-sm text-md">Transaction</div>
                                <ul class="list-group list-group-sm list-group-sp list-group-alt auto m-t">
                                    <li class="list-group-item">
                                        <span class="text-muted">Transfer to Jacob at 3:00 pm</span>
                                        <span class="block text-md text-info">B 15,000.00</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-muted">Got from Mike at 1:00 pm</span>
                                        <span class="block text-md text-primary">B 23,000.00</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-muted">Sponsored ORG at 9:00 am</span>
                                        <span class="block text-md text-warning">B 3,000.00</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="text-muted">Send to Jacob at 8:00 am</span>
                                        <span class="block text-md">B 11,000.00</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="padder-md">
                        <!-- streamline -->
                        <div class="m-b text-md">Recent Activity</div>
                        <div class="streamline b-l m-b">
                            <div class="sl-item">
                                <div class="m-l">
                                    <div class="text-muted">5 minutes ago</div>
                                    <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="m-l">
                                    <div class="text-muted">11:30</div>
                                    <p>Join comference</p>
                                </div>
                            </div>
                            <div class="sl-item b-success b-l">
                                <div class="m-l">
                                    <div class="text-muted">10:30</div>
                                    <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.
                                    </p>
                                </div>
                            </div>
                            <div class="bg-info wrapper-sm m-l-n m-r-n m-b r r-2x">
                                Create tasks for the team
                            </div>
                            <div class="sl-item b-primary b-l">
                                <div class="m-l">
                                    <div class="text-muted">Wed, 25 Mar</div>
                                    <p>Finished task <a href="" class="text-info">Testing</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning b-l">
                                <div class="m-l">
                                    <div class="text-muted">Thu, 10 Mar</div>
                                    <p>Trip to the moon</p>
                                </div>
                            </div>
                            <div class="sl-item b-info b-l">
                                <div class="m-l">
                                    <div class="text-muted">Sat, 5 Mar</div>
                                    <p>Prepare for presentation</p>
                                </div>
                            </div>
                            <div class="sl-item b-l">
                                <div class="m-l">
                                    <div class="text-muted">Sun, 11 Feb</div>
                                    <p><a href="" class="text-info">Jessi</a> assign you a task <a href=""
                                                                                                   class="text-info">Mockup
                                            Design</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-l">
                                <div class="m-l">
                                    <div class="text-muted">Thu, 17 Jan</div>
                                    <p>Follow up to close deal</p>
                                </div>
                            </div>
                        </div>
                        <!-- / streamline -->
                    </div>
                    <div data-ng-include=" 'tpl/blocks/aside.right.html' ">

                        <!-- aside right -->
                        <div class="app-aside-right pos-fix no-padder w-md w-auto-xs bg-white b-l animated fadeInRight hide">
                            <div class="vbox">
                                <div class="wrapper b-b b-t b-light m-b">
                                    <a href="" class="pull-right text-muted text-md" ui-toggle-class="show"
                                       target=".app-aside-right"><i class="icon-close"></i></a>
                                    Chat
                                </div>
                                <div class="row-row">
                                    <div class="cell">
                                        <div class="cell-inner padder">
                                            <!-- chat list -->
                                            <div class="m-b">
                                                <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg"
                                                                                                  alt="..."></a>
                                                <div class="clear">
                                                    <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                                                        <span class="arrow left pull-up"></span>
                                                        <p class="m-b-none">Hi John, What's up...</p>
                                                    </div>
                                                    <small class="text-muted m-l-sm"><i
                                                                class="fa fa-ok text-success"></i> 2 minutes ago
                                                    </small>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <a href="" class="pull-right thumb-xs avatar"><img src="img/a3.jpg"
                                                                                                   class="img-circle"
                                                                                                   alt="..."></a>
                                                <div class="clear">
                                                    <div class="pos-rlt wrapper-sm bg-light r m-r-sm">
                                                        <span class="arrow right pull-up arrow-light"></span>
                                                        <p class="m-b-none">Lorem ipsum dolor :)</p>
                                                    </div>
                                                    <small class="text-muted">1 minutes ago</small>
                                                </div>
                                            </div>
                                            <div class="m-b">
                                                <a href="" class="pull-left thumb-xs avatar"><img src="img/a2.jpg"
                                                                                                  alt="..."></a>
                                                <div class="clear">
                                                    <div class="pos-rlt wrapper-sm b b-light r m-l-sm">
                                                        <span class="arrow left pull-up"></span>
                                                        <p class="m-b-none">Great!</p>
                                                    </div>
                                                    <small class="text-muted m-l-sm"><i
                                                                class="fa fa-ok text-success"></i>Just Now
                                                    </small>
                                                </div>
                                            </div>
                                            <!-- / chat list -->
                                        </div>
                                    </div>
                                </div>
                                <div class="wrapper m-t b-t b-light">
                                    <form class="m-b-none">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Say something">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">SEND</button>
            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- / aside right -->

                    </div>
                </div>
                <!-- / right col -->
            </div>


        </div>
    </div>
    <!-- /content -->

    <!-- footer -->
    <footer id="footer" class="app-footer" role="footer">
        <div class="wrapper b-t bg-light">
            <span class="pull-right">2.2.0 <a href="" ui-scroll="app" class="m-l-sm text-muted"><i
                            class="fa fa-long-arrow-up"></i></a></span>
            © 2016 Copyright.
        </div>
    </footer>
    <!-- / footer -->


</div>



<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



<script>
    (function($){
        $(document).ready(function(){
            $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();
                $(this).parent().siblings().removeClass('open');
                $(this).parent().toggleClass('open');
            });
        });
    })(jQuery);
    </script>








</body>
</html>