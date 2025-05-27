<?php 

    include("../conexao_banco.php");    

    $venda_id = $_GET['venda_id'] ?? null;

    if(!$venda_id){
        echo " Id da venda inválido";
        exit;
    }

    // Exclui itens da venda primeiro
    $sql_itens = "DELETE FROM
                    vendas_itens
                WHERE
                    venda_id = '$venda_id'
    ";
    if(!$conexao->query($sql_itens)){
        echo "Erro ao excluir itens da venda: " . $conexao->error;
        exit;
    }

    // Depois exclui a venda
    $sql_venda = "DELETE FROM
                vendas
            WHERE
                id = $venda_id
            
    ";
    if($conexao->query($sql_venda)){
        header("location:/CRUD_LPWEBI_TRABALHO/admin/vendas/index.php");
        exit;
    }else {
        echo "Erro ao excluir venda: " . $conexao->error;
    }
?>