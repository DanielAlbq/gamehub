@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/produtos.css') }}">

<h1>Produtos</h1>
<div class="container-produto">
    <a href="{{ route('produtos.create') }}" class="btn btn-primary">Adicionar Novo Produto</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagem</th> <!-- Nova coluna para imagem -->
                <th>Nome</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>
                        @if($produto->imagem) <!-- Verifica se a imagem existe -->
                            <img src="{{ asset('storage/' . $produto->imagem) }}" alt="{{ $produto->nome }}" class="produto-imagem" style="width: 50px; height: auto;">
                        @else
                            <img src="{{ asset('path/to/default/image.png') }}" alt="Imagem padrão" class="produto-imagem" style="width: 50px; height: auto;"> <!-- Imagem padrão -->
                        @endif
                    </td>
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                    <td>{{ optional($produto->categoria)->nome }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>
                        <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
