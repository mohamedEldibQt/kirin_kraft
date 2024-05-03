<!-- Start Header Area -->
<header class="rbt-header rbt-header-10">
    <div class="rbt-sticky-placeholder"></div>
    <!-- Start Header Top  -->
    <div class="rbt-header-top rbt-header-top-1 header-space-betwween bg-not-transparent bg-color-darker top-expended-activation">
        <div class="container-fluid">
            <div class="top-expended-wrapper">
                <div class="top-expended-inner rbt-header-sec align-items-center ">
                    <div class="rbt-header-sec-col rbt-header-left d-none d-xl-block">
                        <div class="rbt-header-content">
                            <!-- Start Header Information List  -->
                            <div class="header-info">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="#"><i class="fab fa-instagram"></i>{{$setting->followers ?? " "}} </a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>{{$setting->phone_number ?? " "}}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- End Header Information List  -->
                        </div>
                    </div>
                 {{--   <div class="rbt-header-sec-col rbt-header-center">
                        <div class="rbt-header-content justify-content-start justify-content-xl-center">
                            <div class="header-info">
                                <div class="rbt-header-top-news">
                                    <div class="inner">
                                        <div class="content">
                                            <span class="rbt-badge variation-02 bg-color-primary color-white radius-round">Hot</span>
                                            <span class="news-text"><img src="assets/images/icons/hand-emojji.svg" alt="Hand Emojji Images"> Intro price. Get Histudy for Big Sale -95% off.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  --}}
                    <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                        <div class="rbt-header-content justify-content-start justify-content-lg-end">
                            <div class="header-info d-none d-xl-block">
                                <ul class="social-share-transparent">
                                    <li>
                                        <a href="{{$setting->facebook ?? " "}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{$setting->instagram ?? " "}}" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="rbt-separator d-none d-xl-block"></div>

                            <div class="header-info">
                                <ul class="rbt-dropdown-menu switcher-language">
                                    <li class="has-child-menu">
                                        <a href="#">
                                            <span class="menu-item">

                                            @php
                                                if (App::isLocale('en')) { echo '<img src="./images/en.png">'; echo'  English'; }

                                                elseif (App::isLocale('tr')) { echo '<img src="./images/tr.png">'; echo'  Türkçe';}
                                                elseif (App::isLocale('ar')){ echo '<img src="./images/ar.png">'; echo'  Arabic';}
                                             @endphp
                                            </span>
                                            <i class="right-icon feather-chevron-down"></i>
                                        </a>

                                        <ul class="sub-menu">
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a  href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                        <span class="menu-item">  {{ $properties['native'] }}</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                         {{--   <div class="header-info">
                                <ul class="rbt-dropdown-menu currency-menu">
                                    <li class="has-child-menu">
                                        <a href="#">
                                            <span class="menu-item">USD</span>
                                            <i class="right-icon feather-chevron-down"></i>
                                        </a>
                                        <ul class="sub-menu hover-reverse">
                                            <li>
                                                <a href="#">
                                                    <span class="menu-item">EUR</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="menu-item">GBP</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="header-info">
                    <div class="top-bar-expended d-block d-lg-none">
                        <button class="topbar-expend-button rbt-round-btn"><i class="feather-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top  -->
    <div class="rbt-header-wrapper header-space-betwween header-sticky">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left rbt-header-content">
                    <div class="header-info">
                        <div class="logo">
                            <a href="{{url(route('home'))}}">
                                <img src="{{URL::asset($setting->logo ?? " ")}}" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>

                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="with-megamenu has-menu-child-item position-static">
                                <a href="{{url(route('home'))}}">{{__('front.home')}}</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item">
                                <a href="{{url(route('about_us'))}}">{{__('front.about_us')}}</a>
                            </li>

                            <li class="with-megamenu has-menu-child-item">
                                <a href="{{url(route('products'))}}">{{__('front.gallery')}}</a>
                            </li>

                            <li class="has-dropdown has-menu-child-item">
                                <a href="{{url(route('contact_us'))}}">{{__('front.contact_us')}}</a>
                            </li>

                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <!-- Navbar Icons -->
                    <ul class="quick-access">
                        <li class="access-icon">
                            <a class="search-trigger-active rbt-round-btn" href="#">
                                <i class="feather-search"></i>
                            </a>
                        </li>
                        <li class="account-access rbt-user-wrapper d-none d-xl-block">
                            <a href="#"><i class="feather-user"></i>Admin</a>
                            <div class="rbt-user-menu-list-wrapper">
                                <div class="inner">
                                    <div class="rbt-admin-profile">
                                        <div class="admin-thumbnail">
                                            <img src="{{URL::asset($setting->logo ?? " ")}}" alt="User Images">
                                        </div>
                                        <div class="admin-info">
                                            <span class="name">{{$setting->username ?? " "}}</span>

                                        </div>
                                    </div>
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="{{url(route('dashboard'))}}">
                                                <i class="feather-home"></i>
                                                <span>My Dashboard</span>
                                            </a>
                                        </li>

                                    </ul>

                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">

                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                                <i class="feather-log-out"></i>
                                                <span>{{ __('Logout') }}</span>
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="access-icon rbt-user-wrapper d-block d-xl-none">
                            <a class="rbt-round-btn" href="#"><i class="feather-user"></i></a>
                            <div class="rbt-user-menu-list-wrapper">
                                <div class="inner">
                                    <div class="rbt-admin-profile">
                                        <div class="admin-thumbnail">
                                            <img src="assets/images/team/avatar.jpg" alt="User Images">
                                        </div>
                                        <div class="admin-info">
                                            <span class="name">Kirin Kraft</span>
                                        </div>
                                    </div>
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="instructor-dashboard.html">
                                                <i class="feather-home"></i>
                                                <span>My Dashboard</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <hr class="mt--10 mb--10">
                                    <ul class="user-list-wrapper">
                                        <li>
                                            <a href="instructor-settings.html">
                                                <i class="feather-settings"></i>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{url(route('home'))}}">
                                                <i class="feather-log-out"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button rbt-round-btn">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                    <!-- Start Mobile-Menu-Bar -->

                </div>
            </div>
        </div>
        <!-- Start Search Dropdown  -->
        <div class="rbt-search-dropdown">
            <div class="wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="What are you looking for?">
                            <div class="submit-btn">
                                <a class="rbt-btn btn-gradient btn-md" href="#">Search</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Dropdown  -->
    </div>
    <!-- Start Side Vav -->

    <!-- End Side Vav -->

</header>
<!-- Mobile Menu Section -->
<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <a href="{{url(route('home'))}}">
                        <img src="assets/images/logo/logo.png" alt="Education Logo Images">
                    </a>
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">Histudy is a education website template. You can customize all.</p>
            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:hello@example.com"><i class="feather-mail"></i>example@gmail.com</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>(302) 555-0107</a>
                </li>
            </ul>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <li class="with-megamenu  position-static">
                    <a href="{{url(route('home'))}}">Home</a>
                </li>

                <li class="with-megamenu">
                    <a href="{{url(route('about_us'))}}">about us</a>
                </li>

                <li class="with-megamenu">
                    <a href="{{url(route('products'))}}">gallery</a>
                </li>

                <li class="has-dropdown">
                    <a href="{{url(route('contact_us'))}}">contact us</a>
                </li>
            </ul>
        </nav>

        <div class="mobile-menu-bottom">

            <div class="social-share-wrapper">
                <span class="rbt-short-title d-block">Find With Us</span>
                <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                    <li><a href="https://www.facebook.com/">
                            <i class="feather-facebook"></i>
                        </a>
                    </li>
                    <li><a href="https://www.twitter.com">
                            <i class="feather-twitter"></i>
                        </a>
                    </li>
                    <li><a href="https://www.instagram.com/">
                            <i class="feather-instagram"></i>
                        </a>
                    </li>
                    <li><a href="https://www.linkdin.com/">
                            <i class="feather-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>
