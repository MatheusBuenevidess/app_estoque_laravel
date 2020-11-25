<?php

namespace App\Http\Controllers;
use App\Produto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller
{
    public function pesquisar()
    {
        // Recebe o conteúdo elemento 'descricao' do formulário
        $descricao = Input::get('descricao');
        
        // Busca produtos com o conteúdo da $descricao
        $produtos = Produto::where('descricao', 'like', '%'.$descricao.'%')->get();
        
        // Chama a view produto.pesquisar e envia os produtos encontrados
        return view('produto.pesquisar')->with('produtos', $produtos);
    }
}
