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


Route::get('/puskesmas', function () {
    return view('puskesmas');
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

// Route::get('/store/posyandu', function () {

// })->name('store.posyandu');
use App\Http\Controllers\PosyanduController;
use App\Models\Posyandu;

Route::get('/posyandu/create', [PosyanduController::class, 'create'])->name('create.posyandu');
Route::post('/posyandu/store', [PosyanduController::class, 'store'])->name('store.posyandu');
Route::get('/puskesmasadmin', [PosyanduController::class, 'index'])->name('puskesmasadmin');
Route::get('/posyandu/edit/{id}', [PosyanduController::class, 'edit'])->name('edit.posyandu');
Route::put('/posyandu/update/{id}', [PosyanduController::class, 'update'])->name('update.posyandu');
Route::delete('/posyandu/delete/{id}', [PosyanduController::class, 'destroy'])->name('delete.posyandu');
// Route::get('/', [PosyanduController::class, 'getData'])->name('homepage');

use App\Http\Controllers\KlinikController;
use App\Models\Klinik;


Route::get('/klinik/create', [KlinikController::class, 'create'])->name('create.klinik');
Route::post('/klinik/store', [KlinikController::class, 'store'])->name('store.klinik');
Route::get('/klinikadmin', [KlinikController::class, 'index'])->name('klinikadmin');
Route::get('/klinik/edit/{id}', [KlinikController::class, 'edit'])->name('edit.klinik');
Route::put('/klinik/update/{id}', [KlinikController::class, 'update'])->name('update.klinik');
Route::delete('/klinik/delete/{id}', [KlinikController::class, 'destroy'])->name('delete.klinik');
// Route::get('/', [KlinikController::class, 'getData'])->name('homepage');
// Route::get('/klinik-homepage', [KlinikController::class, 'getData'])->name('klinik_homepage');
// Route::get('/posyandu-homepage', [PosyanduController::class, 'getData'])->name('posyandu_homepage');

//LANSIA 
use App\Http\Controllers\LansiaController;
use App\Models\Lansia;

Route::get('/lansia/create', [LansiaController::class, 'create'])->name('create.lansia');
Route::post('/lansia/store', [LansiaController::class, 'store'])->name('store.lansia');
Route::get('/lansiaadmin', [LansiaController::class, 'index'])->name('lansiaadmin');
Route::get('/lansia/edit/{id}', [LansiaController::class, 'edit'])->name('edit.lansia');
Route::put('/lansia/update/{id}', [LansiaController::class, 'update'])->name('update.lansia');
Route::delete('/lansia/delete/{id}', [LansiaController::class, 'destroy'])->name('delete.lansia');

//IBU HAMIL 
use App\Http\Controllers\HamilController;
use App\Models\Hamil;

Route::get('/hamil/create', [HamilController::class, 'create'])->name('create.hamil');
Route::post('/hamil/store', [HamilController::class, 'store'])->name('store.hamil');
Route::get('/hamiladmin', [HamilController::class, 'index'])->name('hamiladmin');
Route::get('/hamil/edit/{id}', [HamilController::class, 'edit'])->name('edit.hamil');
Route::put('/hamil/update/{id}', [HamilController::class, 'update'])->name('update.hamil');
Route::delete('/hamil/delete/{id}', [HamilController::class, 'destroy'])->name('delete.hamil');


use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('homepage');
