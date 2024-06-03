@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">

    <h1>Criar Nova Categoria</h1>
    <div class="categorias-container">
        <form action="{{ route('categorias.store') }}" method="POST" class="form-categoria">
            @csrf

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" required></textarea>
            </div>

            <button type="submit" class="btn">Salvar Categoria</button>
        </form>
    </div>
@endsection
