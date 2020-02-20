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
    <div class="form-group col-md-5">
        
            <label style="margin-top: -14px; color:#00000ee"> Selecione uma Imagem
                <input 
                    type="file" 
                    name="imagem"
                    style="
                        width: 70%;
                        height: calc(0.83em + .75rem + 2px);
                        font-size: 1rem;
                        font-weight: 400;
                        line-height: 1.5;
                        color: #495057;
                        border: 1px solid #ced4da;
                        border-radius: .25rem;">
            </label>
    </div>
</div>

<!--VERIFICANDO SE A IMAGEM EXISTE-->
@if(isset($registro->imagem))
    <div class="form-group">
        <img src="{{ asset($registro->imagem) }}" width="300">
        <label>Imagem atual do Curso</label>
    </div>
@endif

<!--CONFIRMAÇÃO SE PODE OU NÃO PUBLICAR O CURSO-->
<div class="form-check">
    <p>
        <label> <br>
            <input 
                class="form-check-input position-static" 
                type="checkbox" 
                name="publicado"
                value="true"
                {{ isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : '' }}
            >
            Deseja publicar o curso?
        </label>
    </p> <br>
</div>

