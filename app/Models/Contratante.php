<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contratante extends Model
{
    protected $table = 'dados_contratante';
    protected $fillable = ['users_id', 'foto_perfil', 'idade', 'sexo', 'cpf', 'telefone', 'segundo_telefone',
'rua', 'cep', 'cidade', 'estado', 'tiporesidencia', 'tamanhoresidencia'];
}
