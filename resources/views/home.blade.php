@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bem vindo! Você esta logado') }}
                    &nbsp;
                    <!-- <a href="/clientes/listar">Veja a Lista de Clientes</a> -->
                    <a href="/clientes">Veja a Lista de Clientes</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
