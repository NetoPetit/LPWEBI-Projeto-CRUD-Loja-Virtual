<?php
    include('../../admin/conexao_banco.php');
    include('carrinho_funcoes.php');

    if (empty($_SESSION['carrinho'])) {
        echo "<p>⚠️ Seu carrinho está vazio.</p>";
        echo "<a href='index.php'>Voltar à loja</a>";
        exit;
    }

    // Inserir na tabela `vendas`
    $data = date('Y-m-d H:i:s');
    $sql = "INSERT INTO vendas (data_venda) VALUES ('$data')";
    mysqli_query($conexao, $sql);
    $venda_id = mysqli_insert_id($conexao);

    // Inserir os itens vendidos
    foreach ($_SESSION['carrinho'] as $produto_id => $quantidade) {
        $produto_id = intval($produto_id);
        $quantidade = intval($quantidade);
        $sql_item = "INSERT INTO vendas_itens (venda_id, produto_id, quantidade) 
                    VALUES ($venda_id, $produto_id, $quantidade)";
        mysqli_query($conexao, $sql_item);
    }

    // Limpar carrinho
    $_SESSION['carrinho'] = [];

    echo "<h2>✅ Compra finalizada com sucesso!</h2>";
    echo "<p>Número da venda: $venda_id</p>";
    echo "<a href='/CRUD_LPWEBI_TRABALHO/publico/index.php'>Voltar à loja</a> | <a href='/CRUD_LPWEBI_TRABALHO/admin/vendas/vendas.php'>Ver minhas compras</a>";
?>
