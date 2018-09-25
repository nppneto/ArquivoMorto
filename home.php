<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

session_start();

// echo 'oi';

require "templates/header.php";
include_once "banco.php";
include_once "helpers.php";

$exibir_barra = true;
$exibir_tabela = true;
$exibir_tabela_busca = false;

// $cabecalho = 0;
echo "<h1>Arquivo Morto</h1>";


$listar_alunos = buscar_alunos($conn);


require "templates/template.php";
require "templates/footer.php";