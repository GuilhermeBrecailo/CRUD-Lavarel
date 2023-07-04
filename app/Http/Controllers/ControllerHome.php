<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\teste;

class ControllerHome extends Controller
{
    public function index()
    {    
       return view('home.home');
    }
}
