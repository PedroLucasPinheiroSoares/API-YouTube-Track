<?php

namespace App\Http\Controllers;

use App\Models\Canais;
use Illuminate\Http\Request;

class CanaisController extends Controller
{
    public function criar_canal(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'foto' => 'nullable|string|max:255',
            'inscritos' => 'nullable|integer',
            'localidade' => 'nullable|string|max:255',
            'visualizacoes' => 'nullable|integer',
            'data_criacao' => 'nullable|date',  
            'quantidade_videos' => 'nullable|integer',
            'video_famoso' => 'nullable|string|max:255',
            'receita' => 'nullable|numeric',
            'tipo' => 'nullable|string|max:100',
        ]);

        $canal = Canais::create($request->all());

        return response()->json(['success' => true, 'data' => $canal], 201);
    }

    public function exibir_canais()
    {
        $canais = Canais::all();
        return response()->json(['success' => true, 'data' => $canais]);
    }

    public function exibir_canal($id_canal)
    {
        $canal = Canais::find($id_canal);
        if (!$canal) {
            return response()->json(['success' => false, 'message' => 'Canal não encontrado'], 404);
        }
   
        $ranking_inscritos = Canais::where('inscritos', '>', $canal->inscritos)->count() + 1;
        $ranking_visualizacoes = Canais::where('visualizacoes', '>', $canal->visualizacoes)->count() + 1;
   
        $canal->ranking_inscritos = $ranking_inscritos;
        $canal->ranking_visualizacoes = $ranking_visualizacoes;
   
        return response()->json([
            'success' => true,
            'data' => $canal
        ]);
    }

    public function atualizar_canal(Request $request, $id_canal)
    {
        $canal = Canais::find($id_canal);
        if (!$canal) {
            return response()->json(['success' => false, 'message' => 'Canal não encontrado'], 404);
        }

        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'foto' => 'nullable|string|max:255',
            'inscritos' => 'nullable|integer',
            'localidade' => 'nullable|string|max:255',
            'visualizacoes' => 'nullable|integer',
            'data_criacao' => 'nullable|date',
            'quantidade_videos' => 'nullable|integer',
            'video_famoso' => 'nullable|string|max:255',
            'receita' => 'nullable|numeric',
            'tipo' => 'nullable|string|max:100',
        ]);

        $canal->update($request->all());

        return response()->json(['success' => true, 'data' => $canal]);
    }

    public function deletar_canal($id_canal)
    {
        $canal = Canais::find($id_canal);
        if (!$canal) {
            return response()->json(['success' => false, 'message' => 'Canal não encontrado'], 404);
        }

        $canal->delete();

        return response()->json(['success' => true, 'message' => 'Canal deletado com sucesso']);
    }

    public function filtrar_canal(Request $request)
    {
        $canais = new Canais();
   
        if ($request->has('nome')) {
            $nome = $request->input('nome');
            $canais = $canais->where('nome', 'like', '%' . $nome . '%');
        }
   
        if ($request->has('tipo')) {
            $tipo = $request->input('tipo');
            $canais = $canais->where('tipo', 'like', '%' . $tipo . '%');
        }
   
        if ($request->has('localidade')) {
            $localidade = $request->input('localidade');
            $canais = $canais->where('localidade', 'like', '%' . $localidade . '%');
        }
   
        if ($request->has('inscritos_min') && $request->has('inscritos_max')) {
            $inscritos_min = $request->input('inscritos_min');
            $inscritos_max = $request->input('inscritos_max');
            $canais = $canais->whereBetween('inscritos', [$inscritos_min, $inscritos_max]);
        }
   
        if ($request->has('visualizacoes_min') && $request->has('visualizacoes_max')) {
            $visualizacoes_min = $request->input('visualizacoes_min');
            $visualizacoes_max = $request->input('visualizacoes_max');
            $canais = $canais->whereBetween('visualizacoes', [$visualizacoes_min, $visualizacoes_max]);
        }
   
        if ($request->has('quantidade_videos_min') && $request->has('quantidade_videos_max')) {
            $quantidade_videos_min = $request->input('quantidade_videos_min');
            $quantidade_videos_max = $request->input('quantidade_videos_max');
            $canais = $canais->whereBetween('quantidade_videos', [$quantidade_videos_min, $quantidade_videos_max]);
        }
   
        $canais = $canais->get();
   
        return response()->json(['canais' => $canais], 200);
    }
   
}