<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>

    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-2">Alterar produto</h1>
        @if(!empty($message))
            <div class="alert alert-success mt-2">{{ $message }}</div>
        @endif
        <form action="/produtos/alterar" method="post" class="mt-2">
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}">
            <div class="form-group">
                <label for="id">ID: <span class="text-danger">*</span></label>
                <input type="text" id="id" name="id" class="form-control" required readonly value="{{ $product->id }}">
            </div>
            <div class="form-group">
                <label for="description">Descrição: <span class="text-danger">*</span></label>
                <input type="text" id="description" name="description" class="form-control" autofocus required value="{{ $product->descricao }}">
            </div>
            <div class="form-group">
                <label for="amount">Quantidade: <span class="text-danger">*</span></label>
                <input type="number" id="amount" name="amount" class="form-control" required value="{{ $product->quantidade }}">
            </div>
            <div class="form-group">
                <label for="value">Valor: <span class="text-danger">*</span></label>
                <input type="number" id="value" name="value" class="form-control" required value="{{ $product->valor }}">
            </div>
            <div class="form-group">
                <label for="due_date">Data de vencimento: </label>
                <input type="date" id="due_date" name="due_date" class="form-control" value="{{ $product->data_vencimento }}">
            </div>
            <div>Os campos marcados com <span class="text-danger">*</span> não podem estar em branco.</div>
            <input type="submit" class="btn btn-success mt-2" value="Alterar">
        </form>
    </div>
</body>
</html>