<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContratanteController;
use App\Http\Controllers\DiaristaController;
use App\Http\Controllers\PropostaController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/individual/{id}', [ContratanteController::class, 'listing'])->name('listing');
Route::post('/individual/{diarista_id}', [PropostaController::class, 'store'])->name('store.proposta');

Route::post('/profile', [DiaristaController::class, 'store'])->name('store.profilediarista');

Route::get('/profilec', function() {
    return view('contratante/profilec');
});
Route::post('/profilec', [ContratanteController::class, 'store'])->name('store.profilecontratante');


Route::get('/registerdiarista', function() {
    return view('registerdiarista');
});


Route::get('/registercontratante', function() {
    return view('registercontratante');
});

Route::get('/profile', function() {
    return view('diarista/profile');
});

Route::get('/view', function () {
    return view('view');
});
Route::get('tipoperfil', function () {
    return view('tipoperfil');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
});

