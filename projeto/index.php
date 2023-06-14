<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <?php include("header.php");?>
    <style>
    .image-container {
      height: 100vh;
      display: flex;
      flex-direction: column;
    }
    
    .image-container img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
    .image-text {
      position: absolute;
      top: 50px;
      left: 50px;
      color: white;
      font-size: 100px;
    }
    .image-square {
      width: 50%;
      max-height: 50vh;
      overflow: hidden;
      position: relative;
    }
    
    .image-square img {
      width: 100%;
      height: auto;
      object-fit: cover;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    </style>
</head>
<body>
    <br><br>
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 image-container">
        <a href="cadastro.php">
        <img src="img/cartao2.png" alt="Imagem 1">
        </a>
        <div class="image-text">
            <h1>Venha fazer parte do banco mais brasileiro.
            </h1>
            <h3>Conheça agora você mesmo as nossas ofertas</h3>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 image-container">
        <img src="img/imagem-2.avif" alt="Imagem 2">
        <div class="image-text">
          <h1>Se liberte dos juros altos e das anuidades</h1>
        </div>
      </div>
    </div>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 image-container">
        <img src="img/imagem-3.jpg" alt="Imagem 3">
        <div class="image-text">
        <h1>Nossos consultores estão 24hrs a disposição dos nossos clientes</h1>
        </div>
      </div>
    </div>
  </div>
</body>
</html>