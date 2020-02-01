<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }}</title>
    <style>
        @font-face {
            font-family: OCR;
            src: url("{{ asset('fonts/ocr-aregular.ttf') }}");
        }
        * {
            font-family: OCR;
            color: rgb(199, 199, 199);
        }
        p {
            font-size: 16px;
        }
        body, div.container, div#contracker {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
        }
        body {
            background: url("{{ asset('images/tvstatic.gif') }}") #333 repeat;
            overflow: hidden;
        }
        div.container {
            background-image: linear-gradient(#333a, #000a);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        div#contracker {
            background: url("{{ asset('images/contracker.png') }}") no-repeat;
            width: 800px;
            height: 514px;
            object-fit: scale-down;
            object-position: center;
        }
        div.contracker__text {
            margin: 0 90px 50px 130px;
            width: 580px;
            height: 280px;
            overflow: scroll;
            word-break: break-word;
        }
        div.contracker__text a {
            font-weight: 700;
        }
        div.contracker__header {
            margin: 10px 60px 0 100px;
            height: 70px;
            width: 640px;
        }
        div.contracker__footer {
            margin: 0 60px 24px 100px;
            width: 640px;
            height: 80px;
        }
        a#contracker__back {
            display: block;
            position: relative;
            top: 40px;
            left: 10px;
            width: 100px;
            height: 30px;
        }
        button {
            border: rgb(199, 199, 199) solid 1px;
            background-color: #fff0;
            padding: 5px;
            cursor: pointer;
        }
        button:active {
            border: whitesmoke solid 1px;
        }
        img.contracker__avatar {
            position: relative;
            width: 50px;
            height: 50px;
            left: 480px;
            top: 5px;
        }
        p.contracker__username {
            position: relative;
            width: 90px;
            left: 460px;
            font-size: 14px;
            text-align: center;
            margin: 3px 0;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
        }
        p.contracker__signout {
            position: relative;
            left: 560px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div id="contracker">
            <div class="contracker__header">
                <a href="/" id="contracker__back"></a>
                @auth
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <p class="contracker__signout"><button type="submit">sign out</button></p>
                    </form>
                @endauth
                @yield('contracker.header')
            </div>
            <div class="contracker__text">
                @yield('contracker.text')
            </div>
            <div class="contracker__footer">
                @auth
                    <img class="contracker__avatar" src="{{ auth()->user()->avatar }}">
                    <p class="contracker__username">{{ auth()->user()->username }}</p>
                @endauth
                @yield('contracker.footer')
            </div>
        </div>
    </div>
</body>
</html>
