@extends('user-panel.tds-template')

@section('seo')
    <meta name="description" content="«TÜRKMENSTANDARTLARY» Baş Döwlet Gullugy">
    <title>{{ __('Work in progress') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')
<section class="section__container" id="works">
    <div class="section__container__header">
      <div class="section__container__header__left">
        <h3>{{ __('Work in progress') }}</h3>
      </div>
      <div class="section__container__header__right">
        <a href="{{ route('news', app()->getlocale() ) }}">
          <h3>{{ __('News') }}</h3>
        </a>
      </div>
    </div>
  
    <div class="section__container__tab__wrapper">
      @foreach ($works as $row)
      <div class="section__container__tab__card">
        <a href="{{ route('works.id', [app()->getlocale(), $row->id, Str::slug($row->{ 'name_' . app()->getlocale() }) ]) }}">
          <div class="section__container__tab__image">
            <img src="{{ asset($row->image) }}" alt="{{ asset($row->image) }}"/>
          </div>
  
          <div class="section__container__tab__bottom">
            <div class="section__container__tab__title">
              {{ Str::limit($row->{ 'name_' . app()->getlocale() }, 100) }}
            </div>
            <div class="section__container__tab__link">
              <a href="{{ route('works.id', [app()->getlocale(), $row->id, Str::slug($row->{ 'name_' . app()->getlocale() }) ]) }}">
                <p>{{ __('Read more') }}</p>
                <span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chevron-double-right"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"
                    />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </a>
      </div>
      @endforeach
    </div>
</section>
@endsection