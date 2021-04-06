@extends('admin-side.layout-admin')

@section('title', 'Vendas')

@section('content_header')
<h1>Viagem</h1>
@stop

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="header-vendas-viagem card-header">
                <h3 class="card-title"></h3>

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

            <div class="row mt-4 p-1">


            @for ($i = 0; $i < 5; $i++)



            @foreach ($viagem->vendas as $venda)
            <div class="card-ficha-venda col-lg-4">
                <div class="card">
                    <div class="card-header d-flex bg-secondary">
                        <img src="{{ $venda->cliente->foto }}" class="img-circle img-size-32 mr-2">
                        <h3 class="card-title">{{ $venda->cliente->name }}</h3>
                        @if ($venda->maps)
                            <img class="maps-venda" src="{{ $venda->maps_qrcode }}" alt="">
                        @endif
                    </div>
                    <div class="card-endereco d-flex">
                        <h3 class="card-title">Jardim Ype</h3>
                        <a class="link-maps" href="{{ $venda->maps }}" target="_blank" rel="noopener noreferrer">Maps</a>

                    </div>

                    <div class="card-body table-responsive">
                        <table class="table table-striped table-valign-middle">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    {{-- <th>Valor Total</th> --}}
                                    <th>Valor Unitário</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($venda->encomendas as $encomenda)
                                <tr>
                                    <td>
                                        <img src="{{ $encomenda->produto->foto }}" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        {{ $encomenda->produto->name }}
                                    </td>
                                    <td>
                                        $ {{ $encomenda->venda }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach


            @endfor

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
