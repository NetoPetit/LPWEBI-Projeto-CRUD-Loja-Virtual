<?php 
    include('../conexao_banco_publico.php');
    include('carrinho_funcoes.php');

    $id_categoria = $_GET['id_categoria'] ?? 0;

    adicionarAoCarrinho($_GET['id']);
    header("location:/CRUD_LPWEBI_TRABALHO/publico/categoria/categoria_consulta.php?id=$id_categoria"); 
    exit;
    
?>