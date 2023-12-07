@if(count($standarts))
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TDS №</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Buy') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($standarts as $standart)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $standart->number }}</td>
                <td>{{ $standart->name_tm }}</td>
                <td>{{ $standart->name_en }}</td>
                <td>{{ $standart->name_ru }}</td>
                @auth
                <td>
                    <span class="btn__cart fa {{ $standart->cart ? 'fa-close color-gold' : 'fa-plus' }}" id="active__{{ $standart->id }}" onclick="addToCartApplication({{ $standart->id }}, {{ Auth::check() }})"></span>
                </td>
                @else
                <td>
                    <a href="{{ route('login', app()->getlocale() ) }}" class="btn__cart fa fa-plus" title="Arza ugratmak üçin agza bolmaly !!!"></a>
                </td>
                @endauth
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $standarts->links('user-panel.pagination') }}
</div>
@else
<div class="no-data">
    {{ __('No Data') }}
</div>
@endif
