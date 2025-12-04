<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Response;
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Mail\ResetPasswordMail;

class ProfileController extends Controller
{
    /**
     * Criar um token de autenticação para o usuário logado.
     */
    public function createToken(Request $request)
    {

         $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];


 
        if (Auth::attempt($credentials)) {
            $user = $request->user();
            $token = $user->createToken('auth_token')->plainTextToken;

                    $usuario = User::where('email','=',$request->email)->get()->first();
                    if($usuario->validado == 'S')
                    {
                         return response()->json([
                            "access_token" => $token,
                            "token_type" => 'Bearer'
                        ]);
                    }else{
                        return response()->json([
                            "message" => "Email não verficado"
                        ], 403);
                    }
                }else{
                    return response()->json([
                            "message" => "Usuário não cadastrado"
                        ], 401);
                }
           

    }

    public function validar_email($codigo){

        $codigo = User::where('codigo','=',$codigo)->get()->first();

        if($codigo){
            $codigo->validado = 'S';
            $codigo->save();
            return view("achou")->with('usuario',$codigo)->with("achou","S");
        }else{
            $codigo = new User();
            return view("achou")->with('usuario',$codigo)->with("achou","N");;
        }
    }

    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetPasswordEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);
        
        try {
            $user = User::where('email', $request->email)->first();
            
            // Gerar token e salvar no campo reset_token
            $token = Str::random(64);
            $user->reset_token = $token;
            $user->reset_token_created_at = now(); // Adicione esta coluna se quiser expiração
            $user->save();

            // Enviar email com o token
            Mail::to($user->email)->send(new ResetPasswordMail($user, $token));

            return response()->json([
                'success' => true,
                'message' => 'E-mail de redefinição enviado com sucesso!'
            ]);

        } catch (\Exception $e) {
            \Log::error("Erro ao enviar email de reset: " . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Erro ao processar solicitação'
            ], 500);
        }
    }

    public function showResetPasswordForm($token)
    {
        return view('resetar-senha', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'token' => 'required|string',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::where('email', $request->email)
                ->where('reset_token', $request->token)
                ->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Token inválido ou expirado'
            ], 400);
        }

        // Atualiza a senha e limpa o token
        $user->password = Hash::make($request->password);
        $user->reset_token = null;
        $user->reset_token_created_at = null;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Senha redefinida com sucesso!'
        ]);
    }
}