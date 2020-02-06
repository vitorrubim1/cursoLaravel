@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <h3>Essa é a view index do contato</h3>

    @foreach ($contato as $contato)
        <h4>{{ $contato -> nome }}</h4>
        <h4>{{ $contato -> telefone }}</h4>

    @endforeach    
@endsection
