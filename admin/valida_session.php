<?php 
    session_start();
        
    if(isset($_SESSION["logado"])){
        echo "<p>Seja bem vindo " . $_SESSION["logado"] . "!</p>";
    }else{
        echo "<p>Você precisa efetuar login para ter acesso a essa área.</p>";
        exit;
    }

?>