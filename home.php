<?php

session_start();

// echo 'oi';

$cabecalho = 0;
$exibir_tabela = true;

require "banco.php";
require "helpers.php";

$dados = [
    'id' => 0,
    'nome_aluno' => (array_key_exists('nome_aluno', $_POST)) ? $_POST['nome_aluno'] : '',
    'nascimento' => (array_key_exists('nascimento', $_POST)) ? $_POST['nascimento'] : '',
    'armario' => (array_key_exists('armario', $_POST)) ? $_POST['armario'] : '',
    'prateleira' => (array_key_exists('prateleira', $_POST)) ? $_POST['prateleira'] : '',
    'nome_mae' => (array_key_exists('nome_mae', $_POST)) ? $_POST['nome_mae'] : '',
    'nome_pai' => (array_key_exists('nome_pai', $_POST)) ? $_POST['nome_pai'] : '',
    'ativo' => (array_key_exists('ativo', $_POST)) ? $_POST['ativo'] : 0
];


$lista_alunos = buscar_arquivos($conn);


require "templates/template.php";