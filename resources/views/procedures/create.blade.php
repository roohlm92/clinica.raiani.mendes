@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Criar Novo Procedimento Médico</h2>

        <form action="{{ route('procedures.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome do Procedimento:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="value">Valor (R$):</label>
                <input type="text" class="form-control" id="value" name="value" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar Procedimento</button>
        </form>
    </div>
@endsection
