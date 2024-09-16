@extends('layouts-demiryol.demiryol-template')

@section('title')
    "Demirýollary AGPJ"
@endsection

@section('body')

    @include('layouts-demiryol.slider')

    <div class="ticket__check__container">
        <div class="video__container">

        @include('front-end.camera')

        <iframe src="{{ asset($ticket->pdf ?? 'metronic-template/v8/assets/media/illustrations/404-hd.png') }}" height="100%" width="1150"></iframe>

        </div>
    </div>

@endsection