<?php 
session_start();
require_once 'conexao.php';

$novaSenha = $_POST['novaSenha'];

$hashSenha = password_hash($novaSenha, PASSWORD_DEFAULT);
$idUsuario = $_SESSION['usuario'];

$sql = "UPDATE users SET senha = '$hashSenha' WHERE nome = '$idUsuario'";

if ($conn->query($sql) === TRUE) {
    echo "Senha alterada com sucesso!";
    header('Location: user.php');
} else {
    echo "Erro ao alterar a senha: " . $conn->error;
}

$conn->close();
?>