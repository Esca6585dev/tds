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

  <form action="{{ route('send-application-kiberhowpsuzlyk-bolumi', app()->getlocale()) }}" method="post" enctype="multipart/form-data">
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

      <x-user.application.section-sample-button :sections="$sections" :sectionId="$sectionId" :childrenSections="$childrenSections" :childrenSectionId="$childrenSectionId" :currentSection="$currentSection" />

    </div>


  </form>

</section>