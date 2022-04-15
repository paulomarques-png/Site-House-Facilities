<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" Content="no-cache">
    <meta http-equiv="Pragma" Content="no-cache">
    <meta http-equiv="Expires" Content="0">
    <title>. : House Facilities : . Trabalhe na HF</title>
    <link rel="stylesheet" href="./style.css?<?php echo time();?>">
    <link rel="stylesheet" href="./trabalhe-style.css?<?php echo time();?>">
</head>

<body id="corpo">
    
    <?php include 'includes/header.php';?>

    <main>
        <figure id="media">
            <picture>
                <source media="(max-width: 580px)" srcset="imgs/pag-trabalhe-580.png">

                <source media="(max-width: 780px)" srcset="imgs/pag-trabalhe-780.png">

                <source media="(max-width: 980px)" srcset="imgs/pag-trabalhe-980.png">

                <img src="imgs/pag-trabalhe.png"
                    alt="Imagem complementar para texto institucional - Recepcionista no balcão de atendimento">
            </picture>

            <figcaption>
                <h1>FAÇA PARTE <br>DO NOSSO TIME</h1>
                <p class="txt">Cadastre-se em nosso banco de talentos, nos empenhamos em manter nosso pessoal motivado com salários justos e compatível com o mercado.</p>
            </figcaption>
        </figure>

        <section id="trabalhe">
            <article>
                <header>
                    <h1>HOUSE FACILITIES</h1>
                    <h2>HÁ MAIS DE 4 ANOS TORNANDO SUAS CONQUISTAS EM NOSSAS CONQUISTAS</h2>
                </header>
                <p>Trabalhamos com profissionais especializados em atrair e reter os melhores talentos, por meio de atividades de recrutamento e seleção,  treinamento, certificação e aprimoramento profissional.<br><br>Possuímos um intenso programa de desenvolvimento e reconhecimento profissional, incluindo a construção e disseminação de processos operacionais (POPs), programas de desenvolvimento individual (PDI), avaliações de desempenho, dentre outros.<br><br>Além disso, utilizamos os mais modernos recursos de e-learning e  webconferências, proporcionando aos nossos colaboradores acesso a conteúdos de qualidade, numa linguagem acessível e interessante, de modo a transformar conhecimento em práticas que agreguem valor aos nossos serviços e qualidade de vida ao nosso pessoal.​</p>
            </article>
            <form action="" id="formulario">
                    <label for="f-nome">NOME COMPLETO</label>
                    <input type="text" id="f-nome" name="f-nome" placeholder="Ex: José da Silva Gomes" required="required">
                    
                    <label for="f-email">E-MAIL</label>
                    <input type="email" id="f-email" name="f-email" placeholder="Ex: josegomes@provedor.com.br" required="required">
                
                    <label for="f-mensagem">MENSAGEM</label>
                    <textarea name="mensagem" id="f-mensagem" placeholder="Escreva aqui sua mensagem" required="required"></textarea>
    
                    <input type="submit" name="acao" value="ENVIAR">
            </form>
            
        </section>

    </main>
    
    <?php include 'includes/footer.php';?>

    <script src="./script.js"></script>
</body>

</html>