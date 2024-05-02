<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estoque extends Model
{
    protected $table = 'estoque';

    protected $fillable = ['quantidade'];

    // Relacionamento com produtos
    public function produtos()
    {
        return $this->hasOne(Produto::class);
    }
}
