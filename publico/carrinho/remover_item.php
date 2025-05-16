<?php
    include('carrinho_funcoes.php');

    if (isset($_GET['id'])) {
        $produto_id = intval($_GET['id']);
        removerDoCarrinho($produto_id);
    }

    header("Location: carrinho.php");
    exit;
?>
