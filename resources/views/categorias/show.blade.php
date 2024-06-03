@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">

    <h1>{{ $categoria->nome }}</h1>
    <div class="categorias-container">
        <p><strong>Nome:</strong> {{ $categoria->nome }}</p>
        <p><strong>Descrição:</strong> {{ $categoria->descricao }}</p>
        <a href="{{ route('categorias.index') }}" class="btn btn-primary">Voltar para a lista</a>
    </div>
@endsection
