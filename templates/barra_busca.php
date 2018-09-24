<?php include_once('header.php')        ; ?>

    <form action="./busca.php" method="post">
        <div class="input-group py-2 mb-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-11">
                        <input type="text" class="form-control py-0" placeholder="Digite aqui" aria-label="search"
                            aria-describedby="basic-addon2" name="textBoxBusca">
                    </div>
                    <div class="col-md-1 py-0">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- input-group -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rdFiltro" value="nome" checked="checked">
                            <label class="form-check-label" for="rdNome">Nome do Aluno</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rdFiltro" value="nascimento">
                            <label class="form-check-label" for="rdNascimento">Data de Nascimento</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rdFiltro" value="armario">
                            <label class="form-check-label" for="rdArmario">Armário</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="rdFiltro" value="prateleira">
                            <label class="form-check-label" for="rdPrateleira">Prateleira</label>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left:390px;">
                            <input class="form-check-input" type="checkbox" name="checkAtivo" value="1" checked="checked">
                            <label class="form-check-label" for="checkAtivo">Ativado</label>
                        </div>
                    </div>
                </div>
            </div>
    </form>

<?php include_once('footer.php');?>
