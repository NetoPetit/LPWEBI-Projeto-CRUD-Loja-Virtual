<?php 
    include('../../admin/conexao_banco.php');
    include('carrinho_funcoes.php');

    $nome_produto = $_GET['nome_produto'] ?? 0;

    adicionarAoCarrinho($_GET['id']);
    header("location:/CRUD_LPWEBI_TRABALHO/publico/produto/pesquisa_pelo_nome.php?produto=$nome_produto"); 
    exit;
    
?>