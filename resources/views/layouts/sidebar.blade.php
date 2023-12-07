<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
        data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <!--begin::Dashboard-->
            <li class="menu-item {{ Request::is('*/admin/dashboard') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('admin.dashboard', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                    fill="#000000" fill-rule="nonzero" />
                                <path
                                    d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                    fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <!--end::Dashboard-->
            <!--begin::Categories-->
            <li class="menu-item menu-item-submenu {{ Request::is('*/admin/*/category*') ? 'menu-item-open' : '' }} "
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
                                <path
                                    d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                    fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">{{ __('Categories') }}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item {{ Request::is('*/admin/all/category*') ? 'menu-item-active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('category.index', [ app()->getlocale(), 'all' ] ) }}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{ __('All Categories') }}</span>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('*/admin/parent/category*') ? 'menu-item-active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('category.index', [ app()->getlocale(), 'parent' ] ) }}"
                                class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{ __('Parent Categories') }}</span>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('*/admin/sub/category*') ? 'menu-item-active' : '' }}"
                            aria-haspopup="true">
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
            <!--end::Categories-->
            <!--begin::Sections-->
            <li class="menu-item menu-item-submenu {{ Request::is('*/admin/*/section*') ? 'menu-item-open' : '' }} "
                aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Stockholm-icons-/-Text-/-Menu" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <rect id="Rectangle-20" fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"></rect>
                                <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">{{ __('Sections') }}</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item {{ Request::is('*/admin/all/section*') ? 'menu-item-active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('section.index', [ app()->getlocale(), 'all' ] ) }}" class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{ __('All Sections') }}</span>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('*/admin/parent/section*') ? 'menu-item-active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('section.index', [ app()->getlocale(), 'parent' ] ) }}"
                                class="menu-link">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">{{ __('Parent Sections') }}</span>
                            </a>
                        </li>
                        <li class="menu-item {{ Request::is('*/admin/sub/section*') ? 'menu-item-active' : '' }}"
                            aria-haspopup="true">
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
            <!--end::Sections-->
            <!--begin::Message-->
            <li class="menu-item {{ Request::is('*/admin/message*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('message.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.25" d="M1 6C1 4.34315 2.34315 3 4 3H20C21.6569 3 23 4.34315 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6Z" fill="#FFFFFF"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.23177 7.35984C5.58534 6.93556 6.2159 6.87824 6.64018 7.2318L11.3598 11.1648C11.7307 11.4739 12.2693 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9205 12.7013C12.808 13.6284 11.192 13.6284 10.0794 12.7013L5.35981 8.76825C4.93553 8.41468 4.87821 7.78412 5.23177 7.35984Z" fill="#121319"/>
                        </svg>                                                 
                    </span>
                    <span class="menu-text">{{ __('Messages') }}</span>
                </a>
            </li>
            <!--end::Message-->
            <!--begin::Text-->
            <li class="menu-item {{ Request::is('*/admin/text*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('text.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Stockholm-icons-/-Text-/-Text" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M13.5,8 L13.5,18 C13.5,18.5522847 13.0522847,19 12.5,19 L11.5,19 C10.9477153,19 10.5,18.5522847 10.5,18 L10.5,8 L7,8 C6.44771525,8 6,7.55228475 6,7 L6,6 C6,5.44771525 6.44771525,5 7,5 L17,5 C17.5522847,5 18,5.44771525 18,6 L18,7 C18,7.55228475 17.5522847,8 17,8 L13.5,8 Z" id="T" fill="#000000"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">{{ __('Texts') }}</span>
                </a>
            </li>
            <!--end::Text-->
            <!--begin::News-->
            <li class="menu-item {{ Request::is('*/admin/news*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('news.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Stockholm-icons-/-Text-/-Bullet-list" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M10.5,5 L19.5,5 C20.3284271,5 21,5.67157288 21,6.5 C21,7.32842712 20.3284271,8 19.5,8 L10.5,8 C9.67157288,8 9,7.32842712 9,6.5 C9,5.67157288 9.67157288,5 10.5,5 Z M10.5,10 L19.5,10 C20.3284271,10 21,10.6715729 21,11.5 C21,12.3284271 20.3284271,13 19.5,13 L10.5,13 C9.67157288,13 9,12.3284271 9,11.5 C9,10.6715729 9.67157288,10 10.5,10 Z M10.5,15 L19.5,15 C20.3284271,15 21,15.6715729 21,16.5 C21,17.3284271 20.3284271,18 19.5,18 L10.5,18 C9.67157288,18 9,17.3284271 9,16.5 C9,15.6715729 9.67157288,15 10.5,15 Z" id="Combined-Shape" fill="#000000"></path>
                                <path d="M5.5,8 C4.67157288,8 4,7.32842712 4,6.5 C4,5.67157288 4.67157288,5 5.5,5 C6.32842712,5 7,5.67157288 7,6.5 C7,7.32842712 6.32842712,8 5.5,8 Z M5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 C6.32842712,10 7,10.6715729 7,11.5 C7,12.3284271 6.32842712,13 5.5,13 Z M5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 C6.32842712,15 7,15.6715729 7,16.5 C7,17.3284271 6.32842712,18 5.5,18 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">{{ __('News') }}</span>
                </a>
            </li>
            <!--end::News-->
            <!--begin::Standards-->
            <li class="menu-item {{ Request::is('*/admin/standart*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('standart.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <img src="{{ asset('img/tds-logo/tds-logo.webp') }}" alt="img/tds-logo/tds-logo.webp" width="24px">
                    </span>
                    <span class="menu-text">{{ __('Standards') }}</span>
                </a>
            </li>
            <!--end::Standards-->
            <!--begin::Roles-->
            <li class="menu-item {{ Request::is('*/admin/role*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('role.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                            <title>Stockholm-icons / General / Settings-2</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Stockholm-icons-/-General-/-Settings-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">{{ __('Roles') }}</span>
                </a>
            </li>
            <!--end::Roles-->
            <!--begin::Permissions-->
            <li class="menu-item {{ Request::is('*/admin/permission*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('permission.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Stockholm-icons-/-Home-/-Key" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <polygon id="Path-59" fill="#000000" opacity="0.3" transform="translate(8.885842, 16.114158) rotate(-315.000000) translate(-8.885842, -16.114158) " points="6.89784488 10.6187476 6.76452164 19.4882481 8.88584198 21.6095684 11.0071623 19.4882481 9.59294876 18.0740345 10.9659914 16.7009919 9.55177787 15.2867783 11.0071623 13.8313939 10.8837471 10.6187476"></polygon>
                                <path d="M15.9852814,14.9852814 C12.6715729,14.9852814 9.98528137,12.2989899 9.98528137,8.98528137 C9.98528137,5.67157288 12.6715729,2.98528137 15.9852814,2.98528137 C19.2989899,2.98528137 21.9852814,5.67157288 21.9852814,8.98528137 C21.9852814,12.2989899 19.2989899,14.9852814 15.9852814,14.9852814 Z M16.1776695,9.07106781 C17.0060967,9.07106781 17.6776695,8.39949494 17.6776695,7.57106781 C17.6776695,6.74264069 17.0060967,6.07106781 16.1776695,6.07106781 C15.3492424,6.07106781 14.6776695,6.74264069 14.6776695,7.57106781 C14.6776695,8.39949494 15.3492424,9.07106781 16.1776695,9.07106781 Z" id="Combined-Shape" fill="#000000" transform="translate(15.985281, 8.985281) rotate(-315.000000) translate(-15.985281, -8.985281) "></path>
                            </g>
                        </svg>  
                    </span>
                    <span class="menu-text">{{ __('Permissions') }}</span>
                </a>
            </li>
            <!--end::Permissions-->
            <!--begin::Admin-->
            <li class="menu-item {{ Request::is('*/admin/admin*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('admin.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                            <title>Stockholm-icons / Communication / Shield-user</title>
                            <desc>Created with Sketch.</desc>
                            <defs></defs>
                            <g id="Stockholm-icons-/-Communication-/-Shield-user" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"></path>
                                <path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" id="Mask" fill="#000000" opacity="0.3"></path>
                                <path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" id="Mask-Copy" fill="#000000" opacity="0.3"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">{{ __('Admins') }}</span>
                </a>
            </li>
            <!--end::Admin-->
            <!--begin::User-->
            <li class="menu-item {{ Request::is('*/admin/user*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('user.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Stockholm-icons-/-General-/-User" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">{{ __('Users') }}</span>
                </a>
            </li>
            <!--end::User-->
            <!--begin::Cart-->
            <li class="menu-item {{ Request::is('*/admin/cart*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('cart.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Stockholm-icons-/-Shopping-/-Cart1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                <path
                                    d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z"
                                    id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                                <path
                                    d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z"
                                    id="Combined-Shape" fill="#000000"></path>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">{{ __('Cart') }}</span>
                </a>
            </li>
            <!--end::Cart-->
            <!--begin::Applications-->
            <li class="menu-item {{ Request::is('*/admin/application*') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                <a href="{{ route('application.index', app()->getlocale() ) }}" class="menu-link">
                    <span class="svg-icon menu-icon">
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
                    </span>
                    <span class="menu-text">{{ __('Applications') }}</span>
                </a>
            </li>
            <!--end::Applications-->
        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
