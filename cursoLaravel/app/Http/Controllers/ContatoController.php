<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
            (object) ["nome" => "Vitor", "telefone" => "54569592"],
            (object) ["nome" => "Maria", "telefone" => "54874895"]
        ];


        $contato = new Contato();
        $con = $contato -> lista();
        dd($con -> nome);


        return view('contato.index', compact('contato')); //compact, exporta as informaçoes da variavel
    }
    public function criar(Request $req){

        dd($req ['nome']);

        return "Esse é o criar ContatoController";
    }
    public function editar(){
        return "Esse é o editar ContatoController";
    }
}
