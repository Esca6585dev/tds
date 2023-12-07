<section class="section__container">
  <div class="section__container__header">
    <div class="section__container__header__left">
      <h3>{{ __('Application resend') }}</h3>
    </div>

    <div class="section__container__header__right">
      <a href="{{ route('profile.application', app()->getlocale() ) }}">
        <h3>{{ __('Profile') }}</h3>
      </a>
    </div>
  </div>

  <form action="{{ route('send-application-beyleki-bolumler', app()->getlocale() ) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="section__container__body">
      <div class="section__container__word">

        <div class="section__sample">
          @if (Auth::user()->roles->pluck('name')[0] == 'döwlet-edara')
            <div class="sample__container">
              <div class="sample__column__left">
                <div class="sample__column__top">
                  <textarea class="textarea__blanka" name="company_name_tm" placeholder="«TÜRKMENSTANDARTLARY» BAŞ DÖWLET GULLUGY">«TÜRKMENSTANDARTLARY» BAŞ DÖWLET GULLUGY</textarea>
                </div>
                <div class="sample__column__bottom">
                  <textarea class="input__blanka" name="address__blanka" placeholder="744000, Türkmenistan, Aşgabat şäheri, Oguzhan köçesi, 201-nji jaýy">744000, Türkmenistan, Aşgabat şäheri, Oguzhan köçesi, 201-nji jaýy</textarea>
                  <textarea class="input__blanka" name="phone_number" placeholder="Telefon: (+993 12) 95-73-55; Faks: (+993 12) 95-73-56">Telefon: (+993 12) 95-73-55; Faks: (+993 12) 95-73-56</textarea>
                  <textarea class="input__blanka" name="email" placeholder="E-mail: turkmenstandartlary@sanly.tm">E-mail: tds@sanly.tm</textarea>
                </div>
              </div>
              <div class="sample__column__center">
                <img src="{{ asset('img/Emblem_of_Turkmenistan.png') }}" alt="{{ asset('img/Emblem_of_Turkmenistan.png') }}" class="emblem__img">
              </div>
              <div class="sample__column__right">
                <div class="sample__column__top">
                  <textarea class="textarea__blanka" name="company_name_en" placeholder="«TURKMENSTANDARTLARY» MAIN STATE SERVICE">«TURKMENSTANDARTLARY» MAIN STATE SERVICE</textarea>
                </div>
                <div class="sample__column__bottom">
                  <textarea class="input__blanka" name="address__blanka" placeholder="744000, Turkmenistan, Ashgabat city, Oguzhan street, 201">744000, Turkmenistan, Ashgabat city, Oguzhan street, 201</textarea>
                  <textarea class="input__blanka" name="phone_number" placeholder="Telefon: (+993 12) 95-73-55; Faks: (+993 12) 95-73-56">Telefon: (+993 12) 95-73-55; Faks: (+993 12) 95-73-56</textarea>
                  <textarea class="input__blanka" name="email" placeholder="E-mail: turkmenstandartlary@sanly.tm">E-mail: tds@sanly.tm</textarea>
                </div>
              </div>
            </div>

            <hr class="hr__blue__bold">
            <hr class="hr__blue">

            <div class="sample_date">
              <div>"___"______________ 20____ý.</div>
              <div>№_____________</div>
            </div>

          @else
            <div class="sample__container__blank">
              Edaranyň ýa-da kärhananyň blankasy
            </div>

            <hr class="hr__blue__bold">
            <hr class="hr__blue">
          @endif

        </div>

        <div class="section__container__wrapper">
          <div class="section__container__word__head">
              <textarea class="textarea__word__head bold" name="head" id="headTextArea" placeholder="Arza kime ýazylýar?">«Türkmenstandartlary» baş döwlet gullugyna</textarea>
          </div>

          <div class="section__container__word__body">
            <textarea class="textarea__word__body h-300 @error('body') is-invalid @enderror" name="body" placeholder="{{ __('Fill out an application') }}"></textarea>

            @error('body')
            <div class="textarea__word__body application__textarea invalid-feedback">
                <div data-field="body" data-validator="notEmpty">
                    {{ __('Please fill out an application!') }}
                </div>
            </div>
            @enderror
          </div>

          @if (Auth::user()->roles->pluck('name')[0] != 'raýat')
            <textarea class="textarea__word__body bold" name="hormatlamak" placeholder="Hormatlamak bilen,">Hormatlamak bilen,</textarea>
            <textarea class="textarea__word__body bold" name="businesman" placeholder="        Başlyk                                               Goly                                 Ady, Familiýasy">        Başlyk                                               Goly                                 {{ Auth::user()->first_name[0] }}.{{ Auth::user()->last_name }}</textarea>
          @endif

        </div>


      </div>

      <div class="section__sample__button">

        <div class="sample__upload">
          <p class="sample__text">{{ __('Select a section') }}</p>
          <select name="bolum" class="upload__btn" onchange="changeBolum(event)">
            @foreach ($sections as $section)
            <option value="{{ $section->id }}" {{ ($sectionId == $section->id) ? 'selected=selected' : '' }}>{{ $section->{ 'name_' . app()->getlocale() } }}</option>
            @endforeach
          </select>
          <select name="bolum" class="upload__btn" onchange="changeBolum(event)">
            @foreach ($childrenSections as $childrenSection)
            <option value="{{ $childrenSection->id }}" {{ ($childrenSectionId == $childrenSection->id) ? 'selected=selected' : '' }} >{{ $childrenSection->{ 'name_' . app()->getlocale() } }}</option>
            @endforeach
            </select>
        </div>

        <hr class="hr__blue__bold">

        <div class="sample__upload">
          <p class="sample__text">
            <img src="{{ asset('metronic-template/v7/assets/media/svg/icons/Code/Warning-2.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/svg/icons/Code/Warning-2.svg') }}" width="25px">
            <br>
            {{ __('We warn you that the User is personally responsible for the Submitted Applications!') }}
          </p>

          <hr class="hr__blue__bold">

          <p class="sample__text">{{ __('Required documents') }}</p>
          <a class="btn" onclick="showModal()">{{ __('View full')  }}</a>
          <!-- modal::begin -->
          <div class="modal hide" id="descModal">
            <article class="modal-container">
              <header class="modal-container-header">
                <h1 class="modal-container-title">
                  <img src="{{ asset('metronic-template/v7/assets/media/svg/files/doc.svg') }}" alt="{{ asset('metronic-template/v7/assets/media/svg/files/doc.svg') }}" width="24">
                  {{ __('Required documents') }}
                </h1>
                <a class="icon-button" onclick="showModal()">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path fill="currentColor" d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z" />
                  </svg>
                </a>
              </header>
              <section class="modal-container-body rtf">
                <p>
                  {!! $current_section->{ 'desc_' . app()->getlocale() } !!}
                </p>
              </section>
              <footer class="modal-container-footer">
                <a class="button is-primary" onclick="showModal()">{{ __('Close') }}</a>
              </footer>
            </article>
          </div>
          <!-- modal::end -->

        </div>

        <hr class="hr__blue__bold">


        <div class="sample__upload">
          <p class="sample__text">{{ __('*You can submit scanned applications by clicking the button below!') }}</p>
          <input type="file" name="applications[]" class="upload__btn" multiple>
          <button type="sumbit" class="upload__btn" name="button__type" value="upload">{{ __('Submit selected applications') }}</button>
        </div>

        <hr class="hr__blue__bold">


        <div class="sample__upload">
          <p class="sample__text">{{ __('*You can submit an application by clicking the button below to submit an on-screen application!') }}</p>

          <button type="sumbit" class="upload__btn" name="button__type" value="download">{{ __('Download') }}</button>
          <button type="sumbit" class="upload__btn" name="button__type" value="resend">{{ __('Application resend') }}</button>
        </div>

      </div>

    </div>


  </form>

</section>