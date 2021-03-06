@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Encomendas</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Encomendas do período [data início - data fim]</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Fornecedor</th>
                            <th>Venda/Cliente</th> {{-- encomenda->venda->cliente --}}
                            <th>Status</th>
                            <th>Opções</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($encomendas as $encomenda)
                            <tr>
                                <td>{{ $encomenda->id }}</td>
                                <td>
                                    <img src="{{ $encomenda->produto->foto }}" class="img-circle img-size-32 mr-2">
                                    {{ $encomenda->produto->name }}
                                </td>
                                <td>{{ $encomenda->fornecedor->name }}</td>
                                <td>
                                    {{ $encomenda->nome_cliente }}
                                    <a href="{{ $encomenda->whatsapp_cliente }}" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </td>
                                <td>
                                    <select statusId="{{ $encomenda->status_id }}" class="select-status-id">
                                        @foreach ($encomendaStatus as $status)
                                            <option value="{{ $status->id }}" {{ $encomenda->status_id == $status->id ? 'selected' : '' }}>
                                                {{ $status->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>


@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
