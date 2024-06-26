<?php

namespace App\Http\Controllers;

use App\Models\Diarista;
use App\Models\Proposta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DiaristaController extends Controller
{

    public function store(Request $request)
    {
        $users_id = Auth::user()->id;

        $attributes = request()->validate([
            'foto_perfil' => 'nullable|file|image|mimes:jpg,jpeg,gif,png',
            'idade' => ['required', 'max:50'],
            'sexo' => ['required', 'max:50'],
            'cpf' => ['required', 'max:11'],
            'telefone'  => ['required', 'max:50'],
            'segundo_telefone'  => ['required', 'max:50'],
            'rua'  => ['required', 'max:255'],
            'cep'  => ['required', 'max:11'],
            'cidade' => ['required', 'max:100'],
            'estado' => ['required', 'max:50'],
            'valor_hora'  => ['required', 'max:50'],
            'valor_diaria'  => ['required', 'max:50'],
            'disponivel_fds'  => ['required', 'max:50'],
            'linkedin'  => ['max:255'],
            'descricao'  => ['required', 'max:500'],
            'experiencias'  => ['required', 'max:1000'],
            'especialidades'  => ['required', 'max:1000'],
            'pqcontratar'  => ['required', 'max:1000'],
        ]);
        $imageName = null;
        if ($request->hasFile('foto_perfil')) {
            $imageName = time() . '.' . $request->file('foto_perfil')->extension();
            $request->file('foto_perfil')->move(public_path('storage/users'), $imageName);
        }

        $diarista = Diarista::create([

            'users_id' => $users_id,
            'foto_perfil' => $imageName,
            'idade' => $request->idade,
            'sexo' => $request->idade,
            'cpf' => $request->idade,
            'telefone' => $request->telefone,
            'segundo_telefone' => $request->segundo_telefone,
            'rua' => $request->rua,
            'cep' => $request->cep,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'valor_hora' => $request->valor_hora,
            'valor_diaria' => $request->valor_diaria,
            'disponivel_fds' => $request->disponivel_fds,
            'linkedin' => $request->linkedin,
            'descricao' => $request->descricao,
            'experiencias' => $request->experiencias,
            'especialidades' => $request->especialidades,
            'pqcontratar' => $request->pqcontratar
        ]);

        $user = User::find($users_id);
        $user->profile_completed = true;
        $user->save();

        return redirect('/home');
    }

    public function showPropostas()
    {
        $diarista_id = Auth::user()->id;
        $propostas = Proposta::where('diarista_id', $diarista_id)->get();

        return view('diarista.second', compact('propostas'));
    }


}
