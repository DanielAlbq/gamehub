@extends('layouts.app')

@section('content')
    <h1>Pedidos</h1>
    <a href="{{ route('pedidos.create') }}">Adicionar Novo Pedido</a>
    <ul>
        @foreach ($pedidos as $pedido)
            <li>
                Pedido #{{ $pedido->id }} - Total: R$ {{ number_format($pedido->total, 2, ',', '.') }}
                <a href="{{ route('pedidos.show', $pedido->id) }}">Ver</a>
                <a href="{{ route('pedidos.edit', $pedido->id) }}">Editar</a>
                <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
