@extends('layouts.app')

@section('content')
    <h1>Detalhes do Produto</h1>
    <p>Nome: {{ $produto->nome }}</p>
    <p>Descrição: {{ $produto->descricao }}</p>
    <p>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
    <p>Categoria: {{ $produto->categoria->nome }}</p>
    <p>Quantidade em Estoque: {{ $produto->estoque->quantidade }}</p>
    <a href="{{ route('produtos.index') }}">Voltar para a lista</a>
@endsection
