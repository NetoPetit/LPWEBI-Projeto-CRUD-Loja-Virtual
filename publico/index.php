<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    <div class="container carrinho-container">
        <div>
            <h1 class="text-center">Loja Virtual</h1>
        </div>
        <div>
            <div class="carrinho-total">
                <a href="/CRUD_LPWEBI_TRABALHO/admin/index.php" class="btn btn-primary">ENTRAR</a>
                <button onclick="javascript:location.href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/carrinho.php'" class="btn btn-success">CARRINHO</button>
            </div>
            <div>
                <form action="/CRUD_LPWEBI_TRABALHO/publico/produto/pesquisa_pelo_nome.php" method="get">
                    <label for="pesquisa"><strong>Pesquise o produto pelo nome</strong></label>
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Nome do produto">
                    <input type="submit" value="PESQUISAR" class="btn btn-secondary">
                </form>
            </div>
            <br/>
            <div>
                <h3>Escolha a categoria do produto</h3>
            </div>
            <br/>
            <div>
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <td><h4>Categorias</h4></td>
                    </thead>
                    <tbody>
                        <?php 
                            include("conexao_banco_publico.php");

                            $sql = "SELECT id, nome
                                    FROM
                                    categorias";
                            $resultado = $conexao->query($sql);

                            foreach($resultado as $linha){
                                echo "
                                    <tr>
                                        <td>
                                            <h5><a href='/CRUD_LPWEBI_TRABALHO/publico/categoria/categoria_consulta.php?id=" . $linha['id'] . "'>" . $linha['nome'] . "</a></h5>
                                        </td>
                                    </tr>";           
                            }

                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</body>
</html>