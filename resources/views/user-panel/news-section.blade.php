@extends('user-panel.tds-template')

@section('seo')
    <meta name="description" content="«TÜRKMENSTANDARTLARY» Baş Döwlet Gullugy">
    <title>{{ __('News') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')
<section class="section__container" id="news">
    <div class="section__container__header">
      <div class="section__container__header__left">
        <h3>{{ __('News') }}</h3>
      </div>
      <div class="section__container__header__right">
        <a href="{{ route('works', app()->getlocale() ) }}">
          <h3>{{ __('Work in progress') }}</h3>
        </a>
      </div>
    </div>
  
    <div class="section__container__tab__wrapper">
      @foreach ($news as $row)
      <div class="section__container__tab__card">
        <a href="{{ route('news.id', [app()->getlocale(), $row->id, Str::slug($row->{ 'name_' . app()->getlocale() }) ]) }}">
          <div class="section__container__tab__image">
            <img src="{{ asset($row->image) }}" alt="{{ asset($row->image) }}"/>
          </div>
  
          <div class="section__container__tab__bottom">
            <div class="section__container__tab__view">
              <span class="svg-icon svg-icon-xl svg-icon-primary">
                  <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g id="Stockholm-icons-/-General-/-Visible" stroke="none" stroke-width="1" fill="none"
                          fill-rule="evenodd">
                          <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                          <path
                              d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z"
                              id="Shape" fill="#000000" fill-rule="nonzero" opacity="0.4"></path>
                          <path
                              d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z"
                              id="Path" fill="#000000" opacity="1"></path>
                      </g>
                  </svg>
                </span>
                <p class="section__container__tab__view__number">{{ $row->view }}</p>
            </div>
            <div class="section__container__tab__title">
              {{ Str::limit($row->{ 'name_' . app()->getlocale() }, 100) }}
            </div>
            <div class="section__container__tab__link">
              <a href="{{ route('news.id', [app()->getlocale(), $row->id, Str::slug($row->{ 'name_' . app()->getlocale() }) ]) }}">
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