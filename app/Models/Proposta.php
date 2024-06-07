<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $table = 'proposta';
    protected $fillable = [
        'name_contratante',
        'users_id',
        'diarista_id',
        'local_limpeza',
        'cep_local',
        'data_limpeza',
        'qtd_horas_acordadas',
        'valor_acordado',
        'contato',
        'segundo_contato',
        'status'
    ];
}

