@extends('layouts.app')

@section('content')
    <h1>Formas de Pagamento</h1>
    <a href="{{ route('formaPagamento.create') }}">Adicionar Nova Forma de Pagamento</a>
    <ul>
        @foreach ($formas as $forma)
            <li>
                Método: {{ $forma->metodo }}
                <a href="{{ route('formaPagamento.show', $forma->id) }}">Ver</a>
                <a href="{{ route('formaPagamento.edit', $forma->id) }}">Editar</a>
                <form action="{{ route('formaPagamento.destroy', $forma->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
