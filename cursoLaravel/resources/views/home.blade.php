@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">

    <br><h3 class="col px-md-5">Lista de cursos</h3><br>

    <!--CARDS DOS CURSOS-->
    @foreach ($cursos as $curso)
      <div class="card text-white bg-dark mb-3" id="cards">
        <div class="card-header">
          <img src="{{ asset($curso->imagem) }}" class="img-fluid" id="img">
        </div>

        <div class="card-body">
          <h5 class="card-title">{{$curso->titulo}}</h5>
          <p class="card-text">{{$curso->descricao}}</p>
        </div>
      </div>    

    @endforeach

</div>

@endsection