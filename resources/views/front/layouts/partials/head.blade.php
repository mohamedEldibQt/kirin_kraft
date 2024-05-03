<meta name="robots" content="noindex, follow" />
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.png')}}">
<!-- CSS
============================================ -->
<link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/vendor/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/vendor/slick-theme.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/sal.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/feather.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/euclid-circulara.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/swiper.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/magnify.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/odometer.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/animation.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/plugins/magnigy-popup.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--<link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">--}}
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">


<style>

    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, body{
        font-family: "Cairo", sans-serif !important;
        direction: {{LaravelLocalization::getCurrentLocaleDirection()}};

        /*font-family: 'Almarai', sans-serif !important;*/
    }
    .rbt-page-banner-wrapper .rbt-banner-content-top .title-wrapper .rbt-badge-2 {
        margin-{{LaravelLocalization::getCurrentLocaleDirection() == 'rtl'?'right' :'left'}}: 20px !important;
        margin-{{LaravelLocalization::getCurrentLocaleDirection() == 'rtl'?'left' :'right'}}: 0px !important;
    }
    .text-start{
        text-align: {{LaravelLocalization::getCurrentLocaleDirection() == 'rtl'?'right' :'left'}} !important;
    }
    .scroll-animation-wrapper.no-overlay.mt--50 {
        direction: ltr !important;
    }
    .rbt-header .logo a img {
        max-height: 80px;
    }
    a:not([href]):not([class]), a:not([href]):not([class]):hover {
        cursor: pointer;
    }

    .rbt-about-area .row.align-items-center,.rbt-btn.hover-icon-reverse .icon-reverse-wrapper {
        direction: ltr;
    }
    .read-more-btn.text-start.text-md-end {
        text-align: left !important;
    }
    @media only screen and (min-width: 1200px) and (max-width: 1599px)
    {
        .header-space-betwween {
            padding-{{LaravelLocalization::getCurrentLocaleDirection() == 'rtl'?'right' :'left'}}: 30px;
            padding-{{LaravelLocalization::getCurrentLocaleDirection() == 'rtl'?'left' :'right'}}: 150px!important;
        }
    }
    img.img-icons-footer {
        width: 30px !important;
    }
    .swal2-html-container {

        font-size: 2.125em !important;
    }
</style>


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel="stylesheet" href="{{asset('assets/css/owlCarousel.css')}}">
