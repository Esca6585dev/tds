@extends('layouts.app')

@section('title')
    {{ __('404') }} | {{ __('Main State Service «Turkmenstandartary»') }}
@endsection

@section('content')
    <!--begin::Body-->
<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Error 404 -->
        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url({{ asset('metronic-template/v8/assets/media/illustrations/development-hd.png') }})">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-20">
                <!--begin::Logo-->
                <a href="{{ url('/') }}" class="mb-10 pt-lg-20">
                    <img alt="{{ asset('img/tds-logo/tds-logo.gif') }}" src="{{ asset('img/tds-logo/tds-logo.gif') }}" class="h-100px mb-5" style="background: transparent;" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
                <div>
                    <!--begin::Logo-->
                    <h1 class="fw-bolder fs-4x text-gray-800 mb-5">404</h1>
                    <h1 class="fw-bolder fs-4x text-gray-800 mb-5">{{ __('Page Not Found') }}</h1>
                    <h1 class="fw-bolder fs-4x text-gray-800 mb-5">Page Not Found</h1>
                    <h1 class="fw-bolder fs-4x text-gray-800 mb-5">Страница не найдена</h1>
                    <!--end::Logo-->
                    <!--begin::Message-->
                    <div class="fw-bold fs-3 text-muted mb-15">Siziň gözleýän sahypaňyz tapylmady!</div>
                    <!--end::Message-->
                    <!--begin::Action-->
                    <div class="text-center">
                        <a href="{{ url('/') }}" class="btn btn-lg btn-primary fw-bolder">{{ __('Go to homepage') }}</a>
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-16">
					<!--begin::Links-->
					<div class="d-flex align-items-center fw-bold fs-6">
						<select class="form-select" id="changeLanguage">
							@foreach (Config::get('languages') as $lang => $language)
								<option value="{{ $lang }}" {{ Request::segment(1) == $lang ? 'selected' : '' }}>{{ $language['name'] }}</option>
							@endforeach
						</select>
					</div>
					<!--end::Links-->
				</div>
				<div style="padding-top: 277px"></div>
				<!--end::Footer-->
        </div>
        <!--end::Authentication - Error 404-->
    </div>
    <!--end::Main-->
</body>
<!--end::Body-->

@endsection