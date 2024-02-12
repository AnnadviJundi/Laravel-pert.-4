<?php

use Illuminate\Support\Facades\Route;

// Menambahkan view daftar_nilai
//Tambahkan route baru di routes/web.php
Route::get('/daftarnilai', function () {
    return view('/p4/daftar_nilai');
});
