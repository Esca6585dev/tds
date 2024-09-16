<!DOCTYPE html>
<html lang="{{ app()->getlocale() }}">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} @yield('title')</title>

    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('metronic-template/v7/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('metronic-template/v7/assets/plugins/custom/datatables/datatables.bundle.css') }}"
        rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('metronic-template/v7/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic-template/v7/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic-template/v7/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('metronic-template/v7/assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic-template/v7/assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic-template/v7/assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('metronic-template/v7/assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('baychay-template/img/logo/azyksowda-icon.jpg') }}">

    <!-- begin pagination -->
    <link rel="stylesheet" href="{{ asset('baychay-template/css/pagination-admin.css') }}">
    <!-- end pagination  -->

</head>
<!--end::Head-->
<!--begin::Body-->
@yield('body')
<!--end::Body-->

</html>
