@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Procedimento Médico</h2>

        <form action="{{ route('procedures.update', $procedure->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome do Procedimento:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $procedure->name }}" required>
            </div>
            <div class="form-group">
                <label for="value">Valor (R$):</label>
                <input type="text" class="form-control" id="value" name="value" value="{{ $procedure->value }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        </form>
    </div>
@endsection
