<div class="section__profile__cart">
    <div class="section__container__cart__wrapper">
        <div class="section__grid__container">
            
            @foreach ($sections as $section)
            <div class="section__grid__card active">
                <img src="{{ asset('img/tds-logo/tds-logo.webp') }}" alt="{{ asset('img/tds-logo/tds-logo.webp') }}" width="50px">
                <a>
                    {{ $section->{ 'name_' . app()->getlocale() } }}
                </a>
            </div>

                @foreach ($section->sections as $childrenSection)
                    <div class="section__grid__card">
                        <img src="{{ asset('img/tds-logo/tds-logo.webp') }}" alt="{{ asset('img/tds-logo/tds-logo.webp') }}" width="50px">
                        <a href="{{ route('fill-application', [ app()->getlocale(), $childrenSection->id, Str::slug($childrenSection->{ 'name_' . app()->getlocale() }) ]) }}">
                            {{ $childrenSection->{ 'name_' . app()->getlocale() } }}
                        </a>
                    </div>
                @endforeach
            @endforeach
            
        </div>
    </div>
</div>