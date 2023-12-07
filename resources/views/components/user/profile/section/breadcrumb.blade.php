<div class="section__breadcrumb__container">
  <ul class="section__breadcrumb">
    <li>
      <a href="{{ route('main-page', app()->getlocale() ) }}">
          {{ __('Main Page') }}
      </a>
    </li>
    <li>
      <a href="{{ route('digital.services', app()->getlocale() ) }}">
        {{ __($route) }}
      </a>
    </li>
  </ul>
</div>