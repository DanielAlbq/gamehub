@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/newEdit.css') }}">

    <h1>Editar Produto</h1>
    <form action="{{ route('produtos.update', $produto->id) }}" method="POST" class="form-produto">
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
            <label for="estoque_id">Estoque:</label>
            <select name="estoque_id" id="estoque_id" required>
                @foreach ($estoques as $estoque)
                    <option value="{{ $estoque->id }}" {{ $produto->estoque_id == $estoque->id ? 'selected' : '' }}>
                        {{ $estoque->quantidade }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
@endsection
