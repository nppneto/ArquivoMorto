<?php

session_start();

require "templates/header.php";
// require "helpers.php";
require "banco.php";


$exibir_tabela = false;
$cabecalho = 1;

$tem_erros = false;
$erros_validacao = [];


if(!empty($_POST)) {


    // echo $_POST['nascimento'];

    $alunos = [];

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

    // validação ativo
    // if(array_key_exists('ativo', $_POST) && strlen($_POST['ativo']) > 0)
    // {
    //     $dados['ativo'] = $_POST['ativo'];
    // }
    // else
    // {
    //     $tem_erros = true;
    //     $erros_validacao['ativo'] = 'O campo Armário é de preenchimento obrigatório!';
    // }

    if(!$tem_erros){

        // print_r($alunos);
        inserir_alunos($conn, $alunos);
        header('Location: home.php');
        die();
    }
    

}

$alunos = [
    'id' => 0,
    'nome_aluno' => (array_key_exists('nome_aluno', $_POST)) ? $_POST['nome_aluno'] : '',
    'nascimento' => (array_key_exists('nascimento', $_POST)) ? $_POST['nascimento'] : '',
    'armario' => (array_key_exists('armario', $_POST)) ? $_POST['armario'] : '',
    'prateleira' => (array_key_exists('prateleira', $_POST)) ? $_POST['prateleira'] : '',
    'nome_mae' => (array_key_exists('nome_mae', $_POST)) ? $_POST['nome_mae'] : '',
    'nome_pai' => (array_key_exists('nome_pai', $_POST)) ? $_POST['nome_pai'] : '',
    'ativo' => (array_key_exists('ativo', $_POST)) ? $_POST['ativo'] : 0
];

// echo 'oi';

require "templates/template.php";
require "templates/cad_aluno.php";
require "templastes/footer.php";