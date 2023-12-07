@extends('home')

@section('section-profile-right')
    <div class="section__profile__body">

      <x-user.profile.breadcrumb route="Applications" />

      <h2>{{ __('Applications') }}</h2>

      <div class="section__profile__cart">

          <div class="section__container__cart__wrapper">
            <iframe src="https://docs.google.com/gview?url=https://tds.gov.tm/{{ $docx->file }}&embedded=true" frameborder="1"></iframe>
          </div>

      </div>

    </div>
@endsection
