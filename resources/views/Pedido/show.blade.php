@extends('layouts.app')

@section('content')
    <h1>Detalhes do Pedido</h1>
    <p>ID: {{ $pedido->id }}</p>
    <p>Usuário: {{ $pedido->usuario->nome }}</p>
    <p>Forma de Pagamento: {{ $pedido->formaDePagamento->metodo }}</p>
    <p>Total: R$ {{ number_format($pedido->total, 2, ',', '.') }}</p>
    <p>Status: {{ $pedido->status }}</p>
    <a href="{{ route('pedidos.index') }}">Voltar para a lista</a>
@endsection
