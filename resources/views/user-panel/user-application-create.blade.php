@extends('home')

@section('section-profile-right')
<div class="section__profile__body">

    <ul class="breadcrumb">
        <li>
            <a href="{{ route('main-page', app()->getlocale() ) }}">
                {{ __('Main Page') }}
            </a>
        </li>
        <li>
          <a href="{{ route('profile.application', app()->getlocale() ) }}">
            {{ __('Applications') }}
          </a>
        </li>
        <li>
          {{ __('Application') }} {{ __('Create') }}
        </li>
    </ul>

    <h2>{{ __('Application') }} {{ __('Create') }}</h2>

    <div class="section__application__form">

        <div class="section__container__application__wrapper">
            <form action="{{ route('send-application-beyleki-bolumler', app()->getlocale() ) }}" method="post" enctype="multipart/form-data">
            @csrf
    
                <div class="row">
                    <div class="col d-flex">
                        <label class="hide-700" for="first_name">{{ __('First Name') }}</label>
    
                        <input type="text" name="first_name" class="input @error('first_name') is-invalid @enderror" placeholder="{{ __('First Name') }}" value="{{ Auth::user()->first_name }}">
    
                        @error('first_name')
                        <div class="invalid-feedback">
                            <div data-field="first_name" data-validator="notEmpty">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex">
                        <label class="hide-700" for="last_name">{{ __('Last Name') }}</label>
    
                        <input type="text" name="last_name" class="input @error('last_name') is-invalid @enderror" placeholder="{{ __('Last Name') }}" value="{{ Auth::user()->last_name }}">
    
                        @error('last_name')
                        <div class="invalid-feedback">
                            <div data-field="last_name" data-validator="notEmpty">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>
                @if(Auth::user()->roles->pluck('name')->first() != 'raýat')
                <div class="row">
                    <div class="col d-flex">
                        <label class="hide-700" for="company_name">{{ __('Company name') }}</label>
    
                        <input type="text" name="company_name" class="input @error('company_name') is-invalid @enderror" placeholder="{{ __('Company name') }}" value="{{ Auth::user()->company_name }}">
    
                        @error('company_name')
                        <div class="invalid-feedback">
                            <div data-field="company_name" data-validator="notEmpty">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>
                @endif
                <div class="row">
                    <div class="col d-flex">
                        <label class="hide-700" for="last_name">{{ __('Address') }}</label>
    
                        <textarea id="subject" name="address" class="input @error('address') is-invalid @enderror" placeholder="{{ __('Enter your address') }}" style="height:100px">{{ Auth::user()->address }}</textarea>
    
                        @error('address')
                        <div class="invalid-feedback">
                            <div data-field="address" data-validator="notEmpty">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex">
                        <label class="hide-700" for="last_name">{{ __('Phone') }}</label>
    
                        <div class="form__profile__phone__number">
                            <span class="phone__number__code">+993</span>
                            <input type="text" name="phone_number" id="phone_number" class="input @error('phone_number') is-invalid @enderror @if(Auth::user()->phone_number == null) is-invalid @endif" placeholder="{{ __('Enter your phone-number') }}" value="{{ old('phone_number') ?? Auth::user()->phone_number }}" {{ Auth::user()->phone_number ? '' : '' }}>
                            
                            @if(Auth::user()->phone_number == null)
                            <div class="invalid-feedback">
                                <div data-field="phone_number" data-validator="notEmpty">
                                    {{ __('Please enter your phone number!') }}
                                </div>
                            </div>
                            @endif
    
                        </div>
    
                        @error('phone_number')
                        <div class="invalid-feedback">
                            <div data-field="phone_number" data-validator="notEmpty">
                                {{ $message }}
                            </div>
                        </div>
                        @enderror
                    </div>
                </div>
    
                <div class="row">
                    <div class="col d-flex">
                        <label class="hide-700" for="bolum">{{ __('Select a section') }}</label>
    
                        <div class="form__profile__phone__number">
                          <select name="bolum" class="upload__btn" onchange="changeBolum(event)">
                            @foreach ($sections as $section)
                            <option value="{{ $section->id }}">{{ $section->{ 'name_' . app()->getlocale() } }}</option>
                            @endforeach
                          </select>
                          
                          <select name="bolum" class="upload__btn" onchange="changeDescription(event)" id="bolum">
                            @foreach ($childrenSections as $childrenSection)
                            <option value="{{ $childrenSection->id }}">{{ $childrenSection->{ 'name_' . app()->getlocale() } }}</option>
                            @endforeach
                          </select>
                        </div>
    
                    </div>
                    @error('bolum')
                        <div class="invalid-feedback">
                            <div data-field="bolum" data-validator="notEmpty">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>
    
                <div class="row">
                    <div class="col d-flex">
                        <label class="hide-700" for="applications">{{ __('Submit selected applications') }}</label>
    
                        <div class="form__profile__phone__number">
                          <input type="file" name="applications[]" class="upload__btn" multiple>
                          <button type="sumbit" class="upload__btn" name="button__type" value="upload">{{ __('Submit selected applications') }}</button>
                        </div>
    
                    </div>
    
                    @error('roles')
                        <div class="invalid-feedback">
                            <div data-field="roles" data-validator="notEmpty">
                                {{ $message }}
                            </div>
                        </div>
                    @enderror
                </div>
    
                <div class="row hide" id="div__buttons">
                    <div class="col d-flex justify-content-center align-items-center pt-10">
                        <button type="button" class="btn p-10-20 ma-10 w-200" onclick="inputDisable()">{{ __('Cancel') }}</button>
                        <button type="button" class="btn p-10-20 ma-10 w-200 bg-goldenrod" onclick="saveData()" >{{ __('Save') }}</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="section__container__application__wrapper">
            <p id="section_description" class="section_application_description color__red">
                *{{ __('Select a section to get a list of Required Documents!') }}
            </p>
        </div>

    </div>

</div>
@endsection
