<div class="section__profile__left section__profile__left">
    <div class="section__profile__left__up">
        <div class="section__profile__name center-900">
            <p>{{ __('Sections') }}</p>
        </div>
        <ul class="section__profile__menu">

            @foreach ($sections as $section)
                <a href="{{ route('digital.services.category', [ app()->getlocale(), $section->id, Str::slug($section->{ 'name_' . app()->getlocale() }) ]) }}">
                    <li class="section__profile__menu__item {{ Request::is('*/' . $section->id . '-*') ? 'active' : '' }}
                        {{ $currentSection->parent ? ($currentSection->parent->{ 'name_' . app()->getlocale() } == $section->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' }}
                        {{ $currentSection->parent ? $currentSection->parent->parent ? ($currentSection->parent->parent->{ 'name_' . app()->getlocale() } == $section->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' : '' }}
                        {{ $currentSection->parent ? $currentSection->parent->parent ? $currentSection->parent->parent->parent ? ($currentSection->parent->parent->parent->{ 'name_' . app()->getlocale() } == $section->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' : '' : '' }}" >
                        {{ $section->{ 'name_' . app()->getlocale() } }}
                    </li>
                </a>
            @endforeach
                
        </ul>
            
        <br>

    </div>
</div>