@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/view.css') }}">

<h1>Detalhes do Produto</h1>
<div class="produto-detalhes">
    <p><strong>Nome:</strong> {{ $produto->nome }}</p>
    <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
    <p><strong>Preço:</strong> R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    <p><strong>Categoria:</strong> {{ $produto->categoria->nome }}</p>
    <p><strong>Quantidade em Estoque:</strong> {{ $produto->estoque->quantidade }}</p>
    <a href="{{ route('produtos.index') }}" class="btn btn-primary">Voltar para a lista</a>
</div>
@endsection
