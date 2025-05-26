<?php 

    include("../conexao_banco.php");

    $produto_id = @$_GET['id_produto'] ?? null;

    if (!$produto_id) {
        echo "ID do produto inválido.";
        exit;
    }

    $sql_verifica = "SELECT 
                        * 
                    FROM 
                        vendas_itens 
                    WHERE 
                        produto_id = '$produto_id'";
    $resultado = $conexao->query($sql_verifica);

    if ($resultado->num_rows > 0) {
        echo "<script>alert('Não é possível excluir: produto está associado a vendas.'); window.location.href='produto_consulta.php';</script>";
        exit;
    }

    $sql = "DELETE 
            FROM 
                produtos 
            WHERE 
                id = '$produto_id'";

    if ($conexao->query($sql) === TRUE) {
        header('Location: produto_consulta.php');
        exit;
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
?>
