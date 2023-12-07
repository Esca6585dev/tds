@extends('user-panel.tds-template')

@section('seo')
    <meta name="description" content="{{ __('Main State Service «Turkmenstandartary»') }}">
    <title>{{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')
    <x-user.section.wallpaper />
    <x-user.news.container />
    <x-user.works.container />
    <x-user.websites.container />
@endsection
