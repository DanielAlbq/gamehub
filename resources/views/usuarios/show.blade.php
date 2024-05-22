@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/view.css') }}">

<h1>Detalhes do Usuário</h1>
<div class="usuario-detalhes">
    <p><strong>Nome:</strong> {{ $usuario->name }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Voltar para a lista</a>
</div>
@endsection
