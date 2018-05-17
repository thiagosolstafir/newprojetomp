let h_tela = 0;
let w_tela = 0;
let scroll_site = 0;
let y = 0;
let controle_click = false;
let top = 0;
let id = 0;
let url;

$(document).ready(function (e) {
   allFunctions();

    /**
     * @return {string}
     */
    let SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.cel').mask(SPMaskBehavior, spOptions);
    $('.data').mask('00/00/0000');
    $('.cep').mask('00000-000');
    $('.telddd').mask('(00) 0000-0000');
    $('.tel').mask('0000-0000');
    $('.cpf').mask('000.000.000-00', {reverse: false});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: false});

});

function loadAjust() {
   //recebendo valores tela
   h_tela = $(window).height();
   w_tela = $(window).width();

   //  topo fixo
   //  $("#fixed").css("height", h_tela);
   //  $("#conteudo").css("margin-top", h_tela);


   // galeria horizontal
   // if (w_tela < 1023) {
   //     $(".abrir-galeria").css('display', 'block');
   // }else{
   //     $(".abrir-galeria").css('display', 'none');
   //     $("#area-galeria-left-int").removeClass('abrir-menu');
   // }

   $("#lt-page, #lt-int-page").css('min-height', h_tela);


   if (w_tela < 960) {
      $('#slider_lt li , #slider_lt li ins').css('height', h_tela + 'px');
      $('#slider_lt img').css('max-height', h_tela + 'px').css('max-width', w_tela + 'px');
   } else {
      $('#slider_lt li , #slider_lt li ins').css('height', h_tela - 90 + 'px');
      $('#slider_lt img').css('max-height', h_tela - 90 + 'px').css('max-width', w_tela + 'px');
   }

}

/**
* @param {any} id
*/
function mov_scroll(id) {

   controle_click = true;

   if (controle_click == true) {
      $('#bt_menu').removeClass('open');
      $("#area_menu_mobile").removeClass("slideRight", 200);
      $('#mask_menu').fadeOut(200);
      unlock_scroll();
      controle_click = false;
   }
   if (id === 'home') {

      $('html, body').animate({
         scrollTop: 0
      }, 500);
   } else {
      if (w_tela < 1008) {
         $('html, body').animate({
            scrollTop: $('#' + id).offset().top - 50
         }, 500);
      } else {
         $('html, body').animate({
            scrollTop: $('#' + id).offset().top - 50
         }, 500);
      }
   }
}


function allFunctions() {

   $(".title-bar button").click(function () {
      lock_scroll();
   });

   $(".js-off-canvas-overlay.is-overlay-fixed, .m-mobile .close-button").click(function () {
      unlock_scroll();
   });

   //carrega swiper
   setTimeout(function () {
      $(".swiper-wrapper").animate({opacity: 1}, 200);
   }, 400);

   //select
   $(".form-select select ").change(function () {
      let rec = $(this).parent('.form-select').find('strong');
      let val = $(this).val();
      $(this).find('option').each(function (index, element) {
         if ($(element).val() == val) {
            rec.html($(element).html());
         }
      });
   });

   //executa ao carregar p�gina
   window.onload = function () {
      setTimeout('loadAjust()', 200);
   };
   window.onresize = loadAjust;

   // evento scroll
   $(window).scroll(function () {
      scroll_site;
      y = $(document).scrollTop();

      if (y > 50) {
         $(".title-bar").addClass('title-bar-bg-active');
         $(".title-bar .title-bar-title").css('opacity', 1);
      } else {
         $(".title-bar").removeClass('title-bar-bg-active');
         $(".title-bar .title-bar-title").css('opacity', 0);
      }

      // if(y > 300){
      //     $(".menu-fixed").addClass('open');
      // }else{
      //     $(".menu-fixed").removeClass('open');
      // }

   });
}


function lock_scroll() {

   $('body').css('overflow','hidden').css('position','relative');
   // $('body').bind('scroll touchmove mousewheel', function (e) {
   //    e.preventDefault();
   //    return false;
   // });
}

function unlock_scroll() {
   //$('body').unbind('scroll touchmove mousewheel');
   $('body').css('overflow','visible').css('position','relative');
}
