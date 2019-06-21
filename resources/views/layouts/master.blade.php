<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Ouattara Idriss - synderime@gmail.com">

    <title>Ovyoo - @yield('title')</title>

    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    @include('layouts.styles')


</head>
<!-- END: Head-->


<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed"
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

@include('layouts.sidebar')

<!-- BEGIN: Content-->
<div class="app-content content">

    @include('layouts.header')


    <div class="content-wrapper">

        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">@yield('title')</h2>
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">@yield('title')</a>
                                </li>
                                <li class="breadcrumb-item active">@yield('subTitle')</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="content-body">
            @yield('content')
        </div>

    </div>

</div>
<!-- END: Content-->

<script>
    window.baseUrl = '{{ url('/') }}'
</script>
@include('layouts.scripts')
@include('flashy::message')
</body>

</html>
