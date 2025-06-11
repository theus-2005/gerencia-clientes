<?php

include 'conexao.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="cadastro-form">
        <h1>Cadastro de Cliente</h1>
        <form action="inserir.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label><br>
                <input type="tel" id="telefone" name="telefone" pattern="\d{10,11}" maxlength="11" placeholder="Somente números" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label><br>
                <input type="text" id="cpf" name="cpf" pattern="\d{11}" placeholder="Somente números" maxlength="11" required>
            </div>
            <div class="form-group">
                <label for="data">Data de Nascimento:</label><br>
                <input type="date" id="data" name="data" required>
            </div>
            <div class="form-group">
                <label for="cep">CEP:</label><br>
                <input type="text" id="cep" name="cep" pattern="\d{8}" placeholder="Somente números" maxlength="8" required>
            </div>
            <button class="inserir" type="submit">Inserir</button>
        </form>
    </div>

    <div class="back-button-container">
        <a href="../../index.html" class="back-button">Voltar</a>
    </div>

</body>
</html> 