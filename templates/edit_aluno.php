<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Aluno</title>
</head>
<body>
    <main class="container">
    <form action="" method="POST">
    <input type="hidden" name="id" value="<?php echo $alunos['id']; ?>">
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome:</label>
        <?php if(isset($tem_erros) && array_key_exists('nome_aluno', $_POST)) : ?>
            <span class="erro">
                <?php echo $erros_validacao['nome_aluno']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="nome_aluno" class="form-control" value="<?php echo $alunos['nome_aluno']; ?>" placeholder="Nome do aluno...">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nascimento:</label>
        <?php if(isset($tem_erros) && array_key_exists('nascimento', $_POST)) : ?>
            <span class="erro">
                <?php echo $erros_validacao['nascimento']; ?>
            </span>
        <?php endif; ?>
        <input type="date" name="nascimento" class="form-control" value="<?= $alunos['nascimento']; ?>" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Armário:</label>
        <?php if(isset($tem_erros) && array_key_exists('armario', $_POST)) : ?>
            <span class="erro">
                <?php echo $erros_validacao['armario']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="armario" class="form-control" value="<?php echo $alunos['armario']; ?>" placeholder="Identificação do armário...">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Prateleira:</label>
        <?php if(isset($tem_erros) && array_key_exists('prateleira', $_POST)) : ?>
            <span class="erro">
                <?php echo $erros_validacao['prateleira']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="prateleira" class="form-control" value="<?php echo $alunos['prateleira']; ?>" placeholder="Identificação da prateleira...">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome da Mãe:</label>
        <?php if(isset($tem_erros) && array_key_exists('nome_mae', $_POST)) : ?>
            <span class="erro">
                <?php echo $erros_validacao['nome_mae']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="nome_mae" class="form-control" value="<?php echo $alunos['nome_mae']; ?>" placeholder="Nome da mãe...">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Nome do Pai:</label>
        <?php if(isset($tem_erros) && array_key_exists('nome_pai', $_POST)) : ?>
            <span class="erro">
                <?php echo $erros_validacao['nome_pai']; ?>
            </span>
        <?php endif; ?>
        <input type="text" name="nome_pai" class="form-control" value="<?php echo $alunos['nome_pai']; ?>" placeholder="Nome do pai...">
    </div>

    <div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="ativo" value="1"
                <?= ($alunos['ativo'] == 1) 
                ? 'checked' 
                : ''; 
                ?>>
            <label class="form-check-label">Ativo</label>
        </div>
    </div>

    <!-- checkbox para ativo -->

    <div class="form-group py-3">
        <input class="btn btn-primary" type="submit" value="Salvar">
    </div>

    </form>
    </main>
<!--  -->
</body>
</html>