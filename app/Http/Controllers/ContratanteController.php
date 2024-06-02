<?php

namespace App\Http\Controllers;

use App\Models\Contratante;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContratanteController extends Controller
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
            'experiencias'  => ['required', 'max:50'],
            'especialidades'  => ['required', 'max:50'],
            'pqcontratar'  => ['required', 'max:50'],
        ]);
        $imageName = null;
        if ($request->hasFile('foto_perfil')) {
            $imageName = time() . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('storage/users'), $imageName);
        }

        $diarista = Contratante::create([

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

        return redirect('/home');
    }
}
