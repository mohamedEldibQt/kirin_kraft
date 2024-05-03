@extends('front.layouts.master')
@section('title')
    @lang('site.Home')
@endsection
@section('content')

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Single Painting</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="{{url(route('home'))}}">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Single Painting</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->


    <div class="rbt-single-product-area rbt-single-product rbt-section-gap">
        <div class="container">
            <div class="row  ">
                <div class="col-lg-6">

                    <div id="slider" class="owl-carousel product-details-slider">
                        @foreach($painting->images as $image)
                            <div class="item ">
                                <img src="{{asset('images/'.$image->painting_imgs)}}" alt="{{$painting->painting_name}}"/>
                            </div>
                        @endforeach
                    </div>
                    <div id="thumbs" class="owl-carousel product-details-thumb">
                        @foreach($painting->images as $image)
                            <div class="thumb block-img">
                                <img src="{{asset('images/'.$image->painting_imgs)}}" alt="1"/>
                            </div>
                        @endforeach
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="content">


                        <h2 class="title mt--10 mb--10">{{$painting->painting_name}}</h2>


                        <p class="mt--20">{{$painting->painting_description}}</p>

                        <ul class="product-feature">
                            <li><span>Exhibition Name:</span> {{$painting->exhibition->exhibition_name}}</li>
                            <li><span>Painting Size: </span> {{$painting->painting_size}}</li>
                            <li><span>Painting Colors: </span> {{$painting->painting_colors}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rbt-product-description rbt-section-gapBottom bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <ul class="nav nav-tabs tab-button-style-2" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="tab-button active" id="home-tab-4" data-bs-toggle="tab" data-bs-target="#home-4"
                               role="tab" aria-controls="home-tab-4" aria-selected="true">
                                <span class="title">Reviews</span>
                            </a>
                        </li>

                    </ul>

                    <div class="tab-content" id="myTabContent">


                    <div class="product-description-content tab-pane fade active show" id="home-4" role="tabpanel" aria-labelledby="home-tab-4">

                            <ul class="comment-list">
                                <!-- Start Single Comment  -->
                                @isset($review)
                                    @foreach($review as $item)
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="single-comment">
                                                    <div class="comment-img">
                                                        <img src="{{asset('assets/images/testimonial/testimonial-1.jpg')}}" alt="Author Images">
                                                    </div>
                                                    <div class="comment-inner">
                                                        <h6 class="commenter">
                                                            <a href="#"> {{$item->reviewer_name}}</a>
                                                        </h6>
                                                        <div class="comment-meta">
                                                            <div class="time-spent">{{$item->created_at}}</div>
                                                        </div>

                                                        <div class="comment-text">
                                                            <p class="b2">{{$item->reviewer_reply}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @endisset
                                <!-- End Single Comment  -->

                            </ul>

                            <!-- Start Product Comment Form  -->
                            <div class="rbt-comment-form mt--50 rbt-shadow-box">
                                <div class="comment-form-inner">
                                    <h3 class="title">Add Review</h3>

                                </div>
                                <form  method="POST" enctype="multipart/form-data"  action="{{route('review.store')}}">
                                    @csrf
                                    <p class="comment-note mb--20">Your email address will not be published. Required
                                        fields are marked *</p>

                                    <div class="row row--10">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="reviewer_name">Your Name</label>
                                                <input id="reviewer_name" name="reviewer_name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <div class="form-group">
                                                <label for="bl-email">Your Email</label>
                                                <input id="bl-email" name="reviewer_email" type="email">
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="message">Leave a Reply</label>
                                                <textarea id="message" name="reviewer_reply"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <button  type="submit" class="rbt-btn btn-gradient hover-icon-reverse">
                                                <span class="icon-reverse-wrapper">
                                                    <span class="btn-text">Post Comment</span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>

                                </form>


                            </div>
                            <!-- End Product Comment Form  -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="rbt-related-product rbt-section-gapBottom bg-color-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb--50">
                        <span class="subtitle bg-secondary-opacity">Related Painting</span>
                        <h2 class="title">Similar Painting.</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <!-- Start Single Product  -->
                @isset($paintings)
                    @foreach($paintings as $item)
                        <div class="col-lg-4 col-md-6 col-12">
                    <div class="rbt-default-card style-three rbt-hover">
                        <div class="inner">
                            <div class="content pt--0 pb--10"></div>

                            @php
                                $image = $item->images->first();
                            @endphp
                            <div class="thumbnail">
                                    <a href="{{url(route('product_details',['id'=>$item->id]))}}">

                                        <img src="{{asset('images/'.$image->painting_imgs)}}" alt=" {{$item->painting_name}} ">
                                    </a>
                            </div>
                            <div class="content">
                                <h2 class="title"><a href="{{url(route('product_details',['id'=>$item->id]))}}">   {{$item->painting_name}} </a></h2>
                                <p class="rbt-card-text escription_cut">  {{$item->painting_description}}</p>
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

                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endisset
                <!-- End Single Product  -->

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

