@extends('layouts.app')

@section('content')
    <h1>Criar Novo Pedido</h1>
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        <label for="usuario_id">Usuário:</label>
        <select name="usuario_id" id="usuario_id" required>
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
            @endforeach
        </select>
        <label for="forma_de_pagamento_id">Forma de Pagamento:</label>
        <select name="forma_de_pagamento_id" id="forma_de_pagamento_id" required>
            @foreach ($formasDePagamento as $forma)
                <option value="{{ $forma->id }}">{{ $forma->metodo }}</option>
            @endforeach
        </select>
        <label for="total">Total:</label>
        <input type="number" name="total" id="total" required>
        <label for="status">Status:</label>
        <input type="text" name="status" id="status" required>
        <button type="submit">Salvar</button>
    </form>
@endsection
