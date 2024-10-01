<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ImagemController;

// Rota para Produtos

Route::get('/', [ProdutoController::class, 'index']);



// Rota para Imagens




