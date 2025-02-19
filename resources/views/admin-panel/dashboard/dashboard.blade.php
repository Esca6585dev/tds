@extends('layouts.admin-template-app')

@section('title')
    {{ __('Dashboard') }}
@endsection

@section('style')
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
@endsection

@section('body')
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
        <!--begin::Logo-->
        @include('layouts.logo')
                    <!--end::Logo-->
        <!--begin::Toolbar-->
        <div class="d-flex align-items-center">
            <!--begin::Aside Mobile Toggle-->
            <button class="btn p-0 burger-icon" id="kt_aside_mobile_toggle">
                <span></span>
            </button>
            <!--end::Aside Mobile Toggle-->
            <!--begin::Header Menu Mobile Toggle-->
            <!-- <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
                <span></span>
            </button> -->
            <!--end::Header Menu Mobile Toggle-->
            <!--begin::Topbar Mobile Toggle-->
            <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
            </button>
            <!--end::Topbar Mobile Toggle-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside-->
            <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                <!--begin::Brand-->
                <div class="brand flex-column-auto" id="kt_brand">
                    <!--begin::Logo-->
                    @include('layouts.logo')
                    <!--end::Logo-->
                    <!--begin::Toggle-->
                    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                        <span class="svg-icon svg-icon svg-icon-xl">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </button>
                    <!--end::Toolbar-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside Menu-->
                    @include('layouts.sidebar')
                <!--end::Aside Menu-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Header-->
                    @include('layouts.header')
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Subheader-->
                    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-2">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">{{ __('Dashboard') }}</h5>
                                <!--end::Page Title-->
                                <!--begin::Actions-->
                                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                                <span class="text-muted font-weight-bold mr-4">#XRS-45670</span>
                                <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">Add New</a>
                                <!--end::Actions-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::Actions-->
                                <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Today</a>
                                <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Month</a>
                                <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">Year</a>
                                <!--end::Actions-->
                                <!--begin::Daterange-->
                                <a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" id="kt_dashboard_daterangepicker" data-toggle="tooltip" title="Select dashboard daterange" data-placement="left">
                                    <span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today</span>
                                    <span class="text-primary font-size-base font-weight-bolder" id="kt_dashboard_daterangepicker_date">Aug 16</span>
                                </a>
                                <!--end::Daterange-->
                                <!--begin::Dropdowns-->
                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="svg-icon svg-icon-success svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </a>
                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3">
                                        <!--begin::Navigation-->
                                        <ul class="navi navi-hover py-5">
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-drop"></i>
                                                    </span>
                                                    <span class="navi-text">New Group</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-list-3"></i>
                                                    </span>
                                                    <span class="navi-text">Contacts</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-rocket-1"></i>
                                                    </span>
                                                    <span class="navi-text">Groups</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Calls</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-gear"></i>
                                                    </span>
                                                    <span class="navi-text">Settings</span>
                                                </a>
                                            </li>
                                            <li class="navi-separator my-3"></li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-magnifier-tool"></i>
                                                    </span>
                                                    <span class="navi-text">Help</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="flaticon2-bell-2"></i>
                                                    </span>
                                                    <span class="navi-text">Privacy</span>
                                                    <span class="navi-link-badge">
                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>
                                </div>
                                <!--end::Dropdowns-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                    </div>
                    <!--end::Subheader-->
                    <!--begin::Entry-->
                    <div class="d-flex flex-column-fluid">
                        <!--begin::Container-->
                        <div class="container">
                            <!--begin::Dashboard-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-lg-6 col-xxl-4">
                                    <!--begin::Mixed Widget 1-->
                                    <div class="card card-custom bg-gray-100 card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 bg-danger py-5">
                                            <h3 class="card-title font-weight-bolder text-white">Maglumatlar</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-calendar-8"></i>
                                                                    </span>
                                                                    <span class="navi-text">Event</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-graph-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Report</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-writing"></i>
                                                                    </span>
                                                                    <span class="navi-text">File</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body p-0 position-relative overflow-hidden">
                                            <!--begin::Chart-->
                                            <div id="kt_mixed_widget_1_chart" class="card-rounded-bottom bg-danger" style="height: 200px"></div>
                                            <!--end::Chart-->
                                            <!--begin::Stats-->
                                            <div class="card-spacer mt-n25">
                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                                                            <img src="{{ asset('img/tds-logo/tds-logo.webp') }}" alt="{{ asset('img/tds-logo/tds-logo.webp') }}" width="50px" >
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="{{ route('standart.index', app()->getlocale() ) }}" class="text-warning font-weight-bold font-size-h6">{{ __('State Standards') }} ({{ $standarts }})</a>
                                                    </div>
                                                    <div class="col bg-light-primary px-6 py-8 rounded-xl mb-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                                                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                                <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                                                                <title>Stockholm-icons / General / User</title>
                                                                <desc>Created with Sketch.</desc>
                                                                <defs></defs>
                                                                <g id="Stockholm-icons-/-General-/-User" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="{{ route('user.index', app()->getlocale() ) }}" class="text-primary font-weight-bold font-size-h6 mt-2">{{ __('Users') }} ({{ $users }})</a>
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                                <!--begin::Row-->
                                                <div class="row m-0">
                                                    <div class="col bg-light-secondary px-6 py-8 rounded-xl mr-7">
                                                        <span class="svg-icon svg-icon-3x svg-icon-secondary d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.25" d="M1 6C1 4.34315 2.34315 3 4 3H20C21.6569 3 23 4.34315 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6Z" fill="#191213"/>
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.23177 7.35984C5.58534 6.93556 6.2159 6.87824 6.64018 7.2318L11.3598 11.1648C11.7307 11.4739 12.2693 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9205 12.7013C12.808 13.6284 11.192 13.6284 10.0794 12.7013L5.35981 8.76825C4.93553 8.41468 4.87821 7.78412 5.23177 7.35984Z" fill="#121319"/>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="{{ route('message.index', app()->getlocale() ) }}" class="text-secondary font-weight-bold font-size-h6 mt-2">{{ __('Messages') }} ({{ $messages }})</a>
                                                    </div>
                                                    <div class="col bg-light-success px-6 py-8 rounded-xl">
                                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Urgent-mail.svg-->
                                                            <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#343449"/>
                                                                <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#51516C"/>
                                                                <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#2B2B3E"/>
                                                                <path d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z" fill="#50BEE8"/>
                                                                <path d="M11.2101 46.5C10.6986 46.5 10.1406 46.219 10.1406 45.539V36.7408C10.1406 36.1828 10.6986 35.7798 11.2101 35.7798H14.7577C21.8373 35.7798 21.6804 46.5 14.8953 46.5H11.2101ZM12.1866 37.6688V44.609H14.7577C18.9408 44.609 19.1248 37.6688 14.7577 37.6688H12.1866Z" fill="white"/>
                                                                <path d="M27.6091 46.655C24.7436 46.779 21.7676 44.8725 21.7676 41.077C21.7676 37.2659 24.7416 35.3923 27.6091 35.3923C30.3197 35.5299 33.1543 37.4054 33.1543 41.077C33.1543 44.7505 30.3197 46.655 27.6091 46.655ZM27.4386 37.4073C25.7026 37.4073 23.8136 38.6318 23.8136 41.0789C23.8136 43.5124 25.7046 44.7524 27.4386 44.7524C29.2211 44.7524 31.1257 43.5124 31.1257 41.0789C31.1257 38.6299 29.2211 37.4073 27.4386 37.4073Z" fill="white"/>
                                                                <path d="M34.9775 41.0614C34.9775 38.0718 36.853 35.5007 40.4161 35.5007C41.7646 35.5007 42.8341 35.9037 43.9637 36.8802C44.3822 37.2658 44.4287 37.9478 44.0102 38.3818C43.5917 38.7519 42.9562 38.7073 42.5842 38.3353C41.9506 37.6688 41.2996 37.4847 40.4161 37.4847C38.031 37.4847 36.886 39.1742 36.886 41.0633C36.886 42.9853 38.0155 44.7504 40.4161 44.7504C41.2996 44.7504 42.1211 44.3919 42.8341 43.7583C43.3127 43.3863 43.9792 43.5704 44.2582 43.9444C44.5062 44.2854 44.6282 44.8588 44.0877 45.3994C43.0027 46.4088 41.7026 46.6103 40.4142 46.6103C36.667 46.6103 34.9775 44.0509 34.9775 41.0614Z" fill="white"/>
                                                                <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#2B2B3E"/>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                        <a href="{{ route('application.index', app()->getlocale() ) }}" class="text-success font-weight-bold font-size-h6 mt-2">{{ __('Applications') }} ({{ $applications }})</a>
                                                    </div>
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 1-->
                                </div>
                                <div class="col-lg-6 col-xxl-4">
                                    <!--begin::List Widget 9-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header align-items-center border-0 mt-4">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="font-weight-bolder text-dark">My Activity</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">890,344 Sales</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-4">
                                            <!--begin::Timeline-->
                                            <div class="timeline timeline-6 mt-3">
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">08:42</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-warning icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Text-->
                                                    <div class="font-weight-mormal font-size-lg timeline-content text-muted pl-3">Outlines keep you honest. And keep structure</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">10:00</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-success icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Content-->
                                                    <div class="timeline-content d-flex">
                                                        <span class="font-weight-bolder text-dark-75 pl-3 font-size-lg">AEOL meeting</span>
                                                    </div>
                                                    <!--end::Content-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">14:37</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Desc-->
                                                    <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">Make deposit
                                                    <a href="#" class="text-primary">USD 700</a>. to ESL</div>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-primary icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Text-->
                                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Desc-->
                                                    <div class="timeline-content font-weight-bolder text-dark-75 pl-3 font-size-lg">New order placed
                                                    <a href="#" class="text-primary">#XF-2356</a>.</div>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">23:07</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-info icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Text-->
                                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Outlines keep and you honest. Indulging in poorly driving</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">16:50</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-primary icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Text-->
                                                    <div class="timeline-content font-weight-mormal font-size-lg text-muted pl-3">Indulging in poorly driving and keep structure keep great</div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="timeline-item align-items-start">
                                                    <!--begin::Label-->
                                                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg">21:03</div>
                                                    <!--end::Label-->
                                                    <!--begin::Badge-->
                                                    <div class="timeline-badge">
                                                        <i class="fa fa-genderless text-danger icon-xl"></i>
                                                    </div>
                                                    <!--end::Badge-->
                                                    <!--begin::Desc-->
                                                    <div class="timeline-content font-weight-bolder font-size-lg text-dark-75 pl-3">New order placed
                                                    <a href="#" class="text-primary">#XF-2356</a>.</div>
                                                    <!--end::Desc-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Timeline-->
                                        </div>
                                        <!--end: Card Body-->
                                    </div>
                                    <!--end: List Widget 9-->
                                </div>
                                <div class="col-lg-6 col-xxl-4">
                                    <!--begin::Stats Widget 11-->
                                    <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body p-0">
                                            <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                <span class="symbol symbol-50 symbol-light-success mr-2">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-success">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                                                                    <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </span>
                                                <div class="d-flex flex-column text-right">
                                                    <span class="text-dark-75 font-weight-bolder font-size-h3">750$</span>
                                                    <span class="text-muted font-weight-bold mt-2">Weekly Income</span>
                                                </div>
                                            </div>
                                            <div id="kt_stats_widget_11_chart" class="card-rounded-bottom" data-color="success" style="height: 150px"></div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Stats Widget 11-->
                                    <!--begin::Stats Widget 12-->
                                    <div class="card card-custom card-stretch card-stretch-half gutter-b">
                                        <!--begin::Body-->
                                        <div class="card-body p-0">
                                            <div class="d-flex align-items-center justify-content-between card-spacer flex-grow-1">
                                                <span class="symbol symbol-50 symbol-light-primary mr-2">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                                    <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                    <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </span>
                                                <div class="d-flex flex-column text-right">
                                                    <span class="text-dark-75 font-weight-bolder font-size-h3">+6,5K</span>
                                                    <span class="text-muted font-weight-bold mt-2">New Users</span>
                                                </div>
                                            </div>
                                            <div id="kt_stats_widget_12_chart" class="card-rounded-bottom" data-color="primary" style="height: 150px"></div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Stats Widget 12-->
                                </div>
                                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-1">
                                    <!--begin::List Widget 1-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Tasks Overview</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">Pending 10 tasks</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-drop"></i>
                                                                    </span>
                                                                    <span class="navi-text">New Group</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-list-3"></i>
                                                                    </span>
                                                                    <span class="navi-text">Contacts</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Groups</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Calls</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-gear"></i>
                                                                    </span>
                                                                    <span class="navi-text">Settings</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator my-3"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-magnifier-tool"></i>
                                                                    </span>
                                                                    <span class="navi-text">Help</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Privacy</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-8">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-primary mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                                                                    <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Briefing</a>
                                                    <span class="text-muted">Project Manager</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-warning mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-warning">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                    <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Concept Design</a>
                                                    <span class="text-muted">Art Director</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-success">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
                                                                    <path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Functional Logics</a>
                                                    <span class="text-muted">Lead Developer</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-danger mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
                                                                    <path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
                                                                    <path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
                                                                    <path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Development</a>
                                                    <span class="text-muted">DevOps</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-info mr-5">
                                                    <span class="symbol-label">
                                                        <span class="svg-icon svg-icon-lg svg-icon-info">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                    <rect x="0" y="0" width="24" height="24" />
                                                                    <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />
                                                                    <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />
                                                                </g>
                                                            </svg>
                                                            <!--end::Svg Icon-->
                                                        </span>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Testing</a>
                                                    <span class="text-muted">QA Managers</span>
                                                </div>
                                                <!--end::Text-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 1-->
                                </div>
                                <div class="col-xxl-8 order-2 order-xxl-1">
                                    <!--begin::Advance Table Widget 2-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <ul class="nav nav-pills nav-pills-sm nav-dark-75">
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_1">Month</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Week</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_3">Day</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2 pb-0 mt-n3">
                                            <div class="tab-content mt-5" id="myTabTables11">
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless table-vertical-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-40px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-125px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">Laravel, Metronic</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-success label-inline">Success</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light mr-1">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">Python, MySQL</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless table-vertical-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-40px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-125px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">Python, MySQL</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">Laravel, Metronic</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-success label-inline">Success</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light mr-1">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                                <!--begin::Tap pane-->
                                                <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
                                                    <!--begin::Table-->
                                                    <div class="table-responsive">
                                                        <table class="table table-borderless table-vertical-center">
                                                            <thead>
                                                                <tr>
                                                                    <th class="p-0 w-40px"></th>
                                                                    <th class="p-0 min-w-200px"></th>
                                                                    <th class="p-0 min-w-100px"></th>
                                                                    <th class="p-0 min-w-125px"></th>
                                                                    <th class="p-0 min-w-110px"></th>
                                                                    <th class="p-0 min-w-150px"></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light mr-1">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">ReactJs, HTML</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-primary label-inline">Approved</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">Python, MySQL</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">Laravel, Metronic</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-success label-inline">Success</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-danger label-inline">Rejected</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="pl-0 py-4">
                                                                        <div class="symbol symbol-50 symbol-light">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                                                                            </span>
                                                                        </div>
                                                                    </td>
                                                                    <td class="pl-0">
                                                                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                                                                        <div>
                                                                            <span class="font-weight-bolder">Email:</span>
                                                                            <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
                                                                        </div>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                                                                        <span class="text-muted font-weight-bold">Paid</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                                                                    </td>
                                                                    <td class="text-right">
                                                                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                                                                    </td>
                                                                    <td class="text-right pr-0">
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                                                                        <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                                                                        <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                                                                            <span class="svg-icon svg-icon-md svg-icon-primary">
                                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                        <rect x="0" y="0" width="24" height="24" />
                                                                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                                                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                                                                                    </g>
                                                                                </svg>
                                                                                <!--end::Svg Icon-->
                                                                            </span>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Tap pane-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Advance Table Widget 2-->
                                </div>
                                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                                    <!--begin::List Widget 3-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">Authors</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">August</a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-calendar-8"></i>
                                                                    </span>
                                                                    <span class="navi-text">Event</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-graph-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Report</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-writing"></i>
                                                                    </span>
                                                                    <span class="navi-text">File</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
                                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/avatars/006-girl-3.svg" class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Anne Clarc</a>
                                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/avatars/011-boy-5.svg" class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Kristaps Zumman</a>
                                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end:Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-10">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/avatars/015-boy-6.svg" class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
                                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-2">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-40 symbol-light-success mr-5">
                                                    <span class="symbol-label">
                                                        <img src="assets/media/svg/avatars/016-boy-7.svg" class="h-75 align-self-end" alt="" />
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                                                    <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Carles Puyol</a>
                                                    <span class="text-muted">PHP, SQLite, Artisan CLI</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::List Widget 3-->
                                </div>
                                <div class="col-lg-6 col-xxl-4 order-1 order-xxl-2">
                                    <!--begin::List Widget 4-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">Todo</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-light btn-sm font-size-sm font-weight-bolder dropdown-toggle text-dark-75" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-calendar-8"></i>
                                                                    </span>
                                                                    <span class="navi-text">Event</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-graph-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Report</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-writing"></i>
                                                                    </span>
                                                                    <span class="navi-text">File</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-2">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-success align-self-stretch"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Checkbox-->
                                                <label class="checkbox checkbox-lg checkbox-light-success checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" name="select" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Create FireStone Logo</a>
                                                    <span class="text-muted font-weight-bold">Due in 2 Days</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end:Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-primary align-self-stretch"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Checkbox-->
                                                <label class="checkbox checkbox-lg checkbox-light-primary checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Stakeholder Meeting</a>
                                                    <span class="text-muted font-weight-bold">Due in 3 Days</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-warning align-self-stretch"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Checkbox-->
                                                <label class="checkbox checkbox-lg checkbox-light-warning checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#" class="text-dark-75 text-hover-primary font-size-sm font-weight-bold font-size-lg mb-1">Scoping &amp; Estimations</a>
                                                    <span class="text-muted font-weight-bold">Due in 5 Days</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin: Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-info align-self-stretch"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Checkbox-->
                                                <label class="checkbox checkbox-lg checkbox-light-info checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox-->
                                                <!--begin::Text-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Sprint Showcase</a>
                                                    <span class="text-muted font-weight-bold">Due in 1 Day</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin::Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-drop"></i>
                                                                    </span>
                                                                    <span class="navi-text">New Group</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-list-3"></i>
                                                                    </span>
                                                                    <span class="navi-text">Contacts</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Groups</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Calls</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-gear"></i>
                                                                    </span>
                                                                    <span class="navi-text">Settings</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator my-3"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-magnifier-tool"></i>
                                                                    </span>
                                                                    <span class="navi-text">Help</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Privacy</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mt-10">
                                                <!--begin::Bullet-->
                                                <span class="bullet bullet-bar bg-danger align-self-stretch"></span>
                                                <!--end::Bullet-->
                                                <!--begin::Checkbox-->
                                                <label class="checkbox checkbox-lg checkbox-light-danger checkbox-inline flex-shrink-0 m-0 mx-4">
                                                    <input type="checkbox" value="1" />
                                                    <span></span>
                                                </label>
                                                <!--end::Checkbox:-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-lg mb-1">Project Retro</a>
                                                    <span class="text-muted font-weight-bold">Due in 12 Days</span>
                                                </div>
                                                <!--end::Text-->
                                                <!--begin: Dropdown-->
                                                <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
                                                    <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Choose Label:</span>
                                                                <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Customer</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-primary">Member</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator mt-3 opacity-70"></li>
                                                            <li class="navi-footer py-4">
                                                                <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                                                                <i class="ki ki-plus icon-sm"></i>Add new</a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                                <!--end::Dropdown-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end:List Widget 4-->
                                </div>
                                <div class="col-lg-12 col-xxl-4 order-1 order-xxl-2">
                                    <!--begin::List Widget 8-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0">
                                            <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-ver"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header pb-1">
                                                                <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-shopping-cart-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-calendar-8"></i>
                                                                    </span>
                                                                    <span class="navi-text">Event</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-graph-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Report</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Post</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-writing"></i>
                                                                    </span>
                                                                    <span class="navi-text">File</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0">
                                            <!--begin::Item-->
                                            <div class="mb-10">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-45 symbol-light mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
                                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Desc-->
                                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the top Authors that fits within this section</p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="mb-10">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-45 symbol-light mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
                                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Desc-->
                                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the Popular Authors that fits within this section</p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="">
                                                <!--begin::Section-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-45 symbol-light mr-5">
                                                        <span class="symbol-label">
                                                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
                                                    <div class="d-flex flex-column flex-grow-1">
                                                        <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
                                                        <span class="text-muted font-weight-bold">5 day ago</span>
                                                    </div>
                                                    <!--end::Text-->
                                                </div>
                                                <!--end::Section-->
                                                <!--begin::Desc-->
                                                <p class="text-dark-50 m-0 pt-5 font-weight-normal">A brief write up about the New Users that fits within this section</p>
                                                <!--end::Desc-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end: Card-->
                                    <!--end::List Widget 8-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--begin::Row-->
                            <div class="row">
                                <div class="col-lg-4">
                                    <!--begin::Mixed Widget 14-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 pt-5">
                                            <h3 class="card-title font-weight-bolder">Action Needed</h3>
                                            <div class="card-toolbar">
                                                <div class="dropdown dropdown-inline">
                                                    <a href="#" class="btn btn-clean btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover py-5">
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-drop"></i>
                                                                    </span>
                                                                    <span class="navi-text">New Group</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-list-3"></i>
                                                                    </span>
                                                                    <span class="navi-text">Contacts</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-rocket-1"></i>
                                                                    </span>
                                                                    <span class="navi-text">Groups</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-primary label-inline font-weight-bold">new</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Calls</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-gear"></i>
                                                                    </span>
                                                                    <span class="navi-text">Settings</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-separator my-3"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-magnifier-tool"></i>
                                                                    </span>
                                                                    <span class="navi-text">Help</span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-icon">
                                                                        <i class="flaticon2-bell-2"></i>
                                                                    </span>
                                                                    <span class="navi-text">Privacy</span>
                                                                    <span class="navi-link-badge">
                                                                        <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body d-flex flex-column">
                                            <div class="flex-grow-1">
                                                <div id="kt_mixed_widget_14_chart" style="height: 200px"></div>
                                            </div>
                                            <div class="pt-5">
                                                <p class="text-center font-weight-normal font-size-lg pb-7">Notes: Current sprint requires stakeholders
                                                <br />to approve newly amended policies</p>
                                                <a href="#" class="btn btn-success btn-shadow-hover font-weight-bolder w-100 py-3">Generate Report</a>
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Mixed Widget 14-->
                                </div>
                                <div class="col-lg-8">
                                    <!--begin::Advance Table Widget 4-->
                                    <div class="card card-custom card-stretch gutter-b">
                                        <!--begin::Header-->
                                        <div class="card-header border-0 py-5">
                                            <h3 class="card-title align-items-start flex-column">
                                                <span class="card-label font-weight-bolder text-dark">Agents Stats</span>
                                                <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
                                            </h3>
                                            <div class="card-toolbar">
                                                <a href="#" class="btn btn-info font-weight-bolder font-size-sm mr-3">New Report</a>
                                                <a href="#" class="btn btn-danger font-weight-bolder font-size-sm">Create</a>
                                            </div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Body-->
                                        <div class="card-body pt-0 pb-3">
                                            <div class="tab-content">
                                                <!--begin::Table-->
                                                <div class="table-responsive">
                                                    <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                                                        <thead>
                                                            <tr class="text-left text-uppercase">
                                                                <th style="min-width: 250px" class="pl-7">
                                                                    <span class="text-dark-75">products</span>
                                                                </th>
                                                                <th style="min-width: 100px">earnings</th>
                                                                <th style="min-width: 100px">comission</th>
                                                                <th style="min-width: 100px">company</th>
                                                                <th style="min-width: 130px">rating</th>
                                                                <th style="min-width: 80px"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="pl-0 py-8">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                                                                            <span class="text-muted font-weight-bold d-block">HTML, JS, ReactJS</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$8,000,000</span>
                                                                    <span class="text-muted font-weight-bold">In Proccess</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$520</span>
                                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                                                                    <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                                                                </td>
                                                                <td>
                                                                    <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />
                                                                    <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-0 py-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
                                                                            <span class="text-muted font-weight-bold d-block">C#, ASP.NET, MS SQL</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$23,000,000</span>
                                                                    <span class="text-muted font-weight-bold">Pending</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$1,600</span>
                                                                    <span class="text-muted font-weight-bold">Rejected</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
                                                                    <span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
                                                                </td>
                                                                <td>
                                                                    <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />
                                                                    <span class="text-muted font-weight-bold d-block font-size-sm">Above Avarage</span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-0 py-8">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
                                                                            <span class="text-muted font-weight-bold d-block">PHP, Laravel, VueJS</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$34,000,000</span>
                                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$6,700</span>
                                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
                                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <img src="assets/media/logos/stars.png" alt="image" style="width: 5.5rem" />
                                                                    <span class="text-muted font-weight-bold d-block font-size-sm">Best Rated</span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm">View Offer</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pl-0 py-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="symbol symbol-50 symbol-light mr-4">
                                                                            <span class="symbol-label">
                                                                                <img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
                                                                            </span>
                                                                        </div>
                                                                        <div>
                                                                            <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                                                                            <span class="text-muted font-weight-bold d-block">Python, PostgreSQL, ReactJS</span>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td class="text-left pr-0">
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,600,000</span>
                                                                    <span class="text-muted font-weight-bold">Paid</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$14,000</span>
                                                                    <span class="text-muted font-weight-bold">Pending</span>
                                                                </td>
                                                                <td>
                                                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
                                                                    <span class="text-muted font-weight-bold">Insurance</span>
                                                                </td>
                                                                <td>
                                                                    <img src="assets/media/logos/stars.png" style="width: 5.5rem" alt="" />
                                                                    <span class="text-muted font-weight-bold d-block font-size-sm">Avarage</span>
                                                                </td>
                                                                <td class="pr-0 text-right">
                                                                    <a href="#" class="btn btn-light-success font-weight-bolder font-size-sm" style="width: 7rem">View Offer</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Advance Table Widget 4-->
                                </div>
                            </div>
                            <!--end::Row-->
                            <!--end::Dashboard-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Entry-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                    @include('layouts.footer')
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::User Panel-->
        @include('layouts.admin-profile')
    <!-- end::User Panel-->
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('metronic-template/v7/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('metronic-template/v7/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('metronic-template/v7/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{ asset('metronic-template/v7/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('metronic-template/v7/assets/js/pages/widgets.js') }}"></script>
    <!--end::Page Scripts-->
</body>
<!--end::Body-->
@endsection
