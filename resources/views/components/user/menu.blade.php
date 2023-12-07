<menu class="menu__left hide">
    <div class="menu__top">
      <p>
        {{ __('Menu') }}
      </p>
    </div>

    <ul class="menu__row__dropdown__ul">
      
      <a href="{{ route('main-page', app()->getlocale() ) }}">
        <li class="menu__row">
          {{ __('Main Page') }}
        </li>
      </a>
      
      <a href="{{ route('state.standards', app()->getlocale() ) }}">
        <li class="menu__row">
          {{ __('State standards') }}
        </li>
      </a>

      <a href="{{ route('digital.services', app()->getlocale() ) }}">
        <li class="menu__row">
          {{ __('Digital services') }}
        </li>
      </a>

      <a href="{{ route('contact-us', app()->getlocale() ) }}">
        <li class="menu__row">
          {{ __('Contact Us') }}
        </li>
      </a>

      @foreach ($categories as $key => $category)
        <li class="menu__row__dropdown">
          <div class="dropdown-btn">

            @if (count($category->childrenCategories))
            <a>
              {{ $category->{ 'name_' . app()->getlocale() } }}
            </a>
            @else
            <a href="{{ route('category', [app()->getlocale(), $category->id, Str::slug($category->{ 'name_' . app()->getlocale() }) ]) }}">
              {{ $category->{ 'name_' . app()->getlocale() } }}
            </a>
            @endif

            @if (count($category->childrenCategories))
            <span class="dropdown-icon">
              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>{{ __('Open') }}</title>
                  <g id="Stockholm-icons-/-Navigation-/-Down-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                      <path d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999) "></path>
                  </g>
              </svg>
            </span>
            @endif
          </div>

          <div class="dropdown-container">
            @foreach ($category->childrenCategories as $childCategory)
              <a href="{{ route('category', [ app()->getlocale(), $childCategory->id, Str::slug($childCategory->{ 'name_' . app()->getlocale() }) ]) }}">{{ $childCategory->{ 'name_' . app()->getlocale() } }}</a>
            @endforeach
          </div>
        </li>
      @endforeach
      <li class="menu__row__dropdown">
        <div class="dropdown-btn">
          @foreach (Config::get('languages') as $lang => $language)
            {{ app()->getlocale() == $lang ? $language['name'] : '' }}
          @endforeach
          <i class="dropdown-icon">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>{{ __('Open') }}</title>
                  <g id="Stockholm-icons-/-Navigation-/-Down-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                      <path d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999) "></path>
                  </g>
              </svg>
          </i>
        </div>
        <div class="dropdown-container">
          @foreach (Config::get('languages') as $lang => $language)
            @if(app()->getlocale() != $lang)
            <a onclick="redirect('/{{ $lang }}{{ substr(request()->path(), 2) }}')" >{{ $language['name'] }}</a>
            @endif
          @endforeach
        </div>
      </li>
      @if(Auth::check())
      <a href="{{ route('profile', app()->getlocale() ) }}">
        <li class="menu__row">
          {{ __('Profile') }}
        </li>
      </a>
      @else
      <li class="menu__row__dropdown">
        <div class="dropdown-btn">
          {{ __('Profile') }}
          <span class="dropdown-icon">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                  <title>Stockholm-icons / Navigation / Down-2</title>
                  <desc>Created with Sketch.</desc>
                  <defs></defs>
                  <g id="Stockholm-icons-/-Navigation-/-Down-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
                      <path d="M6.70710678,19.7071068 C6.31658249,20.0976311 5.68341751,20.0976311 5.29289322,19.7071068 C4.90236893,19.3165825 4.90236893,18.6834175 5.29289322,18.2928932 L11.2928932,12.2928932 C11.6714722,11.9143143 12.2810586,11.9010687 12.6757246,12.2628459 L18.6757246,17.7628459 C19.0828436,18.1360383 19.1103465,18.7686056 18.7371541,19.1757246 C18.3639617,19.5828436 17.7313944,19.6103465 17.3242754,19.2371541 L12.0300757,14.3841378 L6.70710678,19.7071068 Z" id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 15.999999) scale(1, -1) translate(-12.000003, -15.999999) "></path>
                  </g>
              </svg>
          </span>
        </div>
        <div class="dropdown-container">
          <a href="{{ route('login', app()->getlocale() ) }}">
            {{ __('Login') }}
          </a>
          <a href="{{ route('register', app()->getlocale() ) }}">
            {{ __('Register') }}
          </a>
        </div>
      </li>
      @endif
    </ul>

    <button class="close__menu__btn" onclick="toogleMenu()">
      <span>
        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <title>{{ __('Close') }}</title>
          <g id="Stockholm-icons-/-Navigation-/-Close" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Group" transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)" fill="#000000">
              <rect id="Rectangle-185" x="0" y="7" width="16" height="2" rx="1"></rect>
              <rect id="Rectangle-185-Copy" transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000) " x="0" y="7" width="16" height="2" rx="1"></rect>
            </g>
          </g>
        </svg>
      </span>
    </button>
</menu>
