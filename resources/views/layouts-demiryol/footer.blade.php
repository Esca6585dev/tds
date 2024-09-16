<!-- footer-area start -->
<footer class="footer__area bg__color">
    <div class="footer__container">
        <div class="footer__row">
            <div class="footer__col">
                <!-- single-footer-info start -->
                <div class="footer__address">
                    <ul>
                        <li>
                            <a class="">
                                744000, {{ __('Turkmenistan, Ashgabat city, Turkmenbashi avenue, 7') }}
                            </a>
                        </li>
                        <li>
                            <a href="tel:+993 (12) 383275">+993 (12) 383275</a>
                        </li>
                        <li>
                            <a class="mail" href="mailto::tde@railway.gov.tm">tde@railway.gov.tm</a>
                            <br>
                            <a>{{ __('Contact for online tickets') }}</a>
                            <br>
                            <a class="mail" href="mailto::admin@railway.gov.tm">admin@railway.gov.tm</a>
                        </li>
                    </ul>
                </div>
                <!-- single-footer-info end -->
            </div>


            <div class="footer__col">
                <!-- single-footer-info start -->
                <div class="footer__address__2">
                    <ul>
                        <li>
                            <a href="{{ route('check-ticket', app()->getlocale() ) }}">{{ __('Main Page') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('check-ticket', app()->getlocale() ) }}">{{ __('Check Tickets') }}</a>
                        </li>
                    </ul>
                </div>
                <!-- single-footer-info end -->
            </div>

            <div class="footer__col">
                <!-- single-footer-info start -->
                <div class="footer__address__2">
                    <ul>
                        <li>
                            <a href="{{ route('check-ticket', app()->getlocale() ) }}">{{ __('Check Tickets') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('check-ticket', app()->getlocale() ) }}">{{ __('Main Page') }}</a>
                        </li>
                    </ul>
                </div>
                <!-- single-footer-info end -->
            </div>

            <div class="footer__col">
                <!-- single-footer-info start -->
                <div class="footer__address__2">
                    <ul>
                        <li>
                            <a class="footer__btn" href="https://apps.apple.com/ru/app/turkmenistan-railways/id1471902015" target="_blank">
                                <img src="{{ asset('images/appstore.svg') }}" alt="{{ asset('images/appstore.svg') }}" width="25px">
                                <ul>
                                    <li>{{ __('Download') }}</li>
                                    <li class="footer__social__media__name">Play Market</li>
                                </ul>
                            </a>
                        </li>
                        <li>
                            <a class="footer__btn" href="https://apps.apple.com/ru/app/turkmenistan-railways/id1471902015" target="_blank">
                                <img src="{{ asset('images/playmarket.svg') }}" alt="{{ asset('images/playmarket.svg') }}" width="25px">
                                
                                <ul>
                                    <li>{{ __('Download') }}</li>
                                    <li class="footer__social__media__name">App Store</li>
                                </ul>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- single-footer-info end -->
            </div>
        </div>
    </div>
</footer>
<!-- footer-area end -->
