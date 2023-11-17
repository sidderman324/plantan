$(document).ready(function(){

  var winWidth = $(window).width();


  function phone_mask() {

    $("#phone").inputmask("+7 (999) 999-9999");
    $("#phone").on(
      {
        keydown: function(e) { if (e.which === 32 || e.which === 37 || e.which === 39 || e.which === 38 || e.which === 40) return false; },
        change: function() { this.value = this.value.replace(/\s/g, ""); }
      });

      $("#mail").inputmask("*{3,20}@*{3,20}.*{2,7}");
    }
    phone_mask();

    // Плавная прокрутка по якорю
    $(function() {
      $("a[href^='#']").bind('click', function() {
        var _href=$(this).attr("href");
        $("html, body").animate({
          scrollTop:$(_href).offset().top+"px"},800);
          return false;
        });
      });



      $('body').on('submit','form',function(e){

        e.preventDefault();
        var m_method = $(this).attr('method');
        var m_action = $(this).attr('action');
        var m_data = $(this).serialize();

        grecaptcha.ready(function () {
          grecaptcha.execute('6LeeeuAZAAAAAIDXdLUYONGfJyvpm7HECxy26xbj', {
            action: 'sendform'
          })
          .then(function(token) {
            $.ajax({
              type: m_method,
              url: m_action,
              data: m_data
            })
            .done(function() {
              feedback_message('Ваша заявка отправлена!');
            })
            .fail(function() {
              feedback_message('Ваша заявка не отправлена, повторите попытку позднее.');
            });
          });
        });
      });


      function feedback_message(text) {
        $('#message').text(text);
        $('.feedback_popup').addClass('visible');
        $('.feedback_bgr').addClass('visible');
      };

      $(document).on('click', '.close_btn', function(e) {
        $('.feedback_popup').removeClass('visible');
        $('.feedback_bgr').removeClass('visible');
      });
      $(document).on('click', '.feedback_bgr', function(e) {
        $('.feedback_popup').removeClass('visible');
        $('.feedback_bgr').removeClass('visible');
      });





      function scrollFunction() {
        var scroll = parseInt($(window).scrollTop());
        var winHeight = $(window).height();
        var winwidth = $(window).width();
        var header = $('.page-header');

        if(scroll > 80) {
          header.addClass('colored');
        } else {
          header.removeClass('colored');
        }

      }
      $(document).ready(scrollFunction);
      $(window).scroll(scrollFunction);
      $(window).resize(scrollFunction);



      function slider() {
        if($('#frontPage').hasClass('frontPage')) {
          var winwidth = $(window).width();
          var mySwiper = new Swiper('#stepsSlider', {});

          if(winWidth < 680) {
            mySwiper = new Swiper('#stepsSlider', {
              slidesPerView: 1,
              spaceBetween: 30,
              loop: true,
              // autoplay: {
              //   delay: 4000,
              // },
            });
          }
          else {
            mySwiper.destroy(event)
          }
        }
      }
      $(document).ready(slider);
      // $(window).resize(slider);



      $('#delivery_phone, #profile_phone').on('input', function() {

        var phone = $(this).val();

        // if(phone.length > 5) {
        var parent = $(this).parents('.input_wrapper');
        var re = /^(\+{0,})(\d{0,})([(]{1}\d{1,3}[)]{0,}){0,}(\s?\d+|\+\d{2,3}\s{1}\d+|\d+){1}[\s|-]?\d+([\s|-]?\d+){1,2}(\s){0,}$/gm;

        console.log(re.test(phone));

        if(!re.test(phone)) {
          parent.addClass('warning');
          parent.find('label').text('Телефон (некорректный формат) ')
        } if (re.test(phone)) {
          parent.removeClass('warning');
          parent.find('label').text('Телефон');
        }
        // }


      });


      $(document).on('click', '.burger_wrapper', function(e) {
        e.preventDefault();
        $('.burger').toggleClass('active');
        $('.page-header').toggleClass('opened');
      });

      function menuShow() {
        winWidth = $(window).width()

        if (winWidth > 910) {
          $('.burger').removeClass('active');
          $('.page-header').removeClass('opened');
        }
      }
      $(window).resize(menuShow);



      $('#profile_mail, #delivery_email').on('input', function() {

        var mail = $(this).val();

        if(mail.length > 5) {
          var parent = $(this).parents('.input_wrapper');
          var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

          if(!re.test(mail)) {
            parent.addClass('warning');
            parent.find('label').text('E-mail (некорректный формат) ')
          } if (re.test(mail)) {
            parent.removeClass('warning');
            parent.find('label').text('E-mail');
          }
        }


      });


    });

