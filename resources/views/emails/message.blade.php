<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <style>
        a {
            text-decoration: none;
            color: #000;
        }

        body {
            background: rgb(218, 165, 32, .1);
        }

        .document {
            text-align: center;
        }

        iframe {
            width: 1000px;
            height: 700px;
        }

        .header {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .logo a {
            text-align: center;
            font-size: .8em;
            font-weight: bold;
            width: 160px;
            text-transform: uppercase;
            text-align: center;
            color: goldenrod;
        }

        .btn {
            margin-bottom: 10px;
            padding: 5px 15px;
            border: 1px solid rgb(218, 165, 32, .6);
            background-color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .footer {
            display: flex;
            justify-content: space-around;
        }

    </style>

</head>
<body>
    <div class="email-template">
        <div class="header">
            <div class="logo">
                <a href="https://tds.gov.tm/tm">
                    <img src="https://tds.gov.tm/img/tds-logo/tds-logo.webp" alt="https://tds.gov.tm/img/tds-logo/tds-logo.webp" width="100px">
                </a>
            </div>
            <div class="logo">
                <a href="https://tds.gov.tm/tm">
                    <p>«Türkmenstandartlary» <br> Baş Döwlet Gullugy</p>
                </a>
            </div>
        </div>

        <div class="document">
            <iframe src="https://docs.google.com/gview?url=https://tds.gov.tm/{{ $message->file }}&embedded=true" frameborder="1"></iframe>
        </div>

        <div class="footer">
        <a class="btn" href="{{ env('APP_URL') }}/{{ $message->file }}">{{ __('Download') }}</a>

            <a class="btn" target="_blank" href="https://docs.google.com/gview?url=https://tds.gov.tm/{{ $message->file }}&embedded=true">Google Word Aç</a>
        </div>
    </div>
</body>
</html>
