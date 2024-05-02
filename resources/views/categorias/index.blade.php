@extends('layouts.app')

@section('content')
    <h1>Categorias</h1>
    <a href="{{ route('categorias.create') }}">Adicionar Nova Categoria</a>
    <ul>
        @foreach ($categorias as $categoria)
            <li>
                {{ $categoria->nome }}
                <a href="{{ route('categorias.show', $categoria->id) }}">Ver</a>
                <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
