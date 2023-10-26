<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/berandaapotek', function () {
    return view('berandaapotek');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dataobat', function () {
    return view('dataobat');
});

Route::get('/loginapotek', function () {
    return view('loginapotek');
});

Route::get('/pencarian', function () {
    return view('pencarian');
});

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/profilapotek', function () {
    return view('profilapotek');
});

Route::get('/profiluser', function () {
    return view('profiluser');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/tambahobat', function () {
    return view('tambahobat');
});

Route::get('ubahprofilapotek', function () {
    return view('ubahprofilapotek');
});

Route::get('ubahprofiluser', function () {
    return view('ubahprofiluser');
});