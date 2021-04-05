@extends('admin-side.layout-admin')
@section('title', $title ?? 'viagens')

@section('content_header')
<h1>{{ $title ?? 'Viagens' }}</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                {{-- <h3 class="card-title"></h3> --}}

                <div class="input-group input-group-sm" style="width: 150px;">
                    <a href="{{ route('viagens.create') }}" class="btn btn-block btn-primary ">Cadastrar</a>
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
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($viagens as $viagem)

                            <tr>
                                <td>{{ $viagem->id }}</td>
                                <td>{{ $viagem->data->format('d/m/Y') }}</td>
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
