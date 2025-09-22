<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notificações e Alertas - NOS TRILHOS</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  
  <button id="botaoAbrirSidebar" class="abrir-btn1" onclick="abrirSidebar()">☰</button>

  
   <div id="sidebar1" class="sidebar1">
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
  </div>

  <header class="topo2">
    <div class="topo2">NOS TRILHOS</div>
  </header>

  <div class="manutencao">
    <h3><img src="../images/sino-de-notificacao.png" alt="">Notificações e Alertas</h3>
  </div>

  <hr style="height: 2px; background-color: black; border: none; width: 100%; margin-top: 60px;">

  
  <div class="painel-notificacoes-ferroviarias">
    <div class="line-bar">
      <h1 class="painel-notificacoes__cabecalho">Segunda-feira</h1>
      <div class="acoes-notificacao">
        <h3 class="lidas" onclick="alternarNotificacoes(this)">Desativar</h3>
        <img src="../images/excluir.png" alt="Excluir" class="icone-excluir" onclick="limparNotificacoes()">
      </div>
    </div>

    <div class="notificacao-card">
      <div class="notificacao-card__cabecalho">
        <span class="notificacao-card__titulo"> <img src="../images/atencao (1).png" alt="">Alerta</span>
        <span class="notificacao-card__horario">Seg 5:10 PM</span>
      </div>
      <div class="notificacao-card__conteudo">
        ATENÇÃO: TRILHO DE TREM INTERROMPIDO! Desvio necessário, siga as orientações de segurança.
      </div>
    </div>

    <div class="notificacao-card">
      <div class="notificacao-card__cabecalho">
        <span class="notificacao-card__titulo"> <img src="../images/notificacao.png" alt="">Notificação</span>
        <span class="notificacao-card__horario">Seg 2:46 PM</span>
      </div>
      <div class="notificacao-card__conteudo">
        Próximo Trens: Trem 1 às 15:30, Trem 2 às 16:45, Trem 3 às 17:50. Embarque com segurança!
      </div>
    </div>

    <div class="notificacao-card">
      <div class="notificacao-card__cabecalho">
        <span class="notificacao-card__titulo"> <img src="../images/notificacao.png" alt="">Notificação</span>
        <span class="notificacao-card__horario">Seg 2:46 PM</span>
      </div>
      <div class="notificacao-card__conteudo">
        Próximo Trens: Trem 1 às 15:30, Trem 2 às 16:45, Trem 3 às 17:50. Embarque com segurança!
      </div>
    </div>
  </div>

  
  <script>
    function abrirSidebar() {
      document.getElementById("sidebar1").style.width = "220px";
      document.getElementById("botaoAbrirSidebar").style.display = "none";
    }

    function fecharSidebar() {
      document.getElementById("sidebar1").style.width = "0";
      document.getElementById("botaoAbrirSidebar").style.display = "block";
    }

    function limparNotificacoes() {
      const cards = document.querySelectorAll(".notificacao-card");
      cards.forEach(card => card.style.display = "none");
    }

    let notificacoesAtivas = true;

    function alternarNotificacoes(elemento) {
      const cards = document.querySelectorAll(".notificacao-card");

      if (notificacoesAtivas) {
        cards.forEach(card => card.style.display = "none");
        elemento.textContent = "Ativar";
      } else {
        cards.forEach(card => card.style.display = "block");
        elemento.textContent = "Desativar";
      }

      notificacoesAtivas = !notificacoesAtivas;
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
