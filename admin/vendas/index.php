<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendas</title>
</head>
<body>
    <?php 
        include("../conexao_banco.php");
        $sql= "SELECT 
                    v.data_venda,
                    SUM(vi.quantidade) AS total_produtos_vendidos
                FROM 
                    vendas_itens vi
                JOIN 
                    vendas v ON vi.venda_id = v.id
                GROUP BY 
                    v.data_venda
                ORDER BY 
                    v.data_venda
                ";
        $resultado = $conexao->query($sql);

        foreach($resultado as $linha){
            echo "
                <tr>
                    <td>" . $linha['data_venda'] . "</td>
                    <td>". $linha['total_produtos_vendidos'] ."</td>
                    <td>
                    <a href='/CRUD_LPWEBI_TRABALHO/admin/categorias/categoria_delete.php?nome=" . $linha['nome'] . "'>APAGAR</a>
                    </td>
                </tr>";
        }
    
    ?>
    <div>
        <button onclick="javascript:document.location.href='/CRUD_LPWEBI_TRABALHO/admin/dashboard.php'">VOLTAR</button>
    </div>
</body>
</html>