@extends('user-panel.tds-template')

@section('seo')
  <meta name="description" content="Online arza ýazmak ?">
  <title>{{ __('Application resend') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')

<x-user.alert.all />

<x-user.application.form-section-kiberhowpsuzlyk :childrenSectionId="$childrenSectionId" />

@endsection
