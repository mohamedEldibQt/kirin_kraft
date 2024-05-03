@extends('front.layouts.master')
@section('title')
    @lang('site.Home')
@endsection
@section('content')

    <!-- Start Slider Area  -->
    <div class="slider-area rbt-banner-6 variation-01 bg_image header-transperent-spacer" data-black-overlay="7"
         style="background-image: url({{asset($setting->cover)}});">
        <div class="wrapper w-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="inner text-center">
                            <div class="badge-top mb--30">
{{--                                <span class="rbt-badge">Histudy Badge</span>--}}
                            </div>
                            <h1 class="title">{{$setting->title_background}} <span class="theme-gradient"><strong>{{$setting->username}}</strong></span> </h1>
                            <div class="button-group mt--30">
                                <a class="rbt-btn btn-gradient rbt-marquee-btn" href="{{url(route('products'))}}">
                                    <span data-text="Get Started Today">Get Started</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Area  -->



    <div class="about-style-2 rbt-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row row--0 about-wrapper align-items-center theme-shape">
                        <div class="col-lg-6">
                            <div class="thumbnail">
                                <img src="{{URL::asset($setting->logo)}}" alt="About Images">
                            </div>
                        </div>
                        <div class="col-lg-6 mt_md--30 mt_sm--30">
                            <div class="content">
                                <div class="inner">
                                    <h4 class="title">I'm <span class="theme-gradient">{{$setting->your_name}}</span>
                                        <br />{{$setting->title_card}}</h4>
                                    <p>{{$setting->bio_card}}</p>
                                    <ul class="contact-address">
                                        <li>
                                            <i class="feather-mail"></i> {{$setting->email}}
                                        </li>
                                        <li><i class="feather-phone"></i>  {{$setting->phone_number}}</li>
                                        <li>
                                            <i class="feather-map-pin"></i> {{$setting->location}}
                                        </li>
                                    </ul>
                                    <div class="signature-image mt--20">
                                        <img src="{{URL::asset($setting->signature)}}" alt="Signature Images">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="top-circle-shape position-bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="rbt-categories-area bg-color-white ">
        <div class="container">


            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--60">
                        <h5 class="title">Exhibition</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper category-activation-three rbt-arrow-between icon-bg-gray gutter-swiper-30 ptb--20">
                        <div class="swiper-wrapper">

                            <!-- Start Single Category  -->
                            @isset($exhibition)
                                @foreach($exhibition as $items)
                            <div class="swiper-slide">
                                <div class="single-slide">
                                    <div class="rbt-cat-box rbt-cat-box-1 variation-2 text-center">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="">
                                                    <img src="{{URL::asset($items->exhibition_image)}}" alt="Category Images">
                                                </a>
                                            </div>
                                            <div class="icons">
                                                <img src="{{URL::asset($items->exhibition_icon)}}" alt="Icons Images">
                                            </div>
                                            <div class="content">
                                                <h5 class="title"><a href="{{url(route('products',['id'=>$items->id]))}}">{{$items->exhibition_name}}</a></h5>
                                                <div class="read-more-btn">
                                                    <a class="rbt-btn-link" href="{{url(route('products',['id'=>$items->id]))}}">
                                                        {{$items->paintings->count()}}

                                                        <i class="feather-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                            @endisset
                            <!-- End Single Category  -->



                        </div>

                        <div class="rbt-swiper-arrow rbt-arrow-left">
                            <div class="custom-overfolow">
                                <i class="rbt-icon feather-arrow-left"></i>
                                <i class="rbt-icon-top feather-arrow-left"></i>
                            </div>
                        </div>

                        <div class="rbt-swiper-arrow rbt-arrow-right">
                            <div class="custom-overfolow">
                                <i class="rbt-icon feather-arrow-right"></i>
                                <i class="rbt-icon-top feather-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Course Area -->
    <div class="rbt-course-area bg-color-extra2 rbt-section-gap">
        <div class="container">
            <div class="row mb--60">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle bg-secondary-opacity">Top Popular Painting</span>
                        <h2 class="title">Popular Painting <br /> can join with us.</h2>
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5">
                <!-- Start Single Course  -->
                @isset($painting)
                    @foreach($painting as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="rbt-card variation-01 rbt-hover">
                                @php
                                    $image = $item->images->first();
                                @endphp
                                <div class="rbt-card-img">
                                    <a href="{{url(route('product_details',['id'=>$item->id]))}}">
                                        <img src="{{asset('images/'.$image->painting_imgs)}}" alt="{{$item->painting_name}}">
                                    </a>
                                </div>
                                <div class="rbt-card-body">
                                    <h4 class="rbt-card-title">
                                        <a href="{{url(route('product_details',['id'=>$item->id]))}}">
                                            {{$item->painting_name}}
                                        </a>
                                    </h4>
                                    <p class="rbt-card-text "> {{--   escription_cut --}}
                                        {!! \Illuminate\Support\Str::limit($item->painting_description, 100)  !!}
                                    </p>
                                    <div class="rbt-author-meta mb--20">
                                        <div class="rbt-avater">
                                            <a href="#">
                                                <img src="{{URL::asset($item->exhibition->exhibition_icon)}}" alt="Sophia Jaymes">
                                            </a>
                                        </div>
                                        <div class="rbt-author-info">
                                            {{$item->exhibition->exhibition_name}}
                                        </div>
                                    </div>

                                    <div class="rbt-card-bottom">
                                        <a class="rbt-btn-link" href="{{url(route('product_details',['id'=>$item->id]))}}">Learn
                                            More<i class="feather-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
                <!-- End Single Course  -->
            </div>
            <!-- End Card Area -->


        </div>
    </div>
    <!-- End Course Area -->


    <div class="rbt-brand-area bg-color-white rbt-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--40">
                        <span class="small-title w-600">The Best Trasted Partner in This World</span>
                    </div>
                    <ul class="brand-list brand-style-3 justify-content-center justify-content-lg-between">
                        @isset($partner)
                            @foreach($partner as $item)
                                <li><a href="#"><img src="{{URL::asset($item->partner_image)}}" alt="Brand Image"></a></li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('script')

@endsection
