<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', 'LoginController@login')->name('site.login');
Route::post('/login', 'LoginController@login')->name('site.login');
Route::get('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');
Route::post('/cadastro', 'CadastroController@cadastro')->name('site.cadastro');
/*Route::get('/login', function(){return 'Login';})->name('site.login');*/

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/protudos', function(){return 'produtos';})->name('app.produtos');
});

Route::fallback(function(){
    echo 'A rota não existe!';
});