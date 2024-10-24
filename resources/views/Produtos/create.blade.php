@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/newEdit.css') }}">

    <h1>Criar Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST" class="form-produto" enctype="multipart/form-data"> <!-- Adiciona enctype -->
        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" required></textarea>
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>

        <div class="form-group">
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" id="categoria_id" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <!-- Novo campo para imagem -->
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="file" name="imagem" id="imagem" accept="image/*"> <!-- Campo para upload de imagem -->
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
