<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <tile>Banco NovaDigital - Solicitar Cartão</tile>
    <?php include("header.php");?>
    <style>
    .custom-container {
      background-color: #6c757d;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
    }
    </style>

</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="custom-container">
    <div class="form-group">
        <label for="endereco">Deseja receber o cartão:</label>
        <button type="button" class="btn btn-info" id="enderecoAtual" onclick="atual" >No endereço atual</button>
        <button type="button" class="btn btn-info" id="outroEndereco">Em outro endereço</button>
      </div>
        </label>
    <script>
        
        document.getElementById('enderecoAtual').addEventListener('click', function() {
      alert("Obrigado pela prefrencia, enviaremos o cartão para seu endereço cadastrado. Caso ja tenha pedido, o pedido sera ignorado.");
    });

        document.getElementById('outroEndereco').addEventListener('click', function() {
            window.location.href = 'cartao_outro_endereco.php';
        });
    </script>
    </div>
  </div>
</body>
</html>