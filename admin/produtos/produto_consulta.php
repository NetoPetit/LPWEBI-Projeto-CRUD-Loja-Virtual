<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Produtos</title>
</head>
<body>
<div>
        <table>
            <thead>
                <td>Id</td>
                <td>Nome</td>
                <td>Preço</td>
                <td>Categoria</td>
                <td>Apagar</td>
            </thead>
            <tbody>
                <?php 
                    include("../conexao_banco.php");

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
                            ORDER BY
                            produtos.id ASC";
            
                    $resultado = $conexao->query($sql);

                    foreach($resultado as $linha){
                        echo "
                            <tr>
                                <td>". $linha['id_produto'] ."</td>
                                <td>". $linha['nome_produto'] ."</td>
                                <td>". $linha['preco_produto'] ."</td>
                                <td>". $linha['nome_categoria'] ."</td>
                                <td>
                                    <a href='/CRUD_LPWEBI_TRABALHO/admin/produtos/produto_delete.php?id_produto=" . $linha['id_produto'] . "'>APAGAR</a>
                                </td>
                            </tr>";
                        
                    }
                ?>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/produtos/index.php'">VOLTAR</button>
    </div>
</body>
</html>