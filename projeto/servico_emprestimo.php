<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <tile>Banco NovaDigital - Empréstimo</tile>
    <?php include("header.php");?>
    <style>
    .custom-container {
      background-color: #6c757d;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      padding: 20px;
    }
    .fundo-bg{
            
            background: linear-gradient(#333, #ffffff);
            
            
        }
    </style>

</head>
<body class='fundo-bg'>
    
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="custom-container">
    <?php $username = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : '';
    echo "<h3>Bem-vindo, " . htmlspecialchars($username) . "</h3>";
    echo "<br><h3>Escolha suas opções de empréstimo</h3>";
    ?>

    <form action= "#" method="post" oninput="valor_p.value=((emprestimo.value/n_parcela.value)*1.14).toFixed(2)" onsubmit="confirma()">
      
      <div class="form-group">
        <label for="valor">Valor do Empréstimo:</label>
        <input type="number" class="form-control" id="valor" name="emprestimo">
      </div>
      
      <div class="form-group">
        <label class="col-form-label" for="n_parcelas">Número de Parcelas:</label>
        <select class="form-control" id="n_parcela">
                <option value="6">6</option>
                <option value="12">12</option>
                <option value="24">24</option>
                <option value="48" selected>48</option>
            </select>
      </div>
      <div class="form-group">
        <label class="col-form-label" for="motivo">Motivo do empréstimo:</label>
        <textarea class="form-control" rows="3" id="motivo" placeholder=" "></textarea>
      </div>
      <div class="form-group">
        <label for="valor_p">Valor da Parcela(em reais):</label>
        <output class="form-control" id="valor_p">
      </div>
      <button  type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
  </div>
  <script>
   function confirma(){
        alert("Obrigado por escolher o nosso banco. Uma resposta chegará ao email em até 10 dias uteis.");
   } </script>

</body>
</html>