<?php 

    include("../conexao_banco.php");

    $id = @$_GET['id'] ?? null;

    if (!$id) {
        echo "ID da categoria inválido.";
        exit;
    }

    $sql_verifica = "SELECT 
                        1
                     FROM 
                        vendas_itens vi
                     JOIN 
                        produtos p 
                    ON 
                        vi.produto_id = p.id
                     WHERE 
                        p.categoria_id = '$id'
                     LIMIT 1";

    $resultado = $conexao->query($sql_verifica);
    
    if ($resultado->num_rows > 0) {
        echo "<script>alert('Não é possível excluir: categoria está associada a vendas.'); window.location.href='categoria_consulta.php';</script>";
        exit;
    }

    $sql = "DELETE FROM 
                categorias 
            WHERE 
                id = '$id'";
    
    if ($conexao->query($sql) === TRUE) {
        header('Location: categoria_consulta.php');
        exit;
    } else {
        echo "Erro ao excluir: " . $conexao->error;
    }
?>