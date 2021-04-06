<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Fornecedor;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\VendaStatus;
use App\Models\Viagem;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vendas = Venda::all();
        return view('admin-side.vendas.vendas')->with([
            'vendaStatus' => VendaStatus::all(),
            'vendas' => $vendas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes = Cliente::orderBy('name')->get();
        $viagens = Viagem::next();
        return view('admin-side.vendas.vendas-create')->with(
            [
                'clientes' => $clientes,
                'viagens' => $viagens
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $venda = new Venda($request->all());
        $venda->save();

        return ['cod_erro' => false, 'venda' => $venda, 'redirect' => route('vendas.show', $venda->id) ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {
        //

        return view('admin-side.vendas.vendas-show')->with([
            'venda' => $venda,
            'produtos' => Produto::all(),
            'fornecedores' => Fornecedor::all()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function edit(Venda $venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venda $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venda  $venda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Venda $venda)
    {
        //
    }
}
