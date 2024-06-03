<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->usertype == '2') {
            if ($user->profile_completed) {
                return view('diarista.second');
            }
            else {
                return view('diarista.cadastro');
            }

        }

        elseif ($user->usertype == '1') {
            $users = User::all();
            return view('dashboard', compact('users'));
        }

        else {
            if ($user->profile_completed) {
                return view('contratante.second'); // A nova view para contratantes com cadastro completo
            } else {
                return view('contratante.cadastro'); // A view de cadastro para contratantes
            }
        }
    }


}
