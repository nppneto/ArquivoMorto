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

function buscar_arquivos($_conn) {
    $sqlBuscar = "SELECT * FROM arquivo_morto";

    // var_dump($sqlBusca);

    $resultado = mysqli_query($_conn, $sqlBuscar);

    // var_dump($resultado);

    $arquivos = [];

    while($arquivo = mysqli_fetch_assoc($resultado)) {
        $arquivos[] = $arquivo;
    }

    // var_dump($tarefas);

    return $arquivos;
}