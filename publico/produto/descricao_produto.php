<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/CRUD_LPWEBI_TRABALHO/assets/css/estilo.css">
</head>
<body>
    
</body>
</html>
<?php 
    $produto = $_GET['produto'] ?? null;
    $id = $_GET['id_categoria'] ?? null;

    if($produto == "boneca"){
        echo "
            <div>
                <section>
                    <p><strong>Boneca Miyo Menina Bebês Fofinhos 2247 - Cotiplás</strong>
                    <br/>
                    <br/>
                    <strong>DESCRIÇÃO DO PRODUTO:</strong>
                    <br/>
                    Uma linda boneca menina. Fofinha e cheirosa para a criança brincar. Suas roupinhas parecem de um bebê de verdade. Ela acompanha uma linda roupinha e faixinha exclusiva. A criançada vai adorar. É super fofa, delicada, gostosa de abraçar e apertar, e compõe um delicioso cheirinho de bebê perfumado. Com o alto padrão de qualidade característico das bonecas da Cotiplás. Estimula a interação entre pais e filhos, coordenação motora, criatividade e imaginação da criança.
                    <br/>
                    <strong>CARACTERÍSTICAS TÉCNICAS:</strong>
                    <br/>
                    Conteúdo da Embalagem: 01 boneca miyo.
                    <br/>
                    Dimensões Aproximadas do Produto: 47cm x 10cm x 34cm (Altura x Largura x Comprimento/Profundidade).
                    <br/>
                    Dimensões Aproximadas da Embalagem: 38cm x 20cm x 28cm (Altura x Largura x Comprimento/Profundidade).
                    <br/>
                    Material/Composição: Tecido.
                    <br/>
                    Idade Mínima Recomendada: A partir de 03 anos.
                    <br/>
                    Participantes: A partir de 1 pessoa.
                    <br/>
                    Marca: COTIPLAS.</p>
                </section>
            </div>
        ";
    }else{
        echo "<p><strong>Este produto não contém descrição.</strong></p>";
    }

    echo "<a href='javascript:history.go(-1)' class='btn btn-secondary'>VOLTAR</a>";
?>