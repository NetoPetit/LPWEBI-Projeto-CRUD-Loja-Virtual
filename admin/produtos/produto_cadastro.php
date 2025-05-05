<?php 
    include("../conexao_banco.php");

    $nomeProduto = @$_GET['produto'];
    $precoProduto = @$_GET['preco'];
    $idCategoria = @$_GET['categoria_id'];


    $sql = "INSERT INTO produtos(nome, preco, categoria_id)
            VALUES 
            ('$nomeProduto', '$precoProduto', '$idCategoria')";

    $conexao->query($sql);

    header('location: index.php');
?>