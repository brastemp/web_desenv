<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <?php include("header.php");?>
    <script>
        function verificarSenhas() {
            var novaSenha = document.getElementById("novaSenha").value;
            var confirmarSenha = document.getElementById("confirmarSenha").value;

            if (novaSenha !== confirmarSenha) {
                alert("As senhas digitadas não são iguais. Por favor, verifique.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<div class="container">
    <br><br><br>
    <h2>Trocar Senha</h2>
    <form method="POST" action="trocar_senha.php" onsubmit="return verificarSenhas()">
        <div class="form-group">
            <label for="novaSenha">Nova Senha:</label>
            <input type="password" class="form-control" id="novaSenha" name="novaSenha" required>
        </div>
        <div class="form-group">
            <label for="confirmarSenha">Confirmar Senha:</label>
            <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha" required>
        </div>
        <button type="submit" class="btn btn-primary">Trocar Senha</button>
    </form>
</div>

</body>
</html>