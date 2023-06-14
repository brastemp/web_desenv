<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!--Aluno: Felipe da Silva Gomes
        Matricula: 202204215748-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Felipe da Silva Gomes">
    <tile>Banco NovaDigital - Aconselhamento Financeiro</tile>
    <?php include("header.php");?>
    <style>
    .chat-container {
      width: 400px;
      height: 500px;
      border: 1px solid #ccc;
      border-radius: 5px;
      overflow: auto;
      padding: 10px;
    }

    .input-container {
      margin-top: 10px;
    }

    .user-message {
      background-color: #f1f1f1;
      border-radius: 5px;
      padding: 5px;
      margin-bottom: 5px;
    }

    .robot-message {
      background-color: #807f7d;
      border-radius: 5px;
      padding: 5px;
      margin-bottom: 5px;
    }
    .fundo-bg{
            
            background: linear-gradient(#333, #ffffff);
            
            
        }
  </style>

</head>
<body>
<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="chat-container">
      <div id="chat-log"></div>
      <div class="input-container">
        <input type="text" id="user-input" class="form-control" placeholder="Digite sua mensagem">
        <button id="submit-button" class="btn btn-primary mt-2">Enviar</button>
      </div>
    </div>
  </div>

  <script>
const submitButton = document.getElementById("submit-button");
const chatLog = document.getElementById("chat-log");

function generateRobotResponse() {
  return "Ola, eu sou um assistente virtual. Colocarei um funcionário para auxiliar em seu problema em alguns minutos";
}

submitButton.addEventListener("click", function() {
  const userInput = document.getElementById("user-input").value;

  chatLog.innerHTML += `<div class="user-message">${userInput}</div>`;
  setTimeout(function() {
    const robotResponse = generateRobotResponse();

    chatLog.innerHTML += `<div class="robot-message">${robotResponse}</div>`;
    chatLog.scrollTop = chatLog.scrollHeight;
  }, 500);

  document.getElementById("user-input").value = "";
});</script>
</body>
</html>