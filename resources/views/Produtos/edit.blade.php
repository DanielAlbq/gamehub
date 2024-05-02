@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $produto->nome }}" required>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" required>{{ $produto->descricao }}</textarea>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" value="{{ $produto->preco }}" required>
        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $produto->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nome }}</option>
            @endforeach
        </select>
        <label for="estoque_id">Estoque:</label>
        <select name="estoque_id" id="estoque_id" required>
            @foreach ($estoques as $estoque)
                <option value="{{ $estoque->id }}" {{ $produto->estoque_id == $estoque->id ? 'selected' : '' }}>{{ $estoque->quantidade }}</option>
            @endforeach
        </select>
        <button type="submit">Atualizar</button>
    </form>
@endsection
