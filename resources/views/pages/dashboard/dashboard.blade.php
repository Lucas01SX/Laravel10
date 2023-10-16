@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex wrap flex-md-nowrap aling-items-center">
        <h1 class="h2">Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Produtos Cadastrados</h5>
                    <p class="card-text">Total de Produtos Cadastrados no Sistema</p>
                    <a href="#" class="btn btn-primary"> {{ $totalDeProdutoCadastrado }} </a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Clientes Cadastrados</h5>
                    <p class="card-text">Total de Clientes Cadastrados no Sistemas</p>
                    <a href="#" class="btn btn-primary"> {{ $totalDeClienteCadastrado }} </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vendas Cadastradas</h5>
                    <p class="card-text">Total de Vendas Cadastradas</p>
                    <a href="#" class="btn btn-primary">{{ $totalDeVendaCadastrado }}</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Usuários Cadastrados</h5>
                    <p class="card-text">Total de Usuários Cadastrados</p>
                    <a href="#" class="btn btn-primary">{{ $totalDeUsuarioCadastrado }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
