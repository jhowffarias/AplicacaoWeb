@extends('layouts.home')

@section('title', 'Bem vindo ao meu site')

@section('sidebar')
    @parent
        <h1>Lista de compras</h1>
        <hr>
@endsection

@section('content')
<table class="table">
        <tr><td>Lista de compras do Mercado {{$mercado}}</td></tr>
    @foreach($compras as $produto)
        <tr><td>Comprar - > {{$produto['produto']}}<br></td></tr>
</table>
    @endforeach

    <table class="table">
        <tr><td>Lista de compras do Mercado {{$mercado2}}</td></tr>
    @foreach($compras2 as $produto)
        <tr><td>Comprar - > {{$produto['produto']}}<br></td></tr>
</table>
    @endforeach
@endsection
