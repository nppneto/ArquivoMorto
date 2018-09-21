<?php

 $host = '127.0.0.1';
 $user = 'developer'; // unimes = 'root' ---> helbor = 'developer'
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
    $sqlBuscar = "SELECT * FROM arquivo_morto";

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

function desativar_aluno($_conn, $id)
{

}

// function erro_query($query, $cnt) {
//     $result = mysqli_query($cnt, $query);
//     var_dump( $result);
// }