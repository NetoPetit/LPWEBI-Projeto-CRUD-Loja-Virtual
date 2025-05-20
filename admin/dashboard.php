<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
    <?php
        include("valida_session.php");
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
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/encerrar_sessao.php'">SAIR</button>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/index.php'">VOLTAR</button>
    </div>
</body>
</html>