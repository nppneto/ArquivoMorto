<?php

require "banco.php";
require "helpers.php";

$exibir_tabela = false;
$cabecalho = 1;

$tem_erros = false;
$erros_validacao = [];

if(tem_post()) {

    $dados = [];

    // validação nome_aluno
    if(array_key_exists('nome_aluno', $_POST) && strlen($_POST['nome_aluno']) > 0) 
    {
        $dados['nome_aluno'] = $_POST['nome_aluno'];
    } 
    else 
    {
        $tem_erros = true;
        $erros_validacao['nome_aluno'] = 'O campo Nome do Aluno é de preenchimento obrigatório!';
    }

    // validação nascimento
    if(array_key_exists('nascimento', $_POST) && strlen($_POST['nascimento']) > 0)
    {
        $dados['nascimento'] = $_POST['nascimento'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['nascimento'] = 'O campo Armário é de preenchimento obrigatório!';
    }

    // validação armario
    if(array_key_exists('armario', $_POST) && strlen($_POST['armario']) > 0)
    {
        $dados['armario'] = $_POST['armario'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['armario'] = 'O campo Armário é de preenchimento obrigatório!';
    }

    // validação prateleira
    if(array_key_exists('prateleira', $_POST) && strlen($_POST['prateleira']) > 0)
    {
        $dados['prateleira'] = $_POST['prateleira'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['prateleira'] = 'O campo Armário é de preenchimento obrigatório!';
    }

    // validação nome_mae
    if(array_key_exists('nome_mae', $_POST) && strlen($_POST['nome_mae']) > 0)
    {
        $dados['nome_mae'] = $_POST['nome_mae'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['nome_mae'] = 'O campo Armário é de preenchimento obrigatório!';
    }

    // validação nome_pai
    if(array_key_exists('nome_pai', $_POST) && strlen($_POST['nome_pai']) > 0)
    {
        $dados['nome_pai'] = $_POST['nome_pai'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['nome_pai'] = 'O campo Armário é de preenchimento obrigatório!';
    }

    // validação ativo
    if(array_key_exists('ativo', $_POST) && strlen($_POST['ativo']) > 0)
    {
        $dados['ativo'] = $_POST['ativo'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['ativo'] = 'O campo Armário é de preenchimento obrigatório!';
    }
    

}

require "templates/template.php";
require "templates/cad_aluno.php";