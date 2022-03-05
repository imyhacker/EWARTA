<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\PengaturanController;

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


Route::controller(BeritaController::class)->prefix('home/berita')->group(function($id = null){

    Route::get('/','index')->name('berita');
    Route::post('/upload_tag', 'upload_tag')->name('upload_tag');
    Route::post('/upload_berita', 'upload_berita')->name('upload_berita');
    Route::get('/{id}/hapus_tag', 'hapus_tag')->name('hapus_tag', $id);
    Route::get('/{id}/hapus_berita', 'hapus_berita')->name('hapus_berita', $id);
    Route::get('/{id}/edit', 'edit')->name('edit', $id);
    Route::post('/{id}/edit/update','update')->name('update', $id);
});

Route::controller(InfoController::class)->prefix('home/info')->group(function($id = null){
    Route::get('/', 'index')->name('info');
    Route::get('/{id}/edit', 'edit')->name('edit_info', $id);
    Route::post('/{id}/edit/update','update')->name('update_info', $id);
    Route::get('/{id}/hapus_info', 'hapus_info')->name('hapus_info', $id);
    Route::post('/upload_info', 'upload_info')->name('upload_info');
});

Route::controller(PengaturanController::class)->prefix('home/pengaturan')->group(function(){
    Route::get('/', 'index')->name('pengaturan');
    Route::post('/upload_setting', 'upload_setting')->name('upload_setting');
    Route::post('/upload_tentang', 'upload_tentang')->name('upload_tentang');
});
