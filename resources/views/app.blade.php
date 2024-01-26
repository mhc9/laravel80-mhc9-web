<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- csrf token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ศูนย์สุขภาพจิตที่ 9 :: Mental Health Center 9</title>

        <!-- Icon -->
        <!-- <link href="{{ asset('img/favicon.ico') }}" rel="icon"> -->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- styles  -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="root"></div>

        <!-- Facebook SDK -->
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v19.0" nonce="3W0TiTA5"></script>
        <!-- Facebook SDK -->

        <!-- LINE Plugins -->
        <script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
        <!-- LINE Plugins -->
        
        <!-- JS -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
