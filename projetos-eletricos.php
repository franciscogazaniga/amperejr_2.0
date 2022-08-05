<?php
    //Message Vars
    $msg = '';
    $msgClass = '';

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
            $msgClass = 'alert-success';
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

    <title>Ampère Jr. - Projetos Elétricos</title>

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
                <li><a href="#services" class="links-menu">Serviços</a></li>
                <li><a href="processo-seletivo" class="links-menu">Processo Seletivo</a></li>
                <li><a href="https://amperejr.com.br/#contact" class="links-menu">Contato</a></li>
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

    <section class="service-page">
        <header class="title-align">
            <h2 class="title">Projeto Elétrico</h2><!--title-->
        </header><!--title-align-->

        <div class="container">
            <header class="titulo-paginas-secundarias">
                <h2 class="heading">Por que requisitar um Projeto Elétrico?
                </h2>
            </header>
                
            <div class="servico-conteudo">
                <div class="texto-paginas-secundarias">
                    <p>
                        Com um projeto elétrico de qualidade, você poderá ter uma economia considerável na compra dos materiais e equipamentos da instalação elétrica. Uma instalação elétrica adequada, garante que os disjuntores sejam selecionados corretamente permitindo seu disparo no momento certo. Os cabos sendo projetados com a bitola adequada, asseguram uma economia gritante no orçamento final.
                    </p>

                    <p>
                        Além da economia financeira, o projeto elétrico lhe garante o mais importante, sua segurança. Evitando incêndios que ocorrem quando a bitola do fio é mal dimensionada, ou quando um disjuntor é mal dimensionado.
                    </p>

                    <p>
                        Outro fator que vale destacar, é a organização proporcionada pelo projeto, você terá a quantidade de tomadas e o tipo das mesmas (uso específico ou especial) ideal para o seu espaço. Terá uma iluminação pensada com o projeto luminotécnico, garantindo um maior conforto.
                    </p>

                    <p>
                        Além do projeto elétrico, nossa equipe também realiza o laudo elétrico, analisando em loco a sua rede elétrica. Se o seu estabelecimento é antigo, recomendamos que você solicite um laudo elétrico para garantir que o mesmo esteja em conformidades com as normas.
                    </p>
                    <p>
                        A equipe da Ampère Jr. está preparada também para realizar projetos industriais. Dimensionando uma instalação elétrica adequada para suportar cargas de alta potência. Podemos ainda realizar o projeto de um Sistema de Proteção contra Descargas Atmosféricas (SPDA).
                    </p>

                    <div class="etapas-servico">
                        <ul>
                            <li>
                                <p class="menu-title"><b>Etapas do Projeto Elétrico:</b></p>
                            </li>
                            <li>
                                <p>
                                    - Levantamento de cargas;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Elaboração da planta-baixa do projeto elétrico no software AutoCad;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Diagrama unifilar;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Elaboração do memorial descritivo.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="etapas-servico-2">
                        <ul>
                            <li>
                                <p class="menu-title"><b>Etapas do Projeto SPDA:</b></p>
                            </li>
                            <li>
                                <p>
                                    - Implementação dos subsistemas definidos pela norma ABNT NBR 5419 e IN 010;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Levantamento do tipo de SPDA (Sistema de Proteção contra Descargas Atmosféricas) a ser implementado;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Determinação dos captores apropriados (para-raios);
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Elaboração do memorial descritivo.
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div class="etapas-servico">
                        <ul>
                            <li>
                                <p class="menu-title"><b>Etapas do Laudo Elétrico:</b></p>
                            </li>
                            <li>
                                <p>
                                    - Inspeção visual da conformidade dos quadros de distribuição;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Análise térmica, se aplicável;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Levantamento de cargas;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Inspeção das instalações elétricas em áreas comuns;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Aferições de grandezas elétricas em pontos aplicáveis;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Elaboração do laudo técnico de avaliação das instalações elétricas.
                                </p>
                            </li>
                        </ul>
                    </div>
                    


                    <div class="etapas-servico-2">
                        <ul>
                            <li>
                                <p class="menu-title"><b>Etapas do Laudo SPDA:</b></p>
                            </li>
                            <li>
                                <p>
                                    - Inspeção visual da conformidade do SPDA;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Teste de resistência de aterramento;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Levantamento do tipo de SPDA (Sistema de Proteção contra Descargas Atmosféricas) a ser implementado;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Determinação dos captores apropriados (para-raios);
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Elaboração do laudo SPDA;
                                </p>
                            </li>
                            <li>
                                <p>
                                    - Elaboração do memorial descritivo.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
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
        </form>

        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg?></div>
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