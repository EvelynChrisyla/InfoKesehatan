<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('Login');
});

Route::get('/lukaringan', function () {
    return view('lukaringan');
});

Route::get('/loginnew', function () {
    return view('loginnew');
});
Route::get('/penyakitmenular', function () {
    return view('penyakitmenular');
});

<<<<<<< Updated upstream
=======
Route::get('/bisaular', function () {
    return view('bisaular');
});

Route::get('/cidera', function () {
    return view('cidera');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/ciderapage', [App\Http\Controllers\homepagecontroller::class, 'cidera'])->name('cidera');

Route::get('/lukaringanpage', [App\Http\Controllers\homepagecontroller::class, 'lukaringan'])->name('lukaringan');

Route::get('/bisaularpage', [App\Http\Controllers\homepagecontroller::class, 'bisaular'])->name('bisaular');

Route::get('/penyakitmenularpage', [App\Http\Controllers\homepagecontroller::class, 'penyakitmenular'])->name('penyakitmenular');

>>>>>>> Stashed changes
// Route::get('/', function () {
//     return view('cidera');
// });