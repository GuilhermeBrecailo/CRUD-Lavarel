<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Produto</h1>
        <form action="{{ route('produto.update',['id'=>$produto->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" value='{{ $produto->nome }}' id="nome" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type=text name="descricao" value='{{ $produto->descricao }}' id="descricao" required></textarea>
            </div>
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" name="preco" value='{{ $produto->preco }}' id="preco" required>
            </div>
            <button type="submit" name='submit' class="btn btn-success" >Atualizar</button>
        </form>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
