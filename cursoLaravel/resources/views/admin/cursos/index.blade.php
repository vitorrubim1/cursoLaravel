@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">

    <br><h3 class="col px-md-5">Lista de cursos</h3><br>

    <div class="row" style="
        margin:0 auto 70px auto;
        width: 90vw;
        
    ">
        <table class="table table-hover table-dark" style="margin-left:-4.5%">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TÍTULO</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">IMAGEM</th>
                    <th scope="col">PUBLICADO</th>
                    <th scope="col">AÇÃO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->descricao }}</td>
                        <td>
                            <img width="200"  src="{{asset($registro->imagem)}}" alt="{{ $registro->titulo }}">
                        </td> <!-- "asset" é o helper do laravel, auxilia na procura de imagem -->
                        <td>{{ $registro->publicado }}</td>
                        <td>
                            <a 
                                class="btn btn-sm btn-light" 
                                href="{{ route('admin.cursos.editar', $registro->id) }}"> Editar 
                            </a> 
                            <a 
                                class="btn btn-sm btn-danger" 
                                href="{{ route('admin.cursos.deletar', $registro->id) }}"> Apagar 
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <dl class="row">
            <a class="btn btn-outline-dark" href="{{ route('admin.cursos.adicionar') }}">Adicionar Curso</a>
        </dl>
    </div>

</div>

@endsection