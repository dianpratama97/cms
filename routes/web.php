<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\backend\PesanController;
use App\Http\Controllers\backend\VideoController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\AlumniController;
use App\Http\Controllers\backend\ConfigController;
use App\Http\Controllers\backend\ArticleController;
use App\Http\Controllers\backend\GalleryController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\NilaiMagangController;
use App\Http\Controllers\frontend\VideoController as FrontVideoController;
use App\Http\Controllers\frontend\AlumniController as FrontAlumniController;
use App\Http\Controllers\frontend\ArticleController as FrontArticleController;
use App\Http\Controllers\frontend\GalleryController as FrontGalleryController;



Route::get('/', function () {
    return view('pemeliharaan');
});

// Route::get('/', [HomeController::class, 'index'])->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //dashboard
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //article
    Route::resource('/admin/article', ArticleController::class);
    //users
    Route::resource('/admin/user', UserController::class)->middleware('UserAccess:admin');
    //category
    Route::resource('/admin/categories', CategoryController::class)->only(['index', 'store', 'update', 'destroy']);
    //config
    Route::resource('/admin/config', ConfigController::class);

    //pesan
    Route::get('/admin/pesan', [PesanController::class, 'index'])->middleware('UserAccess:admin')->name('admin.pesan');
    Route::PUT('/admin/pesan/{id}', [PesanController::class, 'update'])->middleware('UserAccess:admin');
    Route::get('/admin/pesan/hapus/{id}', [PesanController::class, 'hapus'])->middleware('UserAccess:admin');

    //video
    Route::resource('/admin/video', VideoController::class);

    //gallery
    Route::resource('/admin/gallery', GalleryController::class);

    // Alumi
    Route::get('/admin/alumni/excel', [AlumniController::class, 'export']);
    Route::delete('/admin/alumni/hapusSemua', [AlumniController::class, 'hapusSemua']);
    Route::resource('/admin/alumni', AlumniController::class);

    //magang
    Route::get('/admin/magang', [NilaiMagangController::class, 'list'])->name('magang.list');
    Route::post('/admin/import', [NilaiMagangController::class, 'import'])->name('magang.import');
    Route::get('/admin/magang/{id}', [NilaiMagangController::class, 'detail'])->name('magang.detail');

    Route::group(['prefix' => 'laravel-filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

require __DIR__ . '/auth.php';

Route::get('/block', function () {
    return view('block_access.404');
});

//article home
Route::get('/artikel', [FrontArticleController::class, 'index'])->name('artikel.blog');
Route::post('/artikel/pencarian', [FrontArticleController::class, 'index'])->name('artikel.pencarian');
Route::get('/p/{slug}', [FrontArticleController::class, 'show']);

//pesan home
Route::post('/pesan/kirim', [PesanController::class, 'inbox'])->name('pesan.user');

//galley home
Route::get('/gallery', [FrontGalleryController::class, 'index'])->name('gallery.blog');

//video home
Route::get('/video', [FrontVideoController::class, 'index'])->name('video.blog');

//alumni home
Route::get('/alumni', [FrontAlumniController::class, 'index'])->name('alumni.blog');
Route::post('/alumni/bekerja', [FrontAlumniController::class, 'storeBekerja'])->name('alumni.bekerja');
Route::post('/alumni/kuliah', [FrontAlumniController::class, 'storeKuliah'])->name('alumni.kuliah');
Route::post('/alumni/wirausaha', [FrontAlumniController::class, 'storeWirausaha'])->name('alumni.wirausaha');
Route::post('/alumni/belum-bekerja-kuliah', [FrontAlumniController::class, 'storeBelumBekerjaKuliah'])->name('alumni.belumBekerjaKuliah');
Route::get('/nilai/index', [NilaiMagangController::class, 'index'])->name('nilai.index');
Route::post('/nilai/store', [NilaiMagangController::class, 'store'])->name('nilai.store');
