@extends('layouts.app')

@section('content')
    <h1>{{ $categoria->nome }}</h1>
    <p>{{ $categoria->descricao }}</p>
    <a href="{{ route('categorias.index') }}">Voltar para a lista</a>
@endsection
