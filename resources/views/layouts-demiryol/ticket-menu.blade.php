<div class="ticket__menu">
    <div class="ticket__menu__container">
        <div class="mb-60">
            <div class="ticket__menu__wrapper">
                <div class="trip__left">
                    <i class="fa fa-chevron-down" id="faChevronDownIcon1" aria-hidden="true" onclick="openDetail(1)"></i>
                    
                    <div class="time__from">
                        <h1 class="time__clock">19:50</h1>
                        <div class="route__name">{{ $routeFrom }}</div>
                    </div>

                    <div class="time__between">
                        <div class="time">12 {{ __('hour') }} 50 {{ __('min') }}</div>
                        
                        <div class="text">{{ __('Direct traffic') }}</div>
                    </div>

                    <div class="time__to">
                        <h1 class="time__clock">
                            08:40

                            <span class="plus__one">+1</span>
                        </h1>
                        <div class="route__name">{{ $routeTo }}</div>
                    </div>

                </div>

                <div class="trip__right">
                    <div class="mr-15">
                        <form action="{{ route('check', app()->getlocale() ) }}" method="post">
                            @csrf
        
                            <input type="hidden" name="travel" value="{{ $travel }}">
                            <input type="hidden" name="passenger" value="{{ $passenger }}">
                            <input type="hidden" name="routeFrom" value="{{ $routeFrom }}">
                            <input type="hidden" name="routeTo" value="{{ $routeTo }}">
                            <input type="hidden" name="date1" value="{{ $date1 }}">
                            <input type="hidden" name="date2" value="{{ $date2 }}">
                            <input type="hidden" name="date3" value="{{ $date3 }}">
                            <input type="hidden" name="price" value="23.10">
                            <input type="hidden" name="type" value="{{ __('Plaskart') }}">
        
                            <input type="hidden" name="depart_time" value="19:50">
                            <input type="hidden" name="arrival_time" value="08:40">
                            <input type="hidden" name="period" value="12 {{ __('hour') }} 50 {{ __('min') }}">
                            <input type="hidden" name="text" value="{{ __('Direct traffic') }}">
        
                            <button type="submit" class="btn__seat">
                                <div class="btn__seat__price">
                                    23.10 m.
                                </div>
                                <div class="btn__seat__type">
                                    {{ __('Plaskart') }}
                                </div>
                            </button>
                        </form>
                    </div>

                    <div class="mr-15">
                        <form action="{{ route('check', app()->getlocale() ) }}" method="post">
                            @csrf
        
                            <input type="hidden" name="travel" value="{{ $travel }}">
                            <input type="hidden" name="passenger" value="{{ $passenger }}">
                            <input type="hidden" name="routeFrom" value="{{ $routeFrom }}">
                            <input type="hidden" name="routeTo" value="{{ $routeTo }}">
                            <input type="hidden" name="date1" value="{{ $date1 }}">
                            <input type="hidden" name="date2" value="{{ $date2 }}">
                            <input type="hidden" name="date3" value="{{ $date3 }}">
                            <input type="hidden" name="price" value="42.30">
                            <input type="hidden" name="type" value="{{ __('Küpe') }}">
                            
                            <input type="hidden" name="depart_time" value="19:50">
                            <input type="hidden" name="arrival_time" value="08:40">
                            <input type="hidden" name="period" value="12 {{ __('hour') }} 50 {{ __('min') }}">
                            <input type="hidden" name="text" value="{{ __('Direct traffic') }}">
        
                            <button type="submit" class="btn__seat">
                                <div class="btn__seat__price">
                                    42.30 m.
                                </div>
                                <div class="btn__seat__type">
                                    {{ __('Küpe') }}
                                </div>
                            </button>
                        </form>
                    </div>
                </div>

            </div>
            
            <div class="hide" id="tripJourney1">
                <div class="trip__journey">
                    <div class="trip__left ml-80">
                        
                        <div class="trip__seat">
                            <p class="trip__seat__number">{{ __('Train') }} №:13</p>
                            <p class="trip__seat__time__1">12 {{ __('hour') }} 41 {{ __('min') }}</p>

                            <p class="trip__seat__time__1">{{ __('Fast train') }}</p>
                        </div>

                        <img class="trip__seat__img" src="{{ asset('images/dik.1588344.svg') }}" alt="{{ asset('images/dik.1588344.svg') }}" height="68px">

                        <div class="trip__seat">
                            <p class="trip__seat__number">17:00 {{ $routeTo }}</p>
                            <br>
                            <p class="trip__seat__number">05:41 {{ $routeFrom }}</p>
                        </div>

                        <div class="trip__seat ml-80">
                            <p class="trip__seat__time__2">15.03.2024</p>
                            <br>
                            <p class="trip__seat__time__2">16.03.2024</p>
                        </div>

                    </div>

                </div>
            </div>
            
        </div>

        <div class="mb-60">
            <div class="ticket__menu__wrapper">
                <div class="trip__left">
                    <i class="fa fa-chevron-down" id="faChevronDownIcon2" aria-hidden="true" onclick="openDetail(2)"></i>
                    
                    <div class="time__from">
                        <h1 class="time__clock">18:00</h1>
                        <div class="route__name">{{ $routeFrom }}</div>
                    </div>

                    <div class="time__between">
                        <div class="time">13 sag 0 min</div>
                        
                        <div class="text">Göni gatnaw</div>
                    </div>

                    <div class="time__to">
                        <h1 class="time__clock">
                            07:50

                            <span class="plus__one">+1</span>
                        </h1>
                        <div class="route__name">{{ $routeTo }}</div>
                    </div>

                </div>

                <div class="trip__right">
                    <div class="mr-15">
                        <form action="{{ route('check', app()->getlocale() ) }}" method="post">
                            @csrf
        
                            <input type="hidden" name="travel" value="{{ $travel }}">
                            <input type="hidden" name="passenger" value="{{ $passenger }}">
                            <input type="hidden" name="routeFrom" value="{{ $routeFrom }}">
                            <input type="hidden" name="routeTo" value="{{ $routeTo }}">
                            <input type="hidden" name="date1" value="{{ $date1 }}">
                            <input type="hidden" name="date2" value="{{ $date2 }}">
                            <input type="hidden" name="date3" value="{{ $date3 }}">
                            <input type="hidden" name="price" value="23.10">
                            <input type="hidden" name="type" value="{{ __('Plaskart') }}">
                            
                            <input type="hidden" name="depart_time" value="18:00">
                            <input type="hidden" name="arrival_time" value="07:50">
                            <input type="hidden" name="period" value="13 sag 0 min">
                            <input type="hidden" name="text" value="Göni gatnaw">
        
                            <button type="submit" class="btn__seat">
                                <div class="btn__seat__price">
                                    23.10 m.
                                </div>
                                <div class="btn__seat__type">
                                    {{ __('Plaskart') }}
                                </div>
                            </button>
                        </form>
                    </div>

                    <div class="mr-15">
                        <form action="{{ route('check', app()->getlocale() ) }}" method="post">
                            @csrf
        
                            <input type="hidden" name="travel" value="{{ $travel }}">
                            <input type="hidden" name="passenger" value="{{ $passenger }}">
                            <input type="hidden" name="routeFrom" value="{{ $routeFrom }}">
                            <input type="hidden" name="routeTo" value="{{ $routeTo }}">
                            <input type="hidden" name="date1" value="{{ $date1 }}">
                            <input type="hidden" name="date2" value="{{ $date2 }}">
                            <input type="hidden" name="date3" value="{{ $date3 }}">
                            <input type="hidden" name="price" value="42.30">
                            <input type="hidden" name="type" value="{{ __('Küpe') }}">
                            
                            <input type="hidden" name="depart_time" value="18:00">
                            <input type="hidden" name="arrival_time" value="07:50">
                            <input type="hidden" name="period" value="13 sag 0 min">
                            <input type="hidden" name="text" value="Göni gatnaw">
        
                            <button type="submit" class="btn__seat">
                                <div class="btn__seat__price">
                                    42.30 m.
                                </div>
                                <div class="btn__seat__type">
                                    {{ __('Küpe') }}
                                </div>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="hide" id="tripJourney2">
                <div class="trip__journey">
                    <div class="trip__left ml-80">
                        
                        <div class="trip__seat">
                            <p class="trip__seat__number">{{ __('Train') }} №:13</p>
                            <p class="trip__seat__time__1">12 {{ __('hour') }} 41 {{ __('min') }}</p>
                            
                            <p class="trip__seat__time__1">{{ __('Fast train') }}</p>
                        </div>

                        <img class="trip__seat__img" src="{{ asset('images/dik.1588344.svg') }}" alt="{{ asset('images/dik.1588344.svg') }}" height="68px">

                        <div class="trip__seat">
                            <p class="trip__seat__number">19:00 {{ $routeTo }}</p>
                            <br>
                            <p class="trip__seat__number">09:00 {{ $routeFrom }}</p>
                        </div>

                        <div class="trip__seat ml-80">
                            <p class="trip__seat__time__2">14.03.2024</p>
                            <br>
                            <p class="trip__seat__time__2">16.03.2024</p>
                        </div>

                    </div>

                </div>
            </div>
            
        </div> 
    </div>
</div>