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

  <form action="{{ route('send-application-kiberhowpsuzlyk-bolumi', app()->getlocale()) }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="section__container__body">
      <div class="section__container__word">

        <div class="section__sample">
          @if (Auth::user()->roles->pluck('name')[0] == 'döwlet-edara')
          <x-user.blank.dowlet />
          @else
          <x-user.blank.telekeci />
          @endif
        </div>

        <div class="section__container__wrapper">
          <div class="section__container__word__head">
            <textarea class="textarea__word__head h-40 bold" name="head" placeholder="“Türkmenstandartlary” baş döwlet gullugyna">“Türkmenstandartlary” baş döwlet gullugyna</textarea>
          </div>

          <div class="section__container__word__body">
            <textarea class="textarea__word__body h-80" name="body" placeholder="{{ __('Fill out an application') }}..."></textarea>

            @if (Auth::user()->roles->pluck('name')[0] == 'raýat')
            <textarea class="textarea__word__body h-40" name="toleg" placeholder="Tölegini kepillendirýärin.">Tölegini kepillendirýärin.</textarea>
            @else
            <textarea class="textarea__word__body h-40" name="toleg" placeholder="Tölegini kepillendirýäris.">Tölegini kepillendirýäris.</textarea>
            @endif

            <textarea class="textarea__word__body h-50 bold" name="hormatlamak" placeholder="{{ __('Company name') }}">{{ Auth::user()->company_name }}</textarea>
            <textarea class="textarea__word__body h-40 bold" name="businesman" placeholder="        Direktory                                            Goly                                 Ady, Familiýasy">        Direktory                                            Goly                                 {{ Auth::user()->first_name[0] }}.{{ Auth::user()->last_name }}</textarea>

          </div>

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
          <select name="bolum" class="upload__btn" onchange="redirectToRoute(event)" id="bolum">
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