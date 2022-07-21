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

//Route::post('/login', 'Auth\LoginController@loginAPI')->name('login.api');
Route::post('login', 'Auth\LoginController@loginAPI');

Auth::routes();

//ROUTE REGISTER KE API SOLVE
// Route::get('/registerAPI', 'AuthAPIController@createAccount')->name('register.account');
// Route::post('/registerAPI/storeRegister', 'AuthAPIController@storeRegister')->name('store.account');

//ROUTE LOGIN KE API SOLVE
// Route::get('/loginAPI', 'AuthAPIController@loginAccount')->name('login.account');
// Route::post('/loginAPI/storeLogin', 'AuthAPIController@storeLogin')->name('store.login');

//ROUTE FORGOT PASSWORD
// Route::post('/forgotPassword', 'AuthAPIController@forgotPassword')->name('forgotPassword.form');
// Route::post('/forgotPassword/storeForgotenPassword', 'AuthAPIController@storeForgotenPassword')->name('forgotPassword.store');


Route::get('/home', 'HomeController@index')->name('home');


// ROUTE FOR USER PROFILE
Route::get('/myprofile', 'ProfileController@indexProfile')->name('profile.index');

// ROUTE for QUIZ QUESTION

Route::get('/quiz/pilihTingkat', 'QuizController@indexTingkat')->name('quiz.tingkat');

Route::get('/quiz/pilihSoal', 'QuizController@indexJenisSoal')->name('quiz.jenis.soal');

Route::get('/quiz/kerjakanSoal', 'QuizController@indexSoal')->name('quiz.soal');

Route::get('/quiz/pembahasanSoal', 'QuizController@indexPembahasan')->name('quiz.pembahasan');

//ROUTE for QUIZ MATERIAL

Route::get('/quiz/materiAwal', 'MateriController@indexMateriAwal')->name('materi.awal');
