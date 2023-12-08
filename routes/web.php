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


Route::get('/maps', function() {
    return view('maps');
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



// Route::middleware('auth:admin')->group(function () {
//     Route::resource('jadwaldokter', jadwalController::class)->names([
//         'index' => 'admin.cidera',
//     ]);
// });

Route::middleware('auth:admin')->group(function () {
    Route::resource('jadwaldokter', jadwalController::class)->names([
        'index' => 'admin.jadwal.index', // Adjust the naming as needed
    ]);
});

Route::prefix('admin')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('admin.login');

    Route::post('/login', [AdminLoginController::class, 'login']);
});


Route::get('/admin/maps', function () {
    return view('adminmaps');
});

// Route::get('/adminhomepage', function () {
//     return view('adminhomepage');
// });

// Route::post('/admin/maps/store', 'ClinicController@store')->name('store.clinic');

use App\Http\Controllers\ClinicController;
use App\Models\Clinic;

Route::get('/admin/maps', function () {
    $clinics = Clinic::all();
    return view('adminmaps', compact('clinics'));
})->name('admin.maps');

// Menampilkan daftar klinik yang sudah ada
Route::get('/show-clinics', [ClinicController::class, 'show'])->name('show.clinics');

// Menyimpan klinik baru
Route::post('/admin/maps/store', [ClinicController::class, 'store'])->name('store.clinic');


Route::get('/admin/maps/edit/{id}', [ClinicController::class, 'edit'])->name('edit.clinic');

// Rute untuk melakukan update pada klinik yang diedit
Route::put('/admin/maps/update/{id}', [ClinicController::class, 'update'])->name('update.clinic');

// Rute untuk menghapus klinik
Route::delete('/admin/maps/delete/{id}', [ClinicController::class, 'destroy'])->name('delete.clinic');

Route::get('/createclinic', function () {
    return view('createclinic'); // Ganti 'createclinic' dengan nama blade yang Anda buat untuk form tambah klinik
});

Route::get('/admin/maps', [ClinicController::class, 'index'])->name('admin.maps');


// Route::get('/clinic/cards', function () {
//     $clinics = Clinic::all();
//     return view('cardclinic', compact('clinics'));
// });

Route::get('/informasiklinik', function () {
    $clinics = App\Models\Clinic::all(); // Ambil semua data klinik dari model
    return view('cardclinic', compact('clinics'));
})->name('informasiklinik');


Route::get('/adminhomepage', function () {
    return view('adminhomepage');
})->name('adminhomepage');