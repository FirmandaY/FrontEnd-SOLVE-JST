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

Route::get('/registerAPI', 'AuthAPIController@createAccount')->name('register.account');
Route::post('/registerAPI/store', 'AuthAPIController@store')->name('store.account');

Route::get('/userdetail', function(){
    $response = Http::withHeaders([
        'Accept' => 'application/json',
        'Authorization' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjI3OWJjODRhZGFjY2NlZmExNzUwMzQ5N2Q5N2ZjNmRhOTJjNTJmZTZkNzdiYmZjMzlhNmM1NzAyN2YyZDYxYTFjMjA0MTdmZjdiNWY3MWU1In0.eyJhdWQiOiIzIiwianRpIjoiMjc5YmM4NGFkYWNjY2VmYTE3NTAzNDk3ZDk3ZmM2ZGE5MmM1MmZlNmQ3N2JiZmMzOWE2YzU3MDI3ZjJkNjFhMWMyMDQxN2ZmN2I1ZjcxZTUiLCJpYXQiOjE2NTc1MzIzOTAsIm5iZiI6MTY1NzUzMjM5MCwiZXhwIjoxNjg5MDY4MzkwLCJzdWIiOiIxNjAxIiwic2NvcGVzIjpbXX0.HBukowoesjqhYJoVk8oHPauqchYzO7wHFtPWtHTqr-ITlVPrzDMLvdVVHHGLR6ibA8jAB_6-UIHNlCegJI_b2pRmuYIJ5r9yAGLbI_3xbydgZPujlduN-xUQ45jM46xaTb8zCNXwydD5ogbVV8LZop9PVrIuAY0IZLCL8jDXR6HjSYEiBNDMmJWpT_9XIXfZlDfqiIy_bj8Bk4EJQsraLQaO2JAv5LAkxTxztOtXxqQUJQEg_Hao4sWcC5HT1FPD5iCASq-4b8HBnLUwjBrmXh25bzZQ0ClVra8OFSBZu39O2YUpgg5ciWiRpBNWyMcp1i6dD_mHFbPs6zKvh1HSYJR2xOYZu5kp2fdZCKrPXhN0dQ_q4Kr7Bsz6ebCfShmrjuw21l9VxRMFBejSzVjFaTo5OpzqzQusrSf6aCXikbH5P8KTe00ld7TUvF6YZHgGxQIXiHWCjA4DiA0XpJSuHo-p50uQ2LJTDTWnlzXusMuJniYYJ9mIBHkPYudcWXmqwtV89qypftlayMH5V6u2EG3wa1MSQO1155hIAC8SKtCSl6g_981QvjmX60D8nGo8p7KRFizq0umi1CzTYSX2wC9Qgp57obe3JI3aWpgAt035mTptqTJ0z3doDOhRbl6Kyjfbi5QATKoDsxeUMtcRX6JQgWyvI1_1T2yDV5SQU4I',
        'Content-Type' => 'application/x-www-form-urlencoded'
    ])
    ->get('http://solve.technow.id/api/collager/detail')
    ->json();
    
    dd($response);
});

Route::get('/testing', function(){
    $response = Http::get('https://newsapi.org/v2/everything?q=game&apiKey=9ee42810f982424cbc8fb13cd90d85e7');
    $response->json();
    dd($response);
});

Route::get('/home', 'HomeController@index')->name('home');

// ROUTE for QUIZ QUESTION

Route::get('/quiz/pilihTingkat', 'QuizController@indexTingkat')->name('quiz.tingkat');

Route::get('/quiz/pilihSoal', 'QuizController@indexJenisSoal')->name('quiz.jenis.soal');

Route::get('/quiz/kerjakanSoal', 'QuizController@indexSoal')->name('quiz.soal');

Route::get('/quiz/pembahasanSoal', 'QuizController@indexPembahasan')->name('quiz.pembahasan');

//ROUTE for QUIZ MATERIAL

Route::get('/quiz/materiAwal', 'MateriController@indexMateriAwal')->name('materi.awal');
