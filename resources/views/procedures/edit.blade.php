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
                                        <li class="breadcrumb-item"><a href="{{ route('procedures.index') }}">Procedimentos</a></li>
                                        <li class="breadcrumb-item">Editar Procedimento</li>
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
                                            <h5>Editar Procedimento</h5>
                                        </div>
                                        <div class="card-block">
                                            <form action="{{ route('procedures.update', $procedure->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="name">Nome do Procedimento:</label>
                                                    <input type="text" class="form-control" id="name" name="name" value="{{ $procedure->name }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="value">Valor (R$):</label>
                                                    <input type="number" step="0.01" class="form-control" id="value" name="value" value="{{ $procedure->value }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                                            </form>
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
@endsection
