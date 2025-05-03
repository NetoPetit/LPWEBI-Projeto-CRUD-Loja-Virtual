<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
        session_start();
        
        echo "<p>Seja bem vindo " . $_SESSION["logado"] . "!</p>";
    ?>
    <div>
        <a href="/CRUD_LPWEBI_TRABALHO/admin/categorias/index.php">Categorias</a>
    </div>
    <div>
        <a href="/CRUD_LPWEBI_TRABALHO/admin/produtos/index.php">Produtos</a>
    </div>
    <div>
        <a href="/CRUD_LPWEBI_TRABALHO/admin/vendas/index.php">Vendas</a>
    </div>
</body>
</html>