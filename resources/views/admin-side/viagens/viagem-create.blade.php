@extends('admin-side.layout-admin')

@section('title', 'Cadastrar Produtos')

@section('content_header')
    <h1>Cadastrar Produtos</h1>
@stop

@section('content')



    <div class="card card-info">
        <div class="card-body">

            <form id="submitForm">
            @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" value="Viagem de {{ (new Carbon\Carbon('next friday'))->format('d/m/Y') }}" class="form-control" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label>Data</label>
                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                        <input type="text" name="data" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                <button class="input-group input-group-sm" type="submit">Enviar</button>

            </form>

        </div>
        <!-- /.card-body -->
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@include('admin-side.components.submit-form',[
    'url' => route('viagens.store'),
    'redirect' => route('viagens.index')
])


@stop
