<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/arquivo-morto.css">
    <title>Arquivo Morto</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="home.php">UNIMES</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <!-- Link Home irá listar todas as vagas disponíveis -->
            <a class="nav-link" href="./cadastro.php">Cadastrar<span class="sr-only">(current)</span></a>
          </li>
        </ul>
  </div>
</nav>
</header>

<?php 
  switch($cabecalho) {
    case 0:
    echo "<h1>Arquivo Morto</h1>";
    break;
    case 1:
    echo "<h1>Cadastro de Aluno</h1>";
  }
?>


<!-- <?php #require "tabela.php"; ?> -->

<?php if($exibir_tabela) : ?>
    <?php require 'tabela.php'; ?>
<?php endif; ?>

<script src="./js/bootstrap.min.js"></script>
</body>
</html>