<?php

session_start();

// echo 'oi';

require "helpers.php";

$tem_erros = false;
$erros_validacao = [];

if(tem_post()) {

    $dados = [];

    if(array_key_exists('nome_aluno', $_POST) && strlen($_POST['nome_aluno']) > 0) 
    {
        $dados['nome_aluno'] = $_POST['nome_aluno'];
    } 
    else 
    {
        $tem_erros = true;
        $erros_validacao['nome_aluno'] = 'O campo Nome do Aluno é de preenchimento obrigatório!';
    }

    if(array_key_exists('armario', $_POST) && strlen($_POST['armario']) > 0)
    {
        $dados['armario'] = $_POST['armario'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['armario'] = 'O campo Armário é de preenchimento obrigatório!';
    }

    


}


require "templates/template.php";