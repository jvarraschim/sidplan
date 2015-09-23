$ = jQuery;

$(document).ready(function () {

    /*-------Menu Responsivo-------*/
    $('.toggle-nav').click(function (e) {
        e.stopPropagation();
        toggleNav();
    });

    $('#content, header').click(function (e) {
        var target = $(e.target);
        if ($('body').hasClass('show-nav')) {
            toggleNav();
        }
    });
    /*-------Menu Responsivo-------*/

    /*-------Home-------*/
    $(".nossos-empreendimentos .bloco-empreendimentos .bloco a").mouseenter(function () {
        if ($(window).width() > 1024) {
            $(this).addClass("index");
            setTimeout(function () {
                if ($(".nossos-empreendimentos .bloco-empreendimentos .bloco .index").length === 1) {
                    $(".hover-empreendimento").fadeIn(300);
                }
            }, 50);
        }
    });

    $(".nossos-empreendimentos .bloco-empreendimentos .bloco a").mouseleave(function () {
        if ($(window).width() > 1024) {
            $(this).removeClass("index");
            $(".hover-empreendimento").stop(true, true).fadeOut(300, function () {
            });
        }
    });
    /*-------Home-------*/

    /*-------Empreendimentos-------*/
    $(".pag-empreendimentos .empreendimento .bloco-esquerda a").mouseenter(function () {
        if ($(window).width() > 1024) {
            $(this).addClass("index");
            setTimeout(function () {
                if ($(".pag-empreendimentos .empreendimento .bloco-esquerda .index").length === 1) {
                    $(".hover-empreendimento").fadeIn(300);
                }
            }, 50);
        }
    });

    $(".pag-empreendimentos .empreendimento .bloco-esquerda a").mouseleave(function () {
        if ($(window).width() > 1024) {
            $(this).removeClass("index");
            $(".hover-empreendimento").stop(true, true).fadeOut(300, function () {
            });
        }
    });
    /*-------Empreendimentos-------*/


    /*-------Interna Empreendimentos-------*/
    if ($(".pag-interna-empreendimentos").length > 0) {

        $(".estagio").each(function (index) {
            $(this).find(".valor").text($(this).find(".valor-porcentagem").text() + "%");
            $(this).find(".porcentagem").css("width", $(this).find(".valor-porcentagem").text() + "%");
        });

    }
    /*-------Interna Empreendimentos-------*/

});

function toggleNav() {

    if ($('body').hasClass('show-nav')) {
        $('body').removeClass('show-nav');
    }
    else {
        $('body').addClass('show-nav');
    }
}