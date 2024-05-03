<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@lang('site.APP_NAME') | @yield('title')</title>
    @include('front.layouts.partials.head')

    @yield('style')

</head>

<body class="rbt-header-sticky">
@include('front.layouts.partials.header')

<main class="rbt-main-wrapper">
    @yield('content')
    @include('front.layouts.partials.footer')
</main>

@include('front.layouts.partials.script')
@yield('script')
</body>
</html>
