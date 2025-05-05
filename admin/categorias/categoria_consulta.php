<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Categorias</title>
</head>
<body>
    <div>
        <table>
            <thead>
                <td>Id</td>
                <td>Nome</td>
                <td>Apagar</td>
            </thead>
            <tbody>
                <?php 
                    include("../conexao_banco.php");

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
                                    <a href='/CRUD_LPWEBI_TRABALHO/admin/categorias/categoria_delete.php?nome=" . $linha['nome'] . "'>APAGAR</a>
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
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/categorias/index.php'">VOLTAR</button>
    </div>
</body>
</html>
