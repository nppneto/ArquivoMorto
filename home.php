<?php

session_start();

// echo 'oi';

require "templates/header.php";
include_once "banco.php";
include_once "helpers.php";


// $cabecalho = 0;
echo "<h1>Arquivo Morto</h1>";
$exibir_barra = true;
$exibir_tabela = true;
$exibir_tabela_busca = false;


$listar_alunos = buscar_alunos($conn);


require "templates/template.php";
require "templates/footer.php";