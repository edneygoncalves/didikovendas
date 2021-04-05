<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\ProdutoCategoria;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produtos = Produto::all();
        return view('admin-side.produtos.produtos')->with([
            'produtos' => $produtos
        ]);
    }

    public function quadros()
    {
        //
        $quadros = ProdutoCategoria::find(1);

        $produtos = $quadros->produtos;

        return view('admin-side.produtos.produtos')->with([
            'title' => 'Quadros',
            'produtos' => $produtos
        ]);
    }


    public function palhetas()
    {
        //
        $palhetas = ProdutoCategoria::find(1);

        $produtos = $palhetas->produtos;

        return view('admin-side.produtos.produtos')->with([
            'title' => 'Palhetas',
            'produtos' => $produtos
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

        return view('admin-side.produtos.produtos-create')->with([
            'categorias' => ProdutoCategoria::all()
        ]);
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
        $produto = new Produto($request->all());

        $produto->save();

        return ['erro' => false, 'produto' => $produto];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produto $produto)
    {
        //
    }
}
