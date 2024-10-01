<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagemController extends Controller
{
    public function index()
    {
        ['imagens' => Imagem::all()];
    }
    
    public function produto()
    {
        return $this->belongsTo(Produto::class,'PRODUTO_ID', 'PRODUTO_ID');
    }

}
