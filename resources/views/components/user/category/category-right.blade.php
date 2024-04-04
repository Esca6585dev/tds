<div class="section__profile__right">
            <div class="section__profile__body">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{ route('main-page', app()->getlocale() ) }}">
                            {{ __('Main Page') }}
                        </a>
                    </li>
                    @if ($currentCategory->parent)
                    <li>
                        <a href="{{ route('category', [ app()->getlocale(), $currentCategory->parent->id, Str::slug($currentCategory->parent->{ 'name_' . app()->getlocale() }) ]) }}">
                            {{ $currentCategory->parent->{ 'name_' . app()->getlocale() } }}
                        </a>
                    </li>
                    @endif
                    <li>
                        {{ $currentCategory->{ 'name_' . app()->getlocale() } }}
                    </li>
                </ul>
                <h2>{{ $currentCategory->{ 'name_' . app()->getlocale() } }}</h2>
        
                <div class="section__profile__cart">
                    <div class="section__container__cart__wrapper">
                        @if ($subCategories->count())
                            <div class="section__grid__container">
                                @foreach ($subCategories as $subCategory)
                                    <div class="section__grid__card" onclick="redirectTo('{{ Str::slug($subCategory->id . '-' . $subCategory->{ 'name_' . app()->getlocale() }) }}')" >
                                        <img src="{{ asset('img/tds-logo/tds-logo.webp') }}" alt="{{ asset('img/tds-logo/tds-logo.webp') }}" width="50px">
                                        <a href="{{ route('category', [ app()->getlocale(), $subCategory->id, Str::slug($subCategory->{ 'name_' . app()->getlocale() }) ]) }}">
                                            {{ $subCategory->{ 'name_' . app()->getlocale() } }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if ($text)
                            <div class="section__grid__container__text">
                                <div class="section__grid__card__text">
                                    {!! $text->{ 'name_' . app()->getlocale() } ?? '' !!}
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                
            </div>
        </div>