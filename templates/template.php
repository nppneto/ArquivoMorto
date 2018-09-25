<?php if($exibir_barra) : ?>
  <?php include_once "barra_busca.php"; ?>
<?php endif; ?>

<!-- $exibir_tabela chama o arquivo tabela_home.php - Tabela da Página Inicial - SELECT * FROM arquivo_morto -->
<?php if($exibir_tabela) : ?>
    <?php include_once "tabela_home.php"; ?>
<?php endif; ?>

<?php if($exibir_tabela_busca) : ?>
  <?php include_once "tabela_busca.php"; ?>
<?php endif; ?>

<script src="./js/bootstrap.min.js"></script>
</body>
</html>