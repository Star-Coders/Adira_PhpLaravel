<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\LoginController;
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

//código copiado do projeto BLOG do professor
Route::view('/login', 'admin.login.form')->name('login.form');
Route::post('/admin/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/admin/logout', [LoginController::class, 'logout']);
Route::get('/admin', [DashboardController::class, 'index'])->middleware('auth');
Route::view('cadastrar-usuario', 'autenticar/cadastrarUsuario')->name('cadastrarUsuario');


Route::group([
    'prefix'=>'autenticar',
    'as'=>'autenticar.'
], function(){
    //Route::view('cadastrarUsuario', 'autenticar/cadastrarUsuario')->name('cadastrarUsuario');

    Route::view('login', 'autenticar/login')->name('login');

    Route::view('recuperarSenha', 'autenticar/recuperarSenha')->name('recuperarSenha');
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
