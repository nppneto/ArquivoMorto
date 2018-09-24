<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<main class="container">

<!-- <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck1">
    <label class="custom-control-label" for="customCheck1">Nome do Aluno</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck2">
    <label class="custom-control-label" for="customCheck2">Data de Nascimento</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck3">
    <label class="custom-control-label" for="customCheck3">Armário</label>
</div>
<div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck4">
    <label class="custom-control-label" for="customCheck4">Prateleira</label>
</div> -->

<!-- <div class="custom-control custom-checkbox custom-control-inline">
    <input type="checkbox" class="custom-control-input" id="customCheck5">
    <label class="custom-control-label" for="customCheck5">Temporário</label>
</div> -->


<!-- <div class="form-group">
    <select class="custom-select">
        <option selected>Filtrar pesquisas por:</option>
        <option value="1">Autônomo</option>
        <option value="2">Efetivo</option>
        <option value="3">Estagiário</option>
        <option value="4">Freelancer</option>
        <option value="5">Temporário</option>
    </select>        
</div> -->

<div class="form-group">
<table class="table">
    <tr>
        <th scope="col">Nome do Aluno</th>
        <th scope="col">Data de Nascimento</th>
        <th scope="col">Armário</th>
        <th scope="col">Prateleira</th>
        <th scope="col">Ativo</th>
        <th scope="col">Opções</th>   <!-- A nova coluna de opções -->
    </tr>

    <?php foreach($listar_busca as $busca) : ?>

        <tr>
            <td>
                <a href="detalhes.php?id=<?php echo $busca['id']; ?>">
                    <?php echo $busca['nome_aluno']; ?>
                </a>
            </td>
            <td><?php echo traduz_data_para_exibir($busca['nascimento']); ?></td>
            <td><?php echo $busca['armario']; ?></td>
            <td><?php echo $busca['prateleira']; ?></td>
            <td><?php echo traduz_ativo($busca['ativo']); ?></td>
            <td>
                <!-- O campo com os links para editar e remover tarefas -->
                <!-- <a href="editar.php?id=<?php #echo $tarefa['id']; ?>">Editar</a> -->
                <a href="editar.php?id=<?php echo $busca['id']; ?>">
                    <button class="btn btn-primary btn-sm">Editar</button>
                </a>
                <a href="excluir.php?id=<?php echo $busca['id']; ?>">
                    <button class="btn btn-primary btn-sm">Excluir</button>
                </a>
            </td>
        </tr>

    <?php endforeach; ?>    
</table>
</div>

</main>


</body>
</html>