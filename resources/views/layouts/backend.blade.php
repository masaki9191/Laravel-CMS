<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title></title>

        <meta name="description" content="OneUI - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Icons -->
        <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
        <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

        <!-- Fonts and Styles -->
        @yield('css_before')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" id="css-main" href="{{ mix('/css/oneui.css') }}">
        <link rel="stylesheet" id="css-custome" href="{{ asset('/css/style-custom.css') }}">

        <!-- You can include a specific file from public/css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{ mix('/css/themes/amethyst.css') }}"> -->
        @yield('css_after')

        <!-- Scripts -->
        <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(), ]) !!};</script>
    </head>
    <body>
        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-dark'                              Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Light themed Header
            'page-header-dark'                          Dark themed Header

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed main-content-narrow">
            <!-- Side Overlay-->
            <aside id="side-overlay" class="font-size-sm">
                <!-- Side Header -->
                <div class="content-header border-bottom">
                    <!-- User Avatar -->
                    <a class="img-link mr-1" href="javascript:void(0)">
                        <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                    </a>
                    <!-- END User Avatar -->

                    <!-- User Info -->
                    <div class="ml-2">
                        <a class="text-dark font-w600 font-size-sm" href="javascript:void(0)">Adam McCoy</a>
                    </div>
                    <!-- END User Info -->

                    <!-- Close Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="ml-auto btn btn-sm btn-alt-danger" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                        <i class="fa fa-fw fa-times"></i>
                    </a>
                    <!-- END Close Side Overlay -->
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <p>
                        Content..
                    </p>
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Sidebar Mini Mode - Display Helper classes

                Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

                Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
                Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
                Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
            -->
            <nav id="sidebar" aria-label="Main Navigation">
                <!-- Side Header -->
                <div class="content-header bg-white-5">
                    <!-- Logo -->
                    <a class="font-w600 text-dual" href="/">
                        <span class="smini-visible">
                            <i class="fa fa-circle-notch text-primary"></i>
                        </span>
                        <span class="smini-hide font-size-h5 tracking-wider">
                            Jah<span class="font-w400">ID</span>
                        </span>
                    </a>
                    <!-- END Logo -->

                    <!-- Extra -->
                    <div>
                        <!-- Options -->
                        <!--                        <div class="dropdown d-inline-block ml-2">
                                                    <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                                        <i class="si si-drop"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                                                         Color Themes
                                                         Layout API, functionality initialized in Template._uiHandleTheme()
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="default" href="#">
                                                            <span>Default</span>
                                                            <i class="fa fa-circle text-default"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/amethyst.css') }}" href="#">
                                                            <span>Amethyst</span>
                                                            <i class="fa fa-circle text-amethyst"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/city.css') }}" href="#">
                                                            <span>City</span>
                                                            <i class="fa fa-circle text-city"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/flat.css') }}" href="#">
                                                            <span>Flat</span>
                                                            <i class="fa fa-circle text-flat"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/modern.css') }}" href="#">
                                                            <span>Modern</span>
                                                            <i class="fa fa-circle text-modern"></i>
                                                        </a>
                                                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="{{ mix('css/themes/smooth.css') }}" href="#">
                                                            <span>Smooth</span>
                                                            <i class="fa fa-circle text-smooth"></i>
                                                        </a>
                                                         END Color Themes

                                                        <div class="dropdown-divider"></div>

                                                         Sidebar Styles
                                                         Layout API, functionality initialized in Template._uiApiLayout()
                                                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light" href="#">
                                                            <span>Sidebar Light</span>
                                                        </a>
                                                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                                                            <span>Sidebar Dark</span>
                                                        </a>
                                                         Sidebar Styles

                                                        <div class="dropdown-divider"></div>

                                                         Header Styles
                                                         Layout API, functionality initialized in Template._uiApiLayout()
                                                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light" href="#">
                                                            <span>Header Light</span>
                                                        </a>
                                                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark" href="#">
                                                            <span>Header Dark</span>
                                                        </a>
                                                         Header Styles
                                                    </div>
                                                </div>-->
                        <!-- END Options -->

                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-fw fa-times"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Extra -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Navigation -->
                    <div class="content-side">






                        <ul class="nav-main">













                            <li class="nav-main-item">
                                <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="{{ route('home') }}">
                                    <i class="nav-main-link-icon si si-cursor"></i>
                                    <span class="nav-main-link-name">{{ __('Dashboard')}}</span>
                                </a>
                            </li>
                            @role('super-admin')
                            <li class="nav-main-item {{ request()->is('admin/cmsDirector') || request()->is('admin/cmsPages/*') || request()->is('admin/cmsSociety') ? 'open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Pages') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item  {{ request()->is('admin/pages/home/*') ? 'open' : '' }}">
                                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                            <span class="nav-main-link-name">{{ __('Home') }}</span>
                                        </a>
                                        <ul class="nav-main-submenu">
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('admin/pages/home/slides/*') ? 'active' : '' }}" href="{{route('slides.index')}}">
                                                    <span class="nav-main-link-name">{{ __('Slides') }}</span>
                                                </a>
                                            </li>
                                            <!--                                            <li class="nav-main-item">
                                                                                            <a class="nav-main-link {{ request()->is('admin/pages/home/cmsManagement/*') ? 'active' : '' }}" href="{{route('cmsManagement.index')}}">
                                                                                                <span class="nav-main-link-name">{{ __("What's New / Activity Report") }}</span>
                                                                                            </a>
                                                                                        </li>-->
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('admin/pages/home/cmsManagement/*') ? 'active' : '' }}" href="{{route('cmsManagement.emergencyText')}}">
                                                    <span class="nav-main-link-name">{{ __("Emergency text") }}</span>
                                                </a>
                                            </li>
                                            <li class="nav-main-item">
                                                <a class="nav-main-link {{ request()->is('admin/pages/home/topics/*') ? 'active' : '' }}" href="{{route('topics.index')}}">
                                                    <span class="nav-main-link-name">{{ __('Topics') }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{route('cmsSociety.index')}}">
                                            <span class="nav-main-link-name">{{ __("History of association") }}</span>
                                        </a>
                                    </li>
                                    <!--                                            <li class="nav-main-item">
                                                                                    <a class="nav-main-link" href="{{ route('backend.getPageByTitle',['title'=>'about-ethics']) }}">
                                                                                        <span class="nav-main-link-name">{{ __('Corporate Ethics') }}</span>
                                                                                    </a>
                                                                                </li>-->
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('cmsDirector.index')}}">
                                            <span class="nav-main-link-name">{{ __('Officers Introduction') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--                            <li class="nav-main-item">
                                                            <a class="nav-main-link">
                                                                <i class="nav-main-link-icon si si-cursor"></i>
                                                                <span class="nav-main-link-name">{{ __('Cms Confrence Type') }}</span>
                                                                <ul class="nav-main-submenu">
                                                                    <li class="nav-main-item">
                                                                        <a class="nav-main-link" href="{{ route('conferenceType.create') }}">
                                                                            <span class="nav-main-link-name">{{ __('Add conference type') }}</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="nav-main-item">
                                                                        <a class="nav-main-link" href="{{ route('conferenceType.index') }}">
                                                                            <span class="nav-main-link-name">{{ __('Conference type') }}</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </a>
                                                        </li>-->
                            <!--                            <li class="nav-main-item">
                                                            <i class="nav-main-link-icon si si-bulb"></i>
                                                            <span class="nav-main-link-name">{{ __('Cms Confrence') }}</span>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="{{ route('cmsConference.create') }}">
                                                                        <span class="nav-main-link-name">{{ __('Add conference') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="{{ route('cmsConference.index') }}">
                                                                        <span class="nav-main-link-name">{{ __('Conference') }}</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Workshop Management') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('workshop.index',['type'=>1]) }}">
                                            <span class="nav-main-link-name">{{ __('On going') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('workshop.index',['type'=>2]) }}">
                                            <span class="nav-main-link-name">{{ __('Other') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('workshop.index',['type'=>3]) }}">
                                            <span class="nav-main-link-name">{{ __('Seminar') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Training and Education') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a  class="nav-main-link{{ request()->is('admin/cmsNews') ? ' active' : '' }}" href="{{ route('cmsNews.index',['type'=>1]) }}">
                                            <span class="nav-main-link-name">{{ __('CDR') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Conferences') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('conferenceType.create') }}">
                                            <span class="nav-main-link-name">{{ __('Add New Conference Type') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('conferenceType.index') }}">
                                            <span class="nav-main-link-name">{{ __('Conference type list') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('cmsConference.create') }}">
                                            <span class="nav-main-link-name">{{ __('Add New Conference') }}</span>
                                        </a>
                                    </li>

                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('cmsConference.index') }}">
                                            <span class="nav-main-link-name">{{ __('Conference list') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('cmsKaiin') ? ' active' : '' }}" href="{{  route('cmsKaiin.index',['type'=>'member']) }}">
                                            <i class="nav-main-link-icon si si-cursor"></i>
                                            <span class="nav-main-link-name">{{ __('Members management') }}</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Activities settings') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{route('cmsManagement.index')}}">
                                            <span class="nav-main-link-name">{{ __("What's New / Activity Report") }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="#">
                                            <span class="nav-main-link-name">{{ __("Fire Prevention Manual") }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!--                            <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                                                <i class="nav-main-link-icon si si-bulb"></i>
                                                                <span class="nav-main-link-name">{{ __('Students conference registration') }}</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Add new students') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __("List of all students") }}</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                        <li class="nav-main-item">
                                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                                                <i class="nav-main-link-icon si si-bulb"></i>
                                                                <span class="nav-main-link-name">{{ __('List of members for each meeting') }}</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Board of Directors') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __("Standing Committee") }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('General Affairs Subcommittee') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('General Affairs and Legislation Joint WG') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Medical Device Distribution Research Committee') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Legislation Subcommittee') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Information Subcommittee') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Public Relations Subcommittee') }}</span>
                                                                    </a>
                                                                </li>

                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Training Subcommittee') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Training Section WG') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Training Subcommittee Text WG') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Business Ethics Committee') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Specialty Study Group') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Orthopedics Research Group') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('Ophthalmology Study Group') }}</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link" href="#">
                                                                        <span class="nav-main-link-name">{{ __('JFTC Medical Instrument Sales Association Branch Operation Committee') }}</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Private Members Area') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link{{ request()->is('admin/cmsNews') ? ' active' : '' }}" href="{{ route('cmsNews.index',['type'=>2]) }}">
                                            <span class="nav-main-link-name"> {{ __('News') }}</span>
                                        </a>
                                        <!--                                        <a class="nav-main-link"  href="{{ route('cmsNews.create') }}">
                                                                                    <span class="nav-main-link-name">{{ __("Add new news items") }}</span>
                                                                                </a>-->
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Others') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item {{ request()->is('admin/media/create') || request()->is('admin/media') ? ' open' : '' }}"">
                                        <a class="nav-main-link" href="{{ route('media.index') }}">
                                            <i class="nav-main-link-icon si si-globe"></i>
                                            <span class="nav-main-link-name">{{ __('Gallery') }}</span>
                                        </a>
                                        <a class="nav-main-link{{ request()->is('admin/frontGalleries') ? ' active' : '' }}" href="{{ route('frontGalleries.index') }}">
                                            <i class="nav-main-link-icon si si-globe"></i>
                                            <span class="nav-main-link-name"> {{ __('Front Gallery') }}</span>
                                        </a>
                                        <a class="nav-main-link{{ request()->is('admin/cssEditor') ? ' active' : '' }}" href="{{ route('cssEditor.index',['type'=>'front']) }}">
                                            <i class="nav-main-link-icon si si-globe"></i>
                                            <span class="nav-main-link-name"> {{ __('Front css Editor') }}</span>
                                        </a>
                                        <a class="nav-main-link{{ request()->is('admin/cssEditor') ? ' active' : '' }}" href="{{ route('cssEditor.index',['type'=>'admin']) }}">
                                            <i class="nav-main-link-icon si si-globe"></i>
                                            <span class="nav-main-link-name"> {{ __('Admin css Editor') }}</span>
                                        </a>
                                         <a class="nav-main-link{{ request()->is('admin/continousWorkhopSettingsCreate') ? ' active' : '' }}" href="{{ route('continousWorkhopSettings.create') }}">
                                            <i class="nav-main-link-icon si si-globe"></i>
                                            <span class="nav-main-link-name"> {{ __('Continous Workshop setting') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            @endrole

                            @role('master') 
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                    <i class="nav-main-link-icon si si-bulb"></i>
                                    <span class="nav-main-link-name">{{ __('Workshop Management') }}</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('workshop.index',['type'=>1]) }}">
                                            <span class="nav-main-link-name">{{ __('On going') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('workshop.index',['type'=>2]) }}">
                                            <span class="nav-main-link-name">{{ __('Other') }}</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="{{ route('workshop.index',['type'=>3]) }}">
                                            <span class="nav-main-link-name">{{ __('Seminar') }}</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @endrole


                            <!--
                                                        <li class="nav-main-heading">Trainings Management</li>
                                                        <li class="nav-main-item{{ request()->is('admin/master') || request()->is('admin/workshop') ? ' open' : '' }}">
                                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                                                <i class="nav-main-link-icon si si-bulb"></i>
                                                                <span class="nav-main-link-name">Prefectures</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                @role('super-admin')
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('admin/master') ? ' active' : '' }}" href="{{route('master.index')}}">
                                                                        <i class="nav-main-link-icon si si-cursor"></i>
                                                                        <span class="nav-main-link-name">Masters</span>
                                                                    </a>
                                                                </li>
                                                                @endrole
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('admin/workshop') ? ' active' : '' }}" href="{{ route('workshop.index') }}">
                                                                        <i class="nav-main-link-icon si si-cursor"></i>
                                                                        <span class="nav-main-link-name">Workshop</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>

                                                        @role('super-admin')
                                                        <li class="nav-main-heading">Content Management</li>
                                                        <li class="nav-main-item open">
                                                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="true" href="#">
                                                                <i class="nav-main-link-icon si si-bulb"></i>
                                                                <span class="nav-main-link-name">CMS</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('admin/cmsPages') ? ' active' : '' }}" href="{{ route('cmsPages.index') }}">
                                                                        <span class="nav-main-link-name"> {{ __('Pages') }}</span>
                                                                    </a>
                                                                    <a class="nav-main-link{{ request()->is('admin/cmsNews') ? ' active' : '' }}" href="{{ route('cmsNews.index') }}">
                                                                        <span class="nav-main-link-name"> {{ __('News') }}</span>
                                                                    </a>
                                                                    <a class="nav-main-link{{ request()->is('admin/cmsManagement') ? ' active' : '' }}" href="{{ route('cmsManagement.index') }}">
                                                                        <span class="nav-main-link-name"> {{ __('Management') }}</span>
                                                                    </a>
                                                                    <a class="nav-main-link{{ request()->is('admin/cmsDirector') ? ' active' : '' }}" href="{{ route('cmsDirector.index') }}">
                                                                        <span class="nav-main-link-name"> {{ __('Director') }}</span>
                                                                    </a>
                                                                    <a class="nav-main-link{{ request()->is('admin/frontGalleries') ? ' active' : '' }}" href="{{ route('frontGalleries.index') }}">
                                                                        <span class="nav-main-link-name"> {{ __('Front Gallery') }}</span>
                                                                    </a>
                                                                    <a class="nav-main-link{{ request()->is('admin/topics') ? ' active' : '' }}" href="{{ route('topics.index') }}">
                                                                        <span class="nav-main-link-name"> {{ __('Topics') }}</span>
                                                                    </a>
                                                                    <a class="nav-main-link{{ request()->is('admin/cmsSociety') ? ' active' : '' }}" href="{{ route('cmsSociety.index') }}">
                                                                        <span class="nav-main-link-name"> {{ __('Society') }}</span>
                                                                    </a>
                                                                                                            <ul class="nav-main-submenu">
                                                                                                                 <li class="nav-main-item">
                                                                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                                                                        <span class="nav-main-link-name">Manage</span>
                                                                                                                    </a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                </li>
                                                                                                    <li class="nav-main-item">
                                                                                                        <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}" href="/pages/slick">
                                                                                                            <span class="nav-main-link-name">Jahid</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="nav-main-item">
                                                                                                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                                                                                            <span class="nav-main-link-name">医療機器販売業とは？/What is  Medical equipment sales？</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="nav-main-item">
                                                                                                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                                                                                            <span class="nav-main-link-name">研修/Training Work Shop</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="nav-main-item">
                                                                                                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                                                                                            <span class="nav-main-link-name">会議conference</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="nav-main-item">
                                                                                                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                                                                                            <span class="nav-main-link-name">活動紹介Activity Introduction/lib</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="nav-main-item">
                                                                                                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                                                                                            <span class="nav-main-link-name">会員専用ページ（ログイン）/Members-only page (login)</span>
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    <li class="nav-main-item">
                                                                                                        <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}" href="/pages/blank">
                                                                                                            <span class="nav-main-link-name">JAHIDからのお知らせ（一覧）/Information from JAHID（LIST)</span>
                                                                                                        </a>
                                                                                                    </li>
                                                            </ul>
                                                        </li>
                                                        @endrole-->

                            <!--<li class="nav-main-heading">Additional Page Content</li>-->
                            <!--                            <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">Pickup Pointers</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!--                            <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">Notices</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!--                            <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">Slides</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">CTA</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!--                            <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">協会のあゆみ / Ayumni</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!--                            <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">役員紹介 / Officers</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!--                            <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">PDFs</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!--                            <li class="nav-main-item open">
                                                            <a class="nav-main-link" href="/">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">Team members</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}" href="/pages/datatables">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                            <!--                            <li class="nav-main-item {{ request()->is('admin/media/create') || request()->is('admin/media') ? ' open' : '' }}"">
                                                            <a class="nav-main-link" href="{{ route('media.index') }}">
                                                                <i class="nav-main-link-icon si si-globe"></i>
                                                                <span class="nav-main-link-name">Gallery</span>
                                                            </a>
                                                            <ul class="nav-main-submenu">
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('admin/media/create') ? ' active' : '' }}" href="{{ route('media.create') }}">
                                                                        <span class="nav-main-link-name">Add items</span>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-main-item">
                                                                    <a class="nav-main-link{{ request()->is('admin/media') ? ' active' : '' }}" href="{{ route('media.index') }}">
                                                                        <span class="nav-main-link-name">Manage</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>-->
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="d-flex align-items-center">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- END Toggle Sidebar -->

                        <!-- Toggle Mini Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                        <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                            <i class="fa fa-fw fa-ellipsis-v"></i>
                        </button>
                        @if(session()->get('_locale') == 'ja')
                        <a style="display:none" href="{{ route('changeLocale','en') }}"><img src="{{ asset('media/icons/us.png') }}"></a>
                        @else
                        <a style="display:none"  href="{{ route('changeLocale','ja') }}"><img src="{{ asset('media/icons/jp.png') }}"></a>
                        @endif
                        <!-- END Toggle Mini Sidebar -->

                        <!-- Apps Modal -->
                        <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                        <!--                        <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                                                    <i class="fa fa-fw fa-cubes"></i>
                                                </button>-->
                        <!-- END Apps Modal -->

                        <!-- Open Search Section (visible on smaller screens) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!--                        <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                                                    <i class="fa fa-fw fa-search"></i>
                                                </button>-->
                        <!-- END Open Search Section -->

                        <!-- Search Form (visible on larger screens) -->
                        <!--                        <form class="d-none d-sm-inline-block" action="/dashboard" method="POST">
                                                    @csrf
                                                    <div class="input-group input-group-sm">
                                                        <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text bg-body border-0">
                                                                                                <i class="fa fa-fw fa-search"></i>
                                                                                            </span>
                                                                                        </div>
                                                    </div>
                                                </form>-->
                        <!-- END Search Form -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="d-flex align-items-center">
                        <!-- User Dropdown -->
                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn btn-sm btn-dual d-flex align-items-center" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 21px;">
                                <span class="d-none d-sm-inline-block ml-2">{{ Auth::user()->name }}</span>
                                <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block ml-1 mt-1"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right p-0 border-0" aria-labelledby="page-header-user-dropdown">
                                <div class="p-3 text-center bg-primary-dark rounded-top">
                                    <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                                    <p class="mt-2 mb-0 text-white font-w500"> {{ Auth::user()->name }}</p>
                                    <!--<p class="mb-0 text-white-50 font-size-sm">Web Developer</p>-->
                                </div>
                                <div class="p-2">
                                    <!--                                    <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                            <span class="font-size-sm font-w500">Inbox</span>
                                                                            <span class="badge badge-pill badge-primary ml-2">3</span>
                                                                        </a>
                                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                            <span class="font-size-sm font-w500">Profile</span>
                                                                            <span class="badge badge-pill badge-primary ml-2">1</span>
                                                                        </a>
                                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                            <span class="font-size-sm font-w500">Settings</span>
                                                                        </a>
                                                                        <div role="separator" class="dropdown-divider"></div>
                                                                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                                                            <span class="font-size-sm font-w500">Lock Account</span>
                                                                        </a>-->
                                    <form method="post" action="{{ url("admin/logout") }}">
                                        @csrf
                                        <button class="dropdown-item d-flex align-items-center justify-content-between" type="submit" href="{{ url("admin/logout") }}">
                                            <span class="font-size-sm font-w500">Log Out</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications Dropdown -->
                        <!--                        <div class="dropdown d-inline-block ml-2">
                                                    <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fa fa-fw fa-bell"></i>
                                                        <span class="text-primary">•</span>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-notifications-dropdown">
                                                        <div class="p-2 bg-primary-dark text-center rounded-top">
                                                            <h5 class="dropdown-header text-uppercase text-white">Notifications</h5>
                                                        </div>
                                                        <ul class="nav-items mb-0">
                                                            <li>
                                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                                    <div class="mr-2 ml-3">
                                                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                                                    </div>
                                                                    <div class="media-body pr-2">
                                                                        <div class="font-w600">You have a new follower</div>
                                                                        <span class="font-w500 text-muted">15 min ago</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                                    <div class="mr-2 ml-3">
                                                                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body pr-2">
                                                                        <div class="font-w600">1 new sale, keep it up</div>
                                                                        <span class="font-w500 text-muted">22 min ago</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                                    <div class="mr-2 ml-3">
                                                                        <i class="fa fa-fw fa-times-circle text-danger"></i>
                                                                    </div>
                                                                    <div class="media-body pr-2">
                                                                        <div class="font-w600">Update failed, restart server</div>
                                                                        <span class="font-w500 text-muted">26 min ago</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                                    <div class="mr-2 ml-3">
                                                                        <i class="fa fa-fw fa-plus-circle text-primary"></i>
                                                                    </div>
                                                                    <div class="media-body pr-2">
                                                                        <div class="font-w600">2 new sales, keep it up</div>
                                                                        <span class="font-w500 text-muted">33 min ago</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                                    <div class="mr-2 ml-3">
                                                                        <i class="fa fa-fw fa-user-plus text-success"></i>
                                                                    </div>
                                                                    <div class="media-body pr-2">
                                                                        <div class="font-w600">You have a new subscriber</div>
                                                                        <span class="font-w500 text-muted">41 min ago</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="text-dark media py-2" href="javascript:void(0)">
                                                                    <div class="mr-2 ml-3">
                                                                        <i class="fa fa-fw fa-check-circle text-success"></i>
                                                                    </div>
                                                                    <div class="media-body pr-2">
                                                                        <div class="font-w600">You have a new follower</div>
                                                                        <span class="font-w500 text-muted">42 min ago</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="p-2 border-top">
                                                            <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                                                <i class="fa fa-fw fa-arrow-down mr-1"></i> Load More..
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>-->
                        <!-- END Notifications Dropdown -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!--                        <button type="button" class="btn btn-sm btn-dual ml-2" data-toggle="layout" data-action="side_overlay_toggle">
                                                    <i class="fa fa-fw fa-list-ul fa-flip-horizontal"></i>
                                                </button>-->
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <!--                <div id="page-header-search" class="overlay-header bg-white">
                                    <div class="content-header">
                                        <form class="w-100" action="/dashboard" method="POST">
                                            @csrf
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                     Layout API, functionality initialized in Template._uiApiLayout()
                                                    <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
                                                        <i class="fa fa-fw fa-times-circle"></i>
                                                    </button>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                            </div>
                                        </form>
                                   </div>
                                </div>-->
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-white">
                    <div class="content-header">
                        <div class="w-100 text-center">
                            <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">
                @yield('content')
            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-body-light">
                <div class="content py-3">
                    <div class="row font-size-sm">
                        <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-right">
                            <!--Crafted with <i class="fa fa-heart text-danger"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>-->
                        </div>
                        <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-left">
                            <!--<a class="font-w600" href="https://1.envato.market/AVD6j" target="_blank">OneUI</a> &copy; <span data-toggle="year-copy"></span>-->
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->

            <!-- Apps Modal -->
            <!-- Opens from the modal toggle button in the header -->
            <!--            <div class="modal fade" id="one-modal-apps" tabindex="-1" role="dialog" aria-labelledby="one-modal-apps" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="block block-rounded block-themed block-transparent mb-0">
                                        <div class="block-header bg-primary-dark">
                                            <h3 class="block-title">Apps</h3>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="block-content block-content-full">
                                            <div class="row gutters-tiny">
                                                <div class="col-6">
                                                     CRM
                                                    <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                                        <div class="block-content text-center">
                                                            <i class="si si-speedometer fa-2x text-primary"></i>
                                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                                CRM
                                                            </p>
                                                        </div>
                                                    </a>
                                                     END CRM
                                                </div>
                                                <div class="col-6">
                                                     Products
                                                    <a class="block block-rounded block-link-shadow bg-body" href="javascript:void(0)">
                                                        <div class="block-content text-center">
                                                            <i class="si si-rocket fa-2x text-primary"></i>
                                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                                Products
                                                            </p>
                                                        </div>
                                                    </a>
                                                     END Products
                                                </div>
                                                <div class="col-6">
                                                     Sales
                                                    <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                                        <div class="block-content text-center">
                                                            <i class="si si-plane fa-2x text-primary"></i>
                                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                                Sales
                                                            </p>
                                                        </div>
                                                    </a>
                                                     END Sales
                                                </div>
                                                <div class="col-6">
                                                     Payments
                                                    <a class="block block-rounded block-link-shadow bg-body mb-0" href="javascript:void(0)">
                                                        <div class="block-content text-center">
                                                            <i class="si si-wallet fa-2x text-primary"></i>
                                                            <p class="font-w600 font-size-sm mt-2 mb-3">
                                                                Payments
                                                            </p>
                                                        </div>
                                                    </a>
                                                     END Payments
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
            <!-- END Apps Modal -->
        </div>
        <!-- END Page Container -->

        <!-- OneUI Core JS -->
        <script src="{{ mix('js/oneui.app.js') }}"></script>
        <script src="{{ asset("js/plugins/bootstrap-notify/bootstrap-notify.min.js")}}"></script>
        <script src="{{ asset("js/plugins/jquery-validation/jquery.validate.min.js")}}"></script>
        <script src="{{ asset("js/plugins/jquery-validation/additional-methods.js")}}"></script>
        <script>
            jQuery(function ($) {

                var message = "{{ Session::get('success') ? Session::get('success') : 0 }}"
                if (message != 0) {
                    One.helpers('notify', {type: 'success', icon: 'fa fa-check mr-1', message: message});
                }
                $('body').on('click', '.delete-record', function () {
                    var url = $(this).data('url');
                    var csrfToken = $(this).data('csrf_token');
                    var self = $(this);
                    $.ajax({
                        type: 'delete',
                        url: url,
                        data: {
                            '_token': csrfToken,
                        },
                        success: function (response) {
                            self.trigger("seamlessImagedelete:success", [response]);
                            if (response.status) {
                                if (response.redirect) {
                                    location.reload(true);
                                }
                            } else {
                                alert('Error!');
                            }
                            $('.delete-record').data('url', "");
                            $('#delete-modal').modal('hide');
                        }
                    });
                });

                $('body').on('click', '.open-delete-popup', function () {
                    $('.delete-record').data('url', $(this).data('url'));
                });
            });
            function auto_grow(element) {
                element.style.height = "5px";
                element.style.height = (element.scrollHeight) + "px";
            }
        </script>
        <!-- Laravel Scaffolding JS -->
        <!-- <script src="{{ mix('/js/laravel.app.js') }}"></script> -->

        @yield('js_after')
    </body>
</html>
