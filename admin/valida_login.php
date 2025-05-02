<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida Login</title>
</head>
<body>
    
    <?php 

        session_start();

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if($usuario == "admin" && $senha == "1234"){
            $_SESSION["logado"] = $usuario;
            header("location:/CRUD_LPWEBI_TRABALHO/admin/painel.php");
        }else{
            echo "Usuário/Senha inválido.";
        }

    ?>
    <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/login.php'">VOLTAR</button>
</body>
</html>