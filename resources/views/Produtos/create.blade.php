@extends('layouts.app')

@section('content')
    <h1>Criar Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" required></textarea>
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" required>
        <label for="categoria_id">Categoria:</label>
        <select name="categoria_id" id="categoria_id" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
        <label for="estoque_id">Estoque:</label>
        <select name="estoque_id" id="estoque_id" required>
            @foreach ($estoques as $estoque)
                <option value="{{ $estoque->id }}">{{ $estoque->quantidade }}</option>
            @endforeach
        </select>
        <button type="submit">Salvar</button>
    </form>
@endsection
