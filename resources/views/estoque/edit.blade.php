@extends('layouts.app')

@section('content')
    <h1>Editar Estoque</h1>
    <form action="{{ route('estoque.update', $estoque->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="{{ $estoque->quantidade }}" required>
        <button type="submit">Atualizar Estoque</button>
    </form>
@endsection
