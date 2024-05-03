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
                                        <h4 class="rbt-title-style-3">Settings</h4>
                                    </div>

                                    <div class="advance-tab-button mb--30">
                                        <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                                            <li role="presentation">
                                                <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                                    <span class="title">Profile</span>
                                                </a>
                                            </li>
{{--                                            <li role="presentation">--}}
{{--                                                <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">--}}
{{--                                                    <span class="title">Password</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li role="presentation">--}}
{{--                                                <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" role="tab" aria-controls="social" aria-selected="false">--}}
{{--                                                    <span class="title">Social Share</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
                                        </ul>
                                    </div>

                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                            <form action="{{route('setting.update',['id'=>$setting->id])}}" method="POST" enctype="multipart/form-data" class="rbt-profile-row rbt-default-form row row--15">
                                                @csrf
                                                <div class="rbt-dashboard-content-wrapper">
                                                    <div class="tutor-bg-photo bg_image height-245"
                                                         style="background-image: url({{asset($setting->cover)}});"></div>
                                                    <!-- Start Tutor Information  -->
                                                    <div class="rbt-tutor-information">
                                                        <div class="rbt-tutor-information-left">
                                                            <div class="thumbnail rbt-avatars size-lg position-relative">
                                                                <img src="{{URL::asset($setting->logo)}}" alt="logo">
                                                                <div class="rbt-edit-photo-inner">
                                                                    <label class="rbt-edit-photo">
                                                                        <input style="display: none;" name="logo" type="file" title="Upload Photo" />
                                                                        <i style="position: absolute; left: 12px; top: 12px;" class="feather-camera"></i>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="rbt-tutor-information-right">
                                                            <div class="tutor-btn">
                                                                <label class="rbt-btn btn-sm btn-border color-white radius-round-10">
                                                                    <input style="display: none;" name="cover" type="file">
                                                                    Edit Cover Photo
                                                                </label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Tutor Information  -->
                                                </div>
                                                <!-- Start Profile Row  -->

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="username">User Name</label>
                                                        <input id="username" name="username" type="text" value="{{$setting->username}}">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="email">Email</label>
                                                        <input id="email" name="email" type="email" value="{{$setting->email}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="phonenumber">Phone Number</label>
                                                        <input id="phonenumber" name="phone_number" type="tel" value="{{$setting->phone_number}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="location">Location</label>
                                                        <input id="location" name="location" type="text" value="{{$setting->location}}">
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="your_name">Your Name</label>
                                                        <input id="your_name" name="your_name" type="text" value="{{$setting->your_name}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="title_card">Title Card</label>
                                                        <input id="title_card" name="title_card" type="text" value="{{$setting->title_card}}">
                                                    </div>
                                                </div>


                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="bio_card">Bio Card</label>
                                                        <textarea id="bio_card" cols="20" rows="5" name="bio_card">{{$setting->bio_card}}</textarea>
                                                    </div>
                                                </div>


                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="signature">Signature</label>
                                                        <input id="signature" name="signature" type="file" >
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="title_background">Title Background</label>
                                                        <input id="title_background" name="title_background" type="text" value="{{$setting->title_background}}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="followers">followers</label>
                                                        <input id="followers" name="followers" type="text" value="{{$setting->followers}}">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="rbt-form-group">
                                                        <label for="website"><i class="feather-globe"></i> Website</label>
                                                        <input id="website"  name="website" type="text" placeholder="https://website.com/" value="{{$setting->website}}">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="rbt-form-group">
                                                        <label for="facebook"><i class="feather-facebook"></i> Facebook</label>
                                                        <input id="facebook" name="facebook" type="text" placeholder="https://facebook.com/" value="{{$setting->facebook}}">
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="rbt-form-group">
                                                        <label for="instagram"><i class="feather-linkedin"></i> Instagram</label>
                                                        <input id="instagram" name="instagram" type="text" placeholder="https://instagram.com/" value="{{$setting->instagram}}">
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="rbt-form-group">
                                                        <label for="bio">Bio Footer</label>
                                                        <textarea id="bio" cols="20" rows="5" name="bio">{{$setting->bio}}</textarea>
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

{{--                                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">--}}
{{--                                            <!-- Start Profile Row  -->--}}
{{--                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="currentpassword">Current Password</label>--}}
{{--                                                        <input id="currentpassword" type="password" placeholder="Current Password">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="newpassword">New Password</label>--}}
{{--                                                        <input id="newpassword" type="password" placeholder="New Password">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="retypenewpassword">Re-type New Password</label>--}}
{{--                                                        <input id="retypenewpassword" type="password" placeholder="Re-type New Password">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12 mt--10">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <a class="rbt-btn btn-gradient" href="#">Update Password</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                            <!-- End Profile Row  -->--}}
{{--                                        </div>--}}

{{--                                        <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">--}}
{{--                                            <!-- Start Profile Row  -->--}}
{{--                                            <form action="#" class="rbt-profile-row rbt-default-form row row--15">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="facebook"><i class="feather-facebook"></i> Facebook</label>--}}
{{--                                                        <input id="facebook" type="text" placeholder="https://facebook.com/">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="twitter"><i class="feather-twitter"></i> Twitter</label>--}}
{{--                                                        <input id="twitter" type="text" placeholder="https://twitter.com/">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="linkedin"><i class="feather-linkedin"></i> Linkedin</label>--}}
{{--                                                        <input id="linkedin" type="text" placeholder="https://linkedin.com/">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="website"><i class="feather-globe"></i> Website</label>--}}
{{--                                                        <input id="website" type="text" placeholder="https://website.com/">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <label for="github"><i class="feather-github"></i> Github</label>--}}
{{--                                                        <input id="github" type="text" placeholder="https://github.com/">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12 mt--10">--}}
{{--                                                    <div class="rbt-form-group">--}}
{{--                                                        <a class="rbt-btn btn-gradient" href="#">Update Profile</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                            <!-- End Profile Row  -->--}}
{{--                                        </div>--}}

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

