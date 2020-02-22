<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso; //importando o curso

class HomeController extends Controller
{
    public function index(){
        $cursos = Curso::all(); //pegando todos os cursos
        return view('home', compact('cursos'));
    }
}
