<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Lorecapcrud
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs/6.x">Docs</a> 
                    <a href="https://www.tutsmake.com/laravel-6-custom-login-registration-example-tutorial/?fbclid=IwAR08tgH9cSMf6QREYuoWPg0HIzr9cYi4bba0V7gt2jY4BNV3N5u7JRniIzU">Login</a> 
                    <a href="https://devfeedly.com/laravel-6-google-v2-recaptcha-integration-tutorial-e-g/?fbclid=IwAR1ILyxcPisYjRw5AuEdsRKSe14f6iVPhKcmo-Z4ih3wbhzmbDtQRI5OL7g">Recapcha</a> 
                    <a href="https://www.tutsmake.com/simple-crud-laravel-6-example-tutorial-step-by-step/?fbclid=IwAR0pfstWT9ZNNb1Q_2qVBQjgTXAdTfHwoEtTVNifvvRPWdO9JVIx6OrFT5I">Crud</a> 
                    <a href="https://github.com/RampsosPeck/Log-recp-crud">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
