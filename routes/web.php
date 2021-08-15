<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\VotingController;
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

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login',[LoginController::class, 'index'])->name('login');
Route::post('process_login', [LoginController::class, 'process_login'])->name('process_login');

Route::group(['middleware' => ['auth']], function(){
    Route::group(['middleware'=> ['cek_login:admin']], function(){
        Route::get('/hasil',[AdminController::class, 'hasil'])->name('admin.hasil');
        // Route::get('/admin/daftar-siswa',[AdminController::class, 'daftar'])->name('admin.daftar');
        Route::resource('daftar', UserController::class);
    });
    Route::group(['middleware'=> ['cek_login:voter']], function(){
        Route::get('/voting', [VotingController::class, 'voting'])->name('voter');
        Route::get('/terima-kasih', [VotingController::class, 'berhasil'])->name('berhasil');
        Route::get('/{slug:slug}', [VotingController::class, 'visimisi'])->name('visimisi');
        Route::put('/users/{id}/pilih', [VotingController::class, 'pilih'])->name('pilih');
    });
});

// Route::get('/', function () {
//     return redirect('/login');
// });

// Route::get('/login',[LoginController::class, 'login'])->name('login');

// Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');

// Route::group(['middleware' => ['auth']], function(){
//     Route::get('/voting',[VotingController::class, 'voting']);
//     Route::get('/{slug:slug}', [VotingController::class, 'visimisi']);
// });
// Route::get('/admin/daftar', function () {
//     return view('admin.daftar');
// });
// Route::get('/admin/hasil', function () {
//     return view('admin.hasil');
// });
