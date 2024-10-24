@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="container">
    <div class="welcome-section">
        <h1>Bem-vindo ao Sistema de Controle GameHub</h1>
        <img src="{{ asset('images/gamehub.jpeg') }}" alt="Bem-vindo" class="welcome-image">
    </div>
</div>
@endsection
