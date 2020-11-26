<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>

    <link href="../../css/app.css" rel="stylesheet">
    <link href="../../css/produto_pesquisa.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row row_title">
            <h1 class="mt-2">Pesquisa de produtos</h1>
            <div>
                <form action="/produtos/pesquisar" method="POST" class="form-inline mt-2">
                    <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
                    <select class="form-control" name="field" id="field">
                        <option value="id" selected>Campo</option>
                        <option value="id">ID</option>
                        <option value="descricao">Descrição</option>
                        <option value="quantidade">Quantidade</option>
                        <option value="data_vencimento">Data de vencimento</option>
                    </select>
                    <input type="text" class="form-control ml-2" name="search" id="search" value="">
                    <input type="submit" class="btn btn-primary ml-2" value="Pesquisar">
                </form>
            </div>
        </div>
        
    </div>

    <div class="container">
        <div class="container">
            @if(count($product) == 0)
                <div class="alert alert-danger mt-2">Nenhum produto encontrado com essa descrição!</div>
            @else
                <table class="table mt-2 text-center table-striped">
                    <tr>
                        <th>Id</th>
                        <th class="text-left">Descrição</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Data de vencimento</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach ($product as $products)
                        <tr>
                            <td>{{ $products->id }}</td>
                            <td class="text-left">{{ $products->descricao }}</td>
                            <td>{{ $products->quantidade }}</td>
                            <td>{{ $products->valor }}</td>
                            <td>{{ $products->data_vencimento }}</td>
                            <td><a href="/produtos/excluir/{{ $products->id }}"><button class="btn btn-danger">Excluir</button></a></td>
                            <td><a href="/produtos/alterar/{{ $products->id }}"><button class="btn btn-warning">Alterar</button></a></td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</body>
</html>