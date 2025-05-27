<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    <div class="container carrinho-container">
        <h1 class="text-center">Resultado da Pesquisa</h1>
        <?php 
            if(isset($_GET['pesquisa'])){

            
                $pesquisa = $_GET['pesquisa'];
                $id = $_GET['id'] ?? 0;

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
                            produtos.nome
                        LIKE
                            '%$pesquisa%'
                        ORDER BY
                            produtos.id ASC";
                $resultado = $conexao->query($sql);

                if($resultado->num_rows > 0){
                    echo "
                        <table class='table table-bordered table-hover'>
                            <thead class='table-dark'>
                                <td>Id</td>
                                <td>Nome do Produto</td>
                                <td>Categoria</td>
                                <td>Preço</td>
                                <td>Detalhes</td>
                                <td>Comprar</td>
                            </thead>
                            <tbody>";

                                foreach($resultado as $linha){
                                    echo "
                                        <tr>
                                            <td>". $linha['id_produto'] ."</td>
                                            <td>". $linha['nome_produto'] ."</td>
                                            <td>". $linha['nome_categoria'] ."</td>
                                            <td>". $linha['preco_produto'] ."</td>
                                            <td><a href='/CRUD_LPWEBI_TRABALHO/publico/produto/descricao_produto.php?produto=".$linha['nome_produto']."'class='btn btn-warning'>Descrição</a></td>
                                            <td><a href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/pesquisa_adiciona_carrinho.php?id=".$linha['id_produto']."&nome_produto=$pesquisa'class='btn btn-primary'>Adicionar ao carrinho</a></td>
                                        </tr>";
                                }

                        echo "
                            </tbody>
                        </table>";
                }else{
                    echo "<p>Produto não encontrado.</p>";
                }
            }else{
                echo "<p>Por favor, insira um termo de pesquisa.</p>";
            }
        ?>
        <div class="d-flex justify-content-between">
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/index.php'" class="btn btn-secondary">VOLTAR</button>
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/carrinho.php'" class="btn btn-success">VER CARRINHO</button>
        </div>
    </div>   
</body>
</html>