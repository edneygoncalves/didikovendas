<?php

namespace App\Http\Controllers;

use App\Models\Encomenda;
use App\Models\EncomendaStatus;
use Illuminate\Http\Request;

class EncomendasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encomendas = Encomenda::all();
        $encomendaStatus = EncomendaStatus::all();
        return view('admin-side.encomendas.encomendas')->with([
            'encomendas' => $encomendas,
            'encomendaStatus' => $encomendaStatus
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
        $encomenda = new Encomenda($request->all());

        $encomenda->status_id = 1;
        $encomenda->save();

        return ['cod_erro' => false, 'obj' => $encomenda];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function show(Encomenda $encomenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Encomenda $encomenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encomenda $encomenda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encomenda  $encomenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encomenda $encomenda)
    {
        //
        //
        $encomenda->delete();

        return ['cod_erro' => false];
    }
}
