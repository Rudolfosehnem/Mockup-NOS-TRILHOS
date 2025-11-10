<?php

include 'db.php';


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
    $cpf = trim($_POST['cpf']);
    $data_nasc = $_POST['data_nasc'];
    $cargo = $_POST['cargo'];

   
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

   
    $sql = "INSERT INTO usuarios (nome, email, senha, cpf, data_nasc, cargo)
            VALUES (?, ?, ?, ?, ?, ?)";

    
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssss", $nome, $email, $senha_hash, $cpf, $data_nasc, $cargo);

        if ($stmt->execute()) {
           
            echo "<script>
                    alert('Usuário cadastrado com sucesso!');
                    window.location.href = 'dashboard.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Erro ao cadastrar usuário.');
                    window.history.back();
                  </script>";
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da query: " . $conn->error;
    }

    $conn->close();
}
?>