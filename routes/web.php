<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ROUTE for QUIZ QUESTION

Route::get('/quiz/pilihTingkat', 'QuizController@indexTingkat')->name('quiz.tingkat');

Route::get('/quiz/pilihSoal', 'QuizController@indexJenisSoal')->name('quiz.jenis.soal');

Route::get('/quiz/kerjakanSoal', 'QuizController@indexSoal')->name('quiz.soal');

Route::get('/quiz/pembahasanSoal', 'QuizController@indexPembahasan')->name('quiz.pembahasan');

//ROUTE for QUIZ MATERIAL

Route::get('/quiz/materiAwal', 'MateriController@indexMateriAwal')->name('materi.awal');
