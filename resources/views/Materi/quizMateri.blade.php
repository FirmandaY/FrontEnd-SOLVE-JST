@extends('layouts.materiLayout')

@section('contentMateri')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" style="left: 2%; right: 5%;">

            <nav class="breadcrumb-container bc-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Biologi</li>
                </ol>
            </nav>

            <div class="col-md-12" style="left: 0.5%; right: 5%;">
                <div class="row">
                    <div class="col-xl-4 left-material-container" style="">
                        <div class="left-content-container">
                            <h4 class="materi-title">Daftar Materi</h4>
                            <div class="tab">
                                <!-- SETIAP BUTTON YANG ADA PADA SISI HALAMAN -->
                                <button class="tablinks" onclick="openCity(event, 'London')">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="button-number"><strong>1</strong></div>
                                            </div>
                                            <div class="col-md-10">
                                                <p class="course-title"><strong>London knxbhabbahb nxjkaba janxjkan janxa oanxu annxuah kahhx bub</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>


                                <button class="tablinks" onclick="openCity(event, 'Paris')">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="button-number"><strong>1</strong></div>
                                            </div>
                                            <div class="col-md-10">
                                                <p><strong>Paris knxbhabbahb nxjkaba janxjkan janxa oanxu annxuah kahhx bub</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>


                                <button class="tablinks" onclick="openCity(event, 'Tokyo')">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="button-number"><strong>1</strong></div>
                                            </div>
                                            <div class="col-md-10">
                                                <p><strong>Tokyo knxbhabbahb nxjkaba janxjkan janxa oanxu annxuah kahhx bub</strong></p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                                
                            </div>
                        
                        </div>

                    </div>
                    <div class="col-xl-8 right-material-container">
                        <div class="right-content-container">
                            <p>Here Is Right Section</p>
                        </div>
                        
                    </div>
                   
                </div>
            </div>

        </div>
        
    </div>
    
</div>

@endsection
