@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/view.css') }}">

<h1>Detalhes do Pedido</h1>
<div class="pedido-detalhes">
    <p><strong>ID:</strong> {{ $pedido->id }}</p>
    <p><strong>Usuário:</strong> {{ $pedido->usuario->nome }}</p>
    <p><strong>Forma de Pagamento:</strong> {{ $pedido->formaDePagamento->metodo }}</p>
    <p><strong>Total:</strong> R$ {{ number_format($pedido->total, 2, ',', '.') }}</p>
    <p><strong>Status:</strong> {{ $pedido->status }}</p>
    <a href="{{ route('pedido.index') }}" class="btn btn-primary">Voltar para a lista</a>
</div>
@endsection
