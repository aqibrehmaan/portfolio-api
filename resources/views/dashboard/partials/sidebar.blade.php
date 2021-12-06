
    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header -->
        <div class="content-header bg-white-5">
            <!-- Logo -->
            <a class="font-w600 text-dual" href="#">
                <span class="smini-visible">
                    <i class="fa fa-circle-notch text-primary"></i>
                </span>
                <span class="smini-hide tracking-wider">
                   Portfolio</span>
                </span>
            </a>
            <!-- END Logo -->

            <!-- Extra -->
            <div>
                <!-- Options -->
                <div class="dropdown d-inline-block ml-2">
                    <a class="btn btn-sm btn-dual" id="sidebar-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="si si-drop"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right font-size-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
                        <!-- Color Themes -->
                        <!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
                        {{-- <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="default" href="#">
                            <span>Default</span>
                            <i class="fa fa-circle text-default"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#">
                            <span>Amethyst</span>
                            <i class="fa fa-circle text-amethyst"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#">
                            <span>City</span>
                            <i class="fa fa-circle text-city"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#">
                            <span>Flat</span>
                            <i class="fa fa-circle text-flat"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#">
                            <span>Modern</span>
                            <i class="fa fa-circle text-modern"></i>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between font-w500" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#">
                            <span>Smooth</span>
                            <i class="fa fa-circle text-smooth"></i>
                        </a> --}}
                        <!-- END Color Themes -->

                        {{-- <div class="dropdown-divider"></div> --}}

                        <!-- Sidebar Styles -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_light" href="#">
                            <span>Sidebar Light</span>
                        </a>
                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="sidebar_style_dark" href="#">
                            <span>Sidebar Dark</span>
                        </a>
                        <!-- Sidebar Styles -->

                        <div class="dropdown-divider"></div>

                        <!-- Header Styles -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_light" href="#">
                            <span>Header Light</span>
                        </a>
                        <a class="dropdown-item font-w500" data-toggle="layout" data-action="header_style_dark" href="#">
                            <span>Header Dark</span>
                        </a>
                        <!-- Header Styles -->
                    </div>
                </div>
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
                    <li class="nav-main-item {{ request()->routeIs('dashboard.index') ? 'open' : '' }}">
                        <a class="nav-main-link" href="{{ route("dashboard.index") }}">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-main-item {{ request()->routeIs('general.index') ? 'open' : '' }}">
                        <a class="nav-main-link" href="{{ route("general.index") }}">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">General</span>
                        </a>
                    </li>

                    <li class="nav-main-item {{ request()->routeIs('home.index') ? 'open' : '' }}">
                        <a class="nav-main-link" href="{{ route("home.index") }}">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">Home Page</span>
                        </a>
                    </li>

                    <li class="nav-main-item {{ request()->routeIs('information.index') ? 'open' : '' }}">
                        <a class="nav-main-link" href="{{ route("information.index") }}">
                            <i class="nav-main-link-icon si si-speedometer"></i>
                            <span class="nav-main-link-name">Information Page</span>
                        </a>
                    </li>

                    <li class="nav-main-item {{ request()->routeIs('category.*') ? 'open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="{{ route("category.index") }}">
                            <i class="nav-main-link-icon si si-fire"></i>
                            <span class="nav-main-link-name">Category</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item {{ request()->routeIs('category.create') ? 'open' : '' }}">
                                <a class="nav-main-link" href="{{ route("category.create") }}">
                                    <span class="nav-main-link-name">Add Category</span>
                                </a>
                            </li>

                            <li class="nav-main-item {{ request()->routeIs('category.index') ? 'open' : '' }}">
                                <a class="nav-main-link" href="{{ route("category.index") }}">
                                    <span class="nav-main-link-name">Category List</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-main-item {{ request()->routeIs('post.*') ? 'open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="{{ route("post.index") }}">
                            <i class="nav-main-link-icon si si-fire"></i>
                            <span class="nav-main-link-name">Post</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item {{ request()->routeIs('post.create') ? 'open' : '' }}">
                                <a class="nav-main-link" href="{{ route("post.create") }}">
                                    <span class="nav-main-link-name">Add Post</span>
                                </a>
                            </li>

                            <li class="nav-main-item {{ request()->routeIs('post.index') ? 'open' : '' }}">
                                <a class="nav-main-link" href="{{ route("post.index") }}">
                                    <span class="nav-main-link-name">Post List</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    {{-- <li class="nav-main-item {{ request()->routeIs('navigation.*') ? 'open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="{{ route("navigation.index") }}">
                            <i class="nav-main-link-icon si si-fire"></i>
                            <span class="nav-main-link-name">Navigation</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item {{ request()->routeIs('navigation.create') ? 'open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" href="{{ route("navigation.create") }}">
                                    <span class="nav-main-link-name">Add Navigation</span>
                                </a>
                            </li>

                            <li class="nav-main-item {{ request()->routeIs('navigation.index') ? 'open' : '' }}">
                                <a class="nav-main-link nav-main-link-submenu" href="{{ route("navigation.index") }}">
                                    <span class="nav-main-link-name">Navigation List</span>
                                </a>
                            </li>

                        </ul>
                    </li> --}}

                    <li class="nav-main-item {{ request()->routeIs('profile.show') ? 'open' : '' }}">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="{{ route("profile.show") }}">
                            <i class="nav-main-link-icon si si-fire"></i>
                            <span class="nav-main-link-name">Settings</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item {{ request()->routeIs('profile.show') ? 'open' : '' }}">
                                <a class="nav-main-link" href="{{ route('profile.show') }}">
                                    <span class="nav-main-link-name">Edit Profile</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-main-item">
                        <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-account').submit();" class="nav-main-link">
                        <i class="nav-main-link-icon fa fa-arrow-alt-circle-left"></i>
                        <span class="nav-main-link-name">Logout</span>
                        </a>
                        <form id="logout-account" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </li>


                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->
