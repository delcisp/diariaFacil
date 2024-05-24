<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
  public function index()
    {
       if(Auth::user()->usertype == '2') {
        return view('diarista.cadastro');
       }
       else if (Auth::user()->usertype == '1') {
        $users = User::all();
        return view('dashboard', compact('users'));
       }
        else {
        return view('contratante.cadastro');

       }
    }

}
