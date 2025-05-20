<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    
    <?php 
        include("../valida_session.php");
    ?>

    <h2>CATEGORIAS</h2>
    <div>
        <form action="categoria_cadastro.php" method="get">
            <label for="nomeCategoria">Cadastrar Categoria</label>
            <input type="text" name="nomeCategoria" id="nomeCategoria">
            <input type="submit" value="CADASTRAR">
        </form>
    </div>
    <div>
        <button onclick="javascript:document.location.href='categoria_consulta.php'">VER CATEGORIAS</button>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'">VOLTAR</button>
    </div>
    
    
</body>
</html>