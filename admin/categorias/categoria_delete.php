<?php 

    include("../conexao_banco.php");

    $nome = @$_GET['nome'];


    $sql = "DELETE FROM categorias
            WHERE
            nome = '$nome'";

    $conexao->query($sql);

    header('location: categoria_consulta.php');

?>