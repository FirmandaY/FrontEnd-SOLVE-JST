<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>

    <body>
        
        <div class="flex-center position-ref full-height item-layer">
            
            <nav class="navbar-expand-lg navbar-dark fixed-top py-3 backdrop">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a class="link-landing-page" href="{{ url('/home') }}">Home</a>
                        @else
                            <a class="link-landing-page" href="{{ route('login') }}">Login</a>
                            <!-- <a class="link-landing-page" href="{{ route('login.account') }}">Login</a> -->

                            @if (Route::has('register'))
                                <a class="link-landing-page link-active" href="{{ route('register') }}">Register</a>
                                <!-- <a class="link-landing-page link-active" href="{{ route('register.account') }}">Register</a> -->
                            @endif
                        @endauth
                    </div>
                    <!--Logo Perusahaan-->
                    <div class="image-logo top-right">
                        <a href="">
                            <img src="{{ asset('images/Horizontal Colored.png') }}" width="100" height="35">
                        </a>
                    </div>
                @endif
            </nav>

            <div class="back-yellow-right"></div>
            <div class="back-yellow-left"></div>
            
            <div class="container main-content-container">
                <div class="row justify-content-center">
                    <div class="col-md-6 main-left-container">

                        <div class="content-left-container">
                            <h2 class="headline"> 
                                9 Bidang Olimpiade <br>dalam Satu Aplikasi
                            </h2> <br><br>
                            <p>
                                Kerjakan beragam soal dari berbagai bidang olimpiade beserta pembahasannya secara gratis
                            </p>

                            <div class="container content-app-container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h7> Download The App </h7> <br>
                                        <div class="row">
                                            <div class="col-md-3 content-appstore">
                                                <a href="">
                                                    <img class="" src="{{ asset('images/AppStoreLogo.svg') }}" width="75" height="50">
                                                </a>
                                            </div>
                                            <div class="col-md-3 content-playstore">
                                                <a href="">
                                                    <img class="" src="{{ asset('images/PlayStoreLogo.svg') }}" width="75" height="50">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="content-poster" src="{{ asset('images/GambarPosterLP.svg') }}" width="150" height="125">
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                    
                    <div class="col-md-6 main-right-content">

                        <div class="content-right-container">
                            <img class="content-poster-andro" src="{{ asset('images/AndroLogo.svg') }}" width="300" height="475">
                        </div>
                    </div>
                </div>
            </div>

            

            <!--
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
            -->
        </div>
    </body>
</html>
