<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

include_once "banco.php";
include_once "helpers.php";
require "templates/header.php";

echo "<h1>Detalhes</h1>";

$exibir_tabela = false;
$exibir_barra = false;
$exibir_tabela_busca = false;

// $cabecalho = 3;

$alunos = [];

$alunos = buscar_aluno_ByID($conn, $_GET['id']);

// var_dump($alunos);


require "templates/template.php";
require "templates/detalhes_aluno.php";
require "templates/footer.php";