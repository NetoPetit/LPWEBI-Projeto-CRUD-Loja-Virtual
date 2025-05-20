<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de Vendas</title>
</head>
<body>
    <div>
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/index.php'">VOLTAR A LOJA</button>
    </div>
    <div>
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'">VOLTAR AO PAINEL</button>
    </div>

    <h2>Histórico de Vendas</h2>

    <?php
        include('../conexao_banco.php');

        // Consulta todas as vendas
        $sql_vendas = "SELECT 
                        * 
                        FROM 
                            vendas 
                        ORDER BY 
                            id 
                        ASC";
        $resultado_vendas = $conexao->query($sql_vendas);

        if (mysqli_num_rows($resultado_vendas) == 0) {
            echo "<p>Nenhuma venda registrada.</p>";
            exit;
        }

        while ($venda = mysqli_fetch_assoc($resultado_vendas)) {
            $venda_id = $venda['id'];
            $data = date('d/m/Y H:i', strtotime($venda['data_venda']));
            
            echo "
            <div style='border:1px solid #ccc; padding:10px; margin-bottom:10px;'>
                <strong>Venda #" . $venda_id . "</strong> em " . $data . "<br>";

            // Consultar os itens da venda
            $sql_itens = "SELECT 
                            vi.quantidade, p.nome, p.preco
                        FROM 
                            vendas_itens vi
                        JOIN 
                            produtos p 
                        ON 
                            vi.produto_id = p.id
                        WHERE 
                            vi.venda_id = $venda_id";
            $resultado_itens = $conexao->query($sql_itens);

            echo "<ul>";
                $total = 0;
                while ($item = mysqli_fetch_assoc($resultado_itens)) {
                    $subtotal = $item['preco'] * $item['quantidade'];
                    $total += $subtotal;
                    echo "<li>" . $item['nome'] . " - " . $item['quantidade'] . " x R$" . $item['preco'] . " = R$" . number_format($subtotal, 2, ',', '.') . "</li>";
                }
            echo "</ul>
                <strong>Total: R$" . number_format($total, 2, ',', '.') . "</strong>
            </div>";
        }
    ?>
</body>
</html>