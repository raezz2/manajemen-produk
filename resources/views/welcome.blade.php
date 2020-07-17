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
                font-size: 70px;
            }

            .nim {
                font-size: 60px;
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
                    Muhammad Rezzha Riamrizal Arsya
                </div>

                <div class="nim">
                    18.01.4105
                </div><br><br>

                <div class="links">
                    <a href="https://www.facebook.com/ra.rezzha">Facebook</a>
                    <a href="https://twitter.com/rezzha_ra">Twitter</a>
                    <a href="https://www.instagram.com/rezzha_r/">Instagram</a>
                    <a href="mailto:muhammad.arsya@students.amikom.ac.id">Email</a>
                    <a href="https://www.youtube.com/channel/UCYvnnJ-qGgzHVUkP77IHmkA">Youtube</a>
                    <a href="https://www.linkedin.com/in/muhammad-rezzha-riamrizal-arsya-42395b174/">Linkedin</a>
                    <a href="https://github.com/raezz2">GitHub</a>
                    <a href="https://steamcommunity.com/id/headlesstrash80">Steam</a>
                </div>
            </div>
        </div>
    </body>
</html>
