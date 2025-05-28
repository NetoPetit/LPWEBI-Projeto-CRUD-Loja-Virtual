<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION["logado"])){
            header("location:/CRUD_LPWEBI_TRABALHO/admin/dashboard.php");
        }
        
    ?>
    <form action="valida_login.php" method="post">
        <div>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <br/>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <br/>
        <div>
            <input type="submit" value="ENTRAR" class="btn btn-success">
        </div>
    </form>
    <br/>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/index.php'" class="btn btn-secondary">VOLTAR</button>
    </div>
</body>
</html>