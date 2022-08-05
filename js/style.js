
//Função para fazer movimentação animada até a página selecionada
$('a').click(function(event){
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top, //Pega o valor do topo da página até o elemento
        menuHeight = $('nav').innerHeight(); //Pega o valor da altura do menu
    $('html, body').animate({ //Faz a animação até o elemento
        scrollTop: targetOffset
    }, 700);
});

//Função para fazer movimentação animada até a página selecionada com os botões da página Connect
$('input').click(function(event){
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top, //Pega o valor do topo da página até o elemento
        menuHeight = $('header.menu').innerHeight(); //Pega o valor da altura do menu
    $('html, body').animate({ //Faz a animação até o elemento
        scrollTop: targetOffset - menuHeight - 120
    }, 700);
});
/*
$('#agosto').click(function(event){
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top, //Pega o valor do topo da página até o elemento
        menuHeight = $('header.menu').innerHeight(); //Pega o valor da altura do menu
    $('html, body').animate({ //Faz a animação até o elemento
        scrollTop: targetOffset - menuHeight - 120
    }, 700);
});*/

//Animação para o botão de voltar ao topo

jQuery(document).ready(function($) {
    var esconde = document.getElementById('back');
    esconde.style.display="none";
    $(window).scroll(function() {
        if($(this).scrollTop() > 200) {
            $('#back').fadeIn();
        } else {
            $('#back').fadeOut();
        }
    });
    
    $('#back').click(function () {
        $('body, html').animate({
            scrollTop: 0
        }, 700);
        return false;
    });
});


const burger = document.querySelector('.burger');
const nav = document.querySelector('#links-container');

//Burger Animation
burger.addEventListener('click', () => {
    burger.classList.toggle('toggle');
});

burger.addEventListener('click', () => {
    //Toggle nav
    nav.classList.toggle('nav-active');
});

//Close the burger menu
$(window).resize(function() {
    if($(window).width() > 768){
        nav.classList.remove('nav-active');
        burger.classList.remove('toggle');
    }
});



//Animação para as palestras mensais
var julho = document.getElementById("julho");
var agosto = document.getElementById("agosto");
var setembro = document.getElementById("setembro");
var outubro = document.getElementById("outubro");
var novembro = document.getElementById("novembro");
var dezembro = document.getElementById("dezembro");
var selecionadoJulho = document.getElementById("palestras-julho");
var selecionadoAgosto = document.getElementById("palestras-agosto");
var selecionadoSetembro = document.getElementById("palestras-setembro");
var selecionadoOutubro = document.getElementById("palestras-outubro");
var selecionadoNovembro = document.getElementById("palestras-novembro");
var selecionadoDezembro = document.getElementById("palestras-dezembro");

if(julho){
    julho.addEventListener('click', function() {
        selecionadoJulho.classList.remove('palestra-active');
        selecionadoAgosto.classList.remove('palestra-active');
        selecionadoSetembro.classList.remove('palestra-active');
        selecionadoOutubro.classList.remove('palestra-active');
        selecionadoNovembro.classList.remove('palestra-active');
        selecionadoDezembro.classList.remove('palestra-active');
        
        selecionadoJulho.classList.toggle('palestra-active');
    });
}

if(agosto){
    agosto.addEventListener('click', function() {
        selecionadoJulho.classList.remove('palestra-active');
        selecionadoAgosto.classList.remove('palestra-active');
        selecionadoSetembro.classList.remove('palestra-active');
        selecionadoOutubro.classList.remove('palestra-active');
        selecionadoNovembro.classList.remove('palestra-active');
        selecionadoDezembro.classList.remove('palestra-active');

        selecionadoAgosto.classList.toggle('palestra-active');
    });
}

if(setembro){
    setembro.addEventListener('click', function() {
        selecionadoJulho.classList.remove('palestra-active');
        selecionadoAgosto.classList.remove('palestra-active');
        selecionadoSetembro.classList.remove('palestra-active');
        selecionadoOutubro.classList.remove('palestra-active');
        selecionadoNovembro.classList.remove('palestra-active');
        selecionadoDezembro.classList.remove('palestra-active');

        selecionadoSetembro.classList.toggle('palestra-active');
    });
}

if(outubro){
    outubro.addEventListener('click', function() {
        selecionadoJulho.classList.remove('palestra-active');
        selecionadoAgosto.classList.remove('palestra-active');
        selecionadoSetembro.classList.remove('palestra-active');
        selecionadoOutubro.classList.remove('palestra-active');
        selecionadoNovembro.classList.remove('palestra-active');
        selecionadoDezembro.classList.remove('palestra-active');

        selecionadoOutubro.classList.toggle('palestra-active');
    });
}

if(novembro){
    novembro.addEventListener('click', function() {
        selecionadoJulho.classList.remove('palestra-active');
        selecionadoAgosto.classList.remove('palestra-active');
        selecionadoSetembro.classList.remove('palestra-active');
        selecionadoOutubro.classList.remove('palestra-active');
        selecionadoNovembro.classList.remove('palestra-active');
        selecionadoDezembro.classList.remove('palestra-active');

        selecionadoNovembro.classList.toggle('palestra-active');
    });
}

if(dezembro){
    dezembro.addEventListener('click', function() {
        selecionadoJulho.classList.remove('palestra-active');
        selecionadoAgosto.classList.remove('palestra-active');
        selecionadoSetembro.classList.remove('palestra-active');
        selecionadoOutubro.classList.remove('palestra-active');
        selecionadoNovembro.classList.remove('palestra-active');
        selecionadoDezembro.classList.remove('palestra-active');

        selecionadoDezembro.classList.toggle('palestra-active');
    });
}

//Animação para os videos das palestras mensais
var palestra1 = document.getElementById("palestra1");
var palestra2 = document.getElementById("palestra2");
var palestra3 = document.getElementById("palestra3");
var palestra4 = document.getElementById("palestra4");
var palestra5 = document.getElementById("palestra5");
var palestra6 = document.getElementById("palestra6");
var palestra7 = document.getElementById("palestra7");
var palestra8 = document.getElementById("palestra8");
var palestra9 = document.getElementById("palestra9");
var palestra10 = document.getElementById("palestra10");
var palestra11 = document.getElementById("palestra11");
var palestra12 = document.getElementById("palestra12");
var palestra13 = document.getElementById("palestra13");
var palestra14 = document.getElementById("palestra14");
var selecionado1 = document.getElementById("video1");
var selecionado2 = document.getElementById("video2");
var selecionado3 = document.getElementById("video3");
var selecionado4 = document.getElementById("video4");
var selecionado5 = document.getElementById("video5");
var selecionado6 = document.getElementById("video6");
var selecionado7 = document.getElementById("video7");
var selecionado8 = document.getElementById("video8");
var selecionado9 = document.getElementById("video9");
var selecionado10 = document.getElementById("video10");
var selecionado11 = document.getElementById("video11");
var selecionado12 = document.getElementById("video12");
var selecionado13 = document.getElementById("video13");
var selecionado14 = document.getElementById("video14");

if(palestra1){

    palestra1.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado1.classList.toggle('palestra-active');

    });
}

if(palestra2){

    palestra2.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado2.classList.toggle('palestra-active');
    });
}

if(palestra3){

    palestra3.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado3.classList.toggle('palestra-active');
    });
}

if(palestra4){
    palestra4.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado4.classList.toggle('palestra-active');
    });
}

if(palestra5){
    palestra5.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado5.classList.toggle('palestra-active');
    });
}

if(palestra6){
    palestra6.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado6.classList.toggle('palestra-active');
    });
}

if(palestra7){
    palestra7.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado7.classList.toggle('palestra-active');
    });
}

if(palestra8){
    palestra8.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado8.classList.toggle('palestra-active');
    });
}

if(palestra9){
    palestra9.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado9.classList.toggle('palestra-active');
    });
}

if(palestra10){
    palestra10.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado10.classList.toggle('palestra-active');
    });
}

if(palestra11){
    palestra11.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado11.classList.toggle('palestra-active');
    });
}

if(palestra12){
    palestra12.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado12.classList.toggle('palestra-active');
    });
}

if(palestra13){
    palestra13.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado13.classList.toggle('palestra-active');
    });
}

if(palestra14){
    palestra14.addEventListener('click', function() {
        selecionado1.classList.remove('palestra-active');
        selecionado2.classList.remove('palestra-active');
        selecionado3.classList.remove('palestra-active');
        selecionado4.classList.remove('palestra-active');
        selecionado5.classList.remove('palestra-active');
        selecionado6.classList.remove('palestra-active');
        selecionado7.classList.remove('palestra-active');
        selecionado8.classList.remove('palestra-active');
        selecionado9.classList.remove('palestra-active');
        selecionado10.classList.remove('palestra-active');
        selecionado11.classList.remove('palestra-active');
        selecionado12.classList.remove('palestra-active');
        selecionado13.classList.remove('palestra-active');
        selecionado14.classList.remove('palestra-active');

        selecionado14.classList.toggle('palestra-active');
    });
}