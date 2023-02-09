<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="{{ asset('/') }}">
    <title>Document</title>

    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href={{ asset('css/vendors.bundle.css') }}>
    <link rel="stylesheet" media="screen, print" href={{ asset('css/app.bundle.css') }}>
    <!--<link rel="stylesheet" media="screen, print" href="css/your_styles.css">-->

    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('img/favicon/apple-touch-icon.png') }}>
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('img/favicon/favicon-32x32.png') }}>
    <link rel="mask-icon" href={{ asset('img/favicon/safari-pinned-tab.svg') }} color="#5bbad5">
    <link rel="stylesheet" media="screen, print" href={{ asset('css/datagrid/datatables/datatables.bundle.css') }}>
    <link rel="stylesheet" media="screen, print" href={{ asset('css/fa-solid.css') }}>

</head>
<body class="mod-bg-1">
<!-- BEGIN Page Wrapper -->
<div class="page-wrapper">
    <div class="page-inner">

        @guest
        @else
            <!-- BEGIN Left Aside -->
            <aside class="page-sidebar">
                <div class="page-logo">
                    <a href="#" class="page-logo-link press-scale-down d-flex align-items-center position-relative"
                       data-toggle="modal" data-target="#modal-shortcut">
                        <img src="img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                        <span class="page-logo-text mr-1">Sistem Talep Uygulamasi</span>
                        <span class="position-absolute text-white opacity-50 small pos-top pos-right mr-2 mt-n2"></span>
                        <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
                    </a>
                </div>
                <!-- BEGIN PRIMARY NAVIGATION -->
                <nav id="js-primary-nav" class="primary-nav" role="navigation">

                    <div class="info-card">
                        <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle"
                             alt="Dr. Codex Lantern">
                        <div class="info-card-text">
                            <a href="#" class="d-flex align-items-center text-white" data-toggle="modal">
                                    <span class="text-truncate text-truncate-sm d-inline-block">
                                        {{ auth()->user()->name }}
                                    </span>
                            </a>
                            <span class="d-inline-block text-truncate text-truncate-sm">Toronto, Canada</span>
                        </div>
                        <img src="img/card-backgrounds/cover-2-lg.png" class="cover" alt="cover">

                    </div>

                    <ul id="js-nav-menu" class="nav-menu">

                        @if(auth()->user()->role == 'user')

                            <li class="nav-title">Talep Olustur</li>

                            <li>
                                <a href="{{ route('server.create') }}" title="Sunucu Talep Olustur">
                                    <span class="nav-link-text">Sunucu Talep Olustur</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('Post.create') }}" title="Kullanici Talep Olustur">
                                    <span class="nav-link-text">Kullanici Talep Olustur</span>
                                </a>
                            </li>

                            <li class="nav-title">Talep Listelerim</li>

                            <li>
                                <a href="{{ route('server.index') }}" title="Sunucu Talep Olustur">
                                    <span class="nav-link-text">Sunucu Talep Listem</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('Post.index') }}" title="Kullanici Talep Olustur">
                                    <span class="nav-link-text">Kullanici Talep Listem</span>
                                </a>
                            </li>

                        @elseif(auth()->user()->role == 'admin')

                            <li class="nav-title">Talep Listesi</li>

                            <li>
                                <a href="{{ route('server.index') }}" title="Sunucu Talep Listesi">
                                    <span class="nav-link-text">Sunucu Talep Listesi</span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('post.index') }}" title="Kullanici Talep Listesi">
                                    <span class="nav-link-text">Kullanici Talep Listesi</span>
                                </a>
                            </li>

                            <li class="nav-title">Ayarlar</li>

                            <li>
                                <a href="#" title="Sunucu Ayarlari">
                                    <i class="fal fa-window"></i>
                                    <span class="nav-link-text">Sunucu Ayarlari</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('cpu.index') }}" title="CPU Listesi">
                                            <span class="nav-link-text">CPU Listesi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('ram.index') }}" title="RAM Listesi">
                                            <span class="nav-link-text">RAM Listesi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('disk.index') }}" title="Disk Listesi">
                                            <span class="nav-link-text">Disk Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" title="Kullanici Ayarlari">
                                    <i class="fal fa-bolt"></i>
                                    <span class="nav-link-text">Kullanici Ayarlari</span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{ route('mudurluk.index') }}" title="Genel Mudurluk Listesi">
                                            <span class="nav-link-text">Genel Mudurluk Listesi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('daire.index') }}" title="Daire Baskanligi Listesi">
                                            <span class="nav-link-text">Daire Baskanligi Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        @endif

                    </ul>
                </nav>
                <!-- END PRIMARY NAVIGATION -->
            </aside>
        @endguest

        <div class="page-content-wrapper">

            <header class="page-header" role="banner">
                @guest
                @else
                    <!-- DOC: nav menu layout change shortcut -->
                    <div class="hidden-md-down dropdown-icon-menu position-relative">
                        <a href="#" class="header-btn btn js-waves-off" data-action="toggle"
                           data-class="nav-function-hidden" title="Hide Navigation">
                            <i class="ni ni-menu"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle"
                                   data-class="nav-function-minify"
                                   title="Minify Navigation">
                                    <i class="ni ni-minify-nav"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="btn js-waves-off" data-action="toggle"
                                   data-class="nav-function-fixed"
                                   title="Lock Navigation">
                                    <i class="ni ni-lock-nav"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                @endguest

                <div class="ml-auto d-flex">

                    @guest

                        <nav class="navbar navbar-expand-lg navbar-light">

                            <div class="collapse navbar-collapse" id="navbarColor02">
                                <ul class="navbar-nav mr-auto">
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif

                                </ul>

                            </div>
                        </nav>
                    @else

                        <div>
                            <a href="#" data-toggle="dropdown" title="drlantern@gotbootstrap.com"
                               class="header-icon d-flex align-items-center justify-content-center ml-2">
                                <img src="img/demo/avatars/avatar-admin.png" class="profile-image rounded-circle"
                                     alt="Dr. Codex Lantern">
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg">
                                <div class="dropdown-header bg-trans-gradient d-flex flex-row py-4 rounded-top">
                                    <div class="d-flex flex-row align-items-center mt-1 mb-1 color-white">
                                                                             <span class="mr-2">
                                                                                 <img
                                                                                     src="img/demo/avatars/avatar-admin.png"
                                                                                     class="rounded-circle profile-image"
                                                                                     alt="{{ auth()->user()->name }}"></span>
                                        <div class="info-card-text">
                                            <div
                                                class="fs-lg text-truncate text-truncate-lg">{{ auth()->user()->name }}
                                                - {{ auth()->user()->role }}</div>
                                            <span
                                                class="text-truncate text-truncate-md opacity-80">{{ auth()->user()->email }}</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider m-0"></div>

                                <a href="{{ route('profile.show', auth()->user()->id) }}" class="dropdown-item" data-toggle="modal">
                                    Profil Bilgileri
                                </a>

                                <div class="dropdown-divider m-0"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Cikis Yap
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}"
                                      method="POST"
                                      class="d-none">
                                    @csrf
                                </form>
                            </div>


                        </div>
                    @endguest

                </div>


            </header>


            @yield('content')
        </div>
    </div>
</div>

<!-- base vendor bundle:
            DOC: if you remove pace.js from core please note on Internet Explorer some CSS animations may execute before a page is fully loaded, resulting 'jump' animations
                       + pace.js (recommended)
                       + jquery.js (core)
                       + jquery-ui-cust.js (core)
                       + popper.js (core)
                       + bootstrap.js (core)
                       + slimscroll.js (extension)
                       + app.navigation.js (core)
                       + ba-throttle-debounce.js (core)
                       + waves.js (extension)
                       + smartpanels.js (extension)
                       + src/../jquery-snippets.js (core) -->
<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>

@yield('script')

</body>
</html>
