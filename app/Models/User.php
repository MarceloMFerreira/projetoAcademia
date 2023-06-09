<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;

    protected $table='colaborador'; 

    public $timestamps = false;
    
    protected $primaryKey = 'INT_ID';

    protected $fillable = [
        'TXT_NOME',
        'TXT_EMAIL',
        'TXT_SENHA',
        'BOOL_ATIVO',
        'INT_ID_EMPRESA',
    ];

     //Relacionamento
     public function empresa()
     {
             //$this->belongsTo(relação, chave estrangeira local, primary key da relação);
        return $this->belongsTo('App\Models\Empresa', 'INT_ID_EMPRESA', 'INT_ID');
     }
}
