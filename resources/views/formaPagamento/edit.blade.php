@extends('layouts.app')

@section('content')
    <h1>Editar Forma de Pagamento</h1>
    <form action="{{ route('formaPagamento.update', $forma->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="metodo">Método de Pagamento:</label>
        <input type="text" name="metodo" id="metodo" value="{{ $forma->metodo }}" required>
        <button type="submit">Atualizar</button>
    </form>
@endsection
