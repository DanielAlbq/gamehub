@extends('layouts.app')

@section('content')
    <h1>Editar Pedido</h1>
    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="usuario_id">Usuário:</label>
        <select name="usuario_id" id="usuario_id" required>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}" {{ $pedido->usuario_id == $usuario->id ? 'selected' : '' }}>{{ $usuario->nome }}</option>
            @endforeach
        </select>
        <label for="forma_de_pagamento_id">Forma de Pagamento:</label>
        <select name="forma_de_pagamento_id" id="forma_de_pagamento_id" required>
            @foreach ($formasDePagamento as $forma)
                <option value="{{ $forma->id }}" {{ $pedido->forma_de_pagamento_id == $forma->id ? 'selected' : '' }}>{{ $forma->metodo }}</option>
            @endforeach
        </select>
        <label for="total">Total:</label>
        <input type="number" name="total" id="total" step="0.01" value="{{ $pedido->total }}" required>
        <label for="status">Status:</label>
        <input type="text" name="status" id="status" value="{{ $pedido->status }}" required>
        <button type="submit">Atualizar</button>
    </form>
@endsection
