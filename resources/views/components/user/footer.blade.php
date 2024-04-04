<footer class="footer__container">
    <div class="footer__wrapper">
        <div class="footer__wrapper__column">
            <div class="footer__menu">
                <div class="footer__menu__header">
                    <a href="{{ route('main-page', app()->getlocale() ) }}">{{ __('Main Page') }}</a>
                </div>
                <div class="footer__menu__title">
                    <ul>
                        <li>
                            <a href="{{ route('news', app()->getlocale() ) }}">{{ __('News') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('works', app()->getlocale() ) }}">{{ __('Work in progress') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('websites', app()->getlocale() ) }}">{{ __('Web-sites') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="footer__menu__header pt-10">
                    <a href="{{ route('profile', app()->getlocale() ) }}">{{ __('Profile') }}</a>
                </div>
                <div class="footer__menu__title">
                    @auth
                    <ul>
                        <li>
                            <a href="{{ route('profile.cart', app()->getlocale() ) }}">{{ __('My Cart') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.application', app()->getlocale() ) }}">{{ __('Application') }}</a>
                        </li>
                    </ul>
                    @else
                    <ul>
                        <li>
                            <a href="{{ route('login', app()->getlocale() ) }}">{{ __('Login') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('register', app()->getlocale() ) }}">{{ __('Register') }}</a>
                        </li>
                    </ul>
                    @endauth
                </div>

            </div>
        </div>

        <div class="footer__wrapper__column">
            <div class="footer__menu">
                <div class="footer__menu__header">
                    <a href="{{ route('state.standards', app()->getlocale() ) }}">{{ __('Digital services') }}</a>
                </div>
                <div class="footer__menu__title">
                    <ul>
                        <li>
                            <a href="{{ route('state.standards', app()->getlocale() ) }}">{{ __('State standards') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('digital.services', app()->getlocale() ) }}">{{ __('Digital services') }}</a>
                        </li>
                    </ul>
                </div>
                @foreach ($categories as $key => $category)
                @if($key == 3)
                <div class="footer__menu">
                    <div class="footer__menu__header">
                    <a href="{{ route('category', [ app()->getlocale(), $category->id, Str::slug($category->{ 'name_' . app()->getlocale() }) ]) }}">{{ $category->{ 'name_' . app()->getlocale() } }}</a>
                    </div>
                    <div class="footer__menu__title">
                    <ul>
                        @foreach ($category->childrenCategories as $key => $childCategory)
                            @if($key == 0 || $key == 1)
                                <li>
                                    <a href="{{ route('category', [ app()->getlocale(), $childCategory->id, Str::slug($childCategory->{ 'name_' . app()->getlocale() }) ]) }}">{{ $childCategory->{ 'name_' . app()->getlocale() } }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                    </div>
                </div>
                @endif
            @endforeach
            </div>
        </div>

        <div class="footer__wrapper__column">
            @foreach ($categories as $key => $category)
                @if($key == 0 || $key == 1)
                <div class="footer__menu">
                    <div class="footer__menu__header">
                    <a href="{{ route('category', [ app()->getlocale(), $category->id, Str::slug($category->{ 'name_' . app()->getlocale() }) ]) }}">{{ $category->{ 'name_' . app()->getlocale() } }}</a>
                    </div>
                    <div class="footer__menu__title">
                    <ul>
                        @foreach ($category->childrenCategories as $childCategory)
                            <li>
                                <a href="{{ route('category', [ app()->getlocale(), $childCategory->id, Str::slug($childCategory->{ 'name_' . app()->getlocale() }) ]) }}">{{ $childCategory->{ 'name_' . app()->getlocale() } }}</a>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
                @endif
            @endforeach
        </div>

        <div class="footer__wrapper__column">
            <div class="footer__menu">
                <div class="footer__menu__header">
                <a href="#{{ __('Our address') }}">{{ __('Our address') }}</a>
                </div>
                <div class="footer__menu__title">
                <ul>
                    <li>
                        <a href="#Türkmenistan">Türkmenistan, Aşgabat şäheri</a>
                    </li>
                    <li>
                        <a href="#Oguzhan">Oguzhan köçäniň 201-nji jaýy</a>
                    </li>
                </ul>
                </div>

                <div class="footer__menu__header pt-10">
                    <a href="#{{ __('Our phone number') }}">{{ __('Our phone number') }} {{ __('and') }} {{ __('Email Address') }}</a>
                </div>

                <div class="footer__menu__title">
                    <ul>
                        <li>(+993 12) <a href="tel:95-73-55">95-73-55,</a><br><a href="tel:95-73-56">95-73-56</a></li>
                        <li><a href="mailto:tds@sanly.tm">tds@sanly.tm</a></li>
                        <li><a href="{{ route('contact-us', app()->getlocale() ) }}">{{ __('Contact Us') }}</a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

    <div class="footer__social__media">
        <a href="https://tmstart.me/Esca6585" target="_blank" class="social__media__link" title="{{ __('Tm Start') }} Esca6585">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" >
        </a>
        <a href="https://tmstart.me/turkmenstandartlary" target="_blank" class="social__media__link" title="{{ __('Tm Start') }} Türkmenstandartlary">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/tmstart-logo.png') }}" >
        </a>
        <a href="https://t.me/Esca6585" target="_blank" class="social__media__link" title="{{ __('Telegram') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/telegram.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/telegram.svg') }}" >
        </a>
        <a href="live:.cid.f982393315b0bbec" class="social__media__link" title="{{ __('Skype') }}" onclick="copyText()">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/skype-logo.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/skype-logo.svg') }}" >
        </a>
        <a href="https://wa.me/qr/OGWWSHM3FO3AD1" target="_blank" class="social__media__link" title="{{ __('WhatsApp') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/whatsapp.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/whatsapp.svg') }}" >
        </a>
        <a href="https://www.linkedin.com/in/esen-meredow-48468b16a/" target="_blank" class="social__media__link" title="{{ __('Linked In') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/linkedin-logo.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/linkedin-logo.svg') }}" >
        </a>
        <a href="https://www.instagram.com" target="_blank" class="social__media__link" title="{{ __('Instagram') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/instagram-2-1.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/instagram-2-1.svg') }}" >
        </a>
        <a href="https://www.youtube.com/@Esca6585" target="_blank" class="social__media__link" title="{{ __('Youtube') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/youtube-3.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/youtube-3.svg') }}" >
        </a>
        <a href="https://www.google.com/search?q=TÜRKMENSTANDARTLARY" target="_blank" class="social__media__link"  title="{{ __('Google') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/google-icon.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/google-icon.svg') }}" >
        </a>
        <a href="https://github.com/Esca6585" target="_blank" class="social__media__link" title="{{ __('Github') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/github.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/svg/brand-logos/github.svg') }}" >
        </a>
        <a href="{{ route('rss', app()->getlocale() ) }}" target="_blank" class="social__media__link" title="{{ __('RSS') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/icons/duotone/Communication/RSS.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/icons/duotone/Communication/RSS.svg') }}" >
        </a>
        <a href="{{ route('contact-us', app()->getlocale() ) }}" class="social__media__link" title="{{ __('Contact Us') }}">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v7/assets/media/icons/duotone/Communication/Chat6.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/icons/duotone/Communication/Chat6.svg') }}" >
        </a>
        <a href="mailto:tds@sanly.tm" class="social__media__link" title="tds@sanly.tm">
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v7/assets/media/svg/icons/Communication/Mail-at.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/svg/icons/Communication/Mail-at.svg') }}" >
        </a>
        <a href="https://www.google.com/maps/place/%D0%93%D0%BB%D0%B0%D0%B2%D0%BD%D0%B0%D1%8F+%D0%B3%D0%BE%D1%81%D1%83%D0%B4%D0%B0%D1%80%D1%81%D1%82%D0%B2%D0%B5%D0%BD%D0%BD%D0%B0%D1%8F+%D1%81%D0%BB%D1%83%D0%B6%D0%B1%D0%B0+%C2%AB%D0%A2%D1%83%D1%80%D0%BA%D0%BC%D0%B5%D0%BD%D1%81%D1%82%D0%B0%D0%BD%D0%B4%D0%B0%D1%80%D1%82%D0%BB%D0%B0%D1%80%D1%8B%C2%BB/@37.9135517,58.3580199,1779m/data=!3m1!1e3!4m6!3m5!1s0x3f7003eb50e7a8a1:0xaf4b5fefe2c00497!8m2!3d37.9135405!4d58.3583415!16s%2Fg%2F11h59ypsl7?entry=ttu" target="_blank" class="social__media__link" title="google map" >
            <img class="image-gray-reverse w-1-5em" src="{{ asset('metronic-template/v8/assets/media/icons/duotone/Interface/Map-Marker.svg') }}" alt="{{ asset('metronic-template/v8/assets/media/icons/duotone/Interface/Map-Marker.svg') }}" >
        </a>
    </div>

    <hr class="hr" />

    <div class="footer__copyright">
        <p>&copy {{ Carbon::now()->year }} «TÜRKMENSTANDARTLARY» BAŞ DÖWLET GULLUGY</p>
    </div>

</footer>
