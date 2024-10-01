<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

// Rota para Produtos
Route::get('/produto', [ProdutoController::class, 'index']);



// Rota para Imagens




