<?php
session_start();

if($_COOKIE['usuario']) {
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Curso PHP</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/estilo.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/exercicio.css'>
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <script src='main.js'></script>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Indice dos Exercicios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href="logout.php">Sair</a>
   </nav>
    <main class="principal">
        <div class="conteudo">
          <?php
          require_once('menu.php');
          ?>
        </div>
     </main>
        
    <footer class="rodape">

        COD3R & ALUNOS 2020 <?= date('Y');  ?>
    </footer>
   


</body>
</html>