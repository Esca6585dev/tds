<div class="section__profile__right">
    <div class="section__profile__body">
        <ul class="breadcrumb">
            <li>
                <a href="{{ route('main-page', app()->getlocale() ) }}">
                    {{ __('Main Page') }}
                </a>
            </li>
            @if ($currentSection->parent)
            <li>
                <a href="{{ route('digital.services.category', [ app()->getlocale(), $currentSection->parent->id, Str::slug($currentSection->parent->{ 'name_' . app()->getlocale() }) ]) }}">
                    {{ $currentSection->parent->{ 'name_' . app()->getlocale() } }}
                </a>
            </li>
            @endif
            <li>
                {{ $currentSection->{ 'name_' . app()->getlocale() } }}
            </li>
        </ul>
        <div class="d-flex justify-content-between align-items-center f-wrap">
            <h2>{{ $currentSection->{ 'name_' . app()->getlocale() } }}</h2>

            @if ($currentSection->parent)
                <div class="d-flex justify-content-between align-items-center f-wrap">
                    @if($currentSection->id == 10)
                    <a href="{{ route('state.standards', app()->getlocale() ) }}" class="btn m-5">{{ __('State standards') }}</a>
                    @endif
                    <a href="{{ route('fill-application', [ app()->getlocale(), $currentSection->id, Str::slug($currentSection->{ 'name_' . app()->getlocale() }) ] ) }}" class="btn m-5">{{ __('Fill out an application') }}</a>
                    <a href="{{ route('profile.application.create.section', [ app()->getlocale(), $currentSection->id, Str::slug($currentSection->{ 'name_' . app()->getlocale() }) ] ) }}" class="btn m-5">{{ __('Application') }} {{ __('Create') }}</a>
                </div>
            @endif
        </div>

        <div class="section__profile__cart">
            <div class="section__container__cart__wrapper">
                @if ($subSections->count())
                    <div class="section__grid__container">
                        @foreach ($subSections as $subSection)
                            <div class="section__grid__card" onclick="redirectToSection('{{ Str::slug($subSection->id . '-' . $subSection->{ 'name_' . app()->getlocale() }) }}')" >
                                <img src="{{ asset('img/tds-logo/tds-logo.webp') }}" alt="{{ asset('img/tds-logo/tds-logo.webp') }}" width="50px">
                                <a href="{{ route('digital.services.category', [ app()->getlocale(), $subSection->id, Str::slug($subSection->{ 'name_' . app()->getlocale() }) ]) }}">
                                    {{ $subSection->{ 'name_' . app()->getlocale() } }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if($currentSection->parent)
                    <div class="section__grid__container__text">
                        <div class="section__grid__card__text">
                            {!! $currentSection->{ 'desc_' . app()->getlocale() } ?? '' !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
        
    </div>
</div>