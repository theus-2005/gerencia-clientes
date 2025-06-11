<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="back-button-container">
        <a href="../../index.html" class="back-button">Voltar</a>
    </div>

    <div class="container">
        <h1>Lista de Clientes</h1>
        <?php
            include 'conexao.php';

            $sql = "SELECT id, nome, email, telefone, cpf, data_nasc, cep FROM clientes";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<thead><tr><th>ID</th><th>Nome</th><th>Email</th><th>Telefone</th><th>CPF</th><th>Data de Nasc.</th><th>CEP</th><th>Ações</th></tr></thead>";
                echo "<tbody>";
                while($linha = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $linha["id"] . "</td>";
                    echo "<td>" . $linha["nome"] . "</td>";
                    echo "<td>" . $linha["email"] . "</td>";
                    echo "<td>" . $linha["telefone"] . "</td>";
                    echo "<td>" . $linha["cpf"] . "</td>";
                    echo "<td>" . $linha["data_nasc"] . "</td>";
                    echo "<td>" . $linha["cep"] . "</td>";
                    echo "<td>";
                    echo "<form method='POST' action='excluir_cliente.php'>";
                    echo "<input type='hidden' name='id' value='" . $linha["id"] . "'>";
                    echo "<button type='submit' class='excluir-button'>Excluir</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            } else {
                echo "<p class='mensagem'>Nenhum cliente encontrado.</p>";
            }

            $conn->close();
        ?>
    </div>
</body>
</html>