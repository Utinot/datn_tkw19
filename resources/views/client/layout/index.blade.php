<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from themezhub.net/live-workplex/workplex/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 Aug 2022 09:31:28 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Themezhub" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Workplex - Creative Job Board HTML Template</title>

    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/adminApp.js') }}" defer></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <script>
        window.Laravel = {!! json_encode(
            [
                'csrfToken' => csrf_token(),
                'baseUrl' => url('/'),
            ],
            JSON_UNESCAPED_UNICODE,
        ) !!};
    </script>
</head>
<div class="preloader"></div>

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    <div id="app">
        @include('client.layout.header')
        <!-- End Navigation -->
        <div class="clearfix"></div>
        @yield('client')
    </div>
    @include('client.layout.footer')

</div>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
<script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
<script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
