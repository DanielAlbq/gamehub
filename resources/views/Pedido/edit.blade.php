@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">

    <div class="pedido-container">
        <h1>Editar Pedido</h1>
        <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST" class="form-pedido">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="usuario_id">Usuário:</label>
                <select name="usuario_id" id="usuario_id" required>
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}" 
                            {{ $pedido->usuario_id == $usuario->id ? 'selected' : '' }}>
                            {{ $usuario->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="forma_de_pagamento_id">Forma de Pagamento:</label>
                <select name="forma_de_pagamento_id" id="forma_de_pagamento_id" required>
                    @foreach ($formasDePagamento as $forma)
                        <option value="{{ $forma->id }}" 
                            {{ $pedido->forma_de_pagamento_id == $forma->id ? 'selected' : '' }}>
                            {{ $forma->metodo }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" name="total" id="total" step="0.01" 
                    value="{{ $pedido->total }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" value="{{ $pedido->status }}" required>
            </div>

            <button type="submit" class="btn">Atualizar</button>
        </form>
    </div>
@endsection
