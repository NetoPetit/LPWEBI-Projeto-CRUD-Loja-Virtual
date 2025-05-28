<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>

    <?php 
        include("../valida_session.php");
    ?>
    
    <h2>CADASTRO DE PRODUTOS</h2>
    <div>
        <form action="produto_cadastro.php" method="get">
            <label for="produto"><strong>Nome do Produto</strong></label>
            <input type="text" name="produto" id="produto">
            <br/>
            <br/>
            <label for="preco"><strong>Preço</strong></label>
            <input type="text" name="preco" id="preco">
            <br/>
            <br/>
            <label for="categoria_id"><strong>Categoria do Produto: </strong></label>
            <select name="categoria_id">
                <?php
                    include("../conexao_banco.php");

                    $categorias = $conexao->query("SELECT id, nome FROM categorias");

                    foreach ($categorias as $categoria) {
                        echo "<option value='{$categoria['id']}'>{$categoria['nome']}</option>";
                    }
                ?>
            </select>
            <input type="submit" value="CADASTRAR PRODUTO" class="btn btn-success">
        </form>
    </div>
    <br/>
    <div>
        <button onclick="javascript:document.location.href='produto_consulta.php'" class="btn btn-primary">VER PRODUTOS</button>
    </div>
    <br/>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'" class="btn btn-secondary">VOLTAR</button>
    </div>
</body>
</html>