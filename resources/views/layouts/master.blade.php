<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hodler Cloud</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
@yield('before-css')
    {{-- theme css --}}
<link id="gull-theme" rel="stylesheet" href="{{mix('assets/styles/css/themes/lite-purple.min.css')}}">
 <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">
 {{-- page specific css --}}
 @yield('page-css')
</head>

<body class="text-left">

    <div class="app-admin-wrap layout-sidebar-compact sidebar-dark-purple sidenav-open clearfix">


     @include('layouts.sidebar')
       {{-- end of left sidebar --}}


        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap d-flex flex-column">
 @include('layouts.header-menu')
      {{-- end of header menu --}}
      <div class="main-content">
           @yield('main-content')
      </div>

            @include('layouts.footer')
        </div>
        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->

    <!-- ============ Search UI Start ============= -->
  @include('layouts.search')
    <!-- ============ Search UI End ============= -->

     @include('layouts.compact-sidebar-customizer')

{{-- common js --}}
<script src="{{mix('assets/js/common-bundle-script.js')}}"></script>
    {{-- page specific javascript --}}
    @yield('page-js')

    {{-- theme javascript --}}
    <script src="{{asset('assets/js/es5/script.min.js')}}"></script>

    <script src="{{asset('assets/js/es5/sidebar.compact.script.min.js')}}"></script>


    <script src="{{asset('assets/js/es5/customizer.script.min.js')}}"></script>

    {{-- laravel js --}}
    {{-- <script src="{{mix('assets/js/laravel/app.js')}}"></script> --}}

    @yield('bottom-js')
</body>

</html>
