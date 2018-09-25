<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

session_start();

require "templates/header.php";
include_once "banco.php";

// $cabecalho = 1;
echo "<h1>Resultados da Pesquisa</h1>";

$exibir_barra = true;
$exibir_tabela_busca = true;
$exibir_tabela = false;
// $tem_erros = false;
// $erros_validacao = [];

// if(!empty($_POST)) {

//     $dadosBusca = [];

//     if(array_key_exists('textBoxBusca', $_POST) && strlen('textBoxBusca') > 0)
//     {
//         $dadosBusca['textBoxBusca'] = $_POST['textBoxBusca'];
//     }
//     else 
//     {
//         $tem_erros = true;
//         $erros_validacao['textBoxBusca'] = "Entre com a sua pesquisa!";
//     }

// }

$listar_busca = buscar_ByQuery($conn);
// var_dump($listar_busca);
// echo $exibir_tabela_busca;

require "templates/template.php";
require "templates/footer.php";