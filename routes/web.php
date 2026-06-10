<?php

use Illuminate\Support\Facades\Route;
use App\Models\KuotaPaspor;

Route::get('/', function () {

    $kuota = [
        'tanggal' => now()->format('d F Y'),
        'sisa_kuota' => 47
    ];

    return view('menu', compact('kuota'));
});

Route::get('/website', function () {
    return view('website');
});