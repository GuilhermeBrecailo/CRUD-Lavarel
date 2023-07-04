<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $table = 'produto';
    // Outras propriedades e métodos do modelo
    protected $fillable = [
    'nome',
    'descricao',
    'preco',
    ];
}
