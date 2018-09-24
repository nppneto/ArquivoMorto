<?php

session_start();

// echo 'oi';

require "banco.php";
require "helpers.php";


$exibir_barra = true;
$exibir_tabela = true;
$cabecalho = 0;


$listar_alunos = buscar_alunos($conn);


require "templates/template.php";