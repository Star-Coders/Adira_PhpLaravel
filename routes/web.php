<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// TELA HOME
Route::get('/home', function(){
    return view('home');
});

// TELAS ADMIN
Route::group([
    'prefix'=>'admin',
    'as'=>'admin.'
], function(){
    Route::get('painelAdmin', function(){
        return view('admin/painelAdmin');
    })->name('painelAdmin');

    Route::view('todosPedidos', 'admin/todosPedidos')->name('todosPedidos');

    Route::view('todosProdutos', 'admin/todosProdutos')->name('todosProdutos');

    Route::view('todosUsuarios', 'admin/todosUsuarios')->name('todosUsuarios');
});

// TELAS AUTENTICAR
Route::group([
    'prefix'=>'autenticar',
    'as'=>'autenticar.'
], function(){
    Route::view('cadastrarUsuario', 'autenticar/cadastrarUsuarios')->name('cadastrarUsuario');

    Route::view('login', '/autenticar/login')->name('login');

    Route::view('recuperarSenha', 'autenticar/recuperarSenha')->name('recupearSenha');
});

// TELAS PRODUTOS
Route::group([
    'prefix'=>'produtos',
    'as'=>'produtos.'
], function(){
    Route::view('catalogarProduto','produtos/catalogarProduto')->name('catalogarProduto');

    Route::view('fazerAluguel', 'produtos/fazerAluguel')->name('fazerAluguel');

    Route::view('solicitarProduto', 'produtos/solicitarProduto')->name('solicitarProduto');
});

// TELAS USUARIO
Route::group([
    'prefix'=>'usuario',
    'as'=>'usuario.'
], function(){
    Route::view('listarPedidos', 'usuario/listarPedidos')->name('listarPedidos');

    Route::view('listarProdutos', 'usuario/listarProdutos')->name('listarProdutos');

    Route::view('perfil','usuario/perfil')->name('perfil');
});
