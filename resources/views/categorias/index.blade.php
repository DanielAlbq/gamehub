@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/categories.css') }}">

    <h1>Categorias</h1>
    <a href="{{ route('categorias.create') }}" class="btn">Adicionar Nova Categoria</a>
    <div class="categorias-lista">
        <ul>
            @foreach ($categorias as $categoria)
                <li>
                    {{ $categoria->nome }}
                    <div>
                        <a href="{{ route('categorias.show', $categoria->id) }}">Ver</a>
                        <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Deletar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
