<?php

include_once "banco.php";
include_once "helpers.php";
require "templates/header.php";

$exibir_tabela = false;
$exibir_barra = false;
$exibir_tabela_busca = false;

echo "<h1>Detalhes</h1>";

// $cabecalho = 3;

$alunos = [];

$alunos = buscar_aluno_ByID($conn, $_GET['id']);

// var_dump($alunos);


require "templates/template.php";
require "templates/detalhes_aluno.php";
require "templates/footer.php";