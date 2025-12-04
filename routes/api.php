<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CanaisController;


Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest') ->name('register');

Route::post('/login', [ProfileController::class, 'createToken'])->name('login');

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/canais', [CanaisController::class, 'exibir_canais']);
Route::get('/canal/{id_canal}', [CanaisController::class, 'exibir_canal']);
Route::post('/canal/filtrado', [CanaisController::class, 'filtrar_canal']);
Route::post('/criar/canal', [CanaisController::class, 'criar_canal']);
Route::put('/atualizar/canal/{id_canal}', [CanaisController::class, 'atualizar_canal']);
Route::delete('/deletar/canal/{id_canal}', [CanaisController::class, 'deletar_canal']);
