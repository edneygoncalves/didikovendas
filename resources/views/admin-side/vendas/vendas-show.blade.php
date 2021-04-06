@extends('admin-side.layout-admin')

@section('title', 'Venda')

@section('content_header')
<h1>Cliente {{ $venda->cliente->name }}</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCadastrarEncomenda">
                    Adicionar pedido
                </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Produto</th>
                            <th>Custo</th>
                            <th>Venda</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($venda->encomendas as $encomenda)

                            <tr>
                                <td>{{ $encomenda->id }}</td>
                                <td>
                                    <img src="{{ $encomenda->produto->foto }}" class="img-circle img-size-32 mr-2">
                                    {{ $encomenda->produto->name }}
                                </td>
                                <td>{{ $encomenda->custo }}</td>
                                <td>{{ $encomenda->venda }}</td>
                                <td>
                                    {{ $encomenda->status->name }}
                                </td>
                                <td>
                                    <button type="button" item-id="{{ $encomenda->id }}" class="btn-excluir-item btn btn-block bg-gradient-danger btn-sm col-sm-3">
                                        <i class="fa fa-trash"></i>
                                    </button>
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

@include('admin-side.vendas.modal-cadastrar-encomenda')


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')


@include('admin-side.components.submit-form',[
    'url' => route('encomendas.store'),
    'redirect' => route('vendas.show', $venda->id)
])

@include('admin-side.components.delete-item',[
    'url' => route('encomendas.index'),
    'redirect' => route('vendas.show', $venda->id)
])





@stop
