<?php
    include('../../admin/conexao_banco.php');
    include('carrinho_funcoes.php');

    // Atualizar quantidades
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($_POST['quantidade'] as $produto_id => $quantidade) {
            atualizarCarrinho($produto_id, intval($quantidade));
        }
        header("Location: carrinho.php");
        exit;
    }

    // Obter produtos do carrinho
    $carrinho = $_SESSION['carrinho'];
    $total = 0.0;

    echo "<h2>🛒 Carrinho de Compras</h2>";

    if (empty($carrinho)) {
        echo "<p>Seu carrinho está vazio.</p>";
        echo "<a href='/CRUD_LPWEBI_TRABALHO/publico/index.php'>Voltar à loja</a>";
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
    <form method='post'>
        <table border='1' cellpadding='10'>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>Ação</th>
            </tr>

            <?php 
                foreach ($carrinho as $produto_id => $quantidade) {
                    $sql = "SELECT * FROM produtos WHERE id = $produto_id";
                    $result = mysqli_query($conexao, $sql);
                    $produto = mysqli_fetch_assoc($result);

                    $subtotal = $produto['preco'] * $quantidade;
                    $total += $subtotal;

                    echo "<tr>
                            <td>" . $produto['nome'] . "</td>
                            <td>R$" . $produto['preco'] . "</td>
                            <td><input type='number' name='quantidade[$produto_id]' value='$quantidade' min='1'></td>
                            <td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>
                            <td><a href='remover_item.php?id=$produto_id'>Remover</a></td>
                        </tr>";
                }

            ?>
        </table>
        <p><strong>Total: R$<?=number_format($total, 2, ',', '.')?></strong></p>
        <button type='submit'>Atualizar Quantidades</button>
    </form>
    <br>
    <a href='finalizar_compra.php'>🧾 Finalizar Compra</a>
    <a href='/CRUD_LPWEBI_TRABALHO/publico/index.php'>Continuar Comprando</a>

</body>
</html>


