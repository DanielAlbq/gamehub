@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">

    <div class="pagamento-container">
        <h1>Editar Forma de Pagamento</h1>
        <form action="{{ route('formaPagamento.update', $forma->id) }}" method="POST" class="form-pagamento">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="metodo">Método de Pagamento:</label>
                <input type="text" name="metodo" id="metodo" value="{{ $forma->metodo }}" required>
            </div>
            <button type="submit" class="btn">Atualizar</button>
        </form>
    </div>
@endsection
