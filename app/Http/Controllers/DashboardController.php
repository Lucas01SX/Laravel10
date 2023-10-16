<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalDeProdutoCadastrado = $this->buscaTotalProdutoCadastrado();
        $totalDeClienteCadastrado = $this->buscaTotalClienteCadastrado();
        $totalDeVendaCadastrado = $this->buscaTotalVendaCadastrado();
        $totalDeUsuarioCadastrado = $this->buscaTotalUsuariosCadastrado();

        return view('pages.dashboard.dashboard', compact('totalDeProdutoCadastrado', 'totalDeClienteCadastrado', 'totalDeVendaCadastrado', 'totalDeUsuarioCadastrado'));
    }

    public function buscaTotalProdutoCadastrado() {
        $findProduto = Produto::all()->count();

        return $findProduto;
    }

    public function buscaTotalClienteCadastrado() {
        $findCliente = Cliente::all()->count();

        return $findCliente;
    }

    public function buscaTotalVendaCadastrado() {
        $findVenda = Venda::all()->count();

        return $findVenda;
    }

    public function buscaTotalUsuariosCadastrado() {
        $findVenda = User::all()->count();

        return $findVenda;
    }
}
