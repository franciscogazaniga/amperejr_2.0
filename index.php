<?php
    //Message Vars (AGENDE UMA REUNIÃO)
    $msg = '';
    $msgShow = '';

    if(filter_has_var(INPUT_POST, 'submit')){
        $body = "
            Nome: "    .utf8_decode($_POST['name'])."
            E-mail: "  .$_POST['email']."
            Telefone: "    .$_POST['phone']."
            Melhor horario para contato: " .$_POST['hour-form']."
            Tomou conhecimento da empresa via: " .$_POST['find-form']."
            Assunto: "     .utf8_decode($_POST['subject'])."
            Mensagem: "    .utf8_decode($_POST['message'])."
            ";

        $header = "From: contato@amperejr.com.br"."\r\n".
            "Reply-To:".$_POST['email']."\r\n".
                "X=Mailer:PHP/".phpversion();

        if(mail('contato@amperejr.com.br', utf8_decode('Solicitação de Orçamento'), $body, $header)){
            $msg = 'Seu orçamento foi enviado com sucesso!';
            $msgShow = 'msg-success';
            echo "<script>location.href='#meeting'</script>";
        }
    }

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
<html lang="pt-BR">
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Francisco Eduardo Gazaniga">
    <meta name="description" content="Somos uma empresa júnior de consultoria em engenharia elétrica, acesse e conheça mais sobre nossos serviços.">
    <meta name="keywords" content="ampère, ampère jr, ampère jr., engenharia, empresa júnior, empresa jr, engenharia elétrica, consultoria">
    
    <title>Ampère Jr.</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="imagens/icone-aba.png">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="menu">
        
        <div class="logo-container">
            <a href="#home" class="logo">
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
                <li><a href="#home" class="links-menu">Início</a></li>
                <li><a href="#about" class="links-menu">Sobre</a></li>
                <li><a href="#services" class="links-menu">Serviços</a></li>
                <li><a href="processo-seletivo" class="links-menu">Processo Seletivo</a></li>
                <li><a href="#contact" class="links-menu">Contato</a></li>
            </ul>
        </nav>
        <div class="connect-icon-content">
            <a href="#connect" class="connect-icon">
                <img src="imagens/power-connect.svg" alt="Connect Ícone">
            </a>
        </div>

        <div class="meeting-icon-content">
            <a href="#meeting" class="reuniao">
                <img src="imagens/icone-reuniao.svg" alt="Ícone Reunião">
            </a>
        </div>
    </header>

    <main class="principal" id="home">
        <span class="background"></span>

        <div class="principal-container">
            <span class="principal-logo"></span><!--principal-logo-->

            <div class="principal-text">
                <h2>Empresa Júnior de Engenharia Elétrica do Instituto Federal de Santa Catarina Câmpus Itajaí</h2>
            </div><!--principal-text-->

            <a href="#meeting" class="button">
                Agende uma Reunião
            </a><!--button-->
        </div><!--principal-container-->
    </main><!--principal-->

    <section class="about" id="about">
        <header class="title-align">
            <h2 class="title">Sobre Nós</h2><!--title-->
        </header><!--title-align-->

        <div class="container">
            <div class="members">
                <div class="image-members">
                </div>

                <div class="text-members">
                    <p>
                        A Ampère Jr. é uma empresa fundada em 2019 por alunos da Engenharia
                        Elétrica do Instituto Federal de Santa Catarina, do Câmpus de Itajaí. Nossa
                        empresa júnior foi criada pensando em proporcionar aos estudantes do
                        curso de engenharia elétrica uma vivência com o ramo empresarial,
                        integrando-os com a comunidade através de consultoria e
                        soluções tecnológicas.
                    </p>
                    <div class="button-about-home">
                        <a href="sobre" class="button">
                            Saiba mais sobre nós
                        </a><!--button-->
                    </div><!--button-about-home-->
                </div><!--text-->
            </div><!--members-->

        </div><!--container-->
    </section>

    <main class="services" id="services">
        <header class="title-align">
            <h2 class="title">Nossos Serviços</h2><!--title-->
        </header><!--title-align-->

        <div class="center" id="services-circles">
            <div id="service-1">
                <a href="estudo-tecnico" class="service-circle">
                    <span class="estudo"></span>
                </a>
                <h3 class="service-title">Estudo Técnico</h3>
            </div><!--#service-1-->

            <div id="service-2">
                <a href="projeto-eletrico" class="service-circle">
                    <span class="projeto"></span>
                </a>
                <h3 class="service-title">Projeto Elétrico</h3>
            </div><!--#service-2-->

            <div id="service-3">
                <a href="eficiencia-energetica" class="service-circle">
                    <span class="eficiencia"></span>
                </a>
                <h3 class="service-title">Eficiência Energética</h3>
            </div><!--#service-3-->
        </div><!--center-->
    </main><!--services-->

    <section class="meeting" id="meeting">
        <header class="title-align">
            <h2 class="title black">Agende uma Reunião</h2><!--title-->
        </header><!--title-align-->

        <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="title-form">
                <input type="text" name="name" id="name" autocomplete="off" required>
                <label for="name" class="label-title">
                    <span class="content-title">Nome</span>
                </label>
            </div>
            <div class="title-form">
                <input type="email" name="email" id="email" autocomplete="off" required>
                <label for="email" class="label-title">
                        <span class="content-title">E-mail</span>
                </label>
            </div>
            <div class="title-form">
                <input type="tel" name="phone" id="phone" autocomplete="off" required>
                <label for="phone" class="label-title">
                        <span class="content-title">Telefone</span>
                </label>
            </div>
            <div class="title-form hour-form">
                <span class="arrow"></span>
                <select name="hour-form" id="hour">
                    <option value="1">Manhã</option>
                    <option value="2">Tarde</option>
                    <option value="3">Noite</option>
                </select>
                <label for="hour" class="label-title label-hour">
                        <span class="content-title content-hour">Selecione o melhor horário para contato</span>
                </label>
            </div>
            <div class="title-form find-form">
                <span class="arrow"></span>
                <select name="find-form" id="find">
                    <option value="1">Indicação de uma empresa</option>
                    <option value="2">Indicação de uma empresa júnior</option>
                    <option value="3">Indicação de amigo/conhecido</option>
                    <option value="4">Facebook</option>
                    <option value="5">Google</option>
                    <option value="6">Instagram</option>
                    <option value="7">Linkedin</option>
                    <option value="8">Através de outro meio</option>
                </select>
                <label for="find" class="label-title label-find">
                        <span class="content-title content-find">Conte como nos conheceu</span>
                </label>
            </div>
            <div class="title-form">
                <input type="text" name="subject" id="subject" autocomplete="off" required>
                <label for="subject" class="label-title">
                        <span class="content-title">Assunto</span>
                </label>
            </div>
            <div class="message-form">
                <textarea name="message" id="message" placeholder="Mensagem" cols="78" rows="10" required></textarea>
            </div>
            <input class="button" id="enviar" name="submit" type="submit" value="Enviar">

            <div class="<?php echo $msgShow; ?>"><?php echo $msg?></div>
        </form>
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
    
    <section class="connect" id="connect">
        <div class="logo-connect">
            <div class="content">

                <img src="imagens/logo-connect.png" alt="Logotipo Connect">

                <div class="button-connect-home">
                    <a href="connect" class="button">
                        Saiba mais
                    </a><!--button-->
                </div>
            </div>
        </div>

        <div class="palestras">
            <header>
                <h2 class="title">Palestras Recentes</h2>
            </header>
            <ul>
                <li>
                    <div class="palestra-icon">
                        <img src="imagens/palestra12.png" alt="Mariana Borges Pilot">
                    </div>
                    <div class="palestra-text">
                        <p class="palestra-blue">Engenharia e suas vertentes em estabelecimentos assistenciais de saúde</p>
                        <p class="palestra-green">Mariana Borges Pilot</p>
                        <p class="palestra-green">Engenheira Biomédica pela UFU</p>
                        <p class="palestra-red">12 de novembro às 20h</p>
                    </div>
                </li>
                <li>
                    <div class="palestra-icon">
                        <img src="imagens/palestra13.png" alt="Jucieli Baschirotto">
                    </div>
                    <div class="palestra-text">
                        <p class="palestra-blue">Entrando no mercado de trabalho</p>
                        <p class="palestra-green">Jucieli Baschirotto</p>
                        <p class="palestra-green">Mestre em Gestão de Recursos Humanos</p>
                        <p class="palestra-red">26 de novembro às 20h</p>
                    </div>
                </li>
                <li>
                    <div class="palestra-icon">
                        <img src="imagens/palestra14.png" alt="Thiago Voigt">
                    </div>
                    <div class="palestra-text">
                        <p class="palestra-blue">Tecnologias da Indústria 4.0 aplicadas em equipamentos elétricos</p>
                        <p class="palestra-green">Thiago Voigt</p>
                        <p class="palestra-green">Mestre em Engenharia Elétrica</p>
                        <p class="palestra-red">10 de dezembro às 20h</p>
                    </div>
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
                <a href="#connect" class="connect-icon">
                    <img src="imagens/power-connect.svg" alt="Connect Ícone">
                </a>
                <p>Connect</p>
            </div>

            <div class="menu-option">
                <a href="#services" class="ampere-services">
                    <img src="imagens/icone-aba.png" alt="Ampère Ícone">
                </a>
                <p>Nossos Serviços</p>
            </div>

            <div class="menu-option">
                <a href="#meeting" class="reuniao">
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