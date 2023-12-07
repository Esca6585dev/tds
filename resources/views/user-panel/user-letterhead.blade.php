@extends('home')

@section('section-profile-right')
    <div class="section__profile__body">

      <x-user.profile.breadcrumb route="Letterhead" />

      <h2>{{ __('Letterhead') }}</h2>

      <div class="section__profile__cart">
          <div class="section__container__cart__wrapper">
            <x-user.blank.dowlet />

          </div>
      </div>

    </div>
@endsection
