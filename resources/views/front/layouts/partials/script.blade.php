<!-- End Page Wrapper Area -->
<div class="rbt-progress-parent">
    <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>



<!-- JS
============================================ -->
<!-- Modernizer JS -->
<script src="{{asset('assets/js/vendor/modernizr.min.js')}}"></script>
<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<!-- sal.js')}} -->
<script src="{{asset('assets/js/vendor/sal.js')}}"></script>
<script src="{{asset('assets/js/vendor/swiper.js')}}"></script>
<script src="{{asset('assets/js/vendor/magnify.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-appear.js')}}"></script>
<script src="{{asset('assets/js/vendor/odometer.js')}}"></script>
<script src="{{asset('assets/js/vendor/backtotop.js')}}"></script>
<script src="{{asset('assets/js/vendor/isotop.js')}}"></script>
<script src="{{asset('assets/js/vendor/imageloaded.js')}}"></script>

<script src="{{asset('assets/js/vendor/wow.js')}}"></script>
<script src="{{asset('assets/js/vendor/waypoint.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/easypie.js')}}"></script>
<script src="{{asset('assets/js/vendor/text-type.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-one-page-nav.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap-select.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/vendor/magnify-popup.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/paralax-scroll.js')}}"></script>
<script src="{{asset('assets/js/vendor/paralax.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/countdown.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



@if(session()->has('success'))
    <script>

        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: " {{ session()->get('success') }}",
            showConfirmButton: false,
            timer: 1500
        })
    </script>
@endif
@if(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ session()->get('error') }}',
            footer: '<a href="{{route('info.show','faq')}}">{{__('site.FAQ')}}</a>',
            showConfirmButton: true,
            confirmButtonText: "{{__('site.okay')}}",
            timer: 1500
        })

    </script>
@endif

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
<script src="{{asset('assets/js/owlCarousel.js')}}"></script>
