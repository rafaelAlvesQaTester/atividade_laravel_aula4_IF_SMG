<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $fillable = [ // algo preenchivel, no caso apenas os dados que estao dentro das aspas, os demais será o laravel quem irá mexer. 
        'descricao',
        'qtd',
        'precoUnitario',
        'precoVenda'
    ]

}
