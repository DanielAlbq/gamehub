@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">

    <h1>Criar Novo Pedido</h1>
    <div class="pedido-container">
        <form action="{{ route('pedidos.store') }}" method="POST" class="form-pedido">
            @csrf
            <div class="form-group">
                <label for="usuario_id">Usuário:</label>
                <select name="usuario_id" id="usuario_id" required>
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="forma_de_pagamento_id">Forma de Pagamento:</label>
                <select name="forma_de_pagamento_id" id="forma_de_pagamento_id" required>
                    @foreach ($formasDePagamento as $forma)
                        <option value="{{ $forma->id }}">{{ $forma->metodo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" name="total" id="total" required>
            </div>

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" name="status" id="status" required>
            </div>

            <button type="submit" class="btn">Salvar</button>
        </form>
    </div>
@endsection
