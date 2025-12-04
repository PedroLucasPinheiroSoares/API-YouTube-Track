<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

// Validação de e-mail
Route::get('/valida_email/{codigo}', [ProfileController::class, 'validar_email']);

// Fluxo de redefinição de senha
Route::get('/esqueceu-senha', function() {
    return view('auth.forgot-password'); // Sua view com formulário de solicitação
})->name('password.request');

Route::post('/esqueceu-senha', [ProfileController::class, 'sendResetPasswordEmail'])
     ->name('password.email');

Route::get('/reset-password/{token}', function($token) {
    return view('resetar-senha', ['token' => $token]); // View com formulário de nova senha
})->name('password.reset');

Route::post('/password/update', [ProfileController::class, 'resetPassword'])
     ->name('password.update');