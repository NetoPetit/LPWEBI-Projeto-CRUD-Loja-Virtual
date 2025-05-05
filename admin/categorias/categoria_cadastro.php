<?php 
    include("../conexao_banco.php");

    $nomeCategoria = @$_GET['nomeCategoria'];


    $sql = "INSERT INTO categorias(nome)
            VALUES 
            ('$nomeCategoria')";

    $conexao->query($sql);

    header('location: index.php');
?>