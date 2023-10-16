<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Models\Componetes;
use App\Models\Produto;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

    public function __construct(Produto $produto)
    {
        $this->produto = $produto; 
    }

    public function index (Request $request) {

        //$findProduto = Produto::all();
        //$findProduto = Produto::where('nome', '!=', 'Victor')->get();
        //dd($findProduto);
        //return 'produtos';
        /*foreach ($findProduto as $pr) {
        dd($pr);
        }*/
        // dd($request)

        $pesquisar = $request->pesquisar;
        $findProduto = $this->produto->getProdutosPesquisarIndex(search: $pesquisar ?? '');

        return view('pages.produtos.paginacao', compact('findProduto'));
    }

    public function delete(Request $request) {

        $id = $request->id;
        $buscarRegistro = Produto::find($id);
        $buscarRegistro->delete();
        
        return response()->json(['success'=>true]);

    }

    public function cadastrarProduto (FormRequestProduto $request){

        if ($request->method() == "POST") {
            // cria os dados

            $data = $request->all();
            $componentes = new Componetes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            Produto::create($data);
            Toastr::success('Gravado com sucesso');
            
            return redirect()->route('produtos.index');
        }

        //mostra os dados
        return view('pages.produtos.create');
    }

    public function atualizarProduto (FormRequestProduto $request, $id){

        if ($request->method() == "PUT") {
            // atualiza os dados

            $data = $request->all();
            $componentes = new Componetes();
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            $buscaRegistro = Produto::find($id);
            $buscaRegistro->update($data);
            Toastr::success('Gravado com sucesso');

            return redirect()->route('produtos.index');
        }
        $editProduto = Produto::where('id', '=', $id)->first();

        return view('pages.produtos.atualiza', compact('editProduto'));
    }
}
