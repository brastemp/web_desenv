<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <title>Banco NovaDigital - Cadastro</title>
    <?php include("header.php");?>
</head>
<body>

  <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="card text-light bg-secondary">
      <div class="card-header">
        <h3 class="text-center">Informe seus dados</h3>
      </div>
      <div class="card-body">
        <form action="fazer_cadastro.php" method="POST" onsubmit="return validarSenha()">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="nome">Nome Completo:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
              </div>
            </div>
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
            <div class="col-md-3">
              <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" name="senha" required>
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="form-group">
                <label for="senha_repetida">Repita a senha:</label>
                <input type="password" class="form-control" id="senha_repetida" name="senha_repetida" required>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-light">Cadastrar</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    function validarSenha() {
      var senha = document.getElementById("senha").value;
      var senhaRepetida = document.getElementById("senha_repetida").value;

      if (senha !== senhaRepetida) {
        document.getElementById("senha-error").style.display = "block";
        return false;
      }
      return true;
    }
  </script>
</body>
</html>






