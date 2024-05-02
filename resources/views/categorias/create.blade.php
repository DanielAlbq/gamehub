@extends('layouts.app')

@section('content')
    <h1>Criar Categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="descricao">Descrição (opcional):</label>
        <textarea name="descricao" id="descricao"></textarea>
        <button type="submit">Salvar Categoria</button>
    </form>
@endsection
