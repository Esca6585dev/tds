<section class="section__container">
  <div class="section__container__header">
    <div class="section__container__header__left">
      <h3>{{ __('Fill out an application') }}</h3>
    </div>

    <div class="section__container__header__right">
      <a href="{{ route('state.standards', app()->getlocale() ) }}">
        <h3>{{ __('State standards') }}</h3>
      </a>
    </div>
  </div>

  <form action="{{ route('send-application-standards-bolumi', app()->getlocale() ) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="section__container__body">
      <div class="section__container__word">

        <div class="section__sample">
          @if (Auth::user()->roles->pluck('name')[0] == 'raýat')
          <x-user.blank.people :id="Auth()->user()->id" />
          @else
          <x-user.blank.company :id="Auth()->user()->id" />
          @endif
        </div>

        <div class="section__container__wrapper">
          <div class="section__container__word__head">
            @if (Auth::user()->roles->pluck('name')[0] == 'raýat')
            <textarea class="textarea__word__head h-150 bold" name="head" placeholder="Türkmen standartlar maglumat merkeziniň direktory M.Meredowa Raýat: Ady Familiýasy Öý salgysy: _______________________">Türkmen standartlar maglumat merkeziniň direktory M.Meredowa Raýat: {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} Öý salgysy: {{ Auth::user()->address }}</textarea>
            @else
            <textarea class="textarea__word__head bold" name="head" placeholder="Türkmen standartlar maglumat merkeziniň direktory M.Meredowa">Türkmen standartlar maglumat merkeziniň direktory M.Meredowa</textarea>
            @endif
          </div>

          <div class="section__container__word__body">
            <textarea class="textarea__word__middle h-40 bold" name="middle" placeholder="Haýyşnama">Haýyşnama</textarea>

            <textarea class="textarea__word__body" name="body" cols="" rows="2" placeholder="{{ __('Fill out an application') }}">    Aşakda görkezilen kadalaşdyryjy {{ $carts->count() > 1 ? 'resminamalary' : 'resminamany' }} satyn almak üçin ýardam bermegiňizi Sizden haýyş edýärin:</textarea>

            <ol class="standart__body__list bold">
              @forelse($carts as $cart)
                <li id="tds__id__{{ $cart->standart->id }}">
                  {{ $cart->standart->number }}
                  <span class="remove__btn" onclick="removeFromCartApplication({{ $cart->standart->id }})">
                    <i class="fa fa-close"></i>
                  </span>
                </li>
              @empty
                <p class="color__red">
                  {{ __('No Data') }}
                </p>
              @endforelse
            </ol>

            @if (Auth::user()->roles->pluck('name')[0] == 'raýat')
            <textarea class="textarea__word__body h-40" name="toleg" placeholder="Tölegini kepillendirýärin.">Tölegini kepillendirýärin.</textarea>
            @else
            <textarea class="textarea__word__body h-40" name="toleg" placeholder="Tölegini kepillendirýäris.">Tölegini kepillendirýäris.</textarea>
            @endif

            @if (Auth::user()->roles->pluck('name')[0] != 'raýat')
            <textarea class="textarea__word__body h-40 bold" name="hormatlamak" placeholder="Hormatlamak bilen,">Hormatlamak bilen,</textarea>
            <textarea class="textarea__word__body h-40 bold" name="businesman" placeholder="        Başlyk                                               Goly                                 Ady, Familiýasy">        Başlyk                                               Goly                                 {{ Auth::user()->first_name[0] }}.{{ Auth::user()->last_name }}</textarea>
            @endif

            @if (Auth::user()->roles->pluck('name')[0] != 'raýat')
            <textarea class="textarea__word__body h-40" name="address" placeholder="Salgysy: {{ Auth::user()->address }}">Salgysy: {{ Auth::user()->address }}</textarea>
            @endif

            <textarea class="textarea__word__body h-40 @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Telefon belgisi: +993 {{ Auth::user()->phone_number }}">Telefon belgisi: +993 {{ Auth::user()->phone_number }}</textarea>
            
            @error('phone_number')
            <div class="textarea__word__body application__textarea invalid-feedback">
                <div data-field="phone_number" data-validator="notEmpty">
                    {{ __('Enter your phone-number') }}
                </div>
            </div>
            @enderror

          </div>
        </div>

      </div>

      <x-user.application.section-sample-button :sections="$sections" :sectionId="$sectionId" :childrenSections="$childrenSections" :childrenSectionId="$childrenSectionId" :currentSection="$currentSection" />

    </div>


  </form>

</section>