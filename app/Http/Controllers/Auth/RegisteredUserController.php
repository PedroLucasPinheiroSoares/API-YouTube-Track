<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\JsonResponse;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Registrar um novo usuário e gerar o token.
     */
    public function store(Request $request): JsonResponse
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'unique:users'],
            'password' => ['required'],
        ], [
            'email.unique' => 'Este e-mail já está cadastrado. Tente fazer login ou use outro endereço.',
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->input('password')),
            'validado' => 'N',
            'codigo' => str(rand(1000,9999))
        ]);
        
        $token = $user->createToken('auth_token')->plainTextToken;

        event(new Registered($user));

        Mail::to('testreceiver@gmail.com')->send(new WelcomeMail($user->id));

        Auth::login($user);

        return response()->json([
            'message' => 'Usuário registrado com sucesso!',
            'user' => $user
        ], 201);  
    }
}
