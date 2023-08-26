@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Procedimentos Médicos</h2>

        @if (count($procedures) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Valor (R$)</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($procedures as $procedure)
                        <tr>
                            <td>{{ $procedure->id }}</td>
                            <td>{{ $procedure->name }}</td>
                            <td>{{ $procedure->value }}</td>
                            <td>
                                <a href="{{ route('procedures.edit', $procedure->id) }}" class="btn btn-primary">Editar</a>
                                <form action="{{ route('procedures.destroy', $procedure->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Nenhum procedimento encontrado.</p>
        @endif
    </div>
@endsection
