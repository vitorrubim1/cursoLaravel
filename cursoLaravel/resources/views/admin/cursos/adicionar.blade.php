@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">
    
    <br><h3>Adicionar Curso</h3><br>
    
    
        
        <form action="{{ route('admin.cursos.salvar') }}" method="post" enctype="multipart/form-data">
            <!-- É NECESSÁRIO UM TOKEN PARA QUE FUNCIONE (SEGURANÇA PRA APLICAÇÃO) -->
            {{ csrf_field() }} <!-- INPUT GERANDO UM TOKEN AUTOMATICO -->
            
            @include('admin.cursos._form') <!-- PARA REUTILIZAR O MESMO FORMULÁRIO NO EDITAR -->
            
            <button class="btn btn-outline-dark btn-lg">Salvar</button>
        </form>
        
    
</div>

@endsection