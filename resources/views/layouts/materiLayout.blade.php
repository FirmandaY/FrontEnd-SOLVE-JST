<!doctype html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/quizMaterial.css') }}" rel="stylesheet">

</head>
<body>
    <div id="main">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!--{{ config('app.name', 'Laravel') }}-->
                        <img src="{{ asset('images/Horizontal Colored.png') }}" width="85" height="35">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                        
                    </div>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                        <img src="{{ asset('images/Avatar.svg') }}" alt="Avatar" class="avatar">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <a class="dropdown-item" href="" > My Profile </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            @if(Auth::check())
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" style="font-size:24px;cursor:pointer;color:#fff" class="closebtn content-a" onclick="closeNav()">&#9776;</a>
                <br>
                <br>
                <br>
                <a href="#" class="content-a"><i class="fa fa-fw fa-home"></i>Home</a>
                <a id="navbarDropdown" class="content-a dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <i class="fa fa-fw fa-book"></i>
                    Kuis
                </a> 

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('quiz.tingkat') }}"> Astronomi </a>

                    <a class="dropdown-item" href="" > Biologi </a>

                </div>

                <a class="content-a" href="#"><i class="fa fa-fw fa-history"></i>History</a>
                <a class="content-a" href="#"><i class="fa fa-fw fa-trophy"></i>Leaderboard</a>
                <a class="content-a" href="{{ route('materi.awal') }}"><i class="fa fa-fw fa-desktop"></i>Materi</a>

                <div class="mascot-container">
                    <img class="sidebar-mascot" src="{{ asset('images/SidebarMascot.png') }}">
                </div>

            </div>
            <div class="bar">
                <a style="font-size:24px;cursor:pointer;color:#fff" onclick="openNav()">&#9776;</a>
            </div>
            <script>
                function openNav() {
                document.getElementById("mySidenav").style.width = "190px";
                document.getElementById("main").style.marginLeft = "180px";
                }
                
                function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
                }
            </script>

            @endif

            <main class="py-4">
                @yield('contentMateri')
            </main>
        </div>
    </div>
    
</body>
</html>
