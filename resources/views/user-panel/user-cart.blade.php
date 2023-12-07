@extends('home')

@section('section-profile-right')
    <div class="section__profile__body">
        
      <x-user.profile.breadcrumb route="My Cart" />

      <h2>{{ __('My Cart') }}</h2>

      <div class="section__profile__cart">

          <div class="section__container__cart__wrapper">
              <div class="search__box">

                  <div class="search__box__left">
                      <select id="datatable_length" class="show__btn">
                        @foreach([5,7,10,15] as $number)
                        <option value="{{ $number }}" {{ $pagination == $number ? 'selected=selected' : ''}} >{{ $number }}</option>
                        @endforeach
                      </select>
                    </div>

                  <div class="search__box__right">
                    <input type="hidden" id="datatable_search" class="search__input" placeholder="{{ __('Search') }}...">
                  </div>

                </div>

                <div class="section__container__table" id="datatable">
                  <x-user.cart.table />
                </div>
          </div>
      </div>

    </div>
@endsection
