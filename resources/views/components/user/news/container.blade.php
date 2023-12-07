<section class="section__container" id="news">
    <div class="section__container__header">
        <div class="section__container__header__left">
            <h3>{{ __('News') }}</h3>
        </div>
        <div class="section__container__header__right">
            <a href="{{ route('news', app()->getlocale() ) }}">
            <h3>{{ __('View full') }}</h3>
            <span>
                <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-chevron-double-right"
                viewBox="0 0 16 16"
                >
                <path
                    fill-rule="evenodd"
                    d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"
                />
                <path
                    fill-rule="evenodd"
                    d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"
                />
                </svg>
            </span>
            </a>
        </div>
    </div>

    <div class="slide-container swiper">
        <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
                @foreach ($news as $row)
                <div class="card swiper-slide">
                    <div class="image-content">
                    <span class="overlay"></span>

                    <div class="card-image">
                        <img
                        src="{{ asset($row->image) }}"
                        alt="{{ asset($row->image) }}"
                        class="card-img"
                        />
                    </div>

                    </div>

                    <div class="card-content">
                        <p class="description">
                            {{ $row->{ 'name_' . app()->getlocale() } }}
                        </p>

                        <a href="{{ route('news.id', [app()->getlocale(), $row->id, Str::slug($row->{ 'name_' . app()->getlocale() }) ]) }}" class="button" >{{ __('Read more') }}</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
    </div>
</section>
