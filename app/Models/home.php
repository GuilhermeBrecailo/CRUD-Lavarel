<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ["nome", "tamanho", "cor", "preco"];
    protected $guarded = ["id", "created_at", "updated_at"];
    protected $table = "Produto";
    public $timestamps = false;
}