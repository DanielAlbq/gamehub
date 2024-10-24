@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/payment.css') }}">

    <h1>Criar Nova Forma de Pagamento</h1>
    <div class="pagamento-container">
        <form action="{{ route('formaPagamento.store') }}" method="POST" class="form-pagamento">
            @csrf
            <div class="form-group">
                <label for="metodo">Método de Pagamento:</label>
                <input type="text" name="metodo" id="metodo" required>
            </div>
            <button type="submit" class="btn">Salvar</button>
        </form>
    </div>
@endsection
