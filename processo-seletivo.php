<?php
    //Message Vars (CONTATO)
    $msgContact = '';
    $msgShowContact = '';

    if(filter_has_var(INPUT_POST, 'submitContact')){
        $body = "
            Nome: "    .utf8_decode($_POST['name'])."
            E-mail: "  .$_POST['email']."
            Assunto: "     .utf8_decode($_POST['subject'])."
            Mensagem: "    .utf8_decode($_POST['message'])."
            ";

        $header = "From: contato@amperejr.com.br"."\r\n".
            "Reply-To:".$_POST['email']."\r\n".
                "X=Mailer:PHP/".phpversion();

        if(mail('contato@amperejr.com.br', utf8_decode('Mensagem Contato'), $body, $header)){
            $msgContact = 'Sua mensagem foi enviada com sucesso!';
            $msgShowContact = 'msg-success';
            echo "<script>location.href='#contact'</script>";
        }
    }
?>

<!DOCTYPE html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-150758273-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-150758273-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Ampère Jr. - Processo Seletivo</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="imagens/icone-aba.png">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="menu">
        <div class="logo-container">
            <a href="https://amperejr.com.br/" class="logo">
                <img src="imagens/logo-preto.svg" alt="Logo Ampère Jr.">
            </a>
        </div>
        
        <div class="burger"> <!-- The burger for the small window width -->
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        
        <nav id="links-container">
            <ul class="menu-options">
                <li><a href="https://amperejr.com.br/" class="links-menu">Início</a></li>
                <li><a href="sobre" class="links-menu">Sobre</a></li>
                <li><a href="https://amperejr.com.br/#services" class="links-menu">Serviços</a></li>
                <li><a href="processo-seletivo" class="links-menu">Processo Seletivo</a></li>
                <li><a href="#contact" class="links-menu">Contato</a></li>
            </ul>
        </nav>
        <div class="connect-icon-content">
            <a href="connect" class="connect-icon">
                <img src="imagens/power-connect.svg" alt="Connect Ícone">
            </a>
        </div>

        <div class="meeting-icon-content">
            <a href="#meeting" class="reuniao">
                <img src="imagens/icone-reuniao.svg" alt="Ícone Reunião">
            </a>
        </div>
    </header>

    <section class="processo-seletivo" id="processo-seletivo">
        <header class="title-align">
            <h2 class="title">Processo Seletivo</h2><!--title-->
        </header>

        <div class="container">
            <div class="icone-seletivo">
                <img src="imagens/icone-seletivo.svg" alt="Ícone Processo Seletivo">
            </div>
        </div>

        <div class="container-seletivo">
            <div id="texto-paginas-secundarias">
                <!--<p>
                    As inscrições do Processo Seletivo Semestral para os alunos da Engenharia Elétrica estão abertas até o dia 09/09, é a sua chance de fazer parte da nossa equipe. Sendo selecionado você entrará como trainee e após 2 meses de experiência, se tornará um membro efetivo da Ampère Jr.
                </p>-->

                <h3 class="selecionados-title">
                    Resultado do Processo Seletivo para Estágio (Treinamento Projeto Elétrico)
                </h3>

                <p>Amanda Lisboa Pereira</p>
                <p>Mariana Charão da Fonseca</p>
                <p>Matheus D'Amaral Gomes</p>

<!--
                <p>
                    Não há processo seletivo ocorrendo no momento :( </br>
                    Fique atento às nossas redes sociais para ficar informado sobre uma nova seletiva!
                </p>-->
            </div>

            <!--
            <input onclick="window.open('https://drive.google.com/file/d/1MzgxZoxmmCwl_-T2CEzCO0SoRqA1aqFc/view?usp=sharing');" type="button" class="button-seletivo" value="Edital">
            <input onclick="window.open('https://docs.google.com/forms/d/e/1FAIpQLSef4HpC3ubjjuv_oJHPSFgtOmfJ3PG1u-bSGIGuhIRzaBcqRA/viewform');" type="button" class="button-seletivo" value="Quero estagiar na Ampère">
       -->
        </div>
        
    </section>

    <section class="contact" id="contact">
            <div class="contact-area">
                <header class="title-align">
                    <h2 class="title">Contato</h2><!--title-->
                </header><!--title-align-->

                <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="title-form">
                        <input class="input-contact" type="text" name="name" id="name" autocomplete="off" required>
                        <label for="name" class="label-title">
                            <span class="content-title">Nome</span>
                        </label>
                    </div>
                    <div class="title-form">
                        <input class="input-contact" type="email" name="email" id="email" autocomplete="off" required>
                        <label for="email" class="label-title">
                                <span class="content-title">E-mail</span>
                        </label>
                    </div>
                    <div class="title-form">
                        <input class="input-contact" type="text" name="subject" id="subject" autocomplete="off" required>
                        <label for="subject" class="label-title">
                                <span class="content-title">Assunto</span>
                        </label>
                    </div>
                    <div class="message-form">
                        <textarea name="message" id="message" placeholder="Mensagem" cols="78" rows="10" required></textarea>
                    </div>
                    <input class="button" id="enviar" name="submitContact" type="submit" value="Enviar">
                </form>

                <div class="<?php echo $msgShowContact; ?>"><?php echo $msgContact?></div>
            </div><!--contact-area-->
    </section>

    <section class="infos">
            <div class="infos-area">
                <header class="title-align">
                    <h2 class="title">Endereço</h2><!--title-->
                </header><!--title-align-->
                <p>Av. Ver. Abrahão João Francisco, 3899 Ressacada, Itajaí - SC, 88307-303</p>
            </div>
            
            <div class="infos-area">
                <header class="title-align">
                    <h2 class="title">E-mail</h2><!--title-->
                </header><!--title-align-->
                <p>contato@amperejr.com.br</p>
            </div>

            <div class="infos-area">
                <header class="title-align">
                    <h2 class="title">Redes Sociais</h2><!--title-->
                </header><!--title-align-->
                <ul>
                    <li>
                        <a href="https://www.instagram.com/amperejr/" target="_blank">Instagram</a>
                    </li>
                    <li>
                        <a href="http://facebook.com.br/amperejrifsc/" target="_blank">Facebook</a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/ampere-jr/" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </div>
    </section>

    <footer>
        <div class="container">
            <div id="secao-footer">
            <div id=logo class="links-footer">
                <div id="logo-footer">  <!-- This div adjust the size of the logo inside the col of div logo-container -->
                    <a class="logo-footer" href="https://amperejr.com.br/">
                    <img src="imagens/logo-branco.svg" alt="Logotipo Ampère Jr.">
                    </a>

                    <p>Fundada em 2019 pelos alunos da Engenharia Elétrica do Instituto Federal de Santa Catarina, Câmpus Itajaí.</p>
                </div>

                <div id="icones" class="links-footer">
                        <a href="https://www.instagram.com/amperejr" target="_blank" id="instagram" title="Instagram">
                            <span class="instagram"></span>
                        </a>

                        <a href="http://facebook.com.br/amperejr" target="_blank" id="facebook" title="Facebook">
                            <span class="facebook"></span>
                        </a>
                        <a href="https://www.linkedin.com/company/ampere-jr/" target="_blank" id="linkedin" title="Linkedin">
                            <span class="linkedin"></span>
                        </a>
                </div>
            </div>

                <div class="links-footer center-links-footer">
                <h4>Nossos Serviços</h4>
                <div class="line"></div>
                <ul>
                    <li>
                        <a href="eficiencia-energetica">Eficiência Energética</a>
                    </li>
                    <li>
                        <a href="estudo-tecnico">Estudo Técnico</a>
                    </li>
                    <li>
                        <a href="projeto-eletrico">Projeto Elétrico</a>
                    </li>
                </ul>
                </div><!--links-footer-->

                <div class="links-footer center-links-footer">
                    <h4>Contato</h4>
                    <div class="line"></div>
                    <ul>
                        <span class="location-icon"></span>
                        <span class="email-icon"></span>
                        <li>
                            <a>Av. Ver. Abrahão João Francisco, 3899 Ressacada, Itajaí - SC, 88307-303</a>
                        </li>
                        <li>
                            <a>contato@amperejr.com.br</a>
                        </li>
                    </ul>
                </div><!--links-footer-->
            </div><!--secao-links-footer-->
        </div><!--container-->

        <div class="copyright">
            <div class="text-1">&copy; 2020 Todos os Direitos Reservados à Empresa Ampère Jr.</div>
            <div class="text-2">Desenvolvido por: <a href="https://www.linkedin.com/in/franciscogazaniga/" target="blank">Francisco Eduardo Gazaniga</a></div>
        </div>
    </footer>

    <section class="footer-menu-mobile">
        <div class="bar">
            <div class="menu-option">
                <a href="connect" class="connect-icon">
                    <img src="imagens/power-connect.svg" alt="Connect Ícone">
                </a>
                <p>Connect</p>
            </div>

            <div class="menu-option">
                <a href="https://amperejr.com.br/#services" class="ampere-services">
                    <img src="imagens/icone-aba.png" alt="Ampère Ícone">
                </a>
                <p>Nossos Serviços</p>
            </div>

            <div class="menu-option">
                <a href="https://amperejr.com.br/#meeting" class="reuniao">
                    <img src="imagens/icone-reuniao.svg" alt="Ícone Reunião">
                </a>
                <p>Agende uma reunião</p>
            </div>
        </div>
    </section>

    <div class="top-button" id="back"> <!-- botão para voltar ao topo da página-->
        <a class="top-button-icon">
            <img src="imagens/button-top.svg" alt="Botão Voltar ao Topo">
        </a>
    </div>

    <!-- jQuery -->
    <script src="js/vendors/jquery.min.js"></script>
    <!-- Author JavaScript -->
    <script src="js/style.js"></script>
</body>

</html>