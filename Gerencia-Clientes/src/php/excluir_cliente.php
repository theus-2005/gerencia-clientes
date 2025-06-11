<?php

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $id_para_deletar = $_POST['id'] ?? '';

        if (is_numeric($id_para_deletar) && $id_para_deletar > 0) {
            
            $sql = "DELETE FROM clientes WHERE id = ?";

            
            $stmt = $conn->prepare($sql);

            if ($stmt) {
                
                $stmt->bind_param("i", $id_para_deletar);

                
                if ($stmt->execute()) {
                    if ($stmt->affected_rows > 0) {
                        echo "<script>alert('Registro deletado com sucesso!'); window.location.href='lista.php';</script>";
                        exit(); 
                    } else {
                        echo "<script>alert('Nenhum registro encontrado com o ID fornecido.'); window.location.href='lista.php';</script>";
                        exit(); 
                    }
                } else {
                    echo "<script>alert('Erro ao deletar o registro: " . $stmt->error . "'); window.location.href='lista.php';</script>";
                    exit(); 
                }
                
                $stmt->close();
            } else {
                echo "<script>alert('Erro na preparação da query: " . $conn->error . "'); window.location.href='lista.php';</script>";
                exit(); 
            }
        } else {
            echo "<script>alert('ID inválido para exclusão.'); window.location.href='lista.php';</script>";
            exit(); 
        }
    } catch (Exception $e) {
        echo "<script>alert('Ocorreu um erro: " . $e->getMessage() . "'); window.location.href='lista.php';</script>";
        exit(); 
    } finally {
        if ($conn) {
            $conn->close();
        }
    }
} else {

    header("Location: lista.php");
    exit();
}

?>