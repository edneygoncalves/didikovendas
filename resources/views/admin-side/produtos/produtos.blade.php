@extends('admin-side.layout-admin')
@section('title', $title ?? 'Produtos')

@section('content_header')
<h1>{{ $title ?? 'Vendas' }}</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                {{-- <h3 class="card-title"></h3> --}}

                <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="{{ route('produtos.create') }}" class="btn btn-block btn-primary ">Cadastrar</a>
                </div>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn .btn-sm">
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
                            <th>Foto</th>
                            <th>Categoria/subcategoria</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)

                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>
                                    <img src="{{ $produto->foto }}" class="img-circle img-size-32 mr-2">
                                </td>
                                <td>{{ $produto->subcategoria->categoria->name }} / {{ $produto->subcategoria->name }}</td>
                                <td>{{ $produto->name }}</td>
                                <td>{{ $produto->valor }}</td>
                                <td>-</td>
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
