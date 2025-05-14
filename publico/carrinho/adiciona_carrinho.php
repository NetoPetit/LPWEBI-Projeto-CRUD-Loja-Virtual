<?php 
    $id = $_GET['id'];
    
    include("../../admin/conexao_banco.php");

    $sql = "SELECT
            *
            FROM
            produtos
            JOIN
            categorias
            ON
            produtos.categoria_id = categorias.id
            WHERE
            produtos.categoria_id = '$id'";
    $resultado = $conexao->query($sql);

    $carrinho = [$resultado];
    echo "<pre>";
    var_dump($carrinho);
    echo "</pre>";

?>