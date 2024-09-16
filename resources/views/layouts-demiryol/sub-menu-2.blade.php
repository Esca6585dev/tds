<div class="sub__menu__container bg-e">
    <div class="sub__menu__wrapper">
        <img class="sub__menu__img" src="{{ asset('images/trains.64730b1.svg') }}" alt="{{ asset('images/trains.64730b1.svg') }}">
        <h2 class="sub__menu__h2">{{ __('Direction of travel') }}</h2>
    </div>

    <div class="seats__menu__wrapper">
        <div class="seats__menu__top">№93 · {{ $routeFrom }} - {{ $routeTo }} · {{ __('Fast train') }}</div>
        <div class="seats__menu__bottom">
            <div class="wagon">
                <div class="wagon__col">
                    <span class="wagon__part__2__begin"></span>

                    <span class="wagon__part mr-15"></span>
                    
                    <?php for($i=0; $i<=42; $i+=6){?>
                        <span class="wagon__part__2"></span>

                        <div class="wagon__row">
                            <ul class="wagon__seat">
                                <li id="seatNo{{ $i+1 }}" title="gat: 3" onclick="selectSeat({{ $i+1 }})">{{ $i+1 }}</li>
                                <li id="seatNo{{ $i+2 }}" title="gat: 2" onclick="selectSeat({{ $i+2 }})">{{ $i+2 }}</li>
                                <li id="seatNo{{ $i+3 }}" title="gat: 1" onclick="selectSeat({{ $i+3 }})">{{ $i+3 }}</li>
                            </ul>

                            <span class="wagon__part"></span>

                            <ul class="wagon__seat">
                                <li id="seatNo{{ $i+4 }}" title="gat: 3" onclick="selectSeat({{ $i+4 }})">{{ $i+4 }}</li>
                                <li id="seatNo{{ $i+5 }}" title="gat: 2" onclick="selectSeat({{ $i+5 }})">{{ $i+5 }}</li>
                                <li id="seatNo{{ $i+6 }}" title="gat: 1" onclick="selectSeat({{ $i+6 }})">{{ $i+6 }}</li>
                            </ul>
                        </div>
                    <?php }?>

                    <span class="wagon__part__2__end"></span>

                    <img src="{{ asset('images/men-and-women-wc-toilet-sign4540.logowik.com.webp') }}" alt="{{ asset('images/men-and-women-wc-toilet-sign4540.logowik.com.webp') }}" height="70px">

                </div>
            </div>
        </div> 
    </div>

    <div class="center mb-60">
        <button onclick="submitFrom()" class="center__btn">{{ __('Buying a ticket') }}</button>
    </div>
</div>