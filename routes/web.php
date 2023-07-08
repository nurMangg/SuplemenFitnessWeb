<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\hitungController;
use App\Http\Controllers\kriteriaController;
use Illuminate\Support\Facades\Route;
use App\Models\fitness;

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


Route::get('/', function () {
    return view('home-page', [
        "title" => "Home"
    ]);
});

Route::get('/product', function () {

    $data = fitness::orderBy('id', 'asc')->get();
    return view('product-page', [
        "title" => "Product"
    ])->with('data', $data);
});


Route::get('/product_details', function () {

    $data = fitness::orderBy('id', 'asc')->get();
    return view('product-details')->with('data', $data);
});

// Route::get('/spk', function () {
//     return view('spk-page', [
//         "title" => "SPK"
//     ]);
// });

Route::resource('/contact', contactController::class);


Route::get('/admin', [adminController::class, 'admin'])->middleware('auth');


Route::resource('/admin/product', adminController::class)->middleware('auth');
Route::get('/admin/message', [adminController::class, 'message'])->middleware('auth');
Route::get('/admin/user', [adminController::class, 'user'])->middleware('auth');
Route::POST('/admin/user/update/{info}', [adminController::class, 'user_update'])->middleware('auth');

// Route::get('/login', [authController::class, 'login'])->name('login');

Route::controller(authController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'authenticate');
    Route::get('/logout', 'logout');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/spk-hitung',[hitungController::class,'hitung'])->name('hitung');
Route::get('/spk',[hitungController::class,'hitung_page'])->name('hitung');
Route::get('/admin/spk-kriteria',[hitungController::class,'show']);


Route::post('/kriteria/update',[kriteriaController::class, 'update']);