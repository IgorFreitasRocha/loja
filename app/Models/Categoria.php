<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 'CATEGORIAS';
    protected $primaryKey = 'CATEGORIAS_ID';
    

    public function produtos()
    {
        return $this->hasMany(Produto::class,'CATEGORIAS_ID','CATEGORIAS_ID');
    }
}
