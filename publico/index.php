<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body>
    <div>
        <h2>Loja Virtual</h2>
    </div>
    <div>
        <div>
            <button onclick="javascript:location.href='/CRUD_LPWEBI_TRABALHO/publico/carrinho/carrinho.php'">Carrinho</button>
        </div>
        <div>
            <form action="/CRUD_LPWEBI_TRABALHO/publico/produto/pesquisa_pelo_nome.php" method="get">
                <label for="pesquisa">Pesquise o produto pelo nome</label>
                <input type="text" name="pesquisa" id="pesquisa">
                <input type="submit" value="PESQUISAR">
            </form>
        </div>
        
        <div>
            <h3>Escolha a categoria do produto</h3>
        </div>
        <div>
            <table>
                <thead>
                    <td>Categorias</td>
                </thead>
                <tbody>
                    <?php 
                        include("../admin/conexao_banco.php");

                        $sql = "SELECT id, nome
                                FROM
                                categorias";
                        $resultado = $conexao->query($sql);

                        foreach($resultado as $linha){
                            echo "
                                <tr>
                                    <td>
                                        <a href='/CRUD_LPWEBI_TRABALHO/publico/categoria/categoria_consulta.php?id=" . $linha['id'] . "'>" . $linha['nome'] . "</a>
                                    </td>
                                </tr>";
                        }

                    ?>
                </tbody>
            </table>
            
        </div>
    </div>
    <div>
        <a href="/CRUD_LPWEBI_TRABALHO/admin/login.php">⚙️</a>
    </div>
</body>
</html>