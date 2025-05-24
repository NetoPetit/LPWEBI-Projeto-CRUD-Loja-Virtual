<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    <div class="container carrinho-container">
        <h2 class="mb-4">Itens no Carrinho</h2>

        <?php 
            include('../conexao_banco_publico.php');
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
            
            if (empty($carrinho)) {
                echo "
                    <div class='alert alert-warning'>Seu carrinho está vazio.</div>
                    <a href='/CRUD_LPWEBI_TRABALHO/publico/index.php' class='btn btn-secondary'>Voltar à loja</a>";
                exit;
            }
        ?>

        <form method='post'>
            <table class="table table-bordered table-hover table-carrinho">
                <thead class="table-dark">
                    <tr >
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Total</th>
                        <th>Ação</th>
                    </tr>
                </thead>

                <?php 

                    foreach ($carrinho as $produto_id => $quantidade) {
                        $sql = "SELECT 
                                    * 
                                FROM 
                                    produtos 
                                WHERE 
                                    id = $produto_id";
                        $resultado = $conexao->query($sql);
                        $produto = mysqli_fetch_assoc($resultado);

                        $subtotal = $produto['preco'] * $quantidade;
                        $total += $subtotal;

                        echo "<tr>
                                <td>" . $produto['nome'] . "</td>
                                <td>R$" . $produto['preco'] . "</td>
                                <td><input type='number' name='quantidade[$produto_id]' value='$quantidade' min='1'></td>
                                <td>R$ " . number_format($subtotal, 2, ',', '.') . "</td>
                                <td><a href='remover_item.php?id=$produto_id' class='btn btn-danger btn-sm'>Remover</a></td>
                            </tr>";
                    }

                ?>
            </table>
            <div class="carrinho-total">
                <p><strong>Total: R$<?=number_format($total, 2, ',', '.')?></strong></p>
            </div>
            <button type='submit'class='btn btn-secondary'>Atualizar Quantidades</button>
        </form>
        <br>
        <div class="mt-4">
            <a href='finalizar_compra.php'class="btn btn-primary">Finalizar Compra</a>
            <a href='/CRUD_LPWEBI_TRABALHO/publico/index.php'class="btn btn-secondary">Continuar Comprando</a>
        </div>
    </div>
</body>
</html>


