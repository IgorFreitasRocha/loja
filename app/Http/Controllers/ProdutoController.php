<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('produto.index', ['produtos' => Produto::all()]);
    }

    public function imagens()
    {
        return $this->hasMany(Imagem::class,'PRODUTO_ID', 'PRODUTO_ID');
    }
}
