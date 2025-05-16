<?php 
    
    session_start();
    
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }
    
    function adicionarAoCarrinho($id_produto) {
        if (isset($_SESSION['carrinho'][$id_produto])) {
            $_SESSION['carrinho'][$id_produto]++;
        } else {
            $_SESSION['carrinho'][$id_produto] = 1;
        }
    }
    
    function removerDoCarrinho($produto_id) {
        unset($_SESSION['carrinho'][$produto_id]);
    }
    
    function atualizarCarrinho($produto_id, $quantidade) {
        if ($quantidade <= 0) {
            removerDoCarrinho($produto_id);
        } else {
            $_SESSION['carrinho'][$produto_id] = $quantidade;
        }
    }
?>