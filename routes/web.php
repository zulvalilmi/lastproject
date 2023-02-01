<?php

use App\Http\Controllers\ChartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasAndroidController;
use App\Http\Controllers\KelasTahfidzController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ParentsController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\SetoranController;
use App\Http\Controllers\TahfidzController;
use App\Models\Tahfidz;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(LandingController::class)->group(function (){
  Route::get('/', 'index')->name('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/first')->middleware(['auth', 'isUstadzah'])->group(function(){

    Route::controller(DashboardController::class)->group(function () {
          Route::get('/dashboard', 'index')->name('dashboard');
      });

    Route::controller(KelasAndroidController::class)->group(function () {
          Route::get('/android', 'index')->name('kelas.android');
          Route::post('/android.store', 'store')->name('kelas.android.store');
          Route::put('/android.update', 'update')->name('kelas.android.update');
          Route::delete('/android.delete', 'destroy')->name('kelas.android.delete');
      });

    Route::controller(KelasTahfidzController::class)->group(function () {
          Route::get('/ustadzah', 'index')->name('ustadzah');
          Route::get('/ustadzah.create', 'create')->name('ustadzah.create');
          Route::post('/ustadzah.store', 'store')->name('ustadzah.store');
          Route::put('/ustadzah.update', 'update')->name('ustadzah.update');
          Route::delete('/ustadzah.delete', 'destroy')->name('ustadzah.delete');
      });

      Route::controller(TahfidzController::class)->group(function () {
        Route::get('/tahfidz', 'index')->name('tahfidz');
        Route::get('/tahfidz.create', 'create')->name('tahfidz.create');
        Route::post('/tahfidz.store', 'store')->name('tahfidz.store');
        Route::delete('/tahfidz.delete', 'destroy')->name('tahfidz.delete');
      });

      Route::controller(SetoranController::class)->group(function () {
        Route::get('/setoran', 'setoran')->name('setoran');
        Route::get('/buat.setoran', 'create')->name('setoran.create');
        Route::post('/setoran.store', 'store')->name('setoran.store');
        Route::delete('/setoran.hapus', 'destroy')->name('setoran.destroy');
    });

    Route::controller(SantriController::class)->group(function () {
      Route::get('/santri', 'index')->name('santri');
      Route::get('/santri.create', 'create')->name('santri.create');
      Route::post('/santri.store', 'store')->name('santri.store');
      Route::put('/santri.update', 'update')->name('santri.update');
      Route::delete('/santri.delete', 'destroy')->name('santri.delete');
  });

  Route::controller(ChartController::class)->group(function () {
    Route::get('/chart', 'chart')->name('chart');
    Route::get('/grafik/{id}', 'grafik')->name('grafik');
    // Route::get('/rgstr', 'rgstr')->name('rgstr');

  });

});

  // rute untuk santri atau ortu just for lokit lokit jee wkwk
  Route::prefix('/second')->middleware(['auth', 'isParents'])->group(function(){

    Route::controller(ParentsController::class)->group(function () {
          Route::get('/parents', 'index')->name('parents');
      });
  });
