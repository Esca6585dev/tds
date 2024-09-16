<header class="background__image">

    <div class="header__logo">
        <a href="{{ route('main-page-demiryol', app()->getlocale()) }}">
            <img src="{{ asset('images/logo.b49b7ce.svg') }}" alt="{{ asset('images/logo.b49b7ce.svg') }} " width="140px">
        </a>
    </div>

    <menu class="header__menu">
        <ul>
            <li>
                <a href="{{ route('main-page-demiryol', app()->getlocale() ) }}">{{ __('Main Page') }}</a>
            </li>
            <li>
                <a href="{{ route('check-ticket', app()->getlocale() ) }}">{{ __('Check Tickets') }}</a>
            </li>
            <li>
                <a href="{{ route('check-ticket', app()->getlocale() ) }}"></a>
            </li>
            <li>
                <a href="{{ route('check-ticket', app()->getlocale() ) }}"></a>
            </li>
            <li>
                <a href="{{ route('check-ticket', app()->getlocale() ) }}"></a>
            </li>
            <li>
                <a href="{{ route('check-ticket', app()->getlocale() ) }}"></a>
            </li>
        </ul>
    </menu>

    <div class="header__lang">
        <ul>
            <li>
                <a class="{{ Request::is('tm*') ? 'menu-active' : '' }}" href="/tm/demiryol">tm</a>
            </li>
            <li>
                <a class="{{ Request::is('ru*') ? 'menu-active' : '' }}" href="/ru/demiryol">ru</a>
            </li>
        </ul>
    </div>
</header>