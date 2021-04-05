<?php

namespace App\Http\Controllers;

use App\Models\Viagem;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $viagens = Viagem::all();
        return \view('admin-side.viagens.viagens')->with(['viagens' =>$viagens ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return \view('admin-side.viagens.viagem-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $viagem = new Viagem($request->all());

        return ['cod_erro' => false, 'viagem' => $viagem];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $viagem = Viagem::find($id);
        return \view('admin-side.viagens.viagem-show')->with(['viagem' =>$viagem ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Viagem $viagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Viagem $viagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viagem  $viagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viagem $viagem)
    {
        //
    }
}
