<?php


use App\Models\User;
use App\Models\Dataternak;
use App\Models\Hasilternak;
use App\Models\Jenisternak;
use App\Models\Juduljadwal;
use App\Models\Jeniskelamin;
use App\Models\Kondisiternak;
use App\Models\Statusterjual;
use App\Models\Statuskesehatan;
use App\Models\Penjadwalanternak;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DinasDataController;
use App\Http\Controllers\DataternakController;
use App\Http\Controllers\ProdukternakController;
use App\Http\Controllers\DatatransaksiController;
use App\Http\Controllers\LaporanprogressController;
use App\Http\Controllers\PenjadwalanternakController;
use App\Http\Controllers\PeternakDataprodukController;
use App\Http\Controllers\PeternakDataternakController;
use App\Http\Controllers\PembayarantransaksiController;
use App\Http\Controllers\PeternakDatalaporanController;

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

Route::get('/dataternak/{ternak:id}', [DataternakController::class, 'show']);

/////////////jenisternak///////////
Route::get('/jenisternak', function () {
    return view('jenisternak', [
        'title' => 'Halaman Jenis Ternak',
        'jenisternaks' => Jenisternak::all()
    ]);
});
/////////////statusterjual///////////
Route::get('/statusterjual', function () {
    return view('statusterjual', [
        'title' => 'Halaman Status Terjual',
        'statusterjuals' => Statusterjual::all()
    ]);
});
/////////////jeniskelamin///////////
Route::get('/jeniskelamin', function () {
    return view('jeniskelamin', [
        'title' => 'Halaman Jenis Kelamin',
        'jeniskelamins' => Jeniskelamin::all()
    ]);
});
/////////////hasilternak///////////
Route::get('/hasilternak', function () {
    return view('hasilternak', [
        'title' => 'Halaman Hasil Ternak',
        'hasilternaks' => Hasilternak::all()
    ]);
});
/////////////statuskesehatan///////////
Route::get('/statuskesehatan', function () {
    return view('statuskesehatan', [
        'title' => 'Halaman Status Kesehatan',
        'statuskesehatans' => Statuskesehatan::all()
    ]);
});
/////////////kondisiternak///////////
Route::get('/kondisiternak', function () {
    return view('kondisiternak', [
        'title' => 'Halaman Kondisi Ternak',
        'kondisiternaks' => Kondisiternak::all()
    ]);
});
/////////////juduljadwal///////////
Route::get('/juduljadwal', function () {
    return view('juduljadwal', [
        'title' => 'Halaman Jadwal',
        'juduljadwals' => Juduljadwal::all()
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

/////////////penjadwalan ternak/////////////////////


// Route::get('/penjadwalanternak', function () {
//     return view('penjadwalanternak', [
//         "title" => 'Halaman Penjadwalan Ternak',
//         'penjadwalanternaks' => Penjadwalanternak::all()
//     ]);
// });

// Route::get('/penjadwalan', function () {
//     return view('penjadwalan', [
//         "title" => 'Halaman Penjadwalan',
//         'penjadwalan' => Penjadwalanternak::all()
//     ]);
// });
// Route::get('/penjadwalanternak', function () {
//     return view('penjadwalanternak', [
//         "title" => "Halaman Penjadwalan Ternak",
//     ]);
// });

/////////////penjadwalan ternak/////////////////////

Route::get('/penjadwalanternak', [PenjadwalanternakController::class, 'index']);

Route::get('/penjadwalanternak/{penjadwalanternak:id}', [PenjadwalanternakController::class, 'show']);

/////////////laporan progress////////////////////

Route::get('/laporanprogress', [LaporanprogressController::class, 'index']);

Route::get('/laporanprogress/{laporanprogresses:id}', [LaporanprogressController::class, 'show']);
// Route::get('/laporanprogress', function () {
//     return view('laporanprogress', [
//         "title" => "Halaman Laporan Progress",
//         // "active" => "Beranda"
//     ]);
// });

/////////////laporan progress////////////////////

/////////////produk ternak////////////////////

Route::get('/toko/produkternak', [ProdukternakController::class, 'index']);

Route::get('/toko/produkternak/{produkternak:id}', [ProdukternakController::class, 'show']);

// Route::get('/hasilternak', function () {
//     return view('hasilternak', [
//         "title" => "Halaman Hasil Ternak",
//         // "active" => "Beranda"
//     ]);
// });

/////////////produk ternak////////////////////

///////////data transaksi///////////////
Route::get('/datatransaksi', [DatatransaksiController::class, 'index']);

Route::get('/datatransaksi/{datatransaksi:id}', [DatatransaksiController::class, 'show']);
///////////data transaksi///////////////

//////////////pembayaran transaksi//////////////
Route::get('/pembayarantransaksi', [PembayarantransaksiController::class, 'index']);

Route::get('/pembayarantransaksi/{pembayarantransaksi:id}', [PembayarantransaksiController::class, 'show']);
//////////////pembayaran transaksi/////////////

// Route::get('/profile', [ProfileController::class, 'index']);

// Route::get('/profile', [ProfileController::class, 'update']);

Route::get('/edit', [UserController::class, 'edit'])->name('profil.edit')->middleware('auth');

Route::put('/update', [UserController::class, 'update'])->name('profil.update')->middleware('auth');

Route::get('/profil/{user:id}', UserController::class)->name('profil')->middleware('auth');

Route::get('/masuk', [SigninController::class, 'index'])->name('masuk')->middleware('guest');

Route::post('/masuk', [SigninController::class, 'authenticate']);

Route::post('/keluar', [SigninController::class, 'logout']);

Route::get('/daftar', [SignupController::class, 'create'])->middleware('guest');

Route::post('/daftar', [SignupController::class, 'store']);

/////////////////////////////////////////////////////////
Route::get('/peternak', function () {
    if (auth()->user()->role_id != '2') {
        abort(403);
    }
    return view('peternak.homepage', [
        "title" => "Halaman Peternak",
        // "active" => "Beranda"
    ]);
})->middleware('auth');

Route::resource('/peternak/dataternak', PeternakDataternakController::class)->middleware('auth');
Route::resource('/peternak/datalaporan', PeternakDatalaporanController::class)->middleware('auth');
Route::resource('/peternak/dataproduk', PeternakDataprodukController::class)->middleware('auth');


/////////////////////////////////////////////////////////////////

Route::get('/dkpp', function () {
    if (auth()->user()->role_id != '3') {
        abort(403);
    }
    return view('dkpp.homepage', [

        "title" => "Halaman Dinas Ketahanan Pangan Dan Peternakan",
        // "active" => "Beranda"
    ]);
})->middleware('auth');

Route::resource('/dkpp/datajadwal', DinasDataController::class)->middleware('auth');

////////////////////////TESTING????????????????????????

// Route::get('/testing', function() {
//     return 'Testing';
// });