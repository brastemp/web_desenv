<?php

$conn = new mysqli('localhost', 'root', '1234567', 'login');
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$senha = $_POST['senha'];

$senhaCriptografada = password_hash($senha, PASSWORD_BCRYPT);
$sql = "INSERT INTO users (nome, cpf, email, telefone, cep, endereco, cidade, estado, senha) VALUES ('$nome', '$cpf', '$email', '$telefone', '$cep', '$endereco', '$cidade', '$estado', '$senhaCriptografada')";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    header('Location: index.php');
    echo "Erro ao cadastrar: " . $conn->error;
}

$conn->close();
?>