@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">

    <br><h3 class="col px-md-5">Lista de cursos</h3><br>

    <!--CARDS DOS CURSOS-->
    @foreach ($cursos as $curso)
      <div class="row row-cols-1 row-cols-md-3">
        <div class="col mb-5">
          <div class="card border-dark">
            <div class="card-header bg-dark text-white" >
              <img src="{{ asset($curso->imagem) }}" class="card-img-top">
            </div>
            <div class="card-body bg-dark text-white">
              <h5 class="card-title">{{ $curso->titulo }}</h5>
              <p class="card-text">{{ $curso->descricao }}</p>
            </div>
          </div>
        </div>
      </div>      

    @endforeach

</div>

@endsection