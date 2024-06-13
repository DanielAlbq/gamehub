<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['nome', 'descricao', 'preco', 'categoria_id', 'estoque_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

}