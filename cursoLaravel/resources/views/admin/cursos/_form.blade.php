<div class="form-row">
<!--TITULO-->
    <div class="form-group col-md-6">
        <input 
            type="text" 
            name="titulo" 
            class="form-control" 
            placeholder="Nos informe o nome do Curso :)"
            value="{{ isset($registro -> titulo) ? $registro -> titulo : '' }}" 
        > <!--IF INLINE NO VALUE -->
    </div>

<!--VALOR-->
    <div class="form-group col-md-5">
       <input 
           type="text" 
           name="valor" 
           class="form-control" 
           placeholder="Digite o $$$$ do Curso:"
           value="{{ isset($registro -> valor) ? $registro -> valor : '' }}" 
       >
   </div>

<!--DESCRICAO-->
    <div class="form-group col-md-6">
        <input 
            type="text" 
            name="descricao" 
            class="form-control" 
            placeholder="Agora nos dê uma descrição do Curso:"
            value="{{ isset($registro -> descricao) ? $registro -> descricao : '' }}" 
        >
        <small class="form-text text-muted">ex: O curso tem uma metodologia ágil e utiliza tecnologias de ponta como: ReactJS, NodeJS..</small>
    </div>

<!--IMAGEM-->
    <div class="custom-file col-md-4" style="margin-left:5.5px">
        <input type="file" name="imagem" class="custom-file-input" >
        <label class="custom-file-label">Escolha uma imagem</label>
    </div>
</div>

<!--VERIFICANDO SE A IMAGEM EXISTE-->
@if(isset($registro->imagem))
    <div class="form-group">
        <img src="{{ asset($registro->imagem) }}" width="150">
    </div>
@endif

<!--CONFIRMAÇÃO SE PODE OU NÃO PUBLICAR O CURSO-->
<div class="form-check">
    <p>
        <input 
            class="form-check-input position-static" 
            type="checkbox" 
            value="true"
            {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }}
        >
        <label>Deseja publicar o curso?</label>
    </p> <br>
</div>

