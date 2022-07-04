@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('quiz.tingkat') }}">Astronomi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pilih Soal</li>
                </ol>
            </nav>

            <div class="col-md-12" style="left: 0.5%; right: 5%;">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 card-degree" style="">
                        <a class="" href="">
                            <img class="d-block w-100 icon-image" src="{{ asset('images/SoalTipe.svg') }}" alt="First slide">
                            <h4 class="text-degree">Tingkat Kabupaten/Kota</h4>
                        </a>

                    </div>
                    <div class="col-xl-4 col-lg-6 card-degree">
                        <a class="" href="">
                            <img class="d-block w-100 icon-image" src="{{ asset('images/SoalTipe.svg') }}" alt="First slide">
                            <h4 class="text-degree">Tingkat Provinsi</h4>
                        </a>
                        
                    </div>
                    <div class="col-xl-4 col-lg-6 card-degree">
                        <a class="" href="">
                            <img class="d-block w-100 icon-image" src="{{ asset('images/SoalTipe.svg') }}" alt="First slide">
                            <h4 class="text-degree">Tingkat Nasional</h4>
                        </a>
                        
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
</div>

@endsection
