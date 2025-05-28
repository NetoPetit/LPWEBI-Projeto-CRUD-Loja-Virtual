<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    <?php 
        $id = $_GET['id'] ?? 0;

        if($id == 0){
            echo "Categoria não encontrada";
            exit;
        }
    ?>
    <div class="container carrinho-container">

        <h1 class="text-center">Produtos da Categoria</h1>

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <td>Id</td>
                    <td>Nome do Produto</td>
                    <td>Categoria</td>
                    <td>Preço</td>
                    <td>Detalhes</td>
                    <td>Comprar</td>
                </tr>
            </thead>
            <tbody>
                <?php 
                    
                    include("../conexao_banco_publico.php");

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
                                <td>R$". $linha['preco_produto'] ."</td>
                                <td><a href='/CRUD_LPWEBI_TRABALHO/publico/produto/descricao_produto.php?produto=". $linha['nome_produto'] ."&id_categoria=$id'class='btn btn-warning'>Descrição</a></td>
                                <td><a href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/adiciona_carrinho.php?id=".$linha['id_produto']."&id_categoria=$id'class='btn btn-primary'>Adicionar ao carrinho</a></td>
                            </tr>";
                        
                    }
                ?>
                
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    
        <div class="d-flex justify-content-between">
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/index.php'" class="btn btn-secondary">VOLTAR</button>
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/carrinho.php'" class="btn btn-success">VER CARRINHO</button>
        </div>
    </div>
</body>
</html>