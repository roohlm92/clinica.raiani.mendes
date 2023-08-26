@extends('layouts.app')

@section('title', '| Procedimentos')
@section('sidebar_procedures', 'active')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10">Procedimentos</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Procedimentos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card User-Activity">
                                        <div class="card-header">
                                            <h5>Todos os procedimentos</h5>
                                            <div class="card-header-right">
                                                <a href="{{ route('procedures.create') }}" class="btn btn-icon btn-outline-primary">
                                                    <i class="feather icon-user-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-block text-center">
                                            <table id="tb-procedures" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th>Valor (R$)</th>
                                                        <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($procedures as $procedure)
                                                        <tr>
                                                            <td>{{ $procedure->name }}</td>
                                                            <td>{{ $procedure->value }}</td>
                                                            <td>
                                                                <a href="{{ route('procedures.edit', $procedure->id) }}" class="btn btn-icon btn-outline-primary">
                                                                    <i class="feather icon-edit"></i>
                                                                </a>
                                                                <form action="{{ route('procedures.destroy', $procedure->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-icon btn-outline-danger">
                                                                        <i class="feather icon-trash-2"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <script src="{{ asset('plugins/datatables/datatables.min.js') }}" defer></script>
    <script>
        $(document).ready(function() {
            $('#tb-procedures').DataTable();
        });
    </script>
@endsection
