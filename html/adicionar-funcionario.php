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
    <link rel="stylesheet" href="../style.css">
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
    

    <a href="logout.php">

<button class="botao-sair-sidebar">
      <img src="../images/sair (1).png" alt=""> Sair
    </button>

   </a>


    
  </div>


  <h2 class="topo1">NOS TRILHOS</h2>
  <h2>Cadastro de Usuário</h2>
    <form action="processa_cadastro.php" method="post">
 <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Senha:</label><br>
   <input type="password" name="senha" required><br><br>

        <label>CPF:</label><br>
        <input type="text" name="cpf" required placeholder="000.000.000-00"><br><br>

        <label>Data de Nascimento:</label><br>
        <input type="date" name="data_nasc" required><br><br>

        <label>Cargo:</label><br>
        <select name="cargo" required>
            <option value="Funcionario">Funcionario</option>
            <option value="Admin">Admin</option>
        </select><br><br>

        <button type="submit">Cadastrar</button>
    </form>
  

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

   
  </script>
</body>

</html>
