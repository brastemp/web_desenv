<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <title>Banco NovaDigital - Serviços</title>
    <?php include("header.php");?>
    <style>
        .service-box {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }
        .texto{
            color:#000000;
            background-color: #ffffff;
        }
        .fundo-bg{
            
            background: linear-gradient(#333, #ffffff);
            
            
        }
    </style>
</head>

<?php



if (!isset($_SESSION['usuario'])) {
    echo "<script>
    alert('Você precisa estar logado para visualizar essa pagina.');
        </script>";
    exit();
  
}

?>

<body class="fundo-bg">
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="row d-flex">
        <div class="col-md-4 custom-container">
            <a href="servico_emprestimo.php" class="texto">
                <br><br>
                <h3>Empréstimo</h3>
                <p>Faça sua solicitação de empréstimo com a gente</p>
            </a>
        </div>
        <div class="col-md-4 custom-container">
            <a href="servico_cartao.php" class="texto">
                <br><br>
                <h3>Solicitar Cartão</h3>
                <p>Solicte seu cartão sem anuidade</p>
            </a>
        </div>
        <div class="col-md-4 custom-container">
            <a href="servico_aconselhamento.php" class="texto">
                <br> 
                <h3>Aconselhamento Financeiro</h3>
                <p>Nossos especialistas lhe ajudaram a fazer planos e curto, médio ou longo prazo</p>
            </a>
        </div>
    </div>
</div>

</body>
</html>