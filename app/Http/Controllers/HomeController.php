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
       } else {
        return view('contratante.cadastro');
       }
    }
}
