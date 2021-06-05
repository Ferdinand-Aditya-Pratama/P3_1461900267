<?php

use App\Http\Controllers\TokoController;
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

Route::get('/', function () {
    return view('welcome');
});

route::resource('toko', TokoController::class);
route::resource('tambah_transaksi0267', TokoController::class);
route::resource('edit_transaksi0267', TokoController::class);
route::resource('edit_transaksi0267', TokoController::class);