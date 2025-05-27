<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    
    <?php 
        
        session_start();

        $usuario = $_POST['usuario'] ?? "default";
        $senha = $_POST['senha'] ?? "default";

        if($usuario == "admin" && $senha == "1234"){
            $_SESSION["logado"] = $usuario;
            header("location:/CRUD_LPWEBI_TRABALHO/admin/dashboard.php");
        }else{
            echo "
                <div class='alert alert-danger'>
                    Usuário/Senha inválido.
                </div>
                ";
        }

    ?>
    <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/index.php'" class="btn btn-secondary">VOLTAR</button>
</body>
</html>