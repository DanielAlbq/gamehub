<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory; // Adicione isso se você estiver usando factories

    protected $table = 'produtos';

    protected $fillable = ['nome', 'descricao', 'preco', 'categoria_id', 'quantidade', 'imagem']; // Inclua 'imagem'

    // Relação com categoria
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    // Relação many-to-many com pedidos
    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class, 'pedido_produto')
                    ->withPivot('quantidade')
                    ->withTimestamps();
    }
}
