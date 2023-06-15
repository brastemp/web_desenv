<?php
require_once 'conexao.php';
session_start();

if (isset($_SESSION['usuario'])) {
    $idUsuario = $_SESSION['usuario'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['usuario'])) {
        $idUsuarioExcluir = $_POST['usuario'];
        if ($idUsuario == $idUsuarioExcluir) {
            $sql = "DELETE FROM users WHERE nome = '$idUsuario'";
            if ($conn->query($sql) === TRUE) {
                session_destroy();
                header('Location: index.php');
                exit();
            } else {
                echo 'Erro ao excluir a conta: ' . $conn->error;
            }
        } else {
            echo 'ID do usuário inválido.';
        }
    } else {
        echo 'Acesso inválido.';
    }
} else {
    header('Location: index.php');
    exit();
}
$conn->close();
?>
