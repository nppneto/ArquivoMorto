<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<main class="container">

<!-- input-group -->
<div class="input-group py-5">
    <input type="text" class="form-control" placeholder="Digite aqui" aria-label="search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Buscar</button>
    </div>
</div>

<div class="form-group">
<table class="table">
    <tr>
        <th scope="col">Nome do Aluno</th>
        <th scope="col">Armário</th>
        <th scope="col">Prateleira</th>
        <th scope="col">Opções</th>   <!-- A nova coluna de opções -->
    </tr>

    <!-- <?php #foreach($listaTarefas as $tarefa) : ?> -->

        <tr>
            <td>
                <a href="editar.php?id=<?php #echo $tarefa['id']; ?>">
                    <!-- <?php #echo $tarefa['nome']; ?> -->
                    Deyvison
                </a>
            </td>
            <td> 133-A </td>
            <td> P-678BW </td>
            <td>
                <!-- O campo com os links para editar e remover tarefas -->
                <!-- <a href="editar.php?id=<?php #echo $tarefa['id']; ?>">Editar</a> -->
                <a href="#">Detalhes</a>
                <a href="#">Remover</a>
            </td>
        </tr>

    <!-- <?php #endforeach; ?>     -->
</table>
</div>

</main>


</body>
</html>