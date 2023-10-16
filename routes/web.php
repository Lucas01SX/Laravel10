<?php

use App\Http\Controllers\clientesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VandaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

/*
Route::get('/', function () {
    return view('index');
});
*/

Route::prefix('dashboard') -> group(function() {

    Route::get('/', [DashboardController::class, 'index']) -> name('dashboard.index');
});

Route::prefix('produtos') -> group(function() {

    Route::get('/', [ProdutosController::class, 'index']) -> name('produtos.index');
    //Cadastro Create
    Route::get('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto']) -> name('cadastrar.produto');
    Route::post('/cadastrarProduto', [ProdutosController::class, 'cadastrarProduto']) -> name('cadastrar.produto');
    //Atualiza Update
    Route::get('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto']) -> name('atualizar.produto');
    Route::put('/atualizarProduto/{id}', [ProdutosController::class, 'atualizarProduto']) -> name('atualizar.produto');


    Route::delete('/delete', [ProdutosController::class, 'delete']) -> name('produtos.delete');

});

Route::prefix('clientes') -> group(function() {

    Route::get('/', [clientesController::class, 'index']) -> name('clientes.index');
    //Cadastro Create
    Route::get('/cadastrarCliente', [clientesController::class, 'cadastrarCliente']) -> name('cadastrar.cliente');
    Route::post('/cadastrarCliente', [clientesController::class, 'cadastrarCliente']) -> name('cadastrar.cliente');
    //Atualiza Update
    Route::get('/atualizarCliente/{id}', [clientesController::class, 'atualizarCliente']) -> name('atualizar.cliente');
    Route::put('/atualizarCliente/{id}', [clientesController::class, 'atualizarCliente']) -> name('atualizar.cliente');


    Route::delete('/delete', [clientesController::class, 'delete']) -> name('cliente.delete');

});

Route::prefix('vendas') -> group(function() {

    Route::get('/', [VandaController::class, 'index']) -> name('vendas.index');
    //Cadastro Create
    Route::get('/cadastrarVenda', [VandaController::class, 'cadastrarVenda']) -> name('cadastrar.venda');
    Route::post('/cadastrarVenda', [VandaController::class, 'cadastrarVenda']) -> name('cadastrar.venda');
    Route::get('/enviaComprovantePorEmail/{id}', [VandaController::class, 'enviaComprovantePorEmail']) -> name('enviaComprovantePorEmail.venda');
});

Route::prefix('usuario') -> group(function() {

    Route::get('/', [UsuarioController::class, 'index']) -> name('usuarios.index');
    //Cadastro Create
    Route::get('/cadastrarUsuarios', [UsuarioController::class, 'cadastrarUsuarios']) -> name('cadastrar.usuarios');
    Route::post('/cadastrarUsuarios', [UsuarioController::class, 'cadastrarUsuarios']) -> name('cadastrar.usuarios');
    //Atualiza Update
    Route::get('/atualizarUsuarios/{id}', [UsuarioController::class, 'atualizarUsuarios']) -> name('atualizar.usuarios');
    Route::put('/atualizarUsuarios/{id}', [UsuarioController::class, 'atualizarUsuarios']) -> name('atualizar.usuarios');


    Route::delete('/delete', [UsuarioController::class, 'delete']) -> name('usuarios.delete');
});

