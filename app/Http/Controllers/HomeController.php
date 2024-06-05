<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Diarista;
class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->usertype == '2') {
            if ($user->profile_completed) {
                return view('diarista.second');
            } else {
                return view('diarista.cadastro');
            }
        } elseif ($user->usertype == '1') {
            $users = User::all();
            return view('dashboard', compact('users'));
        } else {
            if ($user->profile_completed) {
                $diaristas = Diarista::with('user')->get();
                $name = Auth::user()->name;
                $title = 'diaristas';
                return view('contratante.second', compact('title', 'diaristas', 'name'));
            } else {
                return view('contratante.cadastro');
            }
        }
    }
}

