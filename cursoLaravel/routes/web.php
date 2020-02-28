<?php


Route::get('/', ['as' => 'site.home', 'uses' => 'Site\HomeController@index']);

//ROTAS PARA LOGIN 
Route::get('/login', ['as' => 'site.login', 'uses' => 'Site\LoginController@index']);
Route::post('/login/entrar', ['as' => 'site.login.entrar', 'uses' => 'Site\LoginController@entrar']);

Route::get('/contato{id?}', ['uses' => 'ContatoController@index']);


Route::post('/contato', ['uses' => 'ContatoController@criar']);

Route::put('/contato', ['uses' => 'ContatoController@editar']);

//'as' apelida uma rota (isso serve para otimizar, caso tenha que mudar a rota original)
Route::get('/admin/cursos', ['as' => 'admin.cursos', 'uses' => 'Admin\CursoController@index']);
Route::get('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar', 'uses' => 'Admin\CursoController@adicionar']);
Route::post('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar', 'uses' => 'Admin\CursoController@salvar']);
Route::get('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar', 'uses' => 'Admin\CursoController@editar']);
Route::put('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar', 'uses' => 'Admin\CursoController@atualizar']);
Route::get('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar', 'uses' => 'Admin\CursoController@deletar']);




Auth::routes();

Route::get('/home', 'HomeController@index');
