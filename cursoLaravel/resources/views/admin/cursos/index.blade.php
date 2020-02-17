@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">

    <br><h3 class="col px-md-5">Lista de cursos</h3><br>


    <dl class="row">
        <table class="table table-hover table-dark">
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
                    <th>{{ $registro -> id }}/th>
                    <td>{{ $registro -> titulo }}</td>
                    <td>{{ $registro -> descricao }}</td>
                    <td>
                        <img src="{{ assets ($registro -> imagem) }}" alt="{{ $registro -> titulo }}" width="120">
                    </td> <!-- "assets" é o helper do laravel, auxilia na procura de imagem -->
                    <td>{{ $registro -> publicado }}</td>
                    <td>
                        <a class="btn btn-md btn-black" href="{{ route('admin.cursos.editar', $registro->id) }}"> Editar </a>
                        <a class="btn btn-md btn-danger" href="{{ route('admin.cursos.apagar', $registro->id) }}"> Apagar </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </dl>

    <dl class="row">
        <a class="btn btn-outline-dark" href="{{ route('admin.cursos.adicionar') }}">Adicionar Curso</a>
    </dl>
</div>

@endsection