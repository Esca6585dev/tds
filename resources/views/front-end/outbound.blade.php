@extends('layouts-demiryol.demiryol-template')

@section('title')
    "Demirýollary AGPJ"
@endsection

@section('body')
    @include('layouts-demiryol.slider')

    @include('layouts-demiryol.route-section')

    @include('layouts-demiryol.sub-menu')

    @include('layouts-demiryol.ticket-menu')
@endsection