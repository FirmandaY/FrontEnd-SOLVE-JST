@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <nav class="breadcrumb-container bc-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('quiz.tingkat') }}">Astronomi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pilih Soal</li>
                </ol>
            </nav>

            <div class="col-md-12" style="left: 0.5%; right: 5%;">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 card-quest" style="">
                        <a class="" href="{{ route('quiz.soal') }}">
                            <img class="d-block w-100 icon-image" src="{{ asset('images/SoalTipe.svg') }}" alt="First slide">
                            <h4 class="text-subject-quest"><b> Astronomi </b> </h4>
                            <h5 class="text-quest"> Soal A </h5>
                           
                        </a>
                        <p class="total-quest">Jumlah Soal : 10 butir</p>
                       

                    </div>
                    <div class="col-xl-4 col-lg-6 card-quest">
                        <a class="" href="">
                            <img class="d-block w-100 icon-image" src="{{ asset('images/SoalTipe.svg') }}" alt="First slide">
                            <h4 class="text-subject-quest"><b> Kebumian </b> </h4>
                            <h5 class="text-quest"> Soal B </h5>
                        </a>
                        <p class="total-quest">Jumlah Soal : 10 butir</p>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-quest">
                        <a class="" href="">
                            <img class="d-block w-100 icon-image" src="{{ asset('images/SoalTipe.svg') }}" alt="First slide">
                            <h4 class="text-subject-quest"><b> Geografi </b> </h4>
                            <h5 class="text-quest"> Soal C </h5>
                        </a>
                        <p class="total-quest">Jumlah Soal : 5 butir</p>
                        
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
</div>

@endsection
