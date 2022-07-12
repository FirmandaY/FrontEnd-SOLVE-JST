@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <nav class="breadcrumb-container bc-style" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('quiz.tingkat') }}">Astronomi</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('quiz.jenis.soal') }}">Tingkat Provinsi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Soal A</li>
                </ol>
            </nav>

            <!-- Container INFORMASI UMUM Quiz -->
            <div class="col-md-12" style="left: 0.5%; right: 5%;">
                <div class="row">

                    <!-- Container untuk STATUS INFORMASI UMUM Quiz -->
                    <div class="col-md-8" style="background-color: aqua;">
                       
                        <div class="col-md-12 left-info-container">
                            <div class="row">
                                <div class="col-md-6 content-info">
                                    <p class="" style="white-space: pre;">Kategori         : Ekonomi</p>
                                    <p class="" style="white-space: pre;">Time               : 20 Menit</p>
                                    <p class="" style="white-space: pre;">Jumlah Soal   : 10 butir</p>
                                </div>
                                <div class="col-md-6 content-info">
                                    <p class="" style="white-space: pre;">Poin Benar                    : +4</p>
                                    <p class="" style="white-space: pre;">Poin Salah                    : -1</p>
                                    <p class="" style="white-space: pre;">Poin Tidak Menjawab : -1</p>
                                </div>
                            </div>
                        </div>
                       

                    </div>

                    <!-- Container dan JS untuk TIMER Quiz -->
                    <div class="col-md-4" style="background-color: red;">
                        
                        <div class="right-info-container">
                            <p class="title-timer"><b>Waktu</b></p>
                            
                            <!-- Display the countdown timer in an element -->
                            <p id="demo" class="content-timer"></p>

                            <script>
                            // Set the date we're counting down to
                            var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

                            // Update the count down every 1 second
                            var x = setInterval(function() {

                            // Get today's date and time
                            var now = new Date().getTime();

                            // Find the distance between now and the count down date
                            var distance = countDownDate - now;

                            // Time calculations for days, hours, minutes and seconds
                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                            // Display the result in the element with id="demo"
                            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                            + minutes + "m " + seconds + "s ";

                            // If the count down is finished, write some text
                            if (distance < 0) {
                                clearInterval(x);
                                document.getElementById("demo").innerHTML = "EXPIRED";
                            }
                            }, 1000);
                            </script>

                        </div>
                        
                    </div>
                </div>
            </div>
            <br>

            <!-- Container untuk SOAL dan STATUS PENJAWABAN Quiz -->
            <div class="col-md-12" style="left: 0.5%; right: 5%;">
                <div class="row">
                    <div class="col-md-8" style="background-color: aqua;">
                        <!-- Container untuk soal-soal Quiz -->
                        <div class="question-manual" >
                            <p class="">Pilihlah salah satu jawaban yang Anda anggap tepat dari soal-soal di bawah ini!</p>
                        </div>
                        <!--TAG <FORM> DIGUNAKAN UNTUK BUTTON PADA SETIAP TOMBOL JAWABAN-->
                        <form type="" action="">
                            <div class="col-md-12 left-question-container">

                                <!-- SETIAP SOAL MEMILIKI ROW SENDIRI-SENDIRI -->
                                <div class="row quiz-row">
                                    <div class="col-md-1 quiz-number">
                                        <p class="">1</p>
                                    </div>
                                    <div class="col-md-11 quiz-question">
                                        <p class="">
                                            Diketahui suatu fungsi permintaan dinyatakan dengan Qd = 50.000 – 3P dan fungsi
                                            penawaran Qs = -20.000 + 5P, pemerintah menetapkan pajak sebesar Rp500,00 per unit.
                                            Berdasarkan data tersebut harga keseimbangan setelah pajak ....
                                        </p>

                                        <!--PILIHAN JAWABAN QUIZ MEMILIKI SECTION GRID TERSENDIRI SEPERTI BERIKUT-->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <!-- <a class="button-option" href="">A</a> -->
                                                    <button class="button-option">A</button>
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="answer-content">8.750</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <!-- <a class="" href="">B</a> -->
                                                    <button class="button-option">B</button>
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="answer-content">9.062,5</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <!-- <a class="" href="">C</a> -->
                                                    <button class="button-option">C</button>
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="answer-content">22.812,5</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <!-- <a class="" href="">D</a> -->
                                                    <button class="button-option">D</button>
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="answer-content">23.750</p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <!-- <a class="" href="">E</a> -->
                                                    <button class="button-option">E</button>
                                                </div>
                                                <div class="col-md-10">
                                                    <p class="answer-content">30.000</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="question-manual" >
                            <p class="">----------------------------------</p>
                        </div>
                       

                    </div>

                    <!-- Container untuk STATUS NOMOR dan NAVIGASI PENJAWABAN SOAL -->
                    <div class="col-md-4" style="background-color: red;">
                        <!-- Container TITLE NAVIGASI soal-soal Quiz -->
                        <div class="right-question-container">
                            <div class="navigation-manual">
                                <p class=""><b>Navigasi Soal</b></p>
                            </div>

                            <div class="row" style="margin-right: 2%; margin-left: 2%;">
                                <div class="col-md-2 num-container">
                                    <a href="" class="num-question">
                                        <b>1</b>
                                    </a>
                                </div>
                                <div class="col-md-2 num-container">
                                    <a href="" class="num-question">
                                        <b>2</b>
                                    </a>
                                </div>
                                <div class="col-md-2 num-container">
                                    <a href="" class="num-question">
                                        <b>3</b>
                                    </a>
                                </div>
                                <div class="col-md-2 num-container">
                                    <a href="" class="num-question">
                                        <b>4</b>
                                    </a>
                                </div>
                                <div class="col-md-2 num-container">
                                    <a href="" class="num-question">
                                        <b>5</b>
                                    </a>
                                </div>
                            </div>

                            <p class="indicator-info"><b>Keterangan</b></p>
                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-sm-1 indicator-container">
                                    <a href="" class="done-indicator"></a> 
                                   
                                </div>
                                <p>Sudah dijawab</p>
                            </div> 
                            <div class="row" style="margin-bottom: 5px;">
                                <div class="col-sm-1 indicator-container">
                                    <a href="" class="undone-indicator"></a> 
                                   
                                </div>
                                <p>Belum dijawab</p>
                            </div>

                            <a href="{{ route('quiz.pembahasan') }}" class="btn btn-warning submit-button"><strong>Kumpulkan Jawaban</strong></a>
                        </div>
                        
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    
</div>

@endsection
