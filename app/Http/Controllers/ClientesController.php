<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{

    private int $qtd_por_pagina= 5;

    public function __construct(){

        //Só usuarios logados podem acessar
        // $this->middleware('auth');
    }

    public function listar(){

        $clientes = Clientes::all();

        //Atenção! clientes/listar.blade.php vira clientes.listar
        return  view('clientes.listar', ['clientes' => $clientes]);
    }

    public function index(Request $request){
        $data = Clientes::onderBy('id', 'DESC')->paginate($this->qtd_por_pagina);

        return view('clientes.index', compact('data'))
        ->with('i', ($request->input('page', 1) - 1) * $this->qtd_por_pagina);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        
    }
}