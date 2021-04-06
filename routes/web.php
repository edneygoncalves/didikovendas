<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EncomendasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\VendasController;
use App\Http\Controllers\ViagemController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('testes.hometeste');
});

Route::prefix('admin')->group(function () {

    Route::redirect('/', '/admin/vendas', 302);

    Route::resource('/vendas', VendasController::class);

    Route::resource('/encomendas', EncomendasController::class);

    Route::resource('/produtos', ProdutosController::class);

    Route::resource('/viagens', ViagemController::class);

    Route::resource('/clientes', ClienteController::class);


    Route::get('/quadros', [ProdutosController::class, 'quadros']);
    Route::get('/palhetas', [ProdutosController::class, 'palhetas']);

});
