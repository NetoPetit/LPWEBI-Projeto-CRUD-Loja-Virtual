<?php 

$apagarCategoria = @$_GET['apagarCategoria'];

include("../conexao_banco.php");

$sql = "DELETE FROM categorias
        WHERE
        nome = '$apagarCategoria'";

$conexao->query($sql);

header('location: index.php');

?>