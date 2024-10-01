<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ProdutoController;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'PRODUTOS';
    protected $primaryKey = 'PRODUTOS_ID';


}
