@extends('layouts.app')

@section('content')
    <h1>Estoque</h1>
    <a href="{{ route('estoque.create') }}">Adicionar Novo Estoque</a>
    <ul>
        @foreach ($estoques as $estoque)
            <li>
                Quantidade: {{ $estoque->quantidade }}
                <a href="{{ route('estoque.show', $estoque->id) }}">Ver</a>
                <a href="{{ route('estoque.edit', $estoque->id) }}">Editar</a>
                <form action="{{ route('estoque.destroy', $estoque->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
