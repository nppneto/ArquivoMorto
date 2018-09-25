<?php

error_reporting(0);
ini_set(“display_errors”, 0 );

session_start();

require "templates/header.php";
include_once "banco.php";
include_once "helpers.php";

// $cabecalho = 2;
echo "<h1>Editar Aluno</h1>";
$exibir_barra = false;
$exibir_tabela = false;
$exibir_tabela_busca = false;

$tem_erros = false;
$erros_validacao = [];

if(!empty($_POST)) {

    $alunos = [];

    $alunos['id'] = $_GET['id'];

        // validação nome_aluno
    if(array_key_exists('nome_aluno', $_POST) && strlen($_POST['nome_aluno']) > 0) 
    {
        $alunos['nome_aluno'] = $_POST['nome_aluno'];
    } 
    else 
    {
        $tem_erros = true;
        $erros_validacao['nome_aluno'] = 'O campo Nome do Aluno é de preenchimento obrigatório!';
    }

    // validação nascimento
    if(array_key_exists('nascimento', $_POST) && strlen($_POST['nascimento']) > 0)
    {
        $alunos['nascimento'] = $_POST['nascimento'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['nascimento'] = 'O campo Nascimento é de preenchimento obrigatório!';
    }

    // validação armario
    if(array_key_exists('armario', $_POST) && strlen($_POST['armario']) > 0)
    {
        $alunos['armario'] = $_POST['armario'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['armario'] = 'O campo Armário é de preenchimento obrigatório!';
    }

    // validação prateleira
    if(array_key_exists('prateleira', $_POST) && strlen($_POST['prateleira']) > 0)
    {
        $alunos['prateleira'] = $_POST['prateleira'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['prateleira'] = 'O campo Prateleira é de preenchimento obrigatório!';
    }

    // validação nome_mae
    if(array_key_exists('nome_mae', $_POST) && strlen($_POST['nome_mae']) > 0)
    {
        $alunos['nome_mae'] = $_POST['nome_mae'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['nome_mae'] = 'O campo Nome da Mãe é de preenchimento obrigatório!';
    }

    // validação nome_pai
    if(array_key_exists('nome_pai', $_POST) && strlen($_POST['nome_pai']) > 0)
    {
        $alunos['nome_pai'] = $_POST['nome_pai'];
    }
    else
    {
        $tem_erros = true;
        $erros_validacao['nome_pai'] = 'O campo Nome do Pai é de preenchimento obrigatório!';
    }

    if(array_key_exists('ativo', $_POST)) 
    {
        $alunos['ativo'] = 1;
        // echo $_POST['ativo'];
    }
    else
    {
        $alunos['ativo'] = 0;
    }

    if(!$tem_erros)
    {
        editar_alunos($conn, $alunos);
        header('Location: home.php');
        die();
    }

}

$alunos = buscar_aluno_ByID($conn, $_GET['id']);

$alunos['nome_aluno'] = array_key_exists('nome_aluno', $_POST) ? $_POST['nome_aluno'] : $alunos['nome_aluno'];
$alunos['nascimento'] = array_key_exists('nascimento', $_POST) ? $_POST['nascimento'] : $alunos['nascimento'];
$alunos['armario'] = array_key_exists('armario', $_POST) ? $_POST['armario'] : $alunos['armario'];
$alunos['prateleira'] = array_key_exists('prateleira', $_POST) ? $_POST['prateleira'] : $alunos['prateleira'];
$alunos['nome_mae'] = array_key_exists('nome_mae', $_POST) ? $_POST['nome_mae'] : $alunos['nome_mae'];
$alunos['nome_pai'] = array_key_exists('nome_pai', $_POST) ? $_POST['nome_pai'] : $alunos['nome_pai'];
$alunos['ativo'] = array_key_exists('ativo', $_POST) ? $_POST['ativo'] : $alunos['ativo'];

require "templates/template.php";
require "templates/edit_aluno.php";
require "templates/footer.php";