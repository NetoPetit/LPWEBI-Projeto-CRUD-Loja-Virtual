<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <td>Id</td>
                <td>Nome do Produto</td>
                <td>Categoria</td>
                <td>Preço</td>
                <td>Detalhes</td>
                <td>Comprar</td>
            </thead>
            <tbody>
                <?php 
                    $id = $_GET['id'] ?? 0;

                    include("../../admin/conexao_banco.php");

                    $sql = "SELECT
                                produtos.id AS id_produto,
                                produtos.nome AS nome_produto,
                                produtos.preco AS preco_produto,
                                categorias.nome AS nome_categoria
                            FROM
                                produtos
                            JOIN
                                categorias
                            ON
                                produtos.categoria_id = categorias.id
                            WHERE 
                                produtos.categoria_id = '$id'
                            ORDER BY
                                produtos.id ASC";
            
                    $resultado = $conexao->query($sql);

                    foreach($resultado as $linha){
                        echo "
                            <tr>
                                <td>". $linha['id_produto'] ."</td>
                                <td>". $linha['nome_produto'] ."</td>
                                <td>". $linha['nome_categoria'] ."</td>
                                <td>". $linha['preco_produto'] ."</td>
                                <td>Em construção</td>
                                <td><a href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/adiciona_carrinho.php?id=".$linha['id_produto']."&id_categoria=$id'>Adicionar ao carrinho</a></td>
                            </tr>";
                        
                    }
                ?>
                
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/index.php'">VOLTAR</button>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/carrinho.php'">VER CARRINHO</button>
    </div>
</body>
</html>