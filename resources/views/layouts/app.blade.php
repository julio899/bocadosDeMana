<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/bootswatch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <style>
        
            body{

              /* Location of the image */
              background-image: url(../img/bg4.jpg);
              
              /* Background image is centered vertically and horizontally at all times */
              /*background-position: center center;*/
              background-position: 10% 100%;
              
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
            nav.navbar,.transp{
                background-color: rgba(255, 255, 255, 0.15)!important;
            }
            nav a {
                color: azure!important;
            }
            a.navbar-brand,nav div.dropdown-menu a{
                color: #5e5755!important
            }
            .inputRedondeado{
                border-radius: 20px;
            }
            .loginForm{
                margin-top: 20%;
                border-radius: 7px;
            }
            textarea.message,.ck.ck-editor__main,.ck.ck-editor__main>.ck-editor__editable{
                argin-top: 0px;
                margin-bottom: 0px;
                width: 100%;
                min-height: 400px;
                resize: none;
                overflow: auto;
            }
            .colortext{
                color: #5e5755!important;
            }
            a.list-group-item {
                font-size: 1.5em;
            }
            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                margin: 0; 
            }
            .in-title {
                border-radius: 7px;
                min-height: 50px;
                font-size: 1.8em;
                background-color: rgba(255,255,255,0.5);
                font-style: oblique;
                font-weight: 100;
            }
    </style>

<script src="{{ asset('js/ckeditor.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Bocados de Mana
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Ingreso') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
