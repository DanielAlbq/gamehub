@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/payment.css') }}">

    <h1>Detalhes da Forma de Pagamento</h1>
    <p>Método: {{ $forma->metodo }}</p>
    <a href="{{ route('formaPagamento.index') }}">Voltar para a lista</a>
@endsection
