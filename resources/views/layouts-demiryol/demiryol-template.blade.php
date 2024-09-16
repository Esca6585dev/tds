<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style-demiryol.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    <link href="{{ asset('metronic-template/v7/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <title>"Demirýollary" AGPJ</title>
</head>
<body>
    
@include('layouts-demiryol.header')

    @yield('body')

@include('layouts-demiryol.footer')

@include('layouts-demiryol.script')

</body>
</html>