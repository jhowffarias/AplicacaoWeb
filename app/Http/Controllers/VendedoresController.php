<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedores;

class VendedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vendedores::all();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendedor = Vendedores::find($id);

        if($vendedor){
            return $vendedor;
        }else{
            return json_encode([$id => 'nao existe vendedores']);
        }

        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vendedor = Vendedores::find($id);

        if($vendedor){
            $json = $request->getContent();
            $atualizacao = json_decode($json, JSON_OBJECT_AS_ARRAY);
            $vendedor->nome = $atualizacao['nome'];
            $ret = $vendedor->update() ? [$id => 'atualizado'] : [$id => 'erro'];
        }else{
            $ret = [$id => 'Nao encontrado'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendedor = Vendedores::find($id);

        if($vendedor){
            $ret = $vendedor->delete() ? [$id => 'apagado'] : [$id => 'erro'];
        }else{
            $ret = [$id => 'nao existe vendedor com esse ID'];
        }

        return json_encode($ret);
    }

    public function checkVendedor(int $id):bool{

        $vendedores = [ 1 => 'Paulo',
                        2 => 'Carla',
                        3 => 'João'];
        return array_key_exists($id, $vendedores);
    }

    public function getVendedor(int $id):string
    {
        $vendedores = [ 1 => 'Paulo',
        2 => 'Carla',
        3 => 'João'];

        return $vendedores[$id];
    }
}
