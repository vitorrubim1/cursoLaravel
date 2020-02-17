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

     //METÓDO DE SALVAR 
     public function salvar(Request $req){
        //REQUEST, REQUISIÇÃO, RECEBE O POST DO FORM

        $dados = $req->all(); //BUSCA TODOS OS DADOS


        //PARA VER SE PODE PUBLICAR O CURSO (CHECKBOX)
        if(isset($dados['publicado'])){
            $dados['publicado'] = "sim";
        } else {
            $dados['publicado'] = "nao";
        }


        //TRATAMENTO DE IMAGEM
        //VERIFICANDO A IMAGEM, SE TEM ARQUIVO
        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand (1111, 9999); //GERANDO UM NÚMERO RANDOMICO, (ALEATÓRIO)
            $dir = "img/cursos"; //DIRETÓRIO
            $ex = $imagem->guessClientExtension(); //E VERIFICANDO QUAL A EXTENSÃO DA IMAGEM
            $nomeImagem = "imagem_".$num.".".$ex; //MONTANDO O NOME DA IMAGEM
            $imagem->move($dir, $nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;

            Curso::create($dados); //SALVANDO NO BANCO

            //ENCAMINHANDO O USUÁRIO PARA A LISTAGEM
            return redirect()->route('admin.cursos');
        }
    }
}
