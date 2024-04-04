<section class="section__container">
  <div class="section__container__header">
    <div class="section__container__header__left">
      <h3>{{ __('Fill out an application') }}</h3>
    </div>

    <div class="section__container__header__right">
      <a href="{{ route('profile.application', app()->getlocale() ) }}">
        <h3>{{ __('Profile') }}</h3>
      </a>
    </div>
  </div>

  <form action="{{ route('send-application-guramacylyk-bolumi', app()->getlocale()) }}" method="post" enctype="multipart/form-data">
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
            <textarea class="textarea__word__head h-150 w-250 bold" name="head" placeholder="Türkmen standartlar maglumat merkeziniň direktory M.Meredowa Raýat: Ady Familiýasy Öý salgysy: _______________________">Türkmen standartlar maglumat merkeziniň direktory M.Meredowa Raýat: {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} Öý salgysy: {{ Auth::user()->address }}</textarea>
            @else
            <textarea class="textarea__word__head bold" name="head" placeholder="Türkmen standartlar maglumat merkeziniň direktory M.Meredowa">Türkmen standartlar maglumat merkeziniň direktory M.Meredowa</textarea>
            @endif
          </div>

          <div class="section__container__word__body">
            @if (Auth::user()->roles->pluck('name')[0] == 'raýat')
            <textarea class="textarea__word__middle h-40 bold" name="middle" placeholder="Arza">Arza</textarea>
            <textarea class="textarea__word__body h-80" name="body" placeholder="{{ __('Fill out an application') }}">    Maňa, "Türkmenistanyň halk hojalygynda zähmeti goramagy dolandyrmagyň ýeke-täk ulgamy" dersi boýunça okuw geçirip, degişli sertifikat we iş ýerinde ulanylýan žurnallardan almana ýardam bermegiňizi Sizden haýyş edýärin.</textarea>
            @else
            <textarea class="textarea__word__middle h-40 bold" name="middle" placeholder="Hormatly Mämmetmyrat Baýrammyradowiç!">Hormatly Mämmetmyrat Baýrammyradowiç!</textarea>
            <textarea class="textarea__word__middle h-40" name="company_name" placeholder="{{ __('Company name') }}">{{ Auth::user()->company_name }}</textarea>
            <textarea class="textarea__word__body h-80" name="body" placeholder="{{ __('Fill out an application') }}">aşakda görkezilen hünärmenlerine "Türkmenistanyň halk hojalygynda zähmeti goramagy dolandyrmagyň ýeke-täk ulgamy" dersi boýunça okuw geçirip, degişli sertifikat we iş ýerinde ulanylýan žurnallardan almana ýardam bermegiňizi Sizden haýyş edýärin.</textarea>
            <textarea class="textarea__word__body h-100" name="person" placeholder="{{ __('Fill out an application') }}">1. ___________________________________ - _____________________________
            (familiýasy, ady, atasynyň ady)                                     (wezipesi)
2. ___________________________________ - _____________________________
            (familiýasy, ady, atasynyň ady)                                     (wezipesi)</textarea>
            @endif

            @if (Auth::user()->roles->pluck('name')[0] == 'raýat')
            <textarea class="textarea__word__body h-40" name="toleg" placeholder="Tölegini kepillendirýärin.">Tölegini kepillendirýärin.</textarea>
            @else
            <textarea class="textarea__word__body h-40" name="toleg" placeholder="Tölegini kepillendirýäris.">Tölegini kepillendirýäris.</textarea>
            @endif

            @if (Auth::user()->roles->pluck('name')[0] == 'raýat')
            <textarea class="textarea__word__body h-80 bold" name="sign" placeholder="                                                                                             
                                                                                                             _________________
                                                                                                                         (goly)">                                                                                             
                                                                                                             _________________
                                                                                                                         (goly)
            </textarea>
            <textarea class="textarea__word__body h-80 bold" name="date" placeholder="                                                                                             
                                                                                                             ___________
                                                                                                                   (sene)">                                                                                             
                                                                                                             ___________
                                                                                                                   (sene)
            </textarea>
            
            <textarea class="textarea__word__body h-40 @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Telefon belgisi: +993 {{ Auth::user()->phone_number }}">Telefon belgisi: +993 {{ Auth::user()->phone_number }}</textarea>
            
            @error('phone_number')
            <div class="textarea__word__body application__textarea invalid-feedback">
                <div data-field="phone_number" data-validator="notEmpty">
                    {{ __('Enter your phone-number') }}
                </div>
            </div>
            @enderror
            
            @else
            <textarea class="textarea__word__body h-40 bold" name="hormatlamak" placeholder="Hormatlamak bilen,">Hormatlamak bilen,</textarea>
            <textarea class="textarea__word__body h-40 bold" name="businesman" placeholder="        Başlyk                                               Goly                                 Ady, Familiýasy">        Başlyk                                               Goly                                 {{ Auth::user()->first_name[0] }}.{{ Auth::user()->last_name }}</textarea>
            @endif
          </div>

        </div>

      </div>

      <x-user.application.section-sample-button :sections="$sections" :sectionId="$sectionId" :childrenSections="$childrenSections" :childrenSectionId="$childrenSectionId" :currentSection="$currentSection" />

    </div>


  </form>

</section>