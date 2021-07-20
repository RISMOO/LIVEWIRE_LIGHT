<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel livewire</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logorismo.png') }}" />

    <link rel="icon" sizes="32x32" href="{{ asset('img/favicon-32.png') }}" type="image/png">
    <link rel="icon" sizes="64x64" href="{{ asset('img/favicon-64.png') }}" type="image/png">
    <link rel="icon" sizes="96x96" href="{{ asset('img/favicon-96.png') }}" type="image/png">
    <link rel="icon" sizes="196x196" href="{{ asset('img/favicon-196.png') }}" type="image/png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('img/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('img/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('img/apple-touch-icon-144x144.png') }}">
    <meta name="msapplication-TileImage" content="{{ asset('img/favicon-144.png') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <style>
        html,
        body {


            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }

        .full-height {
            height: 100vh;
        }



        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        div.cadre {

            background-color: rgba(0, 0, 0, 0.151);
            z-index: -1;


        }


        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;

        }

        span.badge {

            font-size: 40px;
            margin: 10px;
        }



        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        button.btn-info {

            background-color: rgba(0, 255, 255, 0.61);
        }

        .m-b-md {
            margin-bottom: 30px;
        }

    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    @livewireStyles
    <!--livewire-->

</head>

<body>
    <div class="flex-center position-ref full-height">


        <div class="content m-5">

            <!-- j'inclue mon composant-->
            @livewire('light')
            <!--<livewire:light></livewire:light>-->

        </div>
    </div>

    @livewireScripts
    <!--livewire-->


</body>

</html>
