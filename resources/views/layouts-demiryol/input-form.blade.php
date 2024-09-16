<div class="input__form">
    <form action="{{ route('buy-ticket', app()->getlocale() ) }}" method="post" id="form">
        @csrf
        
        <div class="input__form__wrapper">
            <h3 class="input__form__h3">{{ __('Contact information') }}</h3>

            <div class="input__form__container">
                <div class="input__text">
                    <i class="fa fa-phone"></i>
                    <span class="country-code">+993</span>
                    <input type="text" class="input" placeholder="{{ __('Phone number') }}" name="phone_number" value="65656585">
                </div>

                <div class="input__text">
                    <i class="fa fa-envelope"></i>
                    <input type="text" class="input" placeholder="{{ __('E-mail') }}" name="email" value="esca656585@gmail.com">
                </div>
            </div>
            
        </div>

        <div class="input__form__wrapper">
            <h3 class="input__form__h3">№ 1 - {{ __('Big man') }}</h3>

            <div class="input__form__container">
                <div class="input__text">
                    <i class="fa fa-users"></i>

                    <select id="select" name="sex">
                        <option value="{{ __('Select a gender') }}" disabled>{{ __('Select a gender') }}</option>
                        <option value="{{ __('Male') }}">{{ __('Male') }}</option>
                        <option value="{{ __('Female') }}">{{ __('Female') }}</option>
                    </select>
                </div>

                <div class="input__text">
                    <i class="fa fa-passport"></i>

                    <select id="select" name="document">
                        <option value="{{ __('Passport') }}" selected="selected">{{ __('Passport') }}</option>
                        <option value="{{ __('Birth certificate') }}">{{ __('Birth certificate') }}</option>
                        <option value="{{ __('Military ID') }}">{{ __('Military ID') }}</option>
                    </select>
                </div>
            </div>

            <div class="input__form__container__2">
                <div class="input__text">
                    <i class="fa fa-user"></i>
                    <input type="text" class="input" placeholder="{{ __('First Name') }}" name="first_name" value="Esen">
                </div>

                <div class="input__text">
                    <i class="fa fa-passport"></i>

                    <select id="select" name="passport_seria">
                        <option selected="selected" disabled="disabled"></option>
                        <option value="I-AS" selected>I-AS</option>
                        <option value="II-AS">II-AS</option>
                        <option value="I-AH">I-AH</option>
                        <option value="II-AH">II-AH</option>
                        <option value="I-BN">I-BN</option>
                        <option value="II-BN">II-BN</option>
                        <option value="I-DZ">I-DZ</option>
                        <option value="II-DZ">II-DZ</option>
                        <option value="I-LB">I-LB</option>
                        <option value="II-LB">II-LB</option>
                        <option value="I-MR">I-MR</option>
                        <option value="II-MR">II-MR</option>
                    </select>
                </div>

                <div class="input__text">
                    <i class="fa fa-id-card"></i>
                    
                    <input type="text" class="input" placeholder="Resminama belgisi" name="passport_number" value="123456">
                </div>
            </div>

            <div class="input__form__container__3">
                <div class="input__text">
                    <i class="fa fa-user"></i>

                    <input type="text" class="input" placeholder="{{ __('Last Name') }}" name="last_name" value="Meredow">
                </div>

                <div class="input__text">
                    <i class="fa fa-calendar"></i>
                    <select id="select" name="birth_day">
                        <option selected="selected" disabled="disabled">{{ __('Birthday') }}</option>
                        @for($i=1; $i<=31; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="input__text">
                    <select id="select" name="birth_month">
                        <option selected="selected" disabled="disabled">{{ __('Month') }}</option>
                        @for($i=1; $i<=12; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <div class="input__text">
                    <select id="select" name="birth_year">
                        <option selected="selected" disabled="disabled">{{ __('Year') }}</option>
                        @for($i=2013; $i>=1924; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                </div>

                <input type="hidden" name="seat_no" id="seatNumber">
                <input type="hidden" name="routeFrom" value="{{ $routeFrom }}">
                <input type="hidden" name="routeTo" value="{{ $routeTo }}">
                <input type="hidden" name="depart_time" value="{{ $depart_time }}">
                <input type="hidden" name="arrival_time" value="{{ $arrival_time }}">
                <input type="hidden" name="day" value="{{ $day }}">
                <input type="hidden" name="monthName" value="{{ $monthName }}">
                <input type="hidden" name="year" value="{{ $year }}">

                <input type="hidden" name="period" value="{{ $period }}">
                <input type="hidden" name="passenger" value="{{ $passenger }}">
                <input type="hidden" name="price" value="{{ $price + 20.25 }}">

            </div>
        </div>
    </form>
</div>