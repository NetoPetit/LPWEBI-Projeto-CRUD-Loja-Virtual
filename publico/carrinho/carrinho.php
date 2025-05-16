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
        echo "<a href='index.php'>Voltar à loja</a>";
        exit;
    }

    echo "<form method='post'>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Produto</th><th>Preço</th><th>Quantidade</th><th>Total</th><th>Ação</th></tr>";

    foreach ($carrinho as $produto_id => $quantidade) {
        $sql = "SELECT * FROM produtos WHERE id = $produto_id";
        $result = mysqli_query($conexao, $sql);
        $produto = mysqli_fetch_assoc($result);

        $subtotal = $produto['preco'] * $quantidade;
        $total += $subtotal;

        echo "<tr>";
        echo "<td>{$produto['nome']}</td>";
        echo "<td>R$ {$produto['preco']}</td>";
        echo "<td><input type='number' name='quantidade[$produto_id]' value='$quantidade' min='1'></td>";
        echo "<td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>";
        echo "<td><a href='remover_item.php?id=$produto_id'>Remover</a></td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<p><strong>Total: R$ " . number_format($total, 2, ',', '.') . "</strong></p>";
    echo "<button type='submit'>Atualizar Quantidades</button>";
    echo "</form>";
    echo "<br><a href='finalizar_compra.php'>🧾 Finalizar Compra</a>";
    echo " | <a href='index.php'>Continuar Comprando</a>";
?>
