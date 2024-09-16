<div class="ticket__menu">
    <div class="ticket__menu__container">

        <div class="ticket__menu__breadcrumb">
            <div>
                @include('layouts-demiryol.check-sub-menu-left')
            </div>
            <div>
                @include('layouts-demiryol.check-sub-menu-right')
            </div>
        </div>

        <div class="check__menu__wrapper mt-25">
            <div>
                <div class="check__trip__left mr-60">
                    <i class="fa fa-chevron-down" id="faChevronDownIcon1" aria-hidden="true" onclick="openDetail(1)"></i>
                    
                    <div class="time__from pl-35">
                        <h1 class="time__clock">{{ $depart_time }}</h1>
                        <div class="route__name">{{ $routeFrom }}</div>
                    </div>
    
                    <div class="time__between">
                        <div class="time">{{ $period }}</div>
                        
                        <div class="text">{{ $text }}</div>
                    </div>
    
                    <div class="time__to">
                        <h1 class="time__clock">
                            {{ $arrival_time }}
    
                            <span class="plus__one">+1</span>
                        </h1>
                        <div class="route__name">{{ $routeTo }}</div>
                    </div>
                </div>
                
                <div class="hide" id="tripJourney1">
                    <div class="check__trip__journey">
                        <div class="trip__left">
                            
                            <div class="trip__seat">
                                <p class="trip__seat__number">{{ __('Train') }} №:1</p>
                                <p class="trip__seat__time__1">{{ $period }}</p>
                                <p class="trip__seat__time__1">{{ __('Fast train') }}</p>
                            </div>

                            <img class="trip__seat__img" src="{{ asset('images/dik.1588344.svg') }}" alt="{{ asset('images/dik.1588344.svg') }}" height="68px">

                            <div class="trip__seat">
                                <p class="trip__seat__number">{{ $depart_time }} {{ $routeTo }}</p>
                                <br>
                                <p class="trip__seat__number">{{ $arrival_time }} {{ $routeFrom }}</p>
                            </div>

                            <div class="trip__seat ml-80">
                                <p class="trip__seat__time__2">{{ $today }}</p>
                                <br>
                                <p class="trip__seat__time__2">{{ $tommorow }}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            
            <div class="check__trip__right">
                <i class="fa fa-chevron-right" id="faChevronRightIcon2" aria-hidden="true" onclick="openDetailPrice(2)"></i>

                <div class="trip__price">
                    <div class="trip__price__col">
                        <div class="trip__price__text">{{ __('Road price') }}:: </div>
                        <div class="trip__price__number">{{ $price }} m.</div>
                    </div>
                    <div class="trip__price__col__toggle hide" id="tripJourney2">
                        <div class="trip__price__table__top">
                            <span class="bold">{{ $routeFrom }} - {{ $routeTo }}</span> · {{ $type }} · {{ __('Fast train') }}
                        </div>

                        <table class="trip__price__table">
                            <tr>
                                <td>{{ __('Big man') }}</td>
                                <td class="color-666">{{ $price }} m.</td>
                                <td class="color-666">{{ $passenger }}x</td>
                                <td>{{ $price }} m.</td>
                            </tr>
                        </table>
                    </div>
                    <div class="trip__price__col">
                        <div class="trip__price__text">{{ __('Services') }}</div>
                        <div class="trip__price__number">12.00 m.</div>
                    </div>
                    <div class="trip__price__col">
                        <div class="trip__price__text">{{ __('Insurance') }}</div>
                        <div class="trip__price__number">0.25 m.</div>
                    </div>
                    <div class="trip__price__col">
                        <div class="trip__price__text">{{ __('Close up') }}</div>
                        <div class="trip__price__number">5.00 m.</div>
                    </div>
                    <div class="trip__price__col">
                        <div class="trip__price__text">{{ __('Sanitation') }}</div>
                        <div class="trip__price__number">3.00 m.</div>
                    </div>
                    <div class="trip__price__col__jemi">
                        <div class="trip__price__text__jemi mr-30">{{ __('total') }}:: </div>
                        <div class="trip__price__number__jemi">{{ $price + 20.25 }} m</div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>