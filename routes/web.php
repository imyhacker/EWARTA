<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ClientController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => '/'], function($slug = null){
    Route::get('/', [ClientController::class, 'index']);
    Route::get('/berita/{slug}/selengkapnya', [ClientController::class, 'selengkapnya'])->name('selengkapnya', $slug);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'home/berita'], function($id = null){
    Route::get('/', [BeritaController::class, 'index'])->name('berita');
    Route::post('/upload_tag', [BeritaController::class, 'upload_tag'])->name('upload_tag');
    Route::post('/upload_berita', [BeritaController::class, 'upload_berita'])->name('upload_berita');

    Route::get('/{id}/hapus_tag', [BeritaController::class, 'hapus_tag'])->name('hapus_tag', $id);
    Route::get('/{id}/hapus_berita', [BeritaController::class, 'hapus_berita'])->name('hapus_berita', $id);

    Route::get('/{id}/edit', [BeritaController::class, 'edit'])->name('edit', $id);
    Route::post('/{id}/edit/update', [BeritaController::class, 'update'])->name('update', $id);
});