@extends('front.layouts.master')
@section('title')
    @lang('site.Home')
@endsection
@section('content')

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">

            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="{{url(route('home'))}}">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">All Paintings</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div class=" title-wrapper">
                                <h1 class="title mb--0">All Paintings</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎨</div>   {{$paintings->count()}}
                                </a>
                            </div>

                            <p class="description">Paintings that help beginner designers become true unicorns. </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->

            <!-- Start Course Top  -->
{{--            <div class="rbt-course-top-wrapper mt--40">--}}
{{--                <div class="container">--}}
{{--                    <div class="row g-5 align-items-center">--}}
{{--                        <div class="col-lg-5 col-md-12">--}}
{{--                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">--}}
{{--                                <div class="rbt-short-item">--}}
{{--                                    <span class="course-index">Showing 1-9 of 19 results</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="col-lg-7 col-md-12">--}}
{{--                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">--}}
{{--                                <div class="rbt-short-item">--}}
{{--                                    <div class="filter-select">--}}
{{--                                        <span class="select-label d-block">Short By</span>--}}
{{--                                        <div class="filter-select rbt-modern-select search-by-category">--}}
{{--                                            <select>--}}
{{--                                                <option>Default</option>--}}
{{--                                                <option>Latest</option>--}}
{{--                                                <option>Popularity</option>--}}
{{--                                                <option>Trending</option>--}}
{{--                                                <option>Price: low to high</option>--}}
{{--                                                <option>Price: high to low</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
            <!-- End Course Top  -->
        </div>
    </div>

    <div class="rbt-shop-area rbt-section-overlayping-top rbt-section-gapBottom">
        <div class="container">
            <div class="row g-5">
                <!-- Start Single Product  -->
                @isset($paintings)
                    @foreach($paintings as $painting)
                        <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-default-card style-three rbt-hover">
                        <div class="inner">
                            @php
                                $image = $painting->images->first();
                            @endphp
                            <div class="thumbnail">
                                <a href="{{url(route('product_details',['id'=>$painting->id]))}}">
                                    <img src="{{asset('images/'.$image->painting_imgs)}}" alt=" {{$painting->painting_name}}">
                                </a>
                            </div>
                            <div class="content">

                                <div class="content pt--0 pb--10">
                                    <h2 class="title">
                                        <a href="{{url(route('product_details',['id'=>$painting->id]))}}">
                                            {{$painting->painting_name}}
                                        </a>
                                    </h2>
                                    <p class="rbt-card-text">
                                        {!! \Illuminate\Support\Str::limit($painting->painting_description, 100)  !!}
                                    </p>

                                </div>
                                <div class="rbt-author-meta mb--20">
                                    <div class="rbt-avater">
                                        <a href="#">
                                            <img src="{{URL::asset($painting->exhibition->exhibition_icon)}}" alt="Sophia Jaymes">
                                        </a>
                                    </div>
                                    <div class="rbt-author-info">
                                        {{$painting->exhibition->exhibition_name}}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endisset
                <!-- End Single Product  -->

            </div>
            <div class="row">
                <div class="col-lg-12 mt--60">
                    <nav>
                        <ul class="rbt-pagination">
                            <li ><a href="#" aria-label="Previous"><i class="feather-chevron-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li ><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#" aria-label="Next"><i class="feather-chevron-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>

@endsection
@section('script')

@endsection

