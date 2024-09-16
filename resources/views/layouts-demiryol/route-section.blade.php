<div class="{{ Request::is('*/outbound*') ? 'body__section__ticket__container__image resize__div' : 'body__section__ticket__container' }}" id="bodySectionTicketContainer">
    <div class="body__section__wrapper">
        <div class="body__section__ticket">
            <div class="body__section__ticket__left">
                
                <div class="dropdown">
                    <button class="dropdown-btn" onclick="openMenu(1)">
                        <span id="menu1name" class="dropdown-btn-name">{{ __('One side') }}</span>
                        <span id="arrow1" class="arrow"></span>
                    </button>
                    <ul class="dropdown-content hide" id="menu1">
                        <li><a href="#" onclick="selectTravel('{{ __('One side') }}')">{{ __('One side') }}</a></li>
                        <li><a href="#" onclick="selectTravel('{{ __('Departure Return') }}')">{{ __('Departure Return') }}</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <button class="dropdown-btn" onclick="openMenu(2)">
                        <span class="dropdown-btn-name"><span id="menu2name">1</span> {{ __('passenger') }}</span>
                        <span id="arrow2" class="arrow"></span>
                    </button>
                    
                    <div class="dropdown-content dropdown-content-2 hide" id="menu2">
                        <div class="dropdown-content-container">
                            <span class="dropdown-content-name">{{ __('Big man') }}</span>
                            
                            <div class="dropdown-content-button">
                                <button id="minusUlyAdam" class="circle__btn minus" onclick="removeNumber('UlyAdam')">-</button>
                                <span  id="numberUlyAdam" class="dropdown-content-number">1</span>
                                <button id="plus" class="circle__btn plus" onclick="addNumber('UlyAdam')">+</button>

                                <span class="dropdown-content-text">10+ {{ __('age') }}</span>
                            </div>
                        </div>

                        <div class="dropdown-content-container">
                            <span class="dropdown-content-name">{{ __('Child') }}</span>
                            
                            <div class="dropdown-content-button">
                                <button id="minusCaga" class="circle__btn circle__btn__default minus" onclick="removeNumber('Caga')">-</button>
                                <span  id="numberCaga" class="dropdown-content-number">0</span>
                                <button id="plus" class="circle__btn plus" onclick="addNumber('Caga')">+</button>

                                <span class="dropdown-content-text">5-10 {{ __('age') }}</span>
                            </div>
                        </div>

                        <div class="dropdown-content-container">
                            <span class="dropdown-content-name">{{ __('Baby') }}</span>
                            
                            <div class="dropdown-content-button">
                                <button id="minusBabek" class="circle__btn circle__btn__default minus" onclick="removeNumber('Babek')">-</button>
                                <span  id="numberBabek" class="dropdown-content-number">0</span>
                                <button id="plus" class="circle__btn plus" onclick="addNumber('Babek')">+</button>

                                <span class="dropdown-content-text">0-5 {{ __('age') }}</span>
                            </div>
                        </div>

                        <button class="save__btn" onclick="saveData()">{{ __('Remember Me') }}</button>
                    </div>
                </div>

            </div>

            <div class="body__section__ticket__right">
                <a href="/refund" class="link__btn">{{ __('Returning tickets') }}</a>
            </div>

            </div>

            <div class="body__section__ticket">
            <div class="body__section__ticket">

                <div class="route__btn__container">
                    <div class="route__btn__select">
                        <div class="route__btn__div" onclick="openCountrySelect('From')">
                            <i class="la la-dot-circle-o" aria-hidden="true"></i>
                            <span id="nameFrom" class="route__btn">{{ $routeFrom ?? __('From where') }}</span>
                        </div>

                        <div id="countrySelectFrom" class="country__select hide">
                            <input type="text" id="countrySelectSearch">

                            <select id="selectFrom" onchange="selectRoute('From')">
                                @foreach(Config::get('routes') as $key => $route)
                                    <option value="{{ $key }}">{{ $route['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <img id="rotateButton" class="stations_change" onclick="rotateButton()" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOS45MDYiIGhlaWdodD0iMTUuNDgyIiB2aWV3Qm94PSIwIDAgMTkuOTA2IDE1LjQ4MiI+CiAgPGcgaWQ9InN3YXAtaG9yaXpvbnRhbC1vcmllbnRhdGlvbi1hcnJvd3MiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgLTUxKSIgb3BhY2l0eT0iMC4yMDMiPgogICAgPGcgaWQ9InN3YXAtaG9yaXoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDAgNTEpIj4KICAgICAgPHBhdGggaWQ9IlBhdGhfMTE1IiBkYXRhLW5hbWU9IlBhdGggMTE1IiBkPSJNNC40MjQsNTcuNjM1LDAsNjIuMDU5bDQuNDI0LDQuNDI0VjYzLjE2NWg3Ljc0MVY2MC45NTNINC40MjRabTE1LjQ4My0yLjIxMkwxNS40ODMsNTF2My4zMThINy43NDFWNTYuNTNoNy43NDF2My4zMThaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwIC01MSkiIGZpbGw9IiNmZmYiLz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPgo=">
                    
                    <div class="route__btn__select">
                        <div class="route__btn__div" onclick="openCountrySelect('To')">
                            <i class="la la-map-marker" aria-hidden="true"></i>
                            <span id="nameTo" class="route__btn">{{ $routeTo ?? __('To where') }}</span>
                        </div>

                        <div id="countrySelectTo" class="country__select hide">
                            <input type="text" id="countrySelectSearch">

                            <select id="selectTo" onchange="selectRoute('To')">
                                @foreach(Config::get('routes') as $key => $route)
                                    <option value="{{ $key }}">{{ $route['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                
            </div>

            <div class="body__section__ticket" id="calendarBT">
                <div class="route__btn__date">
                    <div class="route__btn__date__calendar" onclick="openCalendar(1)">
                        <i class="flaticon2 flaticon2-calendar" aria-hidden="true"></i>

                        <span class="calendar__text"><span id="today1">{{ $day }}</span> {{ $monthName }}</span>
                    </div>

                    <div class="route__btn__date__btn">
                        <i class="fa fa-angle-left" aria-hidden="true" onclick="prevDay({{ $day }}, 1)"></i>
                        <i class="fa fa-angle-right" aria-hidden="true" onclick="nextDay({{ $lastDayofMonth }}, 1)"></i>
                    </div>

                    <div id="dateSelectFrom1" class="country__select hide">
                        <input type="date" id="dateSelect1" class="dateSelect" min='{{ $beginLimit }}' max='{{ $endLimit }}' onchange="selectDate(1)" value="{{ $beginLimit }}">
                    </div>
                </div>
            </div>

            <div class="body__section__ticket hide" id="calendarGG">
                <div class="route__btn__date border-right">
                    <div class="route__btn__date__calendar" onclick="openCalendar(2)">
                        <i class="flaticon2 flaticon2-calendar" aria-hidden="true"></i>

                        <span class="calendar__text"><span id="today2">{{ $day }}</span> {{ $monthName }}</span>
                    </div>

                    <div class="route__btn__date__btn">
                        <i class="fa fa-angle-left" aria-hidden="true" onclick="prevDay({{ $day }}, 2)"></i>
                        <i class="fa fa-angle-right" aria-hidden="true" onclick="nextDay({{ $lastDayofMonth }}, 2)"></i>
                    </div>

                    <div id="dateSelectFrom2" class="country__select hide">
                        <input type="date" id="dateSelect2" class="dateSelect" min='{{ $beginLimit }}' max='{{ $endLimit }}' onchange="selectDate(2)" value="{{ $beginLimit }}">
                    </div>
                </div>

                <div class="route__btn__date border-left">
                    <div class="route__btn__date__calendar" onclick="openCalendar(3)">
                        <i class="flaticon2 flaticon2-calendar" aria-hidden="true"></i>

                        <span class="calendar__text"><span id="today3">{{ $day }}</span> {{ $monthName }}</span>
                    </div>

                    <div class="route__btn__date__btn">
                        <i class="fa fa-angle-left" aria-hidden="true" onclick="prevDay({{ $day }}, 3)"></i>
                        <i class="fa fa-angle-right" aria-hidden="true" onclick="nextDay({{ $lastDayofMonth }}, 3)"></i>
                    </div>

                    <div id="dateSelectFrom3" class="country__select hide">
                        <input type="date" id="dateSelect3" class="dateSelect" min='{{ $beginLimit }}' max='{{ $endLimit }}' onchange="selectDate(3)" value="{{ $beginLimit }}">
                    </div>                    </div>
            </div>

            </div>

            <form action="{{ route('outbound', app()->getlocale()) }}" method="POST" class="body__section__ticket__center {{ Request::is('*/outbound*') ? 'hide' : '' }}">
                @csrf
                <input type="hidden" id="travel" name="travel" value="One side">

                <input type="hidden" id="passenger" name="passenger" value="1">

                <input type="hidden" id="routeFrom" name="routeFrom">
                <input type="hidden" id="routeTo" name="routeTo">

                <input type="hidden" id="date1" name="date1" value="{{ $beginLimit }}">
                <input type="hidden" id="date2" name="date2" value="{{ $beginLimit }}">
                <input type="hidden" id="date3" name="date3" value="{{ $beginLimit }}">

                <button type="submit" class="search__btn disable" id="searchBtn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <span class="search__btn__name">{{ __('Search') }}</span>
                </button>
            </form>
        </div>
    </div>
</div>