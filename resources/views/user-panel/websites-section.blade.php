@extends('user-panel.tds-template')

@section('seo')
    <meta name="description" content="«TÜRKMENSTANDARTLARY» Baş Döwlet Gullugy">
    <title>{{ __('Web-sites') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')
<section class="section__container" id="webSites">
    <div class="section__container__header">
      <div class="section__container__header__left">
        <h3>{{ __('Web-sites') }}</h3>
      </div>
      <div class="section__container__header__right">
        <a href="{{ route('news', app()->getlocale() ) }}">
          <h3>{{ __('News') }}</h3>
        </a>
      </div>
    </div>
  
    <div class="section__container__grid__web__site">
      @foreach ($websites as $webSite)
        <div class="section__container__web__site__card">
            <a href="{!! $webSite->{ 'text_' . app()->getlocale() } !!}" target="_blank">
              <div class="section__container__web__site__image">
                <img src="{{ asset($webSite->image) }}" alt="{{ asset($webSite->image) }}"/>
              </div>
  
              <div class="section__container__web__site__right">
                <div class="section__container__web__site__title">
                  {{ $webSite->{ 'name_' . app()->getlocale() } }}
                </div>
                <div class="section__container__web__site__link">
                  <a href="{!! $webSite->{ 'text_' . app()->getlocale() } !!}" target="_blank">
                    {!! $webSite->{ 'text_' . app()->getlocale() } !!}
                  </a>
                </div>
              </div>
            </a>
        </div>
      @endforeach
    </div>
</section>
@endsection