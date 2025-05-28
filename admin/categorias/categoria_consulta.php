<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Categorias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    <?php 
        include("../conexao_banco.php");
    ?>
    <div class="container carrinho-container">

        <h1 class="text-center">Categorias Cadastradas</h1>

        <div>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <td>Id</td>
                    <td>Nome</td>
                    <td>Apagar</td>
                </thead>
                <tbody>
                    <?php 
                        
                        $sql = "SELECT *
                                FROM
                                    categorias
                                ORDER BY
                                    categorias.id ASC";
                
                        $resultado = $conexao->query($sql);

                        foreach($resultado as $linha){
                            echo "
                                <tr>
                                    <td>" . $linha['id'] . "</td>
                                    <td>". $linha['nome'] ."</td>
                                    <td>
                                        <a href='/CRUD_LPWEBI_TRABALHO/admin/categorias/categoria_delete.php?id=" . $linha['id'] . "' class='btn btn-danger'>APAGAR</a>
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
            <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/categorias/index.php'" class="btn btn-secondary">VOLTAR</button>
        </div>
    </div>
</body>
</html>
