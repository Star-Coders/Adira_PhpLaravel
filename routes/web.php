<?php

use App\Http\Controllers\UsuarioModelController;
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
    return view('catalogo/home');
});

// TELAS ADMIN
Route::group([
    'prefix'=>'admin',
    'as'=>'admin.'
], function(){
    Route::get('painel-admin', function(){
        return view('admin/painel');
    })->name('painel-admin');

    Route::view('todos-pedidos', 'admin/todosPedidos');

    Route::view('todos-produtos', 'admin/todosProdutos');

    Route::view('todos-usuarios', 'admin/todosUsuarios')->name('todos-usuarios');

    Route::view('perfis-usuarios', 'admin/perfisUsuarios');
});

// TELAS AUTENTICAR
Route::group([
    'prefix'=>'autenticar',
    'as'=>'autenticar.'
], function(){
    Route::view('cadastrar-usuario', 'autenticar/cadastrarUsuario');

    Route::view('login', 'autenticar/login');

    Route::view('recuperar-senha', 'autenticar/recuperarSenha');
});

// TELAS PRODUTOS
Route::group([
    'prefix'=>'produtos',
    'as'=>'produtos.'
], function(){
    Route::view('catalogar-produto','produtos/catalogarProduto');

    Route::view('fazer-aluguel', 'produtos/fazerAluguel');

    Route::view('solicitar-produto', 'produtos/solicitarProduto')->name('solicitar-produto');
});

// TELAS USUARIO
Route::group([
    'prefix'=>'usuario',
    'as'=>'usuario.'
], function(){
    Route::view('listar-pedidos', 'usuario/listarPedidos');

    Route::view('listar-produtos', 'usuario/listarProdutos');

    Route::view('perfil','usuario/perfil');
});
// TELA DO PERFIL DO USUARIO
Route::get('/perfisUsuarios', [UsuarioModelController::class, $perfil])->name('perfil');