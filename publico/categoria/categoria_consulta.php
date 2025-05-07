<!DOCTYPE html>
<html lang="en">
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
                    $id = $_GET['id'];

                    include("../../admin/conexao_banco.php");

                    $sql = "SELECT *
                            FROM produtos
                            WHERE categoria_id = '$id'";
                    $resultado = $conexao->query($sql);

                    foreach($resultado as $linha){
                        echo "
                            <tr>
                                <td>".$linha['id']."</td>
                                <td>".$linha['nome']."</td>
                                <td>".$linha['categoria_id']."</td>
                                <td>".$linha['preco']."</td>
                                <td>Em construção</td>
                                <td>Em construção</td>
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
</body>
</html>