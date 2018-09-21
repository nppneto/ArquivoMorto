<?php

session_start();

// echo 'oi';

$exibir_tabela = true;
$cabecalho = 0;

require "banco.php";
require "helpers.php";


$listar_alunos = buscar_alunos($conn);


require "templates/template.php";