<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <title>Banco NovaDigital - Suas Informações</title>
    <?php include("header.php");?>
</head>
<body>
<div class="container custom-container">

    <?php
    require_once 'conexao.php';
    if (isset($_SESSION['usuario'])) {
        $idUsuario = $_SESSION['usuario'];

        $sql = "SELECT nome, cpf, email, telefone, endereco, cidade, estado FROM users WHERE nome = '$idUsuario'";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();
            $nome = $row['nome'];
            $cpf = $row['cpf'];
            $email = $row['email'];
            $telefone = $row['telefone'];
            $endereco = $row['endereco'];
            $cidade = $row['cidade'];
            $estado = $row['estado'];


            echo '<br><br><br>';
            echo '<h2>SUAS INFORMAÇÕES</h2>';
            echo '<p><strong>Nome:</strong> ' . $nome . '</p>';
            echo '<p><strong>CPF:</strong> ' . $cpf . '</p>';
            echo '<p><strong>Email:</strong> ' . $email . '</p>';
            echo '<p><strong>Telefone:</strong> ' . $telefone . '</p>';
            echo '<p><strong>Endereço:</strong> ' . $endereco . '</p>';
            echo '<p><strong>Cidade:</strong> ' . $cidade . '</p>';
            echo '<p><strong>Estado:</strong> ' . $estado . '</p>';


            echo '<a href="alterar_senha.php" class="btn btn-primary">Alterar Senha</a>';


            echo '<form method="POST" action="delete.php" style="display: inline-block;">';
            echo '<input type="hidden" name="usuario" value="' . $idUsuario . '">';
            echo '<button type="submit" class="btn btn-danger">Excluir Conta</button>';
            echo '</form>';
        } else {
            die('Erro: Usuário não encontrado.');
        }
        $conn->close();
    } else {
        header('Location: login.php');
        exit();
    }
    ?>

</div>
</body>
</html>


