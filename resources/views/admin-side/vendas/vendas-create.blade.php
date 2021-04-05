@extends('admin-side.layout-admin')

@section('title', 'Nova Venda')

@section('content_header')
    <h1>Nova Venda</h1>
@stop

@section('content')



    <div class="card card-info">
        <div class="card-body">

            <form id="submitForm">
            @csrf
                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="name" value="Venda de {{ now()->format('d/m/Y') }}" class="form-control" placeholder="Nome">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label>Status</label>
                          <select name="status_id" class="form-control">
                            @foreach (\App\Models\VendaStatus::all() as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach

                          </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tipo</label>

                    <select name="tipo_id" class="form-control">
                        @foreach (\App\Models\VendaTipo::all() as $tipo)
                            <option value="{{ $tipo->id }}">{{ $tipo->name }}</option>
                        @endforeach

                      </select>
                </div>
                <div class="form-group">
                    <label>Cliente</label>
                    <select name="cliente_id" class="form-control">
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
                    @endforeach

                </select>
                </div>
                <div class="form-group">
                    <label>Viagem</label>
                    <select name="viagem_id" class="form-control">
                        @foreach ($viagens as $viagem)
                            <option value="{{ $viagem->id }}">{{ $viagem->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button class="input-group input-group-sm" type="submit">Enviar</button>

            </form>

        </div>
        <!-- /.card-body -->
    </div>



@stop

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

@stop

@section('js')
@include('admin-side.components.submit-form',[
    'url' => route('vendas.store'),
    'redirect' => route('vendas.index')
])


@stop
