<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canais extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'foto',
        'inscritos',
        'localidade',
        'visualizacoes',
        'data_criacao',
        'quantidade_videos',
        'video_famoso',
        'receita',
        'tipo',
    ];

    protected $dates = ['data_criacao'];
    protected $primaryKey = 'id_canal';
}