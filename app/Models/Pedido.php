<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = ['usuario_id', 'forma_de_pagamento_id', 'total', 'status'];

    // Relacionamento com usuário
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

    // Relacionamento com forma de pagamento
    public function formaDePagamento()
    {
        return $this->belongsTo(formaPagamento::class);
    }

}
