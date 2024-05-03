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
                            <!-- Start Enrole Course  -->
                            <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
                                <div class="content">
                                    <div class="section-title">
                                        <h4 class="rbt-title-style-3">Contacts</h4>
                                    </div>

                                    <!-- End Filter -->

                                    <hr class="mt--30">

                                    <div class="rbt-dashboard-table table-responsive mobile-table-750 mt--30">
                                        <table class="rbt-table table table-borderless">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> Username</th>
                                                <th> Email</th>
                                                <th> Subject</th>
                                                <th> Message</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contact as $item)
                                                    <tr>
                                                        <th>{{$item->id}}</th>

                                                        <th>{{$item->contact_name}}</th>
                                                        <th>{{$item->contact_email}}</th>
                                                        <th>{{$item->contact_subject}}</th>
                                                        <th>{{$item->contact_message}}</th>

                                                        <td>
                                                            <div class="rbt-button-group justify-content-end">

                                                                <form action="{{ route('contact.delete',['id'=>$item->id]) }}" method="get">
                                                                    @csrf
                                                                    <button class="rbt-btn btn-xs bg-color-danger-opacity radius-round color-danger" href="#" title="Delete">
                                                                        <i class="feather-trash-2 pl--0"></i>
                                                                    </button>
                                                                </form>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>

                                        </table>
                                    </div>

                                </div>
                            </div>
                            <!-- End Enrole Course  -->
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

