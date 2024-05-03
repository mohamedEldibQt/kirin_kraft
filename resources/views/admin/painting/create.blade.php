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
                        <div class="tutor-bg-photo bg_image  height-350"
                             style="background-image: url({{asset($setting->cover)}});"></div>
                        <!-- Start Tutor Information  -->
                        <div class="rbt-tutor-information">
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg">
                                    <img src="{{URL::asset($setting->logo)}}" alt="logo">
                                </div>
                                <div class="tutor-content">
                                    <h5 class="title">{{$setting->username}}</h5>
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

                    <div class="row ">
                        <div class="col-lg-2">
                            <!-- Start Dashboard Sidebar  -->
                            @include('admin/sidebar')
                            <!-- End Dashboard Sidebar  -->
                        </div>

                        <div class="col-lg-10">
                            <!-- Start Instructor Profile  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">

                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Paintings</h4>
                                    </div>

                                    <div class="advance-tab-button mb--20">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                    <span class="title">Create Painting</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>


                                    <div class="tab-content">

                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <form action="{{route('painting.store')}}" method="POST" enctype="multipart/form-data" class="rbt-profile-row rbt-default-form row row--15">
                                                @csrf


                                                <!-- Start Profile Row  -->
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="exhibition_name">Exhibition Name</label>
                                                        <select id="exhibition_id" name="exhibition_id" class="form-control">
                                                            @foreach($exhibitions as $exhibition)
                                                                <option value="{{$exhibition->id}}">{{$exhibition->exhibition_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="painting_name">Painting Name</label>
                                                        <input id="painting_name" name="painting_name" type="text">
                                                    </div>
                                                </div>

{{--                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="painting_image">Painting Image</label>--}}
{{--                                                        <input id="painting_image" name="painting_image" type="file" >--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="paintingImages">Painting Images</label>
                                                        <input id="paintingImages" name="paintingImages[]" type="file" multiple >
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="painting_size">Painting Size</label>
                                                        <input id="painting_size" name="painting_size" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="painting_colors">Painting Colors</label>
                                                        <input id="painting_colors" name="painting_colors" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="painting_description">Painting Description</label>
                                                        <textarea id="painting_description" cols="20" rows="5" name="painting_description"> </textarea>
                                                    </div>
                                                </div>


                                                <div class="col-12 mt--20">
                                                    <div class="rbt-form-group">
                                                        <button type="submit" class="rbt-btn btn-gradient" href="#">Create Painting</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- End Profile Row  -->
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- End Instructor Profile  -->

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

