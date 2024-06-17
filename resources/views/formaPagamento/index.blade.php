@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/produtos.css') }}">

<h1>Formas de Pagamento</h1>
<div class="container-produto">
    <a href="{{ route('formaPagamento.create') }}" class="btn btn-primary">Adicionar Nova Forma de Pagamento</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Método</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formas as $forma)
                <tr>
                    <td>{{ $forma->id }}</td>
                    <td>{{ $forma->metodo }}</td>
                    <td>
                        <a href="{{ route('formaPagamento.show', $forma->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('formaPagamento.edit', $forma->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('formaPagamento.destroy', $forma->id) }}" method="POST" style="display:inline-block;">
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
