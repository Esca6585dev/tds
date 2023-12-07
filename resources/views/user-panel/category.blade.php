@extends('user-panel.tds-template')

@section('seo')
    <meta name=”robots” content="{{ $currentCategory->{ 'name_' . app()->getlocale() } }}, follow">
    <meta name=”robots” content="{{ $currentCategory->parent->{ 'name_' . app()->getlocale() } ??  $currentCategory->{ 'name_' . app()->getlocale() } }}, follow">
    <meta name="description" content="{{ $text->{ 'name_' . app()->getlocale() } ?? $currentCategory->{ 'name_' . app()->getlocale() } }}">
    <title>{{ $currentCategory->{ 'name_' . app()->getlocale() } }}  | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection
@section('main')
    <div class="section__profile">
        <div class="section__profile__wrapper">
            <div class="section__profile__left section__profile__left font-size-1200 font-size-900">
                <div class="section__profile__left__up padding-700">
                    <div class="section__profile__name center-900">
                        <p>{{ __('Categories') }}</p>
                    </div>
                    <ul class="section__profile__menu">

                        @foreach ($categories as $category)
                            <a href="{{ route('category', [ app()->getlocale(), $category->id, Str::slug($category->{ 'name_' . app()->getlocale() }) ]) }}">
                                <li class="section__profile__menu__item {{ Request::is('*/' . $category->id . '-*') ? 'active' : '' }}
                                    {{ $currentCategory->parent ? ($currentCategory->parent->{ 'name_' . app()->getlocale() } == $category->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' }}
                                    {{ $currentCategory->parent ? $currentCategory->parent->parent ? ($currentCategory->parent->parent->{ 'name_' . app()->getlocale() } == $category->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' : '' }}
                                    {{ $currentCategory->parent ? $currentCategory->parent->parent ? $currentCategory->parent->parent->parent ? ($currentCategory->parent->parent->parent->{ 'name_' . app()->getlocale() } == $category->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' : '' : '' }}" >
                                    {{ $category->{ 'name_' . app()->getlocale() } }}
                                </li>
                            </a>
                        @endforeach
                            
                    </ul>
                        
                    <br>

                </div>
            </div>

            <div class="section__profile__right">
                <div class="section__profile__body">
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('main-page', app()->getlocale() ) }}">
                                {{ __('Main Page') }}
                            </a>
                        </li>
                        @if ($currentCategory->parent)
                        <li>
                            <a href="{{ route('category', [ app()->getlocale(), $currentCategory->parent->id, Str::slug($currentCategory->parent->{ 'name_' . app()->getlocale() }) ]) }}">
                                {{ $currentCategory->parent->{ 'name_' . app()->getlocale() } }}
                            </a>
                        </li>
                        @endif
                        <li>
                            {{ $currentCategory->{ 'name_' . app()->getlocale() } }}
                        </li>
                    </ul>
                    <h2>{{ $currentCategory->{ 'name_' . app()->getlocale() } }}</h2>
            
                    <div class="section__profile__cart">
                        <div class="section__container__cart__wrapper">
                            @if ($subCategories->count())
                                <div class="section__grid__container">
                                    @foreach ($subCategories as $subCategory)
                                        <div class="section__grid__card" onclick="redirectTo('{{ Str::slug($subCategory->id . '-' . $subCategory->{ 'name_' . app()->getlocale() }) }}')" >
                                            <img src="{{ asset('img/tds-logo/tds-logo.webp') }}" alt="{{ asset('img/tds-logo/tds-logo.webp') }}" width="50px">
                                            <a href="{{ route('category', [ app()->getlocale(), $subCategory->id, Str::slug($subCategory->{ 'name_' . app()->getlocale() }) ]) }}">
                                                {{ $subCategory->{ 'name_' . app()->getlocale() } }}
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            @if ($text)
                                <div class="section__grid__container__text">
                                    <div class="section__grid__card__text">
                                        {!! $text->{ 'name_' . app()->getlocale() } ?? '' !!}
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection