<section class="section__container" id="works">
  <div class="section__container__header">
    <div class="section__container__header__left">
      <h3>{{ __('Work in progress') }}</h3>
    </div>
    <div class="section__container__header__right">
      <a href="{{ route('works', app()->getlocale() ) }}">
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

  <div class="section__container__tab__wrapper">
    @foreach ($works as $work)
    <div class="section__container__tab__card">
      <a href="{{ route('works.id', [app()->getlocale(), $work->id, Str::slug($work->{ 'name_' . app()->getlocale() }) ]) }}">
        <div class="section__container__tab__image">
          <img src="{{ asset($work->image) }}" alt="{{ asset($work->image) }}"/>
        </div>

        <div class="section__container__tab__bottom">
          <div class="section__container__tab__title">
            {{ $work->{ 'name_' . app()->getlocale() } }}
          </div>
          <div class="section__container__tab__link">
            <a href="{{ route('works.id', [app()->getlocale(), $work->id, Str::slug($work->{ 'name_' . app()->getlocale() }) ]) }}">
              <p>{{ __('Read more') }}</p>
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
      </a>
    </div>
    @endforeach
  </div>
</section>