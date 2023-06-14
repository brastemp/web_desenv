<?php
session_start();
require_once 'conexao.php';
$username = $_POST['usuario'];
$password = $_POST['senha'];
if ($conn->connect_error) {
  die('Erro na conexão: ' . $conn->connect_error);
}



$query = "SELECT * FROM users WHERE cpf = '$username'";
$result = $conn->query($query);

if ($result && mysqli_num_rows($result) > 0) {
  $dadosUsuario = mysqli_fetch_assoc($result);
  $senhaArmazenada = $dadosUsuario['senha'];

  if (password_verify($password, $senhaArmazenada)) {
    
    $nome_usuario = $dadosUsuario['nome'];
    $_SESSION['usuario'] = $nome_usuario;
    header('Location: index.php');

}
else {
  header('Location: index.php?login=erro');
    
}
} 
else {
  header('Location: index.php?login=erro');
    
}

$conn->close();
?>
