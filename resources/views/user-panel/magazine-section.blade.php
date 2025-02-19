@extends('user-panel.tds-template')

@section('seo')
  <title>{{ __('Magazine') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')

<section class="section__container">
    <div class="section__container__header">
        <div class="section__container__header__left">
        <h3>{{ __('Magazine') }}</h3>
        </div>
    </div>

    <div class="search__box">
    
    </div>

    <x-user.magazine.table :pagination=$pagination />
    
</section>

@endsection

