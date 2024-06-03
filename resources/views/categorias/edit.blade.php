@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">

    <h1>Editar Categoria</h1>
    <div class="categorias-container">
        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="form-categoria">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ $categoria->nome }}" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" required>{{ $categoria->descricao }}</textarea>
            </div>

            <button type="submit" class="btn">Atualizar Categoria</button>
        </form>
    </div>
@endsection
