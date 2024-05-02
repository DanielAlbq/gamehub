@extends('layouts.app')

@section('content')
    <h1>Criar Entrada de Estoque</h1>
    <form action="{{ route('estoque.store') }}" method="POST">
        @csrf
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <button type="submit">Salvar Estoque</button>
    </form>
@endsection
