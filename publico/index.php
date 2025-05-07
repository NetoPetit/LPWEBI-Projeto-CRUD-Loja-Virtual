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
        <h3>Escolha a categoria do produto</h3>
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
</body>
</html>