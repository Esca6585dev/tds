@extends('user-panel.tds-template')

@section('seo')
  <meta name="description" content="Online arza ýazmak ?">
  <title>{{ __('Digital services') }} | {{ __('Main State Service «Turkmenstandartary»') }}</title>
@endsection

@section('main')

<x-user.alert.all/>

<x-user.profile.section.breadcrumb route="Digital services" />

<x-user.digital.service />

@endsection
