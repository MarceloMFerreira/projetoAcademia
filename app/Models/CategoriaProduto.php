<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    use HasFactory;

    protected $table='categoria_produto'; 

    public $timestamps = false;
    
    protected $primaryKey = 'INT_ID';

    protected $fillable = [
        'TXT_DESCRICAO',
        'INT_ID_EMPRESA',
        'BOOL_ATIVO',
    ];
}
