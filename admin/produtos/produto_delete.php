<?php 

    include("../conexao_banco.php");

    $produto_id = @$_GET['id_produto'];


    $sql = "DELETE FROM produtos
            WHERE
            id = '$produto_id'";

    $conexao->query($sql);

    header('location: produto_consulta.php');

?>