@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
<div class="container">
    
    <br><h3>Editar Curso</h3><br>
               
        <form action="{{ route('admin.cursos.atualizar',$registro->id)}}" method="post" enctype="multipart/form-data">
            <!-- É NECESSÁRIO UM TOKEN PARA QUE FUNCIONE (SEGURANÇA PRA APLICAÇÃO) -->
            {{ csrf_field() }} <!-- INPUT GERANDO UM TOKEN AUTOMATICO -->
            
            <input type="hidden" name="_method" value="put"> <!--put = editar-->

            @include('admin.cursos._form') 
            
            <button class="btn btn-outline-dark btn-lg">Atualizar</button>
        </form>        
    
</div>

@endsection