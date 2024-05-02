@extends('layouts.app')

@section('content')
    <h1>Detalhes do Estoque</h1>
    <p>Quantidade: {{ $estoque->quantidade }}</p>
    <a href="{{ route('estoque.index') }}">Voltar para a lista</a>
@endsection
