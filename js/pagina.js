function openSup() {
    document.getElementById("menuSuperiorResponsive").style.height = "99%";
    document.getElementById("open-hide").style.display = "none";
}

function closeSup() {
    document.getElementById("menuSuperiorResponsive").style.height = "0";
    document.getElementById("open-hide").style.display = "block";
}

function openLate() {
    document.getElementById("menuLateralResponsive").style.width = "50%";
    document.getElementById("closebtn2").style.display = "block";
    document.getElementById("menu-menu-lateral").style.display = "block";

}

function closeLate() {
    document.getElementById("menuLateralResponsive").style.width = "0";
    document.getElementById("closebtn2").style.display = "none";
    document.getElementById("menu-menu-lateral").style.display = "none";
}

/*Esta función hace que exita una transición en los anclajes para que se vea el desplazamiento con un tiempo determinado, si se quiere modificar el tiempo de desplazamiento, se modifica el valor de 1000*/
(function ($) {
    $('a[href*="#inicio"]').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body').animate({ scrollTop: targetOffset }, 2000);
                return false;
            }
        }
    });
});

/*Esta función permite habilitar el boton de contenido hacia arriba*/


/* Esta función hace que el menu quede posicionado en la parte superior cuando se supere la altura del menu. Se utiliza la clase del menu_nav y con la función se agrega la clase menu-fixed, que contiene unos css que toman la posición superior*/

(function ($) {
    $(document).ready(function () {
        var alturaMenu = $('.menuTopEstatico').offset().top;
        /*var alturaMenuRespo = $('.menuTopEstaticoResponsive').offset().top;*/

        $(window).on('scroll', function () {

            if ($(window).scrollTop() > alturaMenu) {
                $('.menuTopEstatico').addClass('menu-fixed');
            } else {
                $('.menuTopEstatico').removeClass('menu-fixed');
            }

            /*		if ($(window).scrollTop() > alturaMenuRespo) {
                        $('.menuTopEstaticoResponsive').addClass('menu-fixed');
                    }else{
                        $('.menuTopEstaticoResponsive').removeClass('menu-fixed');
                    }*/
        })
    });

    /*función abre y cierra los item del menú superior responsive que tengan sub menus*/
    $(document).ready(function () {

        $('#menu-menu-lateral li:has(ul)').click(function (e) {
            e.preventDefault();

            if ($(this).hasClass('activadoMenu')) {

                $(this).removeClass('activadoMenu');
                $(this).children('ul').slideUp();

            } else {

                $('#menu-menu-lateral li ul').slideUp(); //todos los menus se ocultan
                $('menu li').removeClass('activadoMenu');
                $(this).addClass('activadoMenu');
                $(this).children('ul').slideDown(); //todos los elementos ul que sean hijos se muestran

            }
        });

        $('#menu-menu-lateral li ul li a').click(function () {
            window.location.href = $(this).attr("href");
        });

    });

    /*función abre y cierra los item del menú izquierdo que tengan sub menus*/
    $(document).ready(function () {

        $('#menu-menu-lateral-1 li:has(ul)').click(function (e) {
            e.preventDefault();

            if ($(this).hasClass('activadoMenu')) {

                $(this).removeClass('activadoMenu');
                $(this).children('ul').slideUp();

            } else {

                $('#menu-menu-lateral-1 li ul').slideUp(); //todos los menus se ocultan
                $('menu li').removeClass('activadoMenu');
                $(this).addClass('activadoMenu');
                $(this).children('ul').slideDown(); //todos los elementos ul que sean hijos se muestran

            }
        });

        $('#menu-menu-lateral-1 li ul li a').click(function () {
            window.location.href = $(this).attr("href");
        });

    });

    $(document).ready(function () {

        $('#menuSuperiorResponsive li:has(ul)').click(function (e) {
            e.preventDefault();

            if ($(this).hasClass('activadoMenu')) {

                $(this).removeClass('activadoMenu');
                $(this).children('ul').slideUp();

            } else {

                $('#menuSuperiorResponsive li ul').slideUp(); //todos los menus se ocultan
                $('menu li').removeClass('activadoMenu');
                $(this).addClass('activadoMenu');
                $(this).children('ul').slideDown(); //todos los elementos ul que sean hijos se muestran

            }
        });

        $('#menuSuperiorResponsive li ul li a').click(function () {
            window.location.href = $(this).attr("href");
        });

    });

    /*	$(document).ready(function(){

            $('#menuNavResponsive li:has(ul)').click(function(e) {
                e.preventDefault();

                if ($(this).hasClass('activadoMenu')) {

                    $(this).removeClass('activadoMenu');
                    $(this).children('ul').slideUp();

                } else {

                    $('#menuNavResponsive li ul').slideUp(); //todos los menus se ocultan
                    $('menu li').removeClass('activadoMenu');
                    $(this).addClass('activadoMenu');
                    $(this).children('ul').slideDown(); //todos los elementos ul que sean hijos se muestran

                }
            });

            $('#menuNavResponsive li ul li a').click(function(){
                window.location.href = $(this).attr("href");
            });

        });*/

    $(document).ready(function () {
        $('#dataTables').DataTable();
    });


})(jQuery);


//IDs generadas para acordeones en menu lateral
jQuery(function ($) {
    $(".menu-lateral-item.menu-item-type-post_type").addClass('accordion-body');
    $(".menu-item-type-taxonomy").addClass('accordion-body');
    $(".menu-lateral-item.menu-item-type-custom").addClass('accordion-body');
    var buttons$ = $(".menu-lateral-item.menu-item-has-children > a");
    uls$ = $(".menu-lateral-item.menu-item-has-children > ul");
    for (var i = 0; i < buttons$.length; i++) {
        $(buttons$[i]).attr("data-bs-target", `#accordion-${i}`);
        $(uls$[i]).attr("id", `accordion-${i}`);
    }
    buttons$.addClass('accordion-header accordion-button collapsed').removeClass('nav-link dropdown-toggle');
    buttons$.attr("data-bs-toggle", "collapse");

    uls$.addClass('accordion-collapse collapse').removeClass('dropdown-menu submenu');
    $(".menu-lateral-item.menu-item-has-children > ul > li").removeClass('accordion-item');
    $(".menu-lateral-item.menu-item-has-children > ul > li").addClass('col-12');
    $(".menu-lateral-item.menu-item-has-children > ul > li").removeClass('col-2');
    $(".menu-lateral-item.menu-item-has-children").removeClass('accordion-body');
});


// Espaciado de texto
jQuery(function ($) {
    $(".espaciado-texto").click(function () {
        if ($('html').hasClass('espaciadoTexto')) {
            $('html').removeClass('espaciadoTexto');
        }
        else {
            $('html').addClass('espaciadoTexto');
        }
    })
});

//Iniciar-Pausar carrusel de noticias
jQuery(function ($) {
    var owl = $('.carrusel-noticias');
    owl.owlCarousel({
        autoHeight: false,
        dots: false,
        nav: true,
        loop: false,
        rewind: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1200: {
                items: 3
            },
            1600: {
                items: 4
            },
        }
    });
    $('.play').on('click', function () {
        owl.trigger('play.owl.autoplay', [4000])
    })
    $('.stop').on('click', function () {
        owl.trigger('stop.owl.autoplay')
    })
});

jQuery(function ($) {
    // let checkboxForm$ = document.getElementsByName("SeleccionComentario[]");
    // $(checkboxForm$).attr("onclick", "EnableDisableTextBox(this)");
    let nombre$ = document.getElementById('nombreyapellidos');
    $(nombre$).attr("aria-label", "Nombre del solicitante");
    let ciudad$ = document.getElementById('ciudad');
    $(ciudad$).attr("aria-label", "Ciudad del solicitante");
    let correo$ = document.getElementById('correo');
    $(correo$).attr("aria-label", "Correo electrónico");
    let telefono$ = document.getElementById('telefono');
    $(telefono$).attr("aria-label", "Número de telefono");
    let celular$ = document.getElementById('celular');
    $(celular$).attr("aria-label", "Número celular");
    let comentario$ = document.getElementById('Comentario');
    $(comentario$).attr("aria-label", "Comentario");

})

document.addEventListener('DOMContentLoaded', function () {


});