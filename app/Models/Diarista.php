<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    public function user() {
        return $this->belongsTo(User::class, 'users_id');
    }
    protected $table = 'dados_diarista';
    protected $fillable = ['users_id', 'foto_perfil', 'idade', 'sexo', 'cpf', 'telefone', 'segundo_telefone',
'rua', 'cep', 'cidade', 'estado', 'valor_hora', 'valor_diaria', 'disponivel_fds', 'linkedin',
'descricao', 'experiencias', 'especialidades', 'pqcontratar'];
}
