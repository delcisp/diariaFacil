<?php

namespace App\Http\Controllers;
use App\Models\Proposta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Diarista;
use App\Models\Contratante;
use App\Models\User;
class PropostaController extends Controller
{
    public function store(Request $request, $diarista_id)
    {
        $diarista = Diarista::findOrFail($diarista_id);
        $users_id = Auth::user()->id;
        $contratante_id = Auth::user()->id;

        $attributes = $request->validate([
            'local_limpeza' => ['required', 'max:500'],
            'cep_local' => ['required', 'max:8'],
            'data_limpeza' => ['required'],
            'qtd_horas_acordadas' => ['required'],
            'valor_acordado' => ['required', 'max:10'],
            'contato' => ['required'],
        ]);

        Proposta::create([
            'users_id' => $users_id,
            'contratante_id' => $contratante_id,
            'diarista_id' => $diarista->id,
            'local_limpeza' => $request->local_limpeza,
            'cep_local' => $request->cep_local,
            'data_limpeza' => $request->data_limpeza,
            'qtd_horas_acordadas' => $request->qtd_horas_acordadas,
            'valor_acordado' => $request->valor_acordado,
            'contato' => $request->contato,
            'segundo_contato' => $request->segundo_contato,
            'status' => $request->status,
        ]);
        return redirect('/home');
    }
}
