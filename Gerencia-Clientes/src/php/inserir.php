<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $nome = $_POST['nome'] ?? '';
        $email = $_POST['email'] ?? '';
        $telefone = $_POST['telefone'] ?? '';
        $cpf = $_POST['cpf'] ?? '';
        $data = $_POST['data'] ?? '';
        $cep = $_POST['cep'] ?? '';

        $sql = "INSERT INTO clientes (Nome, Email, Telefone, CPF, Data_Nasc, CEP)
                        VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $nome, $email, $telefone, $cpf, $data, $cep);
        $stmt->execute();

        echo "<script>alert('Novo usuário inserido com sucesso!'); window.location.href='cadastro.php';</script>";
        exit();
    } catch (mysqli_sql_exception $e) {
        echo "<script>alert('Erro ao inserir no banco: " . $e->getMessage() . "'); window.location.href='cadastro.php';</script>";
        exit();
    } finally {
        if ($conn) {
            $conn->close();
        }
    }
}
?>