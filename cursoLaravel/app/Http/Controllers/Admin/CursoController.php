<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curso;


class CursoController extends Controller
{
    public function index(){
        $registros = Curso::all(); //pegando todos os cursos do Model linha 7

        return view('admin.cursos.index', compact('registros')); /*
            retornando o usuario para index (view);
            e passando através do compact a variável $registro 
        */
    }

    //METÓDO DE ADICIONAR 
    public function adicionar(){
        return view ('admin.cursos.adicionar');
    }
}
