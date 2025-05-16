<?php
    include('../../admin/conexao_banco.php');
    include('carrinho_funcoes.php');

    // Adicionar ao carrinho (caso POST enviado)
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['produto_id'])) {
        adicionarAoCarrinho($_POST['produto_id']);
        header('Location: index.php'); // evita reenvio do form
        exit;
    }

    // Listar produtos
    $sql = "SELECT * FROM produtos";
    $resultado = $conexao->query($sql);

    while ($produto = mysqli_fetch_assoc($resultado)) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px;'>";
        echo "<h3>{$produto['nome']}</h3>";
        echo "<p>Preço: R$ {$produto['preco']}</p>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='produto_id' value='{$produto['id']}'>";
        echo "<button type='submit'>Adicionar ao Carrinho</button>";
        echo "</form>";
        echo "</div>";
    }
?>

<a href='carrinho.php'>🛒 Ver Carrinho</a>
