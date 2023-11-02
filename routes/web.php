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

Route::get('/ubahprofilapotek', function () {
    return view('ubahprofilapotek');
});

Route::get('ubahprofiluser', function () {
    return view('ubahprofiluser');
});

Route::get('daftar_apotek', function () {
    return view('daftar_apotek');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('kategori_demam', function () {
    return view('kategori_demam');
});

Route::get('kategori_diare', function () {
    return view('kategori_diare');
});

Route::get('kategori_flu_dan_batuk', function () {
    return view('kategori_flu_dan_batuk');
});

Route::get('kategori_lainnya', function () {
    return view('kategori_lainnya');
});

Route::get('kategori_pusing', function () {
    return view('kategori_pusing');
});

Route::get('kategori_sesak_nafas', function () {
    return view('kategori_sesak_nafas');
});
