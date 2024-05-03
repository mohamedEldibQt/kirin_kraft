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
                                        <h4 class="rbt-title-style-3">Abouts</h4>
                                    </div>



                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                            <form action="{{route('about.update',['id'=>$about->id])}}" method="POST" enctype="multipart/form-data" class="rbt-profile-row rbt-default-form row row--15">
                                                @csrf

                                                <div class="advance-tab-button mb--20">
                                                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                                        <li role="presentation">
                                                            <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                                <span class="title"> Top About</span>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>

                                                <!-- Start Profile Row  -->
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="title_about_s1">Title About</label>
                                                        <input id="title_about_s1" name="title_about_s1" type="text" value="{{$about->title_about_s1}}">
                                                    </div>
                                                </div>

                                                <div class="col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="description_about_s1">Description About</label>
                                                        <textarea id="description_about_s1" cols="20" rows="4" name="description_about_s1">{{$about->description_about_s1}}</textarea>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="about1_s1">About Point 1</label>
                                                        <textarea id="about1_s1" cols="20" rows="2" name="about1_s1">{{$about->about1_s1}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="about2_s1">About Point 2</label>
                                                        <textarea id="about2_s1" cols="20" rows="2" name="about2_s1">{{$about->about2_s1}}</textarea>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="about3_s1">About Point 3</label>
                                                        <textarea id="about3_s1" cols="20" rows="2" name="about3_s1">{{$about->about3_s1}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="about4_s1">About Point 4</label>
                                                        <textarea id="about4_s1" cols="20" rows="2" name="about4_s1">{{$about->about4_s1}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="about_img1_s1">About Image 1 400x490</label>
                                                        <input id="about_img1_s1" name="about_img1_s1" type="file" >
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="about_img2_s1">About Image 2 490x500</label>
                                                        <input id="about_img2_s1" name="about_img2_s1" type="file" >
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="about_img3_s1">About Image 3 280x250</label>
                                                        <input id="about_img3_s1" name="about_img3_s1" type="file" >
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12"></div>

                                                <div class="advance-tab-button mb--20">
                                                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                                        <li role="presentation">
                                                            <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                                <span class="title"> Bottom About</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="title_about_s2">Title About  </label>
                                                        <input id="title_about_s2" name="title_about_s2" type="text" value="{{$about->title_about_s2}}">
                                                    </div>
                                                </div>


                                                <div class="col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="description_about_s2">Description About </label>
                                                        <textarea id="description_about_s2" cols="20" rows="4" name="description_about_s2">{{$about->description_about_s2}}</textarea>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="about1_s2">About Point 1</label>
                                                        <textarea id="about1_s2" cols="20" rows="2" name="about1_s2">{{$about->about1_s2}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb--10">
                                                    <div class="rbt-form-group">
                                                        <label for="about2_s2">About Point 2</label>
                                                        <textarea id="about2_s2" cols="20" rows="2" name="about2_s2">{{$about->about2_s2}}</textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="about_video_s2">About Video </label>
                                                        <input id="about_video_s2" name="about_video_s2" type="file" >
                                                    </div>
                                                </div>

                                                <div class="col-12 mt--20">
                                                    <div class="rbt-form-group">
                                                        <button type="submit" class="rbt-btn btn-gradient" href="#">Update Info</button>
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

