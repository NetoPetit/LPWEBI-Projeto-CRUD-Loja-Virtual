<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
    <style>
        body, html {
            height: 100%;
        }
        .login-container {
            height: 100vh;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        
        if(isset($_SESSION["logado"])){
            header("location:/CRUD_LPWEBI_TRABALHO/admin/dashboard.php");
        }
        
    ?>
    <div  class="container login-container d-flex flex-column justify-content-center align-items-center">
        <form action="valida_login.php" method="post" class="border p-4 rounded shadow bg-light" style="min-width: 300px;">
            <h2 class="text-center mb-4">Login</h2>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuário</label>
                <input type="text" name="usuario" id="usuario" class="form-control">
            </div>
            <br/>
            <div>
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>
            <br/>
            <div class="d-grid mb-3">
                <input type="submit" value="ENTRAR" class="btn btn-success">
            </div>
        </form>
        <br/> 
        <div>
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/index.php'" class="btn btn-secondary mt-3">VOLTAR</button>
        </div>
    </div>
</body>
</html>