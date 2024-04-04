@extends('user-panel.tds-template')

@section('seo')
    <meta name=”robots” content="{{ $currentCategory->{ 'name_' . app()->getlocale() } }}, follow">
    <meta name=”robots” content="{{ $currentCategory->parent->{ 'name_' . app()->getlocale() } ??  $currentCategory->{ 'name_' . app()->getlocale() } }}, follow">
    <meta name="description" content="{{ $text->{ 'name_' . app()->getlocale() } ?? $currentCategory->{ 'name_' . app()->getlocale() } }}">
    <title>{{ $currentCategory->{ 'name_' . app()->getlocale() } }}  | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection
@section('main')
    <x-user.category.category-name :id="$id"/>
@endsection