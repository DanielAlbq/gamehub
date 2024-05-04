<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\User;
use App\Models\formaPagamento;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with(['usuario', 'formaDePagamento'])->get();
        return view('pedido.index', compact('pedidos'));
    }

    public function create()
    {
        $usuarios = User::all();
        $formasDePagamento = formaPagamento::all();
        return view('pedido.create', compact('usuarios', 'formasDePagamento'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'forma_de_pagamento_id' => 'required|exists:formas_de_pagamento,id',
            'total' => 'required|numeric',
            'status' => 'required|string',
        ]);

        Pedido::create($validatedData);
        return redirect()->route('pedidos.index');
    }

    public function edit($id)
    {
        $pedido = Pedido::with(['usuario', 'formaDePagamento'])->findOrFail($id);
        $usuarios = User::all();
        $formasDePagamento = formaPagamento::all();
        return view('pedido.edit', compact('pedido', 'usuarios', 'formasDePagamento'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'forma_de_pagamento_id' => 'required|exists:formas_de_pagamento,id',
            'total' => 'required|numeric',
            'status' => 'required|string',
        ]);

        Pedido::whereId($id)->update($validatedData);
        return redirect()->route('pedido.index');
    }

    public function destroy($id)
    {
        Pedido::findOrFail($id)->delete();
        return redirect()->route('pedido.index');
    }

    public function show($id)
    {
        $pedido = Pedido::with(['usuario', 'formaDePagamento'])->findOrFail($id);
        return view('pedido.show', compact('pedido'));
    }
}
