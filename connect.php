<?php
//Message Vars (FEEDBACK)
    $msgContact = '';
    $msgShowContact = '';

    if(filter_has_var(INPUT_POST, 'submitContact')){
        $body = "
            Nome: "    .utf8_decode($_POST['name'])."
            E-mail: "  .$_POST['email']."
            Mensagem: "    .utf8_decode($_POST['message'])."
            ";

        $header = "From: daniel.oro@ifsc.edu.br"."\r\n".
            "Reply-To:".$_POST['email']."\r\n".
                "X=Mailer:PHP/".phpversion();

        if(mail('daniel.oro@ifsc.edu.br', utf8_decode('Feedback Connect'), $body, $header)){
            $msgContact = 'Seu feedback foi enviado com sucesso! Obrigado!';
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
    <meta name="author" content="Francisco Eduardo Gazaniga">
    <meta name="description" content="Somos uma empresa júnior de consultoria em engenharia elétrica, acesse e conheça mais sobre nossos serviços.">
    <meta name="keywords" content="ampère, ampère jr, ampère jr., engenharia, empresa júnior, empresa jr, engenharia elétrica, consultoria">

    <title>Ampère Jr. - Connect</title>

    <link rel="stylesheet" href="css/style.css">

    <link rel="shortcut icon" href="imagens/icone-aba.png">

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="menu">
        <div class="logo-container">
            <a href="https://amperejr.com.br" class="logo">
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
                <li><a href="https://amperejr.com.br/#contact" class="links-menu">Contato</a></li>
            </ul>
        </nav>
        <div class="connect-icon-content">
            <a href="#connect" class="connect-icon">
                <img src="imagens/power-connect.svg" alt="Connect Ícone">
            </a>
        </div>

        <div class="meeting-icon-content">
            <a href="https://amperejr.com.br/#meeting" class="reuniao">
                <img src="imagens/icone-reuniao.svg" alt="Ícone Reunião">
            </a>
        </div>
    </header>
    
    <section class="connect-page" id="connect">
        <div class="container">
            <div class="logo-connect">
                <div class="content">
                    <img src="imagens/logo-connect.png" alt="Logotipo Connect">
                    
                    <p>Realização:</p>
                    <div class="logos-realization">
                        <div class="logo-realization-image">
                            <img src="imagens/logo-preto.svg" alt="Logotipo Ampère Jr.">
                        </div>
                        <div class="logo-realization-image">
                            <img src="imagens/logo-ifsc.png" alt="Logotipo IFSC">
                        </div>
                    </div>
                </div>
            </div>

            <div class="connect-description">
                    <p>
                        Pensando em você, estudante, os professores do curso de Engenharia Elétrica do IFSC Câmpus Itajaí juntamente com a Ampère Jr. estão promovendo eventos repletos de discussões: o CONNECT, projeto que tem como objetivo conectar os alunos com o mercado de trabalho. Os encontros serão de forma virtual, com diversos temas relacionados à área da engenharia​, com abordagem técnica e profissionalizante e foco no mercado de trabalho. Cada seminário terá em média uma hora, com direito a certificado digital de participação. 
                    </p>
            </div>


        </div><!--container-->
    </section>

    <section class="connect2">
        <div class="container">
            <div class="palestras">
                <header>
                    <h2 class="title">Palestras do mês</h2>
                </header>

                <div class="palestras-month-content">
                    <ul class="palestras-month">
                        <li>
                            <input href="#palestras-do-mes" type="submit" class="palestras-button" id="julho" value="Julho">
                        </li>
                        <li>
                            <input href="#palestras-do-mes" type="submit" class="palestras-button" id="agosto" value="Agosto">
                        </li>
                        <li>
                            <input href="#palestras-do-mes" type="submit" class="palestras-button" id="setembro" value="Setembro">
                        </li>
                        <li>
                            <input href="#palestras-do-mes" type="submit" class="palestras-button" id="outubro" value="Outubro">
                        </li>
                        <li>
                            <input href="#palestras-do-mes" type="submit" class="palestras-button" id="novembro" value="Novembro">
                        </li>
                        <li>
                            <input href="#palestras-do-mes" type="submit" class="palestras-button" id="dezembro" value="Dezembro">
                        </li>
                    </ul>
                </div>

                <div id="palestras-do-mes"></div>
                <ul id="palestras-julho">
                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra1.png" alt="Augusto Marasca de Conto">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Quando o Software Não Pode Falhar</p>
                            <p class="palestra-green">Augusto Marasca de Conto</p>
                            <p class="palestra-red">Mestre em Engenharia Elétrica pela UFSC</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video1" type="submit" class="palestras-button" id="palestra1" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video1"></div>-->
                    <iframe class="video-palestra" id="video1" src="https://www.youtube.com/embed/xMobRS2eZ9Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra2.png" alt="Angelo Baruffi">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Análise de Dados, Big Data e Inteligência Artificial Aplicadas à Indústria e Negócios</p>
                            <p class="palestra-green">Angelo Baruffi</p>
                            <p class="palestra-red">Analista Sênior na BIX Tecnologia</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video2" type="submit" class="palestras-button" id="palestra2" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video2"></div>-->
                    <iframe class="video-palestra" id="video2" src="https://www.youtube.com/embed/SezGGOPMzB8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra3.png" alt="Rodrigo Castelan Carlson">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Veículos Autônomos</p>
                            <p class="palestra-green">Rodrigo Castelan Carlson</p>
                            <p class="palestra-red">Membro do Institute of Electrical and Electronics Engineers (IEEE)</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video3" type="submit" class="palestras-button" id="palestra3" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video3"></div>-->
                    <iframe class="video-palestra" id="video3" src="https://www.youtube.com/embed/D7AC3T6g4_0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </ul>

                <ul id="palestras-agosto">
                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra4.png" alt="Marcelo Raupp">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Negócios com a China: a experiência de quem
                            esteve 15 vezes no país asiático em consultoria
                            com empresas de diferentes segmentos</p>
                            <p class="palestra-green">Marcelo Raupp</p>
                            <p class="palestra-red">Fundador do Portal OMDN - O Mundo dos Negócios</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video4" type="submit" class="palestras-button" id="palestra4" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video4"></div>-->
                    <iframe class="video-palestra" id="video4" src="https://www.youtube.com/embed/LjcfDGTaXsU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra5.png" alt="Pedro Shioga">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Aspectos gerais do Mercado Livre de Energia</p>
                            <p class="palestra-green">Peter Hammes</p>
                            <p class="palestra-red">Coordenador Comercial da Comerc Energia</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video5" type="submit" class="palestras-button" id="palestra5" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video5"></div>--> 
                    <iframe class="video-palestra" id="video5" src="https://www.youtube.com/embed/7KroDOaFhNY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra6.png" alt="Pedro Shioga">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Como a mentalidade de startup pode ajudar
                            minha carreira</p>
                            <p class="palestra-green">Pedro Shioga</p>
                            <p class="palestra-red">Empreendedor e Pesquisador</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video6" type="submit" class="palestras-button" id="palestra6" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <iframe class="video-palestra" id="video6" src="https://www.youtube.com/embed/GnlhAfW8GP0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </ul>

                <ul id="palestras-setembro">
                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra7.png" alt="Vagner Santos da Silva">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Gestão e Liderança</p>
                            <p class="palestra-green">Vagner Santos da Silva</p>
                            <p class="palestra-red">Gerente de Compras na Pfiffner do Brasil</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video7" type="submit" class="palestras-button" id="palestra7" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video1"></div>-->
                    <iframe class="video-palestra" id="video7" src="https://www.youtube.com/embed/sWkCrbCjGCQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra8.png" alt="Jhony Carminati">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Energia Solar e as Oportunidades dessa nova Geração</p>
                            <p class="palestra-green">Jhony Carminati</p>
                            <p class="palestra-red">Founder-CEO da Impakt Energia Solar</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video8" type="submit" class="palestras-button" id="palestra8" value="Assistir">
                            </div>
                        </div>
                    </li>

                     <!--<div id="scroll-video1"></div>-->
                     <iframe class="video-palestra" id="video8" src="https://www.youtube.com/embed/zo06GyJK7DI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </ul>


                <ul id="palestras-outubro">
                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra9.png" alt="Juliano Reinert">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Sociedade 5.0: A importância e impactos de uma sociedade super inteligente</p>
                            <p class="palestra-green">Juliano Reinert</p>
                            <p class="palestra-red">Mestre em Engenharia de Produção</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video9" type="submit" class="palestras-button" id="palestra9" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video1"></div>-->
                    <iframe class="video-palestra" id="video9" src="https://www.youtube.com/embed/fTqkzfmDfDw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra10.png" alt="Ampère Jr.">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Por dentro da Ampère Jr.</p>
                            <p class="palestra-green">Francisco, Gustavo, Isabelli e Marcelo</p>
                            <p class="palestra-red">Estudantes de Engenharia Elétrica</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video10" type="submit" class="palestras-button" id="palestra10" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video1"></div>-->
                    <iframe class="video-palestra" id="video10" src="https://www.youtube.com/embed/9L-vJed_yRw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra11.png" alt="Thiago Montanari">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">As tecnologias empregadas na navegação oceânica</p>
                            <p class="palestra-green">Thiago Montanari</p>
                            <p class="palestra-red">Responsável por projetos na empresa iXblue</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video11" type="submit" class="palestras-button" id="palestra11" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video1"></div>-->
                    <iframe class="video-palestra" id="video11" src="https://www.youtube.com/embed/EKT3Mbw9ue4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </ul>


                <ul id="palestras-novembro">
                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra12.png" alt="Mariana Borges Pilot">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Engenharia e suas vertentes em estabelecimentos assistenciais de saúde</p>
                            <p class="palestra-green">Mariana Borges Pilot</p>
                            <p class="palestra-red">Engenheira Biomédica pela UFU</p>

                            <div class="palestras-video-content">
                                <input href="#scroll-video12" type="submit" class="palestras-button" id="palestra12" value="Assistir">
                            </div>
                        </div>
                    </li>

                    <!--<div id="scroll-video1"></div>-->
                    <iframe class="video-palestra" id="video12" src="https://www.youtube.com/embed/gusUpzncjmU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                <li>
                    <div class="palestra-icon">
                        <img src="imagens/palestra13.png" alt="Jucieli Baschirotto">
                    </div>
                    <div class="palestra-text">
                        <p class="palestra-blue">Entrando no mercado de trabalho</p>
                        <p class="palestra-green">Jucieli Baschirotto</p>
                        <p class="palestra-red">Mestre em Gestão de Recursos Humanos</p>

                        <div class="palestras-video-content">
                            <input href="#scroll-video13" type="submit" class="palestras-button" id="palestra13" value="Assistir">
                        </div>
                    </div>
                </li>

                <!--<div id="scroll-video1"></div>-->
                <iframe class="video-palestra" id="video13" src="https://www.youtube.com/embed/51LsI2B4w-0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </ul>

                <ul id="palestras-dezembro">
                <li>
                    <div class="palestra-icon">
                        <img src="imagens/palestra14.png" alt="Thiago Voigt">
                    </div>
                    <div class="palestra-text">
                        <p class="palestra-blue">Tecnologias da Indústria 4.0 aplicadas em equipamentos elétricos</p>
                        <p class="palestra-green">Thiago Voigt</p>
                        <p class="palestra-red">Mestre em Engenharia Elétrica</p>

                        <div class="palestras-video-content">
                            <input href="#scroll-video14" type="submit" class="palestras-button" id="palestra14" value="Assistir">
                        </div>
                    </div>
                </li>

                <!--<div id="scroll-video1"></div>-->
                <iframe class="video-palestra" id="video14" src="https://www.youtube.com/embed/zsNtyPMWm-s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </ul>
            </div>
        </div>
    </section>



    <section class="connect3">
        <div class="container">
            <div class="palestras">
                <header>
                    <h2 class="title">Saiba mais sobre a gente</h2>
                </header>
                <ul>
                    <li>
                        <div class="palestra-icon">
                            <img src="imagens/palestra10.png" alt="Ampère Jr.">
                        </div>
                        <div class="palestra-text">
                            <p class="palestra-blue">Por dentro da Ampère Jr.</p>
                            <p class="palestra-green">Francisco, Gustavo, Isabelli e Marcelo</p>
                            <p class="palestra-blue">Estudantes de Engenharia Elétrica
</p>
                            <!--<p class="palestra-red">10 de dezembro às 20h</p>-->
                        </div>
                    </li>
                </ul>
            
                <div class="button-connect">
                    <a href="https://www.youtube.com/embed/9L-vJed_yRw" class="button" target="_blank">
                        Assistir palestra
                    </a><!--button-->
                </div>
            </div>
        </div>
    </section>


    <section class="contact" id="contact">
            <div class="contact-area">
                <header class="title-align">
                    <h2 class="title">Feedback</h2><!--title-->
                </header><!--title-align-->

                <form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <div class="title-form">
                        <input class="input-contact" type="text" name="name" id="name" autocomplete="off" required>
                        <label for="name" class="label-title">
                            <span class="content-title">Nome completo</span>
                        </label>
                    </div>
                    <div class="title-form">
                        <input class="input-contact" type="email" name="email" id="email" autocomplete="off" required>
                        <label for="email" class="label-title">
                                <span class="content-title">E-mail</span>
                        </label>
                    </div>

                    <div class="message-form">
                        <textarea name="message" id="message" placeholder="Escreva suas dúvidas, críticas e sugestões sobre o projeto Connect." cols="78" rows="10" required></textarea>
                    </div>
                    <input class="button" id="enviar" name="submitContact" type="submit" value="Enviar">
                </form>

                <div class="<?php echo $msgShowContact; ?>"><?php echo $msgContact?></div>
            </div><!--contact-area-->
    </section>

    <section class="infos notification">
            <div class="infos-area">
                <header class="title-align">
                    <h2 class="title">Notificação de Palestras</h2><!--title-->
                </header><!--title-align-->
                <p>Se você quer ser notificado via e-mail quando ocorrerá a próxima palestra do Connect, preencha o formulário do link abaixo.</p>
                
                <input onclick="window.open('https://forms.gle/ffHhHAg8gBiAQJWN8');" type="button" class="button-notification" value="Quero ficar por dentro!">
                
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