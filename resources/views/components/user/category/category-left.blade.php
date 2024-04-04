<div class="section__profile__left section__profile__left">
    <div class="section__profile__left__up">
        <div class="section__profile__name center-900">
            <p>{{ __('Categories') }}</p>
        </div>
        <ul class="section__profile__menu">

            @foreach ($categories as $category)
                <a href="{{ route('category', [ app()->getlocale(), $category->id, Str::slug($category->{ 'name_' . app()->getlocale() }) ]) }}">
                    <li class="section__profile__menu__item {{ Request::is('*/' . $category->id . '-*') ? 'active' : '' }}
                        {{ $currentCategory->parent ? ($currentCategory->parent->{ 'name_' . app()->getlocale() } == $category->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' }}
                        {{ $currentCategory->parent ? $currentCategory->parent->parent ? ($currentCategory->parent->parent->{ 'name_' . app()->getlocale() } == $category->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' : '' }}
                        {{ $currentCategory->parent ? $currentCategory->parent->parent ? $currentCategory->parent->parent->parent ? ($currentCategory->parent->parent->parent->{ 'name_' . app()->getlocale() } == $category->{ 'name_' . app()->getlocale() }) ? 'active' : '' : '' : '' : '' }}" >
                        {{ $category->{ 'name_' . app()->getlocale() } }}
                    </li>
                </a>
            @endforeach
                
        </ul>
            
        <br>

    </div>
</div>