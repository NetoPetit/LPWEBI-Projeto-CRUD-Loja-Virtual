<?php 
    include('../conexao_banco_publico.php');
    include('carrinho_funcoes.php');

    $nome_produto = $_GET['nome_produto'] ?? 0;

    adicionarAoCarrinho($_GET['id']);
    header("location:/CRUD_LPWEBI_TRABALHO/publico/produto/pesquisa_pelo_nome.php?pesquisa=$nome_produto"); 
    exit;
    
?>