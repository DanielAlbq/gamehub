@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/newEdit.css') }}">

    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST" class="form-produto" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $produto->nome }}" required>
        </div>

        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" required>{{ $produto->descricao }}</textarea>
        </div>

        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="number" name="preco" id="preco" step="0.01" value="{{ $produto->preco }}" required>
        </div>

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}" required>
        </div>

        <div class="form-group">
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" id="categoria_id" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $produto->categoria_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="file" name="imagem" id="imagem" accept="image/*">
            @if ($produto->imagem)
                <div class="current-image">
                    <p>Imagem atual:</p>
                    <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" style="max-width: 150px; max-height: 150px;">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
