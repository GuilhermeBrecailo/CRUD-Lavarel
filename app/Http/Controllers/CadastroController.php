<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function showForm()
    {
        return view('cadastro');
    }
}