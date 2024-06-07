<?php

namespace App\Http\Controllers;

use App\Models\Proposta;
use App\Models\Diarista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PropostaController extends Controller
{
    public function store(Request $request, $diarista_id)
    {
        $diarista = Diarista::findOrFail($diarista_id);
        $users_id = Auth::user()->id;
        $contratante = Auth::user()->name . ' ' . Auth::user()->lastname;

        $attributes = $request->validate([
            'local_limpeza' => ['required', 'max:500'],
            'cep_local' => ['required', 'max:8'],
            'data_limpeza' => ['required'],
            'qtd_horas_acordadas' => ['required'],
            'valor_acordado' => ['required', 'max:10'],
            'contato' => ['required'],
            'segundo_contato' => ['nullable'],
        ]);

        Proposta::create([
            'users_id' => $users_id,
            'diarista_id' => $diarista->id,
            'name_contratante' => $contratante,
            'local_limpeza' => $attributes['local_limpeza'],
            'cep_local' => $attributes['cep_local'],
            'data_limpeza' => $attributes['data_limpeza'],
            'qtd_horas_acordadas' => $attributes['qtd_horas_acordadas'],
            'valor_acordado' => $attributes['valor_acordado'],
            'contato' => $attributes['contato'],
            'segundo_contato' => $attributes['segundo_contato'] ?? null,
            'status' => 'Pendente',
        ]);

        return redirect('/home')->with('success', 'Proposta enviada com sucesso.');
    }
}

