<?php

 $host = '127.0.0.1';
 $user = 'root'; // unimes = 'root' ---> helbor = 'developer'
 $pass = 'vertrigo';
 $db = 'unimes_db';

$conn = mysqli_connect($host, $user, $pass, $db);

// var_dump($conn);

if(mysqli_connect_errno($conn)) {
    echo "Problemas para se conectar ao banco. Erro: ";
    echo mysqli_connect_error();
    exit('Falha critica de conexão com o banco de dados');
}

function buscar_alunos($_conn) {
    $sqlBuscar = "SELECT * FROM arquivo_morto WHERE ativo = 1";

    // var_dump($sqlBusca);

    $resultado = mysqli_query($_conn, $sqlBuscar);

    // var_dump($resultado);

    $alunos = [];

    while($aluno = mysqli_fetch_assoc($resultado)) {
        $alunos[] = $aluno;
    }

    // var_dump($tarefas);

    return $alunos;
}

function inserir_alunos($_conn, $alunos)
{
    $sqlInserir = "
        INSERT INTO arquivo_morto 
        (nome_aluno, armario, prateleira, nascimento,
        nome_mae, nome_pai, ativo)
        VALUES 
        (
            '{$alunos['nome_aluno']}',
            '{$alunos['armario']}',
            '{$alunos['prateleira']}',
            '{$alunos['nascimento']}',
            '{$alunos['nome_mae']}',
            '{$alunos['nome_pai']}',
            1
        )
    ";

    // print_r($sqlInserir);
    mysqli_query($_conn, $sqlInserir);
}

function buscar_aluno_ByID($_conn, $id) {

    $sqlByID = "SELECT * FROM arquivo_morto WHERE id = {$id}";

    // var_dump($sqlByID);

    $resultado = mysqli_query($_conn, $sqlByID);

    // var_dump($resultado);

    // var_dump(mysqli_fetch_assoc($resultado));

    return mysqli_fetch_assoc($resultado);

}

function editar_alunos($_conn, $alunos) {

    $sqlEditar = "
        UPDATE arquivo_morto SET
            nome_aluno = '{$alunos['nome_aluno']}',
            armario = '{$alunos['armario']}',
            prateleira = '{$alunos['prateleira']}',
            nascimento = '{$alunos['nascimento']}',
            nome_mae = '{$alunos['nome_mae']}',
            nome_pai = '{$alunos['nome_pai']}',
            ativo = {$alunos['ativo']}
        WHERE id = {$alunos['id']}";

    // var_dump($sqlEditar);

    mysqli_query($_conn, $sqlEditar);

}

function desativar_aluno($_conn, $id)
{
    //
}

function buscar_ByQuery($_conn)
{
    $exibir_tabela_busca = true;
    $chkValida = (isset($_POST['checkAtivo']) == null) ? 0 : 1;
    // echo $chkValida;
    // exit();
    $query = "SELECT * FROM arquivo_morto WHERE ativo = " .$chkValida;

    if ($_POST['rdFiltro'] == "nome" && $_POST['textBoxBusca'] != '') 
    {
        // var_dump($_POST['rdFiltro']);
        $query .= " AND nome_aluno like '%". $_POST['textBoxBusca']. "%'";
    } 
    else if ($_POST['rdFiltro'] == "nascimento" && $_POST['textBoxBusca'] != '')
    {
        // $exibir_tabela = true;
        // $query .= " AND nascimento = ".traduz_data_para_banco($_POST['textBoxBusca']);
        $query .= " AND nascimento = '".traduz_data_para_banco($_POST['textBoxBusca']). "'";
        // echo $query;
    }
    else if($_POST['rdFiltro'] == "armario" && $_POST['textBoxBusca'] != '')
    {
        // $exibir_tabela = true;
        $query .= " AND armario like '%". $_POST['textBoxBusca']. "%'";
    }
    else if($_POST['rdFiltro'] == "prateleira" && $_POST['textBoxBusca'] != '')
    {
        // $exibir_tabela = true;
        $query .= " AND prateleira like '%". $_POST['textBoxBusca']. "%'";
    }
    else
    {
        // $exibir_tabela = true;
        $query = "SELECT * FROM arquivo_morto WHERE ativo = 1";
    }

    
    $result = mysqli_query($_conn, $query);

    // var_dump($result);
    
    $alunos = [];
    
    while($aluno = mysqli_fetch_assoc($result))
    {
        $alunos[] = $aluno;
    }

    // var_dump($alunos);
    return $alunos;

}

require "templates/template.php";
include_once "helpers.php";


// function erro_query($query, $cnt) {
//     $result = mysqli_query($cnt, $query);
//     var_dump( $result);
// }