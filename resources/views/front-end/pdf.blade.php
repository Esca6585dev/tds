<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>"Demirýollary" AGPJ</title>
</head>
<body>
    
    <table>
        <tr>
            <td>
                <h1>Bilet ID: <a href="{{ route('check-ticket', [app()->getlocale(), 'id' => $ticket->code ]) }}" target="_blank" style="color: #0019a8">{{ $uniqid }}</a></h1>
            </td>
        </tr>
    </table>
 
    <div>
        <table style="text-align: center;">
            <tr>
                <td>
                    <div><h4>Ugraýan ýeri we wagty:</h4></div>
                    <h2 style="color: #0019a8">{{ $request->routeFrom }}</h2>
                    <hr>
                    <h3>{{ $request->depart_time }}</h3>
                </td>
                <td>
                    <div><h4>Barýan ýeri we wagty:</h4></div>
                    <h2 style="color: #0019a8">{{ $request->routeTo }}</h2>
                    <hr>
                    <h3>{{ $request->arrival_time }}</h3>
                </td>
                <td><img src="data:image/png;base64, {!! base64_encode(\QrCode::format('png')->size(75)->generate(asset('/tm/demiryol/check/ticket?id=' . $ticket->code)))  !!} "></td>
            </tr>
        </table>
    </div>

    <div>
        <table style="border: 2px solid #0019a8; text-align: center; border-radius: 5px;">
            <tr>
                <th>{{ __('First Name') }}</th>
                <th>{{ __('Last Name') }}</th>
                <th>{{ __('Phone number') }}</th>
                <th>{{ __('Email Address') }}</th>
                <th>{{ __('Sex') }}</th>
                <th>{{ __('Document') }}</th>
                <th>{{ __('Passport Seria') }}</th>
                <th>{{ __('Birthday') }}</th>
                <th>{{ __('Place') }}</th>
            </tr>
            <tr>
                <td><b>{{ $ticket->first_name }}</b></td>
                <td><b>{{ $ticket->last_name }}</b></td>
                <td>{{ $ticket->phone_number }}</td>
                <td>{{ $ticket->email }}</td>
                <td>{{ $ticket->sex }}</td>
                <td>{{ $ticket->document }}</td>
                <td><b>{{ $ticket->passport_seria }} {{ $ticket->passport_number }}</b></td>
                <td>{{ $ticket->birth_day }}.{{ $ticket->birth_month }}.{{ $ticket->birth_year }}ý</td>
                <td style="border: 1px solid #0019a8; border-radius: 50px;"><b style="color: #0019a8;">{{ $ticket->seat_no }}</b></td>
            </tr>
        </table>
    </div>
 
    <div style="text-align: right;">
        <h2 style="color: #0019a8">Jemi: {{ $request->price }} TMT</h2>
        <hr>
    </div>
 
    <div style="text-align: center;">
        <a href="{{ route('main-page-demiryol', app()->getlocale() ) }}">&copy; "Demirýollary" AGPJ</a>
    </div>

</body>
</html>
