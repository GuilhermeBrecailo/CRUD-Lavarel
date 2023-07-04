<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <h3>login</h3>
        <input type="text" placeholder="login" id="login"><br><br>
        <input type="password" placeholder="senha" id="senha">
        <br><br>
        <button type="submit" class="btn btn-primary" onclick="logar(); return false">ENVIAR</button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        function logar() {
            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;

            if (login == 'admin' && senha == 'admin') {
                alert('sucesso');
                location.href = "produto";
            } else { 
                alert('usuário ou senha incorreta');
            }
        }
    </script>
</body>
</html>