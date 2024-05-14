@extends('layouts.app')

@section('content')

    <h1>Produtos</h1>
    
    <a href="{{ route('produtos.create') }}">Adicionar Novo Produto</a>
    <ul>
        @foreach ($produtos as $produto)
            <li>
                Nome: {{ $produto->nome }} - Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}
                <a href="{{ route('produtos.show', $produto->id) }}">Ver</a>
                <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
