@extends('layouts.app')

@section('content')
    <h1>Editar Categoria</h1>
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $categoria->nome }}" required>
        <label for="descricao">Descrição (opcional):</label>
        <textarea name="descricao" id="descricao">{{ $categoria->descricao }}</textarea>
        <button type="submit">Atualizar Categoria</button>
    </form>
@endsection
