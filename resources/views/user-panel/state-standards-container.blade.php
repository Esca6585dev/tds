@extends('user-panel.tds-template')

@section('seo')
  <title>{{ __('State Standards') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')

<x-user.alert.all/>

<section class="section__container">
    <div class="section__container__header">
        <div class="section__container__header__left">
        <h3>{{ __('Standarts') }}</h3>
        </div>
        <div class="section__container__header__right">
        <a href="{{ Auth::check() ? route('fill-application', [ app()->getlocale(), 10, 'standartlaryn-dowlet-gaznasy-bolumi' ] ) : route('login', app()->getlocale() ) }}" class="btn" onclick="checkSendButton({{ Auth::check() }})" >
            {{ __('Fill out an application') }}
            @if(Auth::check())
            <span class="badge" id="session__count">{{ $carts->count() }}</span>
            @endif
    </a>
        </div>
    </div>

    <div class="search__box">
    <div class="search__box__left">
        <select id="datatable_length" class="show__btn">
        @foreach([10,20,25,50,75,100,150] as $number)
        <option value="{{ $number }}" {{ $pagination == $number ? 'selected=selected' : '' }} >{{ $number }}</option>
        @endforeach
        </select>
    </div>

    <div class="search__box__right">
        <input type="search" id="datatable_search" class="search__input" placeholder="{{ __('Search') }}...">

        <span class="clear__btn" id="search_clear">
            <i class="fa fa-close"></i>
        </span>
    </div>

    </div>

    <div class="section__container__table" id="datatable">
        <x-user.standart.table :pagination=$pagination />
    </div>
</section>

@endsection

