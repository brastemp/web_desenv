<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <tile>Banco NovaDigital - Trocar endereço para o cartão</tile>
    <?php include("header.php");?>
</head>
<body>
    <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
        <div class="card text-light bg-secondary">
        <div class="card-body">
        <form action="index.php" method="POST" onsubmit="return confirmar()">
          <div class="row">
            
              
            <div class="col-md-3">
              <div class="form-group">
                <label for="cep">CEP:</label>
                <input type="text" class="form-control" id="cep" name="cep" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" class="form-control" id="cidade" name="cidade" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" required>
              </div>
            </div>
            
          <button type="submit" class="btn btn-light">Cadastrar</button>
        </form>
      </div>
        </div>
    </div>
    <script>
        function confirmar(){
            alert("O cartão será enviado para esse novo endereço. Caso ja tenha pedido, o pedido sera ignorado.");
        }
    </script>
</body>
</html>