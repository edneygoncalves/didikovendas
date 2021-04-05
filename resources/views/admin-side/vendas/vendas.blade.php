@extends('admin-side.layout-admin')

@section('title', 'Vendas')

@section('content_header')
<h1>Vendas</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

                <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="{{ route('vendas.create') }}" class="btn btn-block btn-primary ">Cadastrar</a>
                </div>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Itens(encomendas)</th>
                            <th>Status</th>
                            <th>Link Contato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendas as $venda)

                            <tr>
                                <td>{{ $venda->id }}</td>
                                <td>{{ $venda->cliente->name }}</td>
                                <td>{{ $venda->encomendas()->count() }}</td>
                                <td>{{ $venda->status->name }}</td>
                                <td>
                                    <a href="{{ $venda->cliente->url_whatsapp }}">
                                    {{ $venda->cliente->whatsapp }}
                                    </a>
                                </td>
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
