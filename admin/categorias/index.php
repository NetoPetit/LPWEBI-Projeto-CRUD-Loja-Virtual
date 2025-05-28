<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    
    <?php 
        include("../valida_session.php");
    ?>

    <h2>CATEGORIAS</h2>
    <div>
        <form action="categoria_cadastro.php" method="get">
            <label for="nomeCategoria"><strong>Cadastrar Categoria</strong></label>
            <input type="text" name="nomeCategoria" id="nomeCategoria">
            <input type="submit" value="CADASTRAR" class="btn btn-success">
        </form>
    </div>
    <br/>
    <div>
        <button onclick="javascript:document.location.href='categoria_consulta.php'" class="btn btn-primary">VER CATEGORIAS</button>
    </div>
    <br/>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'" class="btn btn-secondary">VOLTAR</button>
    </div>
    
    
</body>
</html>