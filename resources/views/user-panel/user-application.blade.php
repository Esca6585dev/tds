@extends('home')

@section('section-profile-right')
    <div class="section__profile__body">

      <x-user.profile.breadcrumb route="Applications" />

      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ __('Applications') }}</h2>

        <div>
          <button class="btn">Add Application</button>
        </div>
      </div>

      <div class="section__profile__cart">

          <div class="section__container__cart__wrapper">
              <div class="search__box">

                  <div class="search__box__left">
                      <select id="datatable_length" class="show__btn">
                        @foreach([5] as $number)
                        <option value="{{ $number }}" {{ $pagination == $number ? 'selected=selected' : '' }} >{{ $number }}</option>
                        @endforeach
                      </select>
                    </div>

                  <div class="search__box__right">
                    <input type="search" id="datatable_search" class="search__input" placeholder="{{ __('Search') }}...">

                    <span class="clear__btn" id="search_clear">
                      <i class="fa fa-close"></i>
                    </span>
                  </div>

                </div>

                <div class="section__container__table" id="datatable">
                  @include('user-panel.user-application-table')
                </div>
          </div>
      </div> 

    </div>
@endsection
