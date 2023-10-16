{{-- Extends da Index --}}

@extends('index')

@section('content')

    <div class="d-flex justify-content-between flex wrap flex-md-nowrap aling-items-center">
        <h1 class="h2">Vendas</h1>
    </div>

    <div>
        <form action="{{ route('vendas.index') }}" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome">
            <button> Pesquisar </button>
            <a type="button" href="{{ route('cadastrar.venda') }}" class="btn btn-success float-end">
                Incluir Venda
            </a>
        </form>
        <div class="table-responsive mt-4">
            @if ($findvendas->isEmpty())
                <p> Não existe dados
                @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Numeração</th>
                            <th>Produto</th>
                            <th>Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findvendas as $venda)
                            <tr>
                                <td>{{ $venda->numero_da_venda }}</td>
                                <td>{{ $venda->produto->nome }}</td>
                                <td>{{ $venda->cliente->nome }}</td>
                                <td>
                                    <a href="{{ route('enviaComprovantePorEmail.venda', $venda->id) }}"
                                        class="btn btn-light btn-sm">
                                        Enviar E-mail
                                    </a>
                                    <meta name='csrf-token' content="{{ csrf_token() }}" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
