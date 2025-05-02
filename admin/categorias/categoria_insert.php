<?php 

    $nomeCategoria = @$_GET['nomeCategoria'];

    include("../conexao_banco.php");

    $sql = "INSERT INTO categorias(nome)
            VALUES 
            ('$nomeCategoria')";

    $conexao->query($sql);

    header('location: index.php');
?>