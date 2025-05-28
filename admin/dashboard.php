<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    
    <?php
        include("valida_session.php");
    ?>
    <br/>
    <div>
        <h4><a href="/CRUD_LPWEBI_TRABALHO/admin/categorias/index.php">Categorias</a></h4>
    </div>
    <br/>
    <div>
        <h4><a href="/CRUD_LPWEBI_TRABALHO/admin/produtos/index.php">Produtos</a></h4>
    </div>
    <br/>
    <div>
        <h4><a href="/CRUD_LPWEBI_TRABALHO/admin/vendas/index.php">Vendas</a></h4>
    </div>
    <br/>
    <div>
        <h4><a href="/CRUD_LPWEBI_TRABALHO/publico/index.php">Loja</a></h4>
    </div>
    <br/>
    <br/>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/encerrar_sessao.php'" class="btn btn-danger">SAIR</button>
    </div>
    
</body>
</html>