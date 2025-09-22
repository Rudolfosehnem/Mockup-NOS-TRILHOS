<?php
include 'db.php';

session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Início - NOS TRILHOS</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <button id="botaoAbrirSidebar" class="abrir-btn" onclick="abrirSidebar()">☰</button>


  <div id="sidebar" class="sidebar">
    <p class="menuside1"><strong>Menu</strong></p>
    <hr>
    <a href="javascript:void(0)" class="fechar-btn1" onclick="fecharSidebar()">✖</a>
    <a href="../html/dashboard.php"> <img src="../images/casa (1).png" alt=""> Início</a>
    <a href="../html/gestao.php"> <img src="../images/rotas.png" alt="">Gestão de Rotas</a>
    <a href="../html/manutencao.php"><img src="../images/manutencao (2).png" alt="">Manutenção</a>
    <a href="../html/relatorio.php"> <img src="../images/relatorio.png" alt="">Relatório e Análise</a>
    <a href="../html/alertas.php"><img src="../images/sinos.png" alt="">Notificações</a>
    <a href="../html/dashboard2.php"><img src="../images/painel.png" alt=""> Dashboard</a>
    <button class="botao-sair-sidebar" onclick="abrirModalSaida()">
      <img src="../images/sair (1).png" alt=""> Sair
    </button>


    <div class="fundo-modal-saida" id="modalSaida">
      <div class="caixa-confirmacao-saida">
        <h2>Deseja Sair?</h2>
        <p>Você deseja se desconectar?</p>
        <div class="botoes-saida">
          <button class="botao-cancelar-saida" onclick="fecharModalSaida()">Cancelar</button>
          <button class="botao-confirmar-saida" onclick="confirmarSaida()">Sair</button>
        </div>
      </div>
    </div>
  </div>


  <h2 class="topo1">NOS TRILHOS</h2>

  

  <footer>
    <p class="rodape">NOS TRILHOS</p>
  </footer>


  <script>
    function abrirSidebar() {
      document.getElementById("sidebar").style.width = "220px";
      document.getElementById("botaoAbrirSidebar").style.display = "none";
    }

    function fecharSidebar() {
      document.getElementById("sidebar").style.width = "0";
      document.getElementById("botaoAbrirSidebar").style.display = "block";
    }

    function abrirModalSaida() {
      document.getElementById("modalSaida").style.display = "flex";
    }

    function fecharModalSaida() {
      document.getElementById("modalSaida").style.display = "none";
    }

    function confirmarSaida() {
      alert("Você saiu!");
      fecharModalSaida();
    }
  </script>
</body>

</html>
