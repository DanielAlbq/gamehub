@extends('layouts.app')

@section('content')
    <h1>Criar Nova Forma de Pagamento</h1>
    <form action="{{ route('formaPagamento.store') }}" method="POST">
        @csrf
        <label for="metodo">Método de Pagamento:</label>
        <input type="text" name="metodo" id="metodo" required>
        <button type="submit">Salvar</button>
    </form>
@endsection
