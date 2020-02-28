<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PARA CRIAR REGISTROS

        $dados = [
            'name'=>"Vitor",
            'email'=>"admin@mail.com",
            'password'=>bcrypt("1234"),
        ];

        //PARA VER SE JA TEM UM USER IGUAL
        if(User::where('email','=',$dados['email'])->count()){

            $usuario = User::where('email','=',$dados['email'])->first();
            $usuario->update($dados);

            echo "Usuário alterado"; 
        }else{

            //CASO NAO TENHA CRIA O USER
            User::create($dados);
            
            echo "Usuário criado"; 

        }
    }
}
