<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <h2>CATEGORIAS</h2>
    <div>
        <form action="" method="get">
            <label for="cadastrar">Cadastrar Categoria</label>
            <input type="text" name="cadastrar" id="cadastrar">
            <input type="submit" value="CADASTRAR">
        </form>
    </div>
    <div>
        <form action="" method="get">
            <label for="apagar">Apagar Categoria</label>
            <input type="text" name="apagar" id="apagar">
            <input type="submit" value="APAGAR">
        </form>
    </div>
    <div>
        <form action="" method="get">
            <label for="consultar">Consultar Produtos por Categoria</label>
            <input type="text" name="consultar" id="consultar">
            <input type="submit" value="CONSULTAR">
        </form>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'">VOLTAR</button>
    </div>
</body>
</html>