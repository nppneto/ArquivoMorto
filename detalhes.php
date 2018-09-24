<?php

require "banco.php";
require "helpers.php";

$exibir_tabela = false;
$cabecalho = 3;

$alunos = [];

$alunos = buscar_aluno_ByID($conn, $_GET['id']);

// var_dump($alunos);

require "templates/template.php";
require "templates/detalhes_aluno.php";