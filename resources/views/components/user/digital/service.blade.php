<section class="section__container">

    @foreach ($sections as $section)
    <section class="section__service__header">
        <img src="{{ asset('img/tds-logo/tds-logo.gif') }}" alt="{{ asset('img/tds-logo/tds-logo.gif') }}" class="section__service__logo" width="100px">
            
        <a href="{{ route('digital.services.category', [ app()->getlocale(), $section->id, Str::slug($section->{ 'name_' . app()->getlocale() }) ]) }}" class="section__service__header__name">
          {{ $section->{ 'name_' . app()->getlocale() } }}
        </a>
    </section>

        <div class="section__service">
            @foreach ($section->sections as $childrenSection)
            <a href="{{ route('digital.services.category', [ app()->getlocale(), $childrenSection->id, Str::slug($childrenSection->{ 'name_' . app()->getlocale() }) ]) }}" class="section__service__row {{ ($childrenSection->id == 4 || $childrenSection->id == 6) ? 'section__service__row__long' : '' }} bg-goldenrod-1">
                <div class="section__service__name">
                  <img src="{{ asset('img/tds-logo/tds-logo.gif') }}" alt="{{ asset('img/tds-logo/tds-logo.gif') }}" class="section__service__logo" width="100px">
                  
                  <p>{{ $childrenSection->{ 'name_' . app()->getlocale() } }}</p>
                </div>

                <div class="section__service__img">
                  <img src="{{ asset($childrenSection->image) }}" alt="{{ asset($childrenSection->image) }}" width="150px">
                </div>
            </a>
            @endforeach
        </div>
    @endforeach

    <div class="section__service section__service__reverse">
      <a href="{{ route('state.standards', app()->getlocale() ) }}" class="section__service__row bg-goldenrod-1">
        <div class="section__service__name">
          <p>{{ __('State standards') }}</p>
        </div>

        <div class="section__service__img">
          <img src="{{ asset('img/tds-logo/tds-logo.gif') }}" alt="{{ asset('img/tds-logo/tds-logo.gif') }}" class="section__service__logo" width="100px">
        </div>
      </a>  

      <a href="{{ route('profile.cart', app()->getlocale() ) }}" class="section__service__row bg-goldenrod-1">
        <div class="section__service__name">
          <p>{{ __('My Cart') }}</p>
        </div>

        <div class="section__service__img">
          <img src="{{ asset('metronic-template/v7/assets/media/svg/icons/Shopping/Cart1.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/svg/icons/Shopping/Cart1.svg') }}" width="150px">
        </div>
      </a>

      <a href="{{ route('profile', app()->getlocale() ) }}" class="section__service__row bg-goldenrod-1">
        <div class="section__service__name">
          <p>{{ __('Profile') }}</p>
        </div>

        <div class="section__service__img">
          <img src="{{ asset('metronic-template/v7/assets/media/svg/icons/General/User.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/svg/icons/General/User.svg') }}" width="150px">
        </div>
      </a>
    </div>
</section>