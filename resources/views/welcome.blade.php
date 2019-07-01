<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

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
                color: azure;
                cursor: default;
            }

            .links > a {
                color: azure;
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
            body{

              /* Location of the image */
              background-image: url(img/bg2.jpg);
              
              /* Background image is centered vertically and horizontally at all times */
              /*background-position: center center;*/
              background-position: center 90%;
              
              /* Background image doesn't tile */
              background-repeat: no-repeat;
              
              /* Background image is fixed in the viewport so that it doesn't move when 
                 the content's height is greater than the image's height */
              background-attachment: fixed;
              
              /* This is what makes the background image rescale based
                 on the container's size */
              background-size: cover;
              
              /* Set a background color that will be displayed
                 while the background image is loading */
              background-color: #464646;
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
                        <a href="{{ route('login') }}">Ingreso</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bocados de Mana
                </div>

                <div class="links">
                    <a href="#Docs">Documentos</a>
                    <a href="#Noticias">Noticias</a>
                    <a href="/blog">Blog</a>
                    <a href="#">Proyecto</a>
                </div>
            </div>
        </div>

        <!--  test vue -->
            <div id="app" class="content"><!--La equita id debe ser app, como hemos visto en app.js-->
                <example-component></example-component><!--Añadimos nuestro componente vuejs-->
            </div>
        <script src="{{asset('js/app.js')}}"></script> 

        <script src="/sw.js"></script>
    </body>
</html>
