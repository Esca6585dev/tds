<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
    <!--begin::Container-->
    <div class="container-fluid d-flex align-items-stretch justify-content-between">
        <!--begin::Header Menu Wrapper-->
        <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
            <!--begin::Header Menu-->
            <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                <!--begin::Header Nav-->
                <ul class="menu-nav">

                    <li class="menu-item {{ Request::is('*/admin/dashboard/*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('admin.dashboard', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Dashboard') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel {{ Request::is('*/admin/*/category*') ? 'menu-item-active' : '' }}" data-menu-toggle="click" aria-haspopup="true">
                        <a href="#{{ __('Categories') }}" class="menu-link menu-toggle">
                            <span class="menu-text">{{ __('Categories') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item {{ Request::is('*/admin/all/category*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{ route('category.index', [ app()->getlocale(), 'all' ] ) }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ __('All Categories') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ Request::is('*/admin/parent/category*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{ route('category.index', [ app()->getlocale(), 'parent' ] ) }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ __('Parent Categories') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ Request::is('*/admin/sub/category*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{ route('category.index', [ app()->getlocale(), 'sub' ] ) }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ __('Sub Categories') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item menu-item-submenu menu-item-rel {{ Request::is('*/admin/*/section*') ? 'menu-item-active' : '' }}" data-menu-toggle="click" aria-haspopup="true">
                        <a href="#{{ __('Sections') }}" class="menu-link menu-toggle">
                            <span class="menu-text">{{ __('Sections') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                            <ul class="menu-subnav">
                                <li class="menu-item {{ Request::is('*/admin/all/section*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{ route('section.index', [ app()->getlocale(), 'all' ] ) }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ __('All Sections') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ Request::is('*/admin/parent/section*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{ route('section.index', [ app()->getlocale(), 'parent' ] ) }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ __('Parent Sections') }}</span>
                                    </a>
                                </li>
                                <li class="menu-item {{ Request::is('*/admin/sub/section*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                                    <a href="{{ route('section.index', [ app()->getlocale(), 'sub' ] ) }}" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot">
                                            <span></span>
                                        </i>
                                        <span class="menu-text">{{ __('Sub Sections') }}</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/text*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('text.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Texts') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/news*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('news.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('News') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/standart*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('standart.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('State standards') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/role*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('role.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Roles') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/permission*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('permission.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Permissions') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/admin*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('admin.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Admins') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/user*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('user.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Users') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/cart*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('cart.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Cart') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                    <li class="menu-item {{ Request::is('*/admin/application*') ? 'menu-item-active' : '' }}">
                        <a href="{{ route('application.index', app()->getlocale() ) }}" class="menu-link">
                            <span class="menu-text">{{ __('Applications') }}</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>

                </ul>
                <!--end::Header Nav-->
            </div>
            <!--end::Header Menu-->
        </div>
        <!--end::Header Menu Wrapper-->
        <!--begin::Topbar-->
        <div class="topbar">
            <!--begin::Search-->
            <div class="dropdown" id="kt_quick_search_toggle">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
                        <span class="svg-icon svg-icon-xl svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                    <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                        <!--begin:Form-->
                        <form method="get" class="quick-search-form">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="svg-icon svg-icon-lg">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="{{ __('Search') }}..." />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
                                    </span>
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                        <!--begin::Scroll-->
                        <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>
                        <!--end::Scroll-->
                    </div>
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Search-->
            <!--begin::Languages-->
            <div class="dropdown">
                <!--begin::Toggle-->
                <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                    <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                        @foreach (Config::get('languages') as $lang => $language)
                            <!--begin::Item 1-->
                            @if(app()->getlocale() == $lang)
                                <img class="h-20px w-20px rounded-sm" src="{{ asset('metronic-template/v7/assets/media/svg/flags/' . $language['icon'] ) }}" alt="{{ $language['icon'] }}"  />
                            @endif
                            <!--end::Item 2-->
                        @endforeach
                    </div>
                </div>
                <!--end::Toggle-->
                <!--begin::Dropdown-->
                <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">
                    <!--begin::Nav-->
                    <ul class="navi navi-hover py-4">
                        @foreach (Config::get('languages') as $lang => $language)
                            <!--begin::Item-->
                            <li class="navi-item">
                                <a href="{{ route(Route::currentRouteName(), [$lang, $categoryType ?? '', $category->id ?? '' ] ) }}" class="navi-link">
                                    <span class="symbol symbol-20 mr-3">
                                        <img src="{{ asset('metronic-template/v7/assets/media/svg/flags/' . $language['icon'] ) }}" alt="{{ $language['icon'] }}" />
                                    </span>
                                    <span class="navi-text">{{ $language['name'] }}</span>
                                </a>
                            </li>
                            <!--end::Item-->
                        @endforeach
                    </ul>
                    <!--end::Nav-->
                </div>
                <!--end::Dropdown-->
            </div>
            <!--end::Languages-->
            <!--begin::User-->
            <div class="topbar-item">
                <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
                    <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">{{ __('Hi') }},</span>
                    <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::guard('admin')->user()->first_name }}</span>
                    <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
                        <span class="symbol-label font-size-h5 font-weight-bold">{{ substr(Auth::guard('admin')->user()->first_name, 0, 1) }}</span>
                    </span>
                </div>
            </div>
            <!--end::User-->
        </div>
        <!--end::Topbar-->
    </div>
    <!--end::Container-->
</div>
<!--end::Header-->