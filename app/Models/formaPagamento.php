<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class formaPagamento extends Model
{
    protected $table = 'formas_de_pagamento';

    protected $fillable = ['metodo'];

    // Relacionamento com pedidos
    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
