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
<div class="input-group py-0 mb-5">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <input type="text" class="form-control py-0" placeholder="Digite aqui" aria-label="search" aria-describedby="basic-addon2">
        </div>
        <div class="col-md-2 py-0">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Nome do Aluno</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Data de Nascimento</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Armário</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option4">
                    <label class="form-check-label" for="inlineRadio4">Prateleira</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option5">
                    <label class="form-check-label" for="inlineRadio5">Ativado</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option6" >
                    <label class="form-check-label" for="inlineRadio6">Desativado</label>
                </div>
            </div>
        </div>
    </div>
</div>
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

    <?php foreach($listar_alunos as $aluno) : ?>

        <tr>
            <td>
                <a href="detalhes.php?id=<?php echo $aluno['id']; ?>">
                    <?php echo $aluno['nome_aluno']; ?>
                </a>
            </td>
            <td><?php echo traduz_data_para_exibir($aluno['nascimento']); ?></td>
            <td><?php echo $aluno['armario']; ?></td>
            <td><?php echo $aluno['prateleira']; ?></td>
            <td><?php echo traduz_ativo($aluno['ativo']); ?></td>
            <td>
                <!-- O campo com os links para editar e remover tarefas -->
                <!-- <a href="editar.php?id=<?php #echo $tarefa['id']; ?>">Editar</a> -->
                <a href="editar.php?id=<?php echo $aluno['id']; ?>">
                    <button class="btn btn-primary btn-sm">Editar</button>
                </a>
                <a href="excluir.php?id=<?php echo $aluno['id']; ?>">
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