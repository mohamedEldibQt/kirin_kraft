@extends('front.layouts.master')
@section('title')
    @lang('site.Home')
@endsection
@section('content')

    <!-- Start About Area  -->
    <div class="rbt-about-area about-style-1 bg-color-white rbt-section-gapTop">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="thumbnail-wrapper">
                        <div class="thumbnail image-1">
                            <img data-parallax='{"x": 0, "y": -20}' src="{{URL::asset($about->about_img2_s1)}}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-2 d-none d-xl-block">
                            <img data-parallax='{"x": 0, "y": 60}' src="{{URL::asset($about->about_img3_s1)}}" alt="Education Images">
                        </div>
                        <div class="thumbnail image-3 d-none d-md-block">
                            <img data-parallax='{"x": 0, "y": 80}' src="{{URL::asset($about->about_img1_s1)}}" alt="Education Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner pl--50 pl_sm--0 pl_md--0">
                        <div class="section-title text-start">
                            <span class="subtitle bg-coral-opacity">Know About Us</span>
                            <h2 class="title">{{$about->title_about_s1}}</h2>
                        </div>
                        <p class="description mt--30">{{$about->description_about_s1}}</p>
                        <!-- Start Feature List  -->
                        <div class="rbt-feature-wrapper mt--40">

                            <div class="rbt-feature feature-style-1">
                                @if($about->about1_s1 != null )
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                @endif
                                <div class="feature-content">

                                    <p class="feature-description">{{$about->about1_s1}}</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                @if($about->about2_s1 != null )
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                @endif
                                <div class="feature-content">
                                    <p class="feature-description">{{$about->about2_s1}}</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                @if($about->about3_s1 != null )
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                @endif
                                <div class="feature-content">
                                    <p class="feature-description">{{$about->about3_s1}}</p>
                                </div>
                            </div>

                            <div class="rbt-feature feature-style-1">
                                @if($about->about4_s1 != null )
                                    <div class="icon bg-pink-opacity">
                                        <i class="feather-heart"></i>
                                    </div>
                                @endif
                                <div class="feature-content">
                                    <p class="feature-description">{{$about->about4_s1}}</p>
                                </div>
                            </div>

                        </div>

                        <!-- End Feature List  -->
{{--                        <div class="about-btn mt--40">--}}
{{--                            <a class="rbt-btn btn-gradient hover-icon-reverse" href="#">--}}
{{--                                <span class="icon-reverse-wrapper">--}}
{{--                            <span class="btn-text">More About Us</span>--}}
{{--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>--}}
{{--                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area  -->

    <!-- Start Button Area  -->
    <div class="rbt-video-area rbt-section-gapBottom pt--50 bg-color-white">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="inner pr--50">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">How We Work</span>
                            <h2 class="title">{{$about->title_about_s2}}</h2>
                            <p class="description mt--30">{{$about->description_about_s2}}</p>
                            <div class="read-more-btn">
                                <a class="rbt-moderbt-btn" target="_blank" href="https://www.instagram.com/kirin_kraft">
                                    <span class="moderbt-btn-text">Learn More About Us</span>
                                    <i class="feather-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="video-popup-wrapper">

                        <video  height="440" class="w-100 rbt-radius"  controls>
                            <source src="{{URL::asset($about->about_video_s2)}}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Button Area  -->

@endsection
@section('script')

@endsection

