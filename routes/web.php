<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductReturnController;

Route::get('/return-product', [ProductReturnController::class, 'showReturnForm'])->name('return-product');
Route::post('/return-product', [ProductReturnController::class, 'processReturn']);


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/devolucao', function () {
    return view('devolucao');
});




Route::get('/adicionar-produto', [ProdutoController::class, 'create']);
Route::post('/salvar-produto', [ProdutoController::class, 'store'])->name('salvar.produto');



