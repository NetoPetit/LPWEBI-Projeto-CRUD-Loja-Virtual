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
        <form action="categoria_insert.php" method="get">
            <label for="nomeCategoria">Cadastrar Categoria</label>
            <input type="text" name="nomeCategoria" id="nomeCategoria">
            <input type="submit" value="CADASTRAR">
        </form>
    </div>
    <div>
        <form action="categoria_delete.php" method="get">
            <label for="apagarCategoria">Apagar Categoria</label>
            <input type="text" name="apagarCategoria" id="apagarCategoria">
            <input type="submit" value="APAGAR">
        </form>
    </div>
    <div>
        <form action="" method="get">
            <label for="consultarCategoria">Consultar Categorias Cadastradas</label>
            <input type="text" name="consultarCategoria" id="consultarCategoria">
            <input type="submit" value="CONSULTAR">
        </form>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'">VOLTAR</button>
    </div>
    <div>
        <table>
            <thead>

            </thead>
            <tbody>

            </tbody>
            <tfoot>
                
            </tfoot>
        </table>
    </div>
</body>
</html>