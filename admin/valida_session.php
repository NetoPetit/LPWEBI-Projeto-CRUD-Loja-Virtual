<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    
</body>
</html>
<?php 
    session_start();
        
    if(isset($_SESSION["logado"])){
        echo "
            <div class='alert alert-info'>
                <h3><strong>Seja bem vindo " . $_SESSION["logado"] . "!</strong></h3>
            </div>";
    }else{
        echo "
            <div class='alert alert-danger'>
                <p>Você precisa efetuar login para ter acesso a essa área.</p>
            </div>";
        exit;
    }

?>