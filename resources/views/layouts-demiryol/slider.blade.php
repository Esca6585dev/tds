<div class="body__section {{ Request::is('*/outbound*') ? 'hide__div' : 'show__div' }}" id="bodySection">

    <div class="body__section__left">
        <h3>
            <div>{{ __('The journey') }}</div>
            <div class="pl-20">{{ __('begins with us!') }}</div>
        </h3>
    </div>

    <div class="body__section__right">
        <div class="relative">
            <img class="poyuz" src="{{ asset('images/poyuz.png') }}" alt="{{ asset('images/poyuz.png') }}" width="1000px">
            
            <object class="wokzal" data="{{ asset('images/animate.b2945c7.svg') }}" width="600" height="600"></object>
        </div>
    </div>
</div>