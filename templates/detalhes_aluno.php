<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/tarefas.css" type="text/css" />
    <title>Detalhes</title>
</head>
<body>
    <div class="detalhes">
        <h2>Aluno: <?php echo $alunos['nome_aluno']; ?> </h2>
    <div class="form-group py-3">
    <p>
        <strong>Nascimento:</strong>
        <?php echo traduz_data_para_exibir($alunos['nascimento']); ?>
    </p>
    <p>
        <strong>Armário:</strong>
        <?php echo nl2br($alunos['armario']); ?>
    </p>
    <p>
        <strong>Prateleira:</strong>
        <?php echo nl2br($alunos['prateleira']); ?>
    </p>
    <p>
        <strong>Nome da Mãe:</strong>
        <?php echo $alunos['nome_mae']; ?>
    </p>
    <p>
        <strong>Nome do Pai:</strong>
        <?php echo $alunos['nome_pai']; ?>
    </p>
    <p>
        <strong>Ativo:</strong>
        <?php echo ($alunos['ativo'] == 1) ? 'Sim' : 'Não'; ?>
    </p>
    <div class="form-group py-5">
    <p class>
        <a href="home.php">
            Voltar para a tela inicial
        </a>
    </p>
    </div>
    </div>
    </div>