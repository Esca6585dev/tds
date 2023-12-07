<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | {{ __('Main State Service «Turkmenstandartary»') }}</title>

    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="{{ asset('img/tds-logo/tds-icon.gif') }}" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    @yield('style')
    
    <link rel="stylesheet" href="{{ asset('metronic-template/v7/assets/css/alert.css') }}">

</head>
<!--end::Head-->

<!--begin::Body-->
@yield('body')
<!--end::Body-->

@include('layouts.scroll-top')

</html>

