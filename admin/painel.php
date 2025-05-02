<?php 

    session_start();

    if(isset($_SESSION["logado"])){
        header("location:/CRUD_LPWEBI_TRABALHO/admin/dashboard.php");
    }else{
        echo "Você precisa efetuar login para ter acesso a essa área.";
        exit;
    }

?>