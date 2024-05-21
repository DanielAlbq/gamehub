@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/newEdit.css') }}">

    <h1>Criar Novo Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST" class="form-produto">
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
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" id="categoria_id" required>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="estoque_id">Estoque:</label>
            <select name="estoque_id" id="estoque_id" required>
                @foreach ($estoques as $estoque)
                    <option value="{{ $estoque->id }}">{{ $estoque->quantidade }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
