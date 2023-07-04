<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Produtos</h1>
        @if(session('message'))
            <div class="alert">{{ session('message') }}</div>
        @endif
        <a href="{{ route('produto.create') }}" class="btn btn-primary">Adicionar Produto</a>
        <table class="table">
            <thead>
                <tr>
                   
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->preco }}</td>
                        <td>
                              <a href="{{ route('produto.edit', $produto->nome) }}">Editar</a>
                            <form action="{{ route('produto.destroy', $produto->nome) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este produto?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
