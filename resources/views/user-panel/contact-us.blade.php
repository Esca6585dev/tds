@extends('user-panel.tds-template')

@section('seo')
    <meta name="description" content="{{ __('Main State Service «Turkmenstandartary»') }}">
    <link rel="stylesheet" href="{{ asset('css/contact-us-style.css') }}" />
    <title>{{ __('Contact Us') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')
<div class="section__breadcrumb__container">
  <ul class="section__breadcrumb">
    <li>
      <a href="{{ route('main-page', app()->getlocale() ) }}">
          {{ __('Main Page') }}
      </a>
    </li>
    <li>
      <a href="{{ route('contact-us', app()->getlocale() ) }}">
        {{ __('Contact Us') }}
      </a>
    </li>
  </ul>
</div>
  
<section class="section__container" id="contact-us">
  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="icon">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
              <g id="Stockholm-icons-/-Map-/-Location-arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                  <path d="M4.88230018,17.2353996 L13.2844582,0.431083506 C13.4820496,0.0359007077 13.9625881,-0.12427877 14.3577709,0.0733126292 C14.5125928,0.15072359 14.6381308,0.276261584 14.7155418,0.431083506 L23.1176998,17.2353996 C23.3152912,17.6305824 23.1551117,18.1111209 22.7599289,18.3087123 C22.5664522,18.4054506 22.3420471,18.4197165 22.1378777,18.3482572 L14,15.5 L5.86212227,18.3482572 C5.44509941,18.4942152 4.98871325,18.2744737 4.84275525,17.8574509 C4.77129597,17.6532815 4.78556182,17.4288764 4.88230018,17.2353996 Z" id="Path-99" fill="#000000" fill-rule="nonzero" transform="translate(14.000087, 9.191034) rotate(-315.000000) translate(-14.000087, -9.191034) "></path>
              </g>
            </svg>
          </i>
          <div class="topic">{{ __('Our address') }}</div>
          <div class="text-one">Türkmenistan, Aşgabat şäheri</div>
          <div class="text-two">Oguzhan köçäniň 201-nji jaýy</div>
        </div>
        <div class="phone details">
          <i class="icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0)">
                <path opacity="0.25" d="M21.3902 19.5804L19.4852 21.4853C19.4852 21.4853 14.5355 23.6066 7.46441 16.5356C0.39334 9.46451 2.51466 4.51476 2.51466 4.51476L4.41959 2.60983C5.28021 1.74921 6.70355 1.85036 7.43381 2.82404L9.25208 5.24841C9.84926 6.04465 9.77008 7.15884 9.06629 7.86262L7.46441 9.46451C7.46441 9.46451 7.46441 10.8787 10.2928 13.7071C13.1213 16.5356 14.5355 16.5356 14.5355 16.5356L16.1374 14.9337C16.8411 14.2299 17.9553 14.1507 18.7516 14.7479L21.1759 16.5662C22.1496 17.2964 22.2508 18.7198 21.3902 19.5804Z" fill="#191213"/>
                <path d="M4.41959 2.60987L3.92887 3.10059L8.17151 8.75745L9.06629 7.86267C9.77007 7.15888 9.84926 6.0447 9.25208 5.24846L7.4338 2.82409C6.70354 1.85041 5.28021 1.74926 4.41959 2.60987Z" fill="#121319"/>
                <path d="M21.3901 19.5804L20.8994 20.0711L15.2426 15.8285L16.1373 14.9337C16.8411 14.2299 17.9553 14.1507 18.7515 14.7479L21.1759 16.5662C22.1496 17.2965 22.2507 18.7198 21.3901 19.5804Z" fill="#121319"/>
              </g>
              <defs>
                <clipPath id="clip0">
                <path d="M0 0H24V24H0V0Z" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </i>
          <div class="topic">Phone</div>
          <div class="text-one"><a href="tel:95-73-55">+993 12 95-73-55</a></div>
          <div class="text-two"><a href="tel:95-73-56">+993 12 95-73-56</a></div>
        </div>
        <div class="phone details">
          <i class="icon">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <!-- Generator: Sketch 50.2 (55047) - http://www.bohemiancoding.com/sketch -->
                <title>Stockholm-icons / Devices / Laptop-macbook</title>
                <desc>Created with Sketch.</desc>
                <defs></defs>
                <g id="Stockholm-icons-/-Devices-/-Laptop-macbook" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                    <path d="M5,6 L19,6 C19.5522847,6 20,6.44771525 20,7 L20,17 L4,17 L4,7 C4,6.44771525 4.44771525,6 5,6 Z" id="Combined-Shape" fill="#000000"></path>
                    <rect id="Rectangle" fill="#000000" opacity="0.3" x="1" y="18" width="22" height="1" rx="0.5"></rect>
                </g>
            </svg>
          </i>
          <div class="topic">{{ __('Web developer') }}</div>
          <div class="text-one"><a href="tel:+993 65 65-65-85">+993 65 65-65-85</a></div>
          <div class="text-two"><a href="mailto:esca656585@gmail.com">esca656585@gmail.com</a></div>
        </div>
        <div class="email details">
          <i class="icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path opacity="0.25" d="M1 6C1 4.34315 2.34315 3 4 3H20C21.6569 3 23 4.34315 23 6V18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V6Z" fill="#191213"/>
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5.23177 7.35984C5.58534 6.93556 6.2159 6.87824 6.64018 7.2318L11.3598 11.1648C11.7307 11.4739 12.2693 11.4739 12.6402 11.1648L17.3598 7.2318C17.7841 6.87824 18.4147 6.93556 18.7682 7.35984C19.1218 7.78412 19.0645 8.41468 18.6402 8.76825L13.9205 12.7013C12.808 13.6284 11.192 13.6284 10.0794 12.7013L5.35981 8.76825C4.93553 8.41468 4.87821 7.78412 5.23177 7.35984Z" fill="#121319"/>
            </svg>              
          </i>
          <div class="topic">{{ __('Email Address') }}</div>
          <div class="text-one"><a href="mailto:tds@sanly.tm">tds@sanly.tm</a></div>
        </div>
        <div class="email details">
          
          <i class="icon">
            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="Stockholm-icons-/-Devices-/-Mouse" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="6" y="5" width="12" height="18" rx="6"></rect>
                <path d="M11.5,2 L12.5,2 C12.7761424,2 13,2.22385763 13,2.5 L13,5 L11,5 L11,2.5 C11,2.22385763 11.2238576,2 11.5,2 Z" id="Rectangle-2" fill="#000000"></path>
                <rect id="Rectangle-33" fill="#000000" x="11" y="16" width="2" height="5" rx="1"></rect>
              </g>
            </svg>
          </i>

          <div class="topic">{{ __('Social Media') }}</div>

          <div class="social__media">
            <ul>
              <a href="https://tmstart.me/Esca6585" target="_blank" class="social__media__link" title="{{ __('Tm Start') }} Esca6585">
                <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" >
              </a>
              <a href="https://tmstart.me/turkmenstandartlary" target="_blank" class="social__media__link" title="{{ __('Tm Start') }} Türkmenstandartlary">
                <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" >
              </a>
              <a href="https://t.me/Esca6585" target="_blank" class="social__media__link" title="{{ __('Telegram') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/telegram.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/telegram.svg') }}" >
              </a>
              <a href="live:.cid.f982393315b0bbec" class="social__media__link" title="{{ __('Skype') }}" onclick="copyText()">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/skype-logo.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/skype-logo.svg') }}" >
              </a>
              <a href="https://wa.me/qr/OGWWSHM3FO3AD1" target="_blank" class="social__media__link" title="{{ __('WhatsApp') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/whatsapp.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/whatsapp.svg') }}" >
              </a>
              <a href="https://www.linkedin.com/in/esen-meredow-48468b16a/" target="_blank" class="social__media__link" title="{{ __('Linked In') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/linkedin-logo.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/linkedin-logo.svg') }}" >
              </a>
              <a href="https://www.instagram.com" target="_blank" class="social__media__link" title="{{ __('Instagram') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/instagram-2-1.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/instagram-2-1.svg') }}" >
              </a>
              <a href="https://www.youtube.com/@Esca6585" target="_blank" class="social__media__link" title="{{ __('Youtube') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/youtube-3.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/youtube-3.svg') }}" >
              </a>
              <a href="https://www.google.com/search?q=TÜRKMENSTANDARTLARY" target="_blank" class="social__media__link"  title="{{ __('Google') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/google-icon.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/google-icon.svg') }}" >
              </a>
              <a href="https://github.com/Esca6585" target="_blank" class="social__media__link" title="{{ __('Github') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/github.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/github.svg') }}" >
              </a>
              <a href="{{ route('rss', app()->getlocale() ) }}" target="_blank" class="social__media__link" title="{{ __('RSS') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/icons/duotone/Communication/RSS.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/icons/duotone/Communication/RSS.svg') }}" >
              </a>
              <a href="{{ route('contact-us', app()->getlocale() ) }}" target="_blank" class="social__media__link" title="{{ __('Contact Us') }}">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v7/assets/media/icons/duotone/Communication/Chat6.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/icons/duotone/Communication/Chat6.svg') }}" >
              </a>
              <a href="mailto:tds@sanly.tm" class="social__media__link" title="tds@sanly.tm">
                  <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v7/assets/media/svg/icons/Communication/Mail-at.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/svg/icons/Communication/Mail-at.svg') }}" >
              </a>
              <a href="https://www.google.com/maps/place/%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F+%D0%B3%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F+%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0+%C2%AB%D0%A2%D1%83%D1%80%D0%BA%D0%BC%D0%B5%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%BB%D0%B0%D1%80%D1%8B%C2%BB/@37.9135517,58.3580199,1779m/data=!3m1!1e3!4m6!3m5!1s0x3f7003eb50e7a8a1:0xaf4b5fefe2c00497!8m2!3d37.9135405!4d58.3583415!16s%2Fg%2F11h59ypsl7?entry=ttu" target="_blank" class="social__media__link" title="google map" >
                <img class="image-gray w-0-8em" src="{{ asset('metronic-template/v8/assets/media/icons/duotone/Interface/Map-Marker.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/icons/duotone/Interface/Map-Marker.svg') }}" >
              </a>
            </ul>
          </div>
        </div>
      </div>

      <div class="right-side">
        <div class="topic-text">{{ __('Dear users!') }}</div>
        <p>{{ __('Your questions and requests will be answered by email. For this reason, please indicate your e-mail address correctly! If the email address is incorrect, we will not respond to you!') }}</p>
      <form action="{{ route('send-message', app()->getlocale() ) }}" method="POST">
        @csrf
        <div class="input-box">
          <input type="text" placeholder="{{ __('Enter your name') }}" class="@error('username') is-invalid @enderror" name="username" value="{{ Auth::check() ? Auth::user()->first_name . ' ' . Auth::user()->last_name : '' }}">

          @error('username')
          <div class="invalid-feedback">
              <div data-field="username" data-validator="notEmpty">
                  {{ $message }}
              </div>
          </div>
          @enderror
        </div>
        <div class="input-box">
          <input type="phone_number" placeholder="{{ __('Enter your phone-number') }}" class="@error('phone_number') is-invalid @enderror" name="phone_number" value="{{ Auth::check() ? Auth::user()->phone_number : '' }}">

          @error('phone_number')
          <div class="invalid-feedback">
              <div data-field="email" data-validator="notEmpty">
                  {{ $message }}
              </div>
          </div>
          @enderror
        </div>
        <div class="input-box">
          <input type="email" placeholder="{{ __('Enter your email') }}" class="@error('email') is-invalid @enderror" name="email" value="{{ Auth::check() ? Auth::user()->email : '' }}">

          @error('email')
          <div class="invalid-feedback">
              <div data-field="email" data-validator="notEmpty">
                  {{ $message }}
              </div>
          </div>
          @enderror
        </div>
        <div class="input-box message-box">
          <textarea name="message" id="" class="@error('message') is-invalid @enderror" cols="30" rows="10" placeholder="{{ __('Message') }}"></textarea>

          @error('message')
          <div class="invalid-feedback">
              <div data-field="message" data-validator="notEmpty">
                  {{ $message }}
              </div>
          </div>
          @enderror
        </div>
        <div class="d-flex justify-content-center">
          <input type="submit" class="button" value="{{ __('Send') }}">
        </div>
      </form>
    </div>
    </div>
  </div>
  
  <div class="d-flex justify-content-center ma-10">
    <h1 class="animate__animated animate__fadeInLeft"></h1>
  </div>

</section>
@endsection
