<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Imagem;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'PRODUTO';
    protected $primaryKey = 'PRODUTO_ID';

    public function imagens()
    {
        return $this->hasMany(Imagem::class,'PRODUTO_ID','PRODUTO_ID');
    }
}
