<?php

use App\Http\Controllers\UsuarioModelController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\FaturamentoController;
use App\Http\Controllers\ProdutoModelController;
use App\Http\Controllers\UserController;
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

Route::get('/faturamento', [FaturamentoController::class, 'index']);
// Route::get('/faturamento', 'FaturamentoController@index');

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

//código copiado do projeto BLOG do professor
Route::view('/login', 'admin.login.form')->name('login.form');
Route::post('/admin/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/admin/logout', [LoginController::class, 'logout']);
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
Route::view('cadastrar-usuario', 'autenticar/cadastrarUsuario')->name('cadastrarUsuario');
Route::post('/user', [UserController::class, 'store'])->name('user.store');



Route::group([
    'prefix'=>'autenticar',
    'as'=>'autenticar.'
], function(){
    //Route::view('cadastrarUsuario', 'autenticar/cadastrarUsuario')->name('cadastrarUsuario');

    Route::view('login', 'autenticar/login');

    Route::view('recuperarSenha', 'autenticar/recuperarSenha')->name('recupearSenha');
});

// TELAS PRODUTOS
Route::group([
    'prefix'=>'produtos',
    'as'=>'produtos.'
], function(){
    Route::view('produtos.catalogar-produto','produtos/catalogarProduto');

    Route::view('produtos.fazer-aluguel', 'produtos/fazerAluguel');

    Route::view('produtos.solicitar-produto', 'produtos/solicitarProduto')->name('solicitar-produto');
    Route::get('produtos/solicitarProduto/{id}', [ProdutoModelController::class, 'solicitar']);
});

// TELAS USUARIO
Route::group([
    'prefix'=>'usuario',
    'as'=>'usuario.'
], function(){
    Route::view('listar-pedidos', 'usuario/listarPedidos')->name('listar-pedidos');

    Route::view('listar-produtos', 'usuario/listarProdutos');

    Route::view('perfil','usuario/perfil');
});
// TELA DO PERFIL DO USUARIO
Route::get('/perfisUsuarios', [UsuarioModelController::class, 'usuario/perfil/{$id}'])->name('perfil');



