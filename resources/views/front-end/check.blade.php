@extends('layouts-demiryol.demiryol-template')

@section('title')
    "Demirýollary AGPJ" 
@endsection

@section('body')
    @include('layouts-demiryol.slider')

    @include('layouts-demiryol.route-section')

    @include('layouts-demiryol.check-menu')

    @include('layouts-demiryol.check-ticket-menu')

    @include('layouts-demiryol.input-form')

    @include('layouts-demiryol.seats-menu')

    @include('layouts-demiryol.sub-menu-2')

@endsection