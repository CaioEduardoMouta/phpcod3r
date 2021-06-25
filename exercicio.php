<?php
session_start();
if(!$_SESSION['usuario']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Exercicio</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='assets/css/estilo.css'>
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
    <script src='main.js'></script>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
    <nav class="navegacao">
    <span class="usuario">Usuário: <?= $_SESSION['usuario'] ?></span>
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> 
        class="verde">Sem formatação</a>
        <a href="index.php">Voltar</a>
        <a href="logout.php" class="vermelho">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
           <?php
               //include($_GET['dir'] . "/" . $_GET['file'] . ".php");
               include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
           ?>
        </div>
    
</main>
    <footer class="rodape">

        COD3R & ALUNOS 2020 <?= date('Y')  ?>
    </footer>
   


</body>
</html>