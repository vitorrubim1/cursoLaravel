<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'valor', 'imagem', 'publicado' 
    ]; //ISSO É FEITO PARA QUANDO SE QUER CRIAR REGISTROS EM MASSA!
}
