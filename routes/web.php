<?php

use App\Http\Controllers\jadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


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

Route::get('/bisaular', function () {
    return view('bisaular');
});

Route::get('/cidera', function () {
    return view('cidera');
});

Route::get('/', function() {
    return view('homepage');
});

Route::get('/card', function() {
    return view('carousel');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/ciderapage', [App\Http\Controllers\homepagecontroller::class, 'cidera'])->name('cidera');


Route::get('/lukaringanpage', [App\Http\Controllers\homepagecontroller::class, 'lukaringan'])->name('lukaringan');

Route::get('/bisaularpage', [App\Http\Controllers\homepagecontroller::class, 'bisaular'])->name('bisaular');

Route::get('/penyakitmenularpage', [App\Http\Controllers\homepagecontroller::class, 'penyakitmenular'])->name('penyakitmenular');

// Route untuk Nav Bar
Route::get('/homepage', [App\Http\Controllers\homepagecontroller::class, 'beranda'])->name('beranda');

Route::get('/tentang', [App\Http\Controllers\homepagecontroller::class, 'tentang'])->name('tentang');

Route::get('/kontak', [App\Http\Controllers\homepagecontroller::class, 'kontak'])->name('kontak');
// Route::get('/', function () {
//     return view('cidera');
// });

Route::resource('jadwaldokter', jadwalController::class);


//untuk jadwal diakses ke masyrakat
Route::get('/jadwal', [App\Http\Controllers\JadwalController::class, 'showForPublic'])->name('jadwal');



 Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

// Route::middleware('auth:admin')->group(function () {
//     Route::get('/cidera', function () {
//         return view('cidera');
//     })->name('admin.cidera');
// });



// Route yang memerlukan otentikasi admin
// Route::middleware('auth:admin')->group(function () {
//     Route::get('/cidera', function () {
//         return view('cidera'); })->name('admin.cidera');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/login', function () {
//         return view('login');
//     })->name('admin.login');

//     Route::post('/login', [AdminLoginController::class, 'login']);
// });



Route::middleware('auth:admin')->group(function () {
    // Ganti route untuk menampilkan page jadwaldokter
    Route::resource('jadwaldokter', jadwalController::class)->names([
        'index' => 'admin.cidera',
    ]);
});

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('admin.login');

    Route::post('/login', [AdminLoginController::class, 'login']);
});