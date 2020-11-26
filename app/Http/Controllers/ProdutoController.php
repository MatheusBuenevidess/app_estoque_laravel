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
        $description = Input::get('description');
        
        // Busca produtos com o conteúdo da $descricao
        $products = Produto::where('descricao', 'like', '%'.$description.'%')->get();
        
        // Chama a view produto.pesquisar e envia os produtos encontrados
        return view('produto.pesquisar')->with('product', $products);
    }

    public function mostrar_inserir()
    {
        return view('produto.inserir');
    }

    public function inserir()
    {
        // Criando um novo objeto do tipo Produto
        $product = new Produto();

        // Colocando os valores recebidos do formulário nos atributos do objeto $produto
        $product->descricao = Input::get('description');
        $product->quantidade = Input::get('amount');
        $product->valor = Input::get('value');
        $product->data_vencimento = Input::get('due_date');

        // Salvando no banco de dados
        $product->save();

        // Criado uma mensagem para o usuário
        $message = "Produto inserido com sucesso";

        // Chamando a view produto.inserir e enviando a mensagem criada
        return view('produto.inserir')->with('message', $message);
    }

    public function mostrar_alterar($id)
    {
        // Busca no banco o registro com o id recebido
        $product = Produto::find($id);
        
        // Envia os dados deste registro a view produto.alterar
        return view('produto.alterar')->with('product', $product);
    }

    public function alterar()
    {
        $id = Input::get('id');
        $product = Produto::find($id);

        $product->descricao = Input::get('descricao');
        $product->quantidade = Input::get('quantidade');
        $product->valor = Input::get('valor');
        $product->data_vencimento = Input::get('data_vencimento');

        $product->save();

        $message = "Produto alterado com sucesso!";
        $products = Produto::all();
        return view('produto.pesquisar')->with('message', $message)->with('products', $products);
    }

    public function excluir($id)
    {
        // Criando um objeto com o id recebido pela rota
        $product = Produto::find($id);

        // Excluindo este objeto
        $product->delete();

        // Criando uma mensagem para ser enviada a view produto.pesquisar
        $message = "Produto excluído com sucesso!";

        // Capturando objetos para enviar a view produto.pesquisar
        $products = Produto::all();

        // Retornando a view produto.pesquisar
        return view('produto.pesquisar')->with('message', $message)->with('products', $products);
    }
}
