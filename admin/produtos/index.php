<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h2>CADASTRO DE PRODUTOS</h2>
    <div>
        <form action="produto_cadastro.php" method="get">
            <label for="produto">Nome do Produto</label>
            <input type="text" name="produto" id="produto">
            <br/>
            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco">
            <br/>
            <label for="categoria_id">Categoria do Produto: </label>
            <select name="categoria_id">
                <?php
                    include("../conexao_banco.php");

                    $categorias = $conexao->query("SELECT id, nome FROM categorias");

                    foreach ($categorias as $categoria) {
                        echo "<option value='{$categoria['id']}'>{$categoria['nome']}</option>";
                    }
                ?>
            </select>
            <input type="submit" value="CADASTRAR PRODUTO">
        </form>
    </div>
    <div>
        <button onclick="javascript:document.location.href='produto_consulta.php'">VER PRODUTOS</button>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'">VOLTAR</button>
    </div>
</body>
</html>