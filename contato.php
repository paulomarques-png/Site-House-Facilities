<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" Content="no-cache">
    <meta http-equiv="Pragma" Content="no-cache">
    <meta http-equiv="Expires" Content="0">
    <title>. : House Facilities : . Contato</title>
    <link rel="stylesheet" href="./style.css?<?php echo time();?>">
    <link rel="stylesheet" href="./contato-style.css?<?php echo time();?>">
</head>

<body id="corpo">
    
<?php include 'includes/header.php';?>

    <main>
        <figure id="media">
            <picture>
                <source media="(max-width: 580px)" srcset="imgs/pag-contato-580.png">

                <source media="(max-width: 780px)" srcset="imgs/pag-contato-780.png">

                <source media="(max-width: 980px)" srcset="imgs/pag-contato-980.png">

                <img src="imgs/pag-contato.png"
                    alt="Imagem complementar para texto institucional - Recepcionista no balcão de atendimento">
            </picture>

            <figcaption>
                <h1>FALE CONOSCO</h1>
                <p class="txt">Como podemos te ajudar? Caso tenha alguma dúvida, sugestão ou reclamação anônima, entre em contato através dos nossos canais de atendimento ou use o formulário abaixo.</p>
            </figcaption>
        </figure>
        
        <h1 id="titlesecoes">ENTRE EM CONTATO COM A HOUSE FACILITIES</h1>

        <section id="dados">
            <ul>
                <li class="dado1">
                    <img src="/imgs/icon-tel-ns.svg" alt="">
                    <h1>Telefone</h1>
                    <p>11 4381-7862<br>11 97103-8045</p>
                </li>
                <li class="dado2">
                    <img src="/imgs/icon-whats-ns.svg" alt="">
                    <h1>WhatsApp</h1>
                    <p>11 95432-7532</p>
                </li>
                <li class="dado3">
                    <img src="/imgs/icon-mail-ns.svg" alt="">
                    <h1>E-mail</h1>
                    <p>contato@ housefacilieites.com.br</p>
                </li>
                <li class="dado4">
                    <img src="/imgs/icon-maps-ns.svg" alt="">
                    <h1>Onde estamos?</h1>
                    <p>Avenida Paulista, 1765 - CJ72,<br>
                        Bela Vista, São Paulo - SP<br>
                        CEP:01311-200</p>
                </li>
            </ul>
        </section>
        
        <h1 id="titlesecoes">OU ENVIE UMA MENSAGEM USANDO NOSSO FORMULÁRIO!</h1>

        <form id="formulario" action="enviar.php" method="post">
            <span>
                <label for="f_nome">NOME COMPLETO</label>
                <input type="text" id="f_nome" name="f_nome" placeholder="Ex: José da Silva Gomes" required="required">
                <label for="f_tel">TELEFONE</label>
                <input type="tel" id="f_tel" name="f_tel" placeholder="Ex: 11978956323" required="required">
                
                <label for="f_email">E-MAIL</label>
                <input type="email" id="f_email" name="f_email" placeholder="Ex: josegomes@provedor.com.br" required="required">
            </span>

            <span>
                <label for="f_mensagem">MENSAGEM</label>
                <textarea name="f_mensagem" id="f_mensagem" placeholder="Escreva aqui sua mensagem" required="required"></textarea>

                <input type="submit" name="acao" value="ENVIAR">
            </span>
        </form>

    </main>
    
    <?php include 'includes/footer.php';?>

    <script src="./script.js"></script>
</body>

</html>