document.getElementById('cadastro-form').addEventListener('submit', function(e) {
    e.preventDefault();

    // Obter os valores dos campos do formulário
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

    // Enviar uma requisição AJAX para o servidor
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/cadastro');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            alert('Cadastro realizado com sucesso!');
            document.getElementById('cadastro-form').reset();
        } else {
            alert('Ocorreu um erro durante o cadastro. Por favor, tente novamente.');
        }
    };
    xhr.send('nome=' + encodeURIComponent(nome) + '&email=' + encodeURIComponent(email) + '&senha=' + encodeURIComponent(senha));
});
