<!DOCTYPE html>
@if (app()->getLocale() == 'ar')
    <html lang="ar" dir="rtl">
@elseif(app()->getLocale() == 'en')
    <html lang="en">
@endif

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus inventore nobis illum. Harum a voluptates in eius tenetur quidem Lorem ipsum dolor sit amet consectetur adipisicing elit.">
    <meta property="og:title" content="">
    <meta property="og:type" content="The type">
    <meta property="og:url" content="http://url.com/">
    <meta property="og:image" content="http://image.jpg">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.png">
    <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
    <title>HCL | home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@400;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
</head>

<body>
    <div class="main-wrapper">
        <!--PreLoader-->
        <div class="loader">
            <div class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!--PreLoader-->
        <!--header-->
        <header>
            <!--navbar desktop-->
            <nav class="navbar main-nav navbar-expand-lg">
                <div class="container"><a class="navbar-brand" href="index.html"> <img class="white-logo img-fluid"
                            data-src="images/logo-white.png" alt=""><img class="dark-logo img-fluid"
                            data-src="images/logo.png" alt=""></a>
                    <div class="group">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#side_menu" aria-controls="side_menu" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <div class="hamburger-menu"><span></span><span></span><span></span></div>
                        </button>
                        <div class="search-icon">
                            <button class="btn" type="button" data-bs-toggle="modal"
                                data-bs-target="#searchModal" aria-label="search icon"> <i
                                    class="bi bi-search"></i></button>
                        </div>
                        <div class="lang">
                            <div class="dropdown">
                                <button class="dropdown-toggle" id="langDropdown" type="button"
                                    data-bs-toggle="dropdown">
                                    <div class="icon">
                                        @if (app()->getLocale() == 'ar')
                                            <img class="h-20px w-20px pr-2 rounded-sm"
                                                src="{{ asset('admin/assets/media/svg/flags/ar.svg') }}"
                                                alt=""><span>العربية</span>
                                        @else
                                            <img class="h-20px w-20px pr-2 rounded-sm"
                                                src="{{ asset('admin/assets/media/svg/flags/en.svg') }}"
                                                alt=""><span>English</span>
                                        @endif
                                    </div>
                                </button>
                                <ul class="lang-content dropdown-menu" aria-labelledby="langDropdown">
                                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                        <li>
                                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                <img class="h-20px w-20px pr-2 rounded-sm"
                                                    src="{{ asset('admin/assets/media/svg/flags/' . $localeCode . '.svg') }}"
                                                    alt="{{ $localeCode }}">
                                                {{ $properties['native'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active"><a class="nav-link" aria-current="page"
                                    href="index.html">home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">about
                                    us</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('front.services') }}">services</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('request') }}">Request
                                    Quote</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('tracking') }}">Tracking</a></li>
                            <li class="nav-item"><a class="nav-link"
                                    href="{{ route('policy') }}">Compliance Policy</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--navbar desktop-->
            <!--side menu in mobile only-->
            <div class="offcanvas offcanvas-start" id="side_menu" data-bs-scroll="true" tabindex="-1"
                aria-labelledby="side_menu_label">
                <div class="offcanvas-header">
                    <button class="btn-close btn-close-dark" type="button" data-bs-dismiss="offcanvas"
                        data-bs-target="#side_menu" aria-controls="side_menu" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar">
                        <div class="collapsed navbar-collapse" id="navbarNavSide">
                            <ul class="navbar-nav">
                                <li class="nav-item active"><a class="nav-link" aria-current="page"
                                        href="index.html">home</a></li>
                                <li class="nav-item"><a class="nav-link" href="about.html">about us</a></li>
                                <li class="nav-item"><a class="nav-link" href="services.html">services</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="request-quote.html">Request
                                        Quote</a></li>
                                <li class="nav-item"><a class="nav-link" href="tracking.html">Tracking</a>
                                </li>
                                <li class="nav-item"><a class="nav-link"
                                        href="compliance-policy.html">Compliance Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header-->
        <!--modals-->
        <div class="modals">
            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="" method="">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search here..."
                                    aria-label="Search here..." aria-describedby="search-button" autofocus>
                                <button class="btn" id="search-button" type="submit"> <i
                                        class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--modals-->
