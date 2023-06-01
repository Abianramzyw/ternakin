<?php


use App\Models\Jenisternak;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DataternakController;
use App\Http\Controllers\PeternakDataternakController;
use App\Models\Dataternak;

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
    return view('homepage', [
        "title" => "Halaman Beranda",
        // "active" => "Beranda"
    ]);
});

Route::get('/dataternak', [DataternakController::class, 'index']);

Route::get('/dataternak/{ternak:nama_pemilik}', [DataternakController::class, 'show']);

Route::get('/jenisternak', function () {
    return view('jenisternak', [
        'title' => 'Halaman Jenis Ternak',
        'jenisternaks' => Jenisternak::all()
    ]);
});

// Route::get('/jenisternak/{jenisternak:nama_jenis_ternak}', function (Jenisternak $jenisternak) {
//     return view('dataternak', [
//         'title' => "Halaman Jenis Hewan : $jenisternak->nama_jenis_ternak",
//         'ternaks' => $jenisternak->ternaks,
//         // 'jenisternak' => $jenisternak->nama_jenis_ternak
//     ]);
// });

// Route::get('/namapemilik/{namapemilik:nama_akun}', function (User $namapemilik) {
//     return view('dataternak', [
//         'title' => "Ternak Milik : $namapemilik->nama_akun ",
//         'ternaks' => $namapemilik->ternaks->load('jenisternak', 'user'),
//     ]);
// });

//////////////////////////////////

Route::get('/penjadwalanternak', function () {
    return view('penjadwalanternak', [
        "title" => "Halaman Penjadwalan Ternak",
        // "active" => "Beranda"
    ]);
});

Route::get('/laporanprogress', function () {
    return view('laporanprogress', [
        "title" => "Halaman Laporan Progress",
        // "active" => "Beranda"
    ]);
});

Route::get('/hasilternak', function () {
    return view('hasilternak', [
        "title" => "Halaman Hasil Ternak",
        // "active" => "Beranda"
    ]);
});


Route::get('/masuk', [SigninController::class, 'index'])->name('masuk')->middleware('guest');

Route::post('/masuk', [SigninController::class, 'authenticate']);

Route::post('/keluar', [SigninController::class, 'logout']);

Route::get('/daftar', [SignupController::class, 'create'])->middleware('guest');

Route::post('/daftar', [SignupController::class, 'store']);

Route::get('/peternak', function () {
    return view('peternak.homepage', [
        "title" => "Halaman Peternak",
        "active" => "Beranda"
    ]);
})->middleware('auth');

Route::resource('/peternak/dataternak', PeternakDataternakController::class)->middleware('auth');