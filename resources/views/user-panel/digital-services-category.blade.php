@extends('user-panel.tds-template')

@section('seo')
    <meta name=”robots” content="{{ $currentSection->{ 'name_' . app()->getlocale() } }}, follow">
    <meta name=”robots” content="{{ $currentSection->parent->{ 'name_' . app()->getlocale() } ??  $currentSection->{ 'name_' . app()->getlocale() } }}, follow">
    <meta name="description" content="{{ $text->{ 'name_' . app()->getlocale() } ?? $currentSection->{ 'name_' . app()->getlocale() } }}">
    <title>{{ $currentSection->{ 'name_' . app()->getlocale() } }}  | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection
@section('main')
    <x-user.digital.digital-name :currentSection="$currentSection"/>
@endsection