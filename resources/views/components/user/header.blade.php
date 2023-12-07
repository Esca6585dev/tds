<header class="header__container">
    <div class="header__wrapper">
      <div class="header__wrapper__left">
        <div class="logo">
          <a href="{{ route('main-page', app()->getlocale() ) }}">
            <img
              src="{{ asset('img/tds-logo/tds-logo.webp') }}"
              alt="{{ asset('img/tds-logo/tds-logo.webp') }}"
            />
          </a>
        </div>
        <div class="logo">
          <a href="{{ route('main-page', app()->getlocale() ) }}">
            <p>«Türkmenstandartlary» <br> Baş Döwlet Gullugy</p>
          </a>
        </div>
      </div>
      <div class="header__wrapper__center">
        <ul class="header__menu">
          <li>
            <a href="{{ route('main-page', app()->getlocale() ) }}">
              {{ __('Main Page') }}
            </a>
          </li>
          <li>
            <a href="{{ route('state.standards', app()->getlocale() ) }}">
              {{ __('State standards') }}
            </a>
          </li>
          <li>
            <a href="{{ route('digital.services', app()->getlocale() ) }}">
              {{ __('Digital services') }}
            </a>
          </li>
          @foreach ($categories as $key => $category)
          <li>
            <div class="dropdown">
              <button class="dropbtn" onclick="dropDown({{ $category->id }})">{{ $category->{ 'name_' . app()->getlocale() } }}
                <i class="fa fa-caret-down" id="fa_dropdown_{{ $category->id }}"></i>
              </button>
              <div class="dropdown-content myDropdown" id="myDropdown_{{ $category->id }}">
                @foreach ($category->childrenCategories as $childCategory)
                  <a href="{{ route('category', [ app()->getlocale(), $childCategory->id, Str::slug($childCategory->{ 'name_' . app()->getlocale() }) ]) }}">{{ $childCategory->{ 'name_' . app()->getlocale() } }}</a>
                @endforeach
              </div>
            </div>
          </li>
          @if($key == 0)
            @break
          @endif
          @endforeach
          <li>
            <div class="dropdown">
              <button class="dropbtn" onclick="dropDown(33)">
                @foreach (Config::get('languages') as $lang => $language)
                  {{ app()->getlocale() == $lang ? $language['name'] : '' }}
                @endforeach
                <i class="fa fa-caret-down" id="fa_dropdown_33"></i>
              </button>
              <div class="dropdown-content myDropdown" id="myDropdown_33">
                @foreach (Config::get('languages') as $lang => $language)
                  @if(app()->getlocale() != $lang)
                    <a onclick="redirect('/{{ $lang }}{{ substr(request()->path(), 2) }}')" >{{ $language['name'] }}</a>
                  @endif
                @endforeach
              </div>
            </div>
          </li>
          @if(Auth::check())
          <li>
            <a href="{{ route('profile', app()->getlocale() ) }}">{{ __('Profile') }}</a>
          </li>
          @else
          <li>
            <div class="dropdown">
              <button class="dropbtn" onclick="dropDown(44)">{{ __('Profile') }}
                <i class="fa fa-caret-down" id="fa_dropdown_44"></i>
              </button>
              <div class="dropdown-content myDropdown" id="myDropdown_44">
                <a href="{{ route('login', app()->getlocale() ) }}">{{ __('Login') }}</a>
                <a href="{{ route('register', app()->getlocale() ) }}">{{ __('Register') }}</a>
              </div>
            </div>
          </li>
          @endif
        </ul>
      </div>
      <div class="header__wrapper__right">
        <div class="symbol">
          <img
            src="{{ asset('img/tds-logo/dowlet-nyshany-2023.webp') }}"
            alt="{{ asset('img/tds-logo/dowlet-nyshany-2023.webp') }}"
          />
        </div>
      </div>

      <div class="header__burger__menu" id="burger__menu">
        <ul>
          <a onclick="toogleMenu()">
          <li>
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>{{ __('Menu') }}</title>
                  <g id="Stockholm-icons-/-Text-/-Menu" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                      <rect id="Rectangle-20" fill="#000000" x="4" y="5" width="16" height="3" rx="1.5"></rect>
                      <path
                          d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z"
                          id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                  </g>
              </svg>
            </li>
          </a>
          <a href="{{ route('state.standards', app()->getlocale() ) }}">
            <li>
                <title>{{ __('Applications') }}</title>
                <svg width="24" height="24" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <title>{{ __('Applications') }}</title>
                    <path d="M15.5 0C13.3687 0 11.625 1.74375 11.625 3.875V58.125C11.625 60.2562 13.3687 62 15.5 62H54.25C56.3812 62 58.125 60.2562 58.125 58.125V15.5L42.625 0H15.5Z" fill="#343449"/>
                    <path d="M46.5 15.5H58.125L42.625 0V11.625C42.625 13.7563 44.3687 15.5 46.5 15.5Z" fill="#51516C"/>
                    <path d="M58.125 27.125L46.5 15.5H58.125V27.125Z" fill="#2B2B3E"/>
                    <path d="M50.375 50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125H5.8125C4.74687 52.3125 3.875 51.4406 3.875 50.375V31C3.875 29.9344 4.74687 29.0625 5.8125 29.0625H48.4375C49.5031 29.0625 50.375 29.9344 50.375 31V50.375Z" fill="#50BEE8"/>
                    <path d="M11.2101 46.5C10.6986 46.5 10.1406 46.219 10.1406 45.539V36.7408C10.1406 36.1828 10.6986 35.7798 11.2101 35.7798H14.7577C21.8373 35.7798 21.6804 46.5 14.8953 46.5H11.2101ZM12.1866 37.6688V44.609H14.7577C18.9408 44.609 19.1248 37.6688 14.7577 37.6688H12.1866Z" fill="white"/>
                    <path d="M27.6091 46.655C24.7436 46.779 21.7676 44.8725 21.7676 41.077C21.7676 37.2659 24.7416 35.3923 27.6091 35.3923C30.3197 35.5299 33.1543 37.4054 33.1543 41.077C33.1543 44.7505 30.3197 46.655 27.6091 46.655ZM27.4386 37.4073C25.7026 37.4073 23.8136 38.6318 23.8136 41.0789C23.8136 43.5124 25.7046 44.7524 27.4386 44.7524C29.2211 44.7524 31.1257 43.5124 31.1257 41.0789C31.1257 38.6299 29.2211 37.4073 27.4386 37.4073Z" fill="white"/>
                    <path d="M34.9775 41.0614C34.9775 38.0718 36.853 35.5007 40.4161 35.5007C41.7646 35.5007 42.8341 35.9037 43.9637 36.8802C44.3822 37.2658 44.4287 37.9478 44.0102 38.3818C43.5917 38.7519 42.9562 38.7073 42.5842 38.3353C41.9506 37.6688 41.2996 37.4847 40.4161 37.4847C38.031 37.4847 36.886 39.1742 36.886 41.0633C36.886 42.9853 38.0155 44.7504 40.4161 44.7504C41.2996 44.7504 42.1211 44.3919 42.8341 43.7583C43.3127 43.3863 43.9792 43.5704 44.2582 43.9444C44.5062 44.2854 44.6282 44.8588 44.0877 45.3994C43.0027 46.4088 41.7026 46.6103 40.4142 46.6103C36.667 46.6103 34.9775 44.0509 34.9775 41.0614Z" fill="white"/>
                    <path d="M48.4375 52.3125H11.625V54.25H48.4375C49.5031 54.25 50.375 53.3781 50.375 52.3125V50.375C50.375 51.4406 49.5031 52.3125 48.4375 52.3125Z" fill="#2B2B3E"/>
                </svg>
            </li>
          </a>
          <li class="home__button">
            <a href="{{ route('main-page', app()->getlocale() ) }}">
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>{{ __('Main Page') }}</title>
                <g id="Stockholm-icons-/-Home-/-Home" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                    <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" id="Combined-Shape" fill="#000000"></path>
                </g>
              </svg>
            </a>
          </li>
          <a href="{{ route('profile.cart', app()->getlocale() ) }}">
            <li>
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>{{ __('Cart') }}</title>
                <g id="Stockholm-icons-/-Shopping-/-Cart1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                    <path d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
                    <path d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z" id="Combined-Shape" fill="#000000"></path>
                </g>
              </svg>
            </li>
          </a>
          <a href="{{ route('profile', app()->getlocale() ) }}">
            <li>
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>{{ __('User') }}</title>
                <g id="Stockholm-icons-/-General-/-User" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" id="Mask" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" id="Mask-Copy" fill="#000000" fill-rule="nonzero"></path>
                </g>
              </svg>
            </li>
          </a>
        </ul>
      </div>
    </div>
</header>

<x-user.menu />
