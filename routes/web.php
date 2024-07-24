<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/isi-form', [App\Http\Controllers\FormController::class, 'showForm'])->name('isi.form');
