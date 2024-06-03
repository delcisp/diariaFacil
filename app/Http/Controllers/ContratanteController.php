<?php

namespace App\Http\Controllers;

use App\Models\Diarista;
use App\Models\Contratante;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class ContratanteController extends Controller
{

    public function index() {
        $diaristas = Diarista::with('user')->get();
        $name = Auth::user()->name;
        $title = 'diaristas';
        return view('contratante.second', compact('title', 'diaristas', 'name'));
    }

    public function store(Request $request)
    {
        $users_id = Auth::user()->id;

        $attributes = $request->validate([
            'foto_perfil' => 'nullable|file|image|mimes:jpg,jpeg,gif,png',
            'idade' => ['required', 'max:50'],
            'sexo' => ['required', 'max:50'],
            'cpf' => ['required', 'max:11'],
            'telefone' => ['required', 'max:50'],
            'segundo_telefone' => ['required', 'max:50'],
            'rua' => ['required', 'max:255'],
            'cep' => ['required', 'max:11'],
            'cidade' => ['required', 'max:100'],
            'estado' => ['required', 'max:50'],
            'tiporesidencia' => ['required', 'max:50'],
            'tamanhoresidencia' => ['required', 'max:500'],
        ]);

        $imageName = null;
        if ($request->hasFile('foto_perfil')) {
            $imageName = time() . '.' . $request->foto_perfil->extension();
            $request->foto_perfil->move(public_path('storage/users'), $imageName);
        }

        Contratante::create([
            'users_id' => $users_id,
            'foto_perfil' => $imageName,
            'idade' => $request->idade,
            'sexo' => $request->sexo,
            'cpf' => $request->cpf,
            'telefone' => $request->telefone,
            'segundo_telefone' => $request->segundo_telefone,
            'rua' => $request->rua,
            'cep' => $request->cep,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'tiporesidencia' => $request->tiporesidencia,
            'tamanhoresidencia' => $request->tamanhoresidencia,
        ]);

        $user = User::find($users_id);
        $user->profile_completed = true;
        $user->save();

        return redirect('/home');
    }
}
