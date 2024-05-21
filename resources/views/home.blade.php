<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">

<div class="container">
    <div class="welcome-section">
        <h1>Bem-vindo ao meu e-commerce</h1>
        <p>Esta é a página inicial do seu site.</p>
        <p>Explore nossos produtos e aproveite as ofertas!</p>
    </div>
</div>
@endsection
