<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="valida_login.php" method="post">
        <div></div>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <input type="submit" value="ENTRAR">
        </div>
        <div>
        
    </div>
    </form>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/categoria/index.php'">VOLTAR</button>
    </div>
</body>
</html>