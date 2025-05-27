<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Venda</title>
</head>
<body>
    <?php
        include('../conexao_banco_publico.php');
        include('carrinho_funcoes.php');

        if (empty($_SESSION['carrinho'])) {
            echo "
                <p>Seu carrinho está vazio.</p>
                <a href='/CRUD_LPWEBI_TRABALHO/publico/index.php'>Voltar à loja</a>";
            exit;
        }

        // Inserir na tabela `vendas`
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('Y-m-d H:i:s');
        $sql = "INSERT INTO 
                    vendas (data_venda) 
                VALUES 
                    ('$data')";
        $conexao->query($sql);
        $venda_id = mysqli_insert_id($conexao);

        // Inserir os itens vendidos
        foreach ($_SESSION['carrinho'] as $produto_id => $quantidade) {
            $produto_id = intval($produto_id);
            $quantidade = intval($quantidade);
            $sql_item = "INSERT INTO 
                            vendas_itens (venda_id, produto_id, quantidade) 
                        VALUES 
                            ($venda_id, $produto_id, $quantidade)";
            $conexao->query($sql_item);
        }

        // Limpar carrinho
        $_SESSION['carrinho'] = [];

    ?>
    
    <h2>Compra finalizada com sucesso!</h2>
    <p>Número da venda: <?=$venda_id?></p>
    <h2>Obrigado por comprar conosco!</h2>
    <a href='/CRUD_LPWEBI_TRABALHO/publico/index.php'>Voltar à loja</a>
    
</body>
</html>

