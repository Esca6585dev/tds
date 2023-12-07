<ul class="breadcrumb">
    <li>
        <a href="{{ route('main-page', app()->getlocale() ) }}">
            {{ __('Main Page') }}
        </a>
    </li>
    <li>
        {{ __($route) }}
    </li>
</ul>
