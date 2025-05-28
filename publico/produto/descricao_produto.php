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
                    <p>Uma linda boneca menina. Fofinha e cheirosa para a criança brincar. Suas roupinhas parecem de um bebê de verdade. Ela acompanha uma linda roupinha e faixinha exclusiva. A criançada vai adorar. É super fofa, delicada, gostosa de abraçar e apertar, e compõe um delicioso cheirinho de bebê perfumado. Com o alto padrão de qualidade característico das bonecas da Cotiplás. Estimula a interação entre pais e filhos, coordenação motora, criatividade e imaginação da criança.</p>
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
    }else if($produto == "Fundação"){
        echo "
            <div>
                <p><strong>Livro Fundação</strong></p>
                <br/>
                <strong>DESCRIÇÃO DO PRODUTO</strong>
                <br/>
                <br/>
                <strong>Sobre o Autor</strong>
                <p>Isaac Asimov ou O Bom Doutor, como era conhecido, nasceu em Petrovich, Rússia, em 1920. Escreveu e editou mais de 500 livros, entre os quais O fim da eternidade, Os próprios deuses e a serie Fundação. Sua obra foi inspiração para o universo cinematográfico. Também fez sucesso com tramas de detetives e mistério, livros didáticos, enciclopédias e textos autobiográficos. Morreu em Nova York em 1992.</p>
                <br/>
                <strong>DETALHES DO PRODUTO</strong>
                <br/>
                <br/>
                Editora: Editora Aleph
                <br/>
                Data da publicação: 4 setembro 2020
                <br/>
                Edição: 2ª
                <br/>
                Idioma: Português
                <br/>
                Número de páginas: 320 páginas
                <br/>
                ISBN-10: 8576574837
                <br/>
                ISBN-13: 978-8576574835
                <br/>
                Peso do produto: 390 g
                <br/>
                Idade de leitura: 14 anos e acima
                <br/>
                Dimensões: 20.8 x 13.8 x 2 cm
            </div>";
    }elseif($produto == "hotweels"){
        echo "
            <div>
                <strong>Carrinho Hotwheels</strong>
                <br/>
                <br/>
                <strong>Descrição do produto</strong>
                <br/>
                <br/>
                <p>A Hot Wheels desafia os limites desde 1968, criando com paixão os mais legais e insanos carros e pistas para a diversão sem limites. Hoje, a linha oferece variedade e novidade com 400 carros novos a cada ano! Os carros são segmentados em 30 minicoleções diferentes. Cada mini coleção inclui veículos temáticos que vão desde muscle cars, carros esportivos, carros de corrida, caminhões e roadsters em alta. Os veículos da HW são os favoritos dos colecionadores e dos fãs de corrida de todas as idades.</p>
            </div>";
    }elseif($produto == "arroz"){
        echo "
            <div>
                <strong>Arroz</strong>
                <br/>
                <br/>
                <strong>Descrição do produto</strong>
                <br/>
                <br/>
                <p>O Arroz passa por um tratamento hidrotérmico (água fervente), que consiste em cozinhar parcialmente os grãos com casca, desta forma parte das vitaminas e minerais presentes no farelo migram para o interior do grão, aumentando o seu valor nutritivo e concentrando vitaminas do complexo B. Este processo faz com que os grãos fiquem mais inteiros e sempre soltinhos após o preparo.</p>
            </div>";
        
    }elseif($produto == "bolacha"){
        echo "
            <div>
                <strong>Bolacha</strong>
                <br/>
                <br/>
                <strong>DESCRIÇÃO</strong>
                <br/>
                <br/>
                <p>O biscoito vai te surpreender! É feito com ingredientes selecionados, tem casquinha super crocante e um delicioso recheio cremoso. A família inteira vai curtir!</p>
            </div>
        ";
    }elseif($produto == "palheta"){
        echo "
            <div>
                <strong>Palheta de Carro</strong>
                <br/>
                <br/>
                <strong>DESCRIÇÃO DO PRODUTO</strong>
                <br/>
                <br/>
                <p>Descubra a diferença com o jogo de Palhetas Bosch Aerofit SD para limpador de para-brisa dianteiro automotivo. Projetada com tratamento de grafite na borracha, esta palheta garante uma limpeza uniforme e suave, que assegura melhor visibilidade até mesmo em condições de chuva intensa. Seu sistema Double Lock promove uma instalação mais fácil e segura. O design otimizado assegura uma operação mais silenciosa, oferecendo conforto e tranquilidade durante a viagem. Além de maior durabilidade e embalagem moderna, o design sem partes metálicas expostas evita corrosão ou danos à pintura. <strong>*</strong>Confirme facilmente a compatibilidade com o seu veículo no site Bosch Wiper Blades.</p>
            </div>
        ";
    }elseif($produto == "mesa"){
        echo "
            <div>
                <strong>Mesa</strong>
                <br/>
                <br/>
                <strong>DESCRIÇÃO DO PRODUTO</strong>
                <br/>
                <br/>
                <p>A Mesa é empilhável, prática e muito segura.
                Contém furo central para guarda sol.
                <br/>
                Composição: Plástico
                <br/>
                Quantidade de peças: 01
                <br/>
                Cor: Preta
                <br/>
                Dimensões: 70cm x 70cm x 70cm (C-L-A)</p>
            </div>
        ";
    }else{
        echo "<p><strong>Este produto não contém descrição.</strong></p>";
    }

    echo "<br/><a href='javascript:history.go(-1)' class='btn btn-secondary'>VOLTAR</a>";
?>