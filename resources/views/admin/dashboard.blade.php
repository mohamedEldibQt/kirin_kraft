@extends('front.layouts.master')

@section('title')
    @lang('site.Home')
@endsection
@section('content')




    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
    </div>
    <!-- Start Card Style -->
    <div class="rbt-dashboard-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Start Dashboard Top  -->
                    <div class="rbt-dashboard-content-wrapper">
                        <div class="tutor-bg-photo bg_image bg_image--22 height-350"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="{{URL::asset($setting->logo ?? " ")}}" alt="Instructor">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">{{$setting->username ?? " "}}</h5>
                                </div>
                            </div>
                            <div class="rbt-tutor-information-right">
{{--                                <div class="tutor-btn">--}}
{{--                                    <a class="rbt-btn btn-md hover-icon-reverse" href="#">--}}
{{--                                        <span class="icon-reverse-wrapper">--}}
{{--                        <span class="btn-text">Create a New Course</span>--}}
{{--                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>--}}
{{--                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>--}}
{{--                                        </span>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                        <!-- End Tutor Information  -->
                    </div>
                    <!-- End Dashboard Top  -->

                    <div class="row "> {{-- g-5 --}}
                        <div class="col-lg-2">
                            <!-- Start Dashboard Sidebar  -->
                            @include('admin/sidebar')
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-10">
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box mb--60">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Dashboard</h4>
                                    </div>
                                    <div class="row g-5">

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-primary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-primary-opacity">
                                                        <i class="feather-book-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-primary">
                                                            <span class="odometer" data-count=" {{$exhibition->count()}}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Exhibitions </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-secondary-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-secondary-opacity">
                                                        <i class="feather-monitor"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-secondary">
                                                            <span class="odometer" data-count="{{$painting->count()}}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Paintings</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-violet-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-violet-opacity">
                                                        <i class="feather-award"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-violet">
                                                            <span class="odometer" data-count="{{$partner->count()}}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Partners</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-pink-opacity">
                                                <div class="inner">
                                                    <div class="rbt-round-icon bg-pink-opacity">
                                                        <i class="feather-users"></i>
                                                    </div>
                                                    <div class="content">
                                                        <h3 class="counter without-icon color-pink">
                                                            <span class="odometer" data-count="{{$review->count()}}">00</span>
                                                        </h3>
                                                        <span class="rbt-title-style-2 d-block">Reviews</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
{{--                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">--}}
{{--                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-coral-opacity">--}}
{{--                                                <div class="inner">--}}
{{--                                                    <div class="rbt-round-icon bg-coral-opacity">--}}
{{--                                                        <i class="feather-gift"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="content">--}}
{{--                                                        <h3 class="counter without-icon color-coral"><span class="odometer" data-count="20">00</span>--}}
{{--                                                        </h3>--}}
{{--                                                        <span class="rbt-title-style-2 d-block">Total Courses</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <!-- End Single Card  -->

                                        <!-- Start Single Card  -->
{{--                                        <div class="col-lg-4 col-md-4 col-sm-6 col-12">--}}
{{--                                            <div class="rbt-counterup variation-01 rbt-hover-03 rbt-border-dashed bg-warning-opacity">--}}
{{--                                                <div class="inner">--}}
{{--                                                    <div class="rbt-round-icon bg-warning-opacity">--}}
{{--                                                        <i class="feather-dollar-sign"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="content">--}}
{{--                                                        <h3 class="counter color-warning"><span class="odometer" data-count="25000">00</span>--}}
{{--                                                        </h3>--}}
{{--                                                        <span class="rbt-title-style-2 d-block">Total Earnings</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <!-- End Single Card  -->

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card Style -->
    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

@endsection
@section('script')

@endsection

