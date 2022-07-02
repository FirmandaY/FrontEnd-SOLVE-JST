@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <!--
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> -->

            <div id="carouselExampleIndicators" class="carousel slide carousel-container" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/Horizontal Colored.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/PembinaanJST.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/PlayStoreLogo.svg') }}" alt="Third slide">
                </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>


            <div class="col-md-12" style="left: 2%; right: 5%;">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 card-subject" style="margin-bottom: 25px;">
                        <a href="">
                            <h4 class="text-subject">Astronomi</h4>
                            <img class="d-block w-100" src="{{ asset('images/AstronomiItem.svg') }}" alt="First slide">
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-6 card-subject">
                        <a href="">
                            <h4 class="text-subject">Biologi</h4>
                            <img class="d-block w-100" src="{{ asset('images/BiologiItem.svg') }}" alt="First slide">
                        </a>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-subject">
                        <a href="">
                            <h4 class="text-subject">Ekonomi</h4>
                            <img class="d-block w-100" src="{{ asset('images/EkonomiItem.svg') }}" alt="First slide">
                        </a>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-subject">
                        <a href="">
                            <h4 class="text-subject">Fisika</h4>
                            <img class="d-block w-100" src="{{ asset('images/FisikaItem.svg') }}" alt="First slide">
                        </a>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-subject" style="margin-bottom: 25px;">
                        <a href="">
                            <h4 class="text-subject">Geografi</h4>
                            <img class="d-block w-100" src="{{ asset('images/GeografiItem.svg') }}" alt="First slide">
                        </a>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-subject">
                        <a href="">
                            <h4 class="text-subject">Kebumian</h4>
                            <img class="d-block w-100" src="{{ asset('images/KebumianItem.svg') }}" alt="First slide">
                        </a>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-subject">
                        <a href="">
                            <h4 class="text-subject">Kimia</h4>
                            <img class="d-block w-100" src="{{ asset('images/KimiaItem.svg') }}" alt="First slide">
                        </a>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-subject">
                        <a href="">
                            <h4 class="text-subject">Komputer</h4>
                            <img class="d-block w-100" src="{{ asset('images/KomputerItem.svg') }}" alt="First slide">
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
</div>

@endsection
