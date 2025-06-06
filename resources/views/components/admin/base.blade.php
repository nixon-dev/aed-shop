<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title> @yield('title', '- Auxilliary and Enterprises Development')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="github.com/nixon-dev">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/animation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/sweetalert.min.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/dashboard/css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/font/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/icon/style.css') }}">
    <script src="{{ asset('assets/dashboard/js/jquery.min.js') }}"></script>
    @yield('css')

</head>

<body class="body">
    <div class="layout-wrap">

        <div id="preload" class="preload-container">
            <div class="preloading">
                <span></span>
            </div>
        </div>
        @include('components.alert')

        <div class="section-menu-left">
            <div class="box-logo">
                <a href="{{ route('landing.index') }}" id="site-logo-inner">
                    <img class="" id="logo_header" alt="nixon-dev" src="{{ asset('assets/logo.png') }}"
                        style="height: 52px;">
                </a>
                <div class="button-show-hide">
                    <i class="icon-menu-left"></i>
                </div>
            </div>
            <div class="center">
                <div class="center-item">
                    <div class="center-heading">{{ Auth::user()->role }}</div>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="{{ route('admin.index') }}" class="">
                                <div class="icon"><i
                                        class="icon-grid  {{ request()->routeIs('admin.index') ? 'text-primary' : '' }}"></i>
                                </div>
                                <div class="text {{ request()->routeIs('admin.index') ? 'text-primary' : '' }}">
                                    Dashboard</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="center-item">

                    <div class="center-heading">E-commerce</div>
                    <ul class="menu-list">
                        <li
                            class="menu-item has-children {{ request()->routeIs(['admin.products', 'admin.products-add']) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-shopping-cart"></i></div>
                                <div class="text">Products</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="{{ route('admin.products-add') }}" class="">
                                        <div
                                            class="text {{ request()->routeIs('admin.products-add') ? 'text-primary' : '' }}">
                                            Add Product</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="{{ route('admin.products') }}" class="">
                                        <div
                                            class="text {{ request()->routeIs('admin.products') ? 'text-primary' : '' }}">
                                            Products</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="menu-item has-children {{ request()->routeIs(['admin.categories', 'admin.categories-add']) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-layers"></i></div>
                                <div class="text">Category</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="{{ route('admin.categories-add') }}" class="">
                                        <div
                                            class="text {{ request()->routeIs('admin.categories-add') ? 'text-primary' : '' }}">
                                            New Category</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="{{ route('admin.categories') }}" class="">
                                        <div
                                            class="text {{ request()->routeIs('admin.categories') ? 'text-primary' : '' }}">
                                            Categories</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li
                            class="menu-item has-children {{ request()->routeIs(['admin.orders', 'admin.orders-track']) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-item-button">
                                <div class="icon"><i class="icon-file-plus"></i></div>
                                <div class="text">Order</div>
                            </a>
                            <ul class="sub-menu">
                                <li class="sub-menu-item">
                                    <a href="{{ route('admin.orders') }}" class="">
                                        <div
                                            class="text {{ request()->routeIs('admin.orders') ? 'text-primary' : '' }}">
                                            Orders</div>
                                    </a>
                                </li>
                                <li class="sub-menu-item">
                                    <a href="{{ route('admin.orders-track') }}" class="">
                                        <div
                                            class="text {{ request()->routeIs('admin.orders-track') ? 'text-primary' : '' }}">
                                            Order tracking</div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <br>
                        <br>
                        <div class="center-heading">Settings</div>

                        <li class="menu-item">
                            <a href="{{ route('admin.users') }}" class="">
                                <div class="icon"><i
                                        class="icon-user {{ request()->routeIs('admin.users') ? 'text-primary' : '' }}"></i>
                                </div>
                                <div class="text {{ request()->routeIs('admin.users') ? 'text-primary' : '' }}">Users
                                </div>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="{{ route('admin.settings') }}" class="">
                                <div class="icon"><i
                                        class="icon-settings  {{ request()->routeIs('admin.settings') ? 'text-primary' : '' }}"></i>
                                </div>
                                <div class="text {{ request()->routeIs('admin.settings') ? 'text-primary' : '' }}">
                                    Account</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-content-right">
            <div class="header-dashboard">
                <div class="wrap">
                    <div class="header-left">

                        <div class="button-show-hide">
                            <i class="icon-menu-left"></i>
                        </div>


                    </div>
                    <div class="header-grid">

                        <div class="popup-wrap message type-header">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="header-item">
                                        <span class="text-tiny">1</span>
                                        <i class="icon-bell"></i>
                                    </span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end has-content"
                                    aria-labelledby="dropdownMenuButton2">
                                    <li>
                                        <h6>Notifications</h6>
                                    </li>
                                    <li>
                                        <div class="message-item item-1">
                                            <div class="image">
                                                <i class="icon-noti-1"></i>
                                            </div>
                                            <div>
                                                <div class="body-title-2">Discount available</div>
                                                <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus
                                                    at, ullamcorper nec diam</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-item item-2">
                                            <div class="image">
                                                <i class="icon-noti-2"></i>
                                            </div>
                                            <div>
                                                <div class="body-title-2">Account has been verified</div>
                                                <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus
                                                    et</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-item item-3">
                                            <div class="image">
                                                <i class="icon-noti-3"></i>
                                            </div>
                                            <div>
                                                <div class="body-title-2">Order shipped successfully</div>
                                                <div class="text-tiny">Integer aliquam eros nec sollicitudin
                                                    sollicitudin</div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-item item-4">
                                            <div class="image">
                                                <i class="icon-noti-4"></i>
                                            </div>
                                            <div>
                                                <div class="body-title-2">Order pending: <span>ID 305830</span>
                                                </div>
                                                <div class="text-tiny">Ultricies at rhoncus at ullamcorper
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#" class="tf-button w-full">View all</a></li>
                                </ul>
                            </div>
                        </div>




                        <div class="popup-wrap user type-header">
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="header-user wg-user">
                                        <span class="image">
                                            <img src="{{ asset('assets/profile/default.jpg') }}" alt="">
                                        </span>
                                        <span class="flex flex-column">
                                            <span class="body-title mb-2">{{ Auth::user()->name }}</span>
                                            <span class="text-tiny">{{ Auth::user()->role }}</span>
                                        </span>
                                    </span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end has-content"
                                    aria-labelledby="dropdownMenuButton3">
                                    <li>
                                        <a href="#" class="user-item">
                                            <div class="icon">
                                                <i class="icon-user"></i>
                                            </div>
                                            <div class="body-title-2">Account</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-item">
                                            <div class="icon">
                                                <i class="icon-mail"></i>
                                            </div>
                                            <div class="body-title-2">Inbox</div>
                                            <div class="number">27</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-item">
                                            <div class="icon">
                                                <i class="icon-file-text"></i>
                                            </div>
                                            <div class="body-title-2">Taskboard</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="user-item">
                                            <div class="icon">
                                                <i class="icon-headphones"></i>
                                            </div>
                                            <div class="body-title-2">Support</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('auth.logout') }}" class="user-item">
                                            <div class="icon">
                                                <i class="icon-log-out"></i>
                                            </div>
                                            <div class="body-title-2">Log out</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="main-content">


                @yield('main')

            </div>

        </div>
    </div>

    <script src="{{ asset('assets/dashboard/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/main.js') }}"></script>
    @yield('script')
</body>

</html>
