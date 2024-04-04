@if(count($carts))
<div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>TDS №</th>
                <th class="show-1200">{{ __('Name') }} ({{ Config::get('languages')[app()->getlocale()]['name'] }})</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th class="hide-1200">{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Delete') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carts as $cart)
            <tr id="tds__id__{{ $cart->standart->id }}">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cart->standart->number }}</td>
                <td class="show-1200">{{ $cart->standart->{ 'name_' . app()->getlocale() } }}</td>
                <td class="hide-1200">{{ $cart->standart->name_tm }}</td>
                <td class="hide-1200">{{ $cart->standart->name_en }}</td>
                <td class="hide-1200">{{ $cart->standart->name_ru }}</td>
                @foreach (Config::get('languages') as $lang => $language)
                <td>{{ $cart->{ 'name_' . $lang } }}</td>
                @endforeach
                <td>
                    <button type="button" class="btn" onclick="removeFromCartApplication({{ $cart->standart->id }})">
                        <i class="fa fa-close"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $carts->links('user-panel.pagination') }}
</div>
@else
<div class="no-data">
    {{ __('No Data') }}
</div>
@endif
