$(document).ready(function(){

  var winWidth = $(window).width();

  if($('.review_wrapper')) {

  }
  if(document.querySelector('textarea')) {
    document.querySelector('textarea').addEventListener('input', function (e) {
      e.target.style.height = 'auto'
      e.target.style.height = e.target.scrollHeight + 8 + "px"

      if($(this).attr('value').length > 0) {
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }

    })
  }

  var stars;

  $('#js-rating-review').mousemove(function(evt) {
    var x = evt.pageX - $('#js-rating-review').offset().left;
    var elWidth = $('#js-rating-review').width();
    var percent = null;

    if ((x > 0) && (x < elWidth)) {
      percent = x / elWidth * 100;
    } else {
      $('#js-rating-review').find('.star').removeClass('full').addClass('empty');
    }

    $('#js-rating-review').find('.star').removeClass('full').addClass('empty');

    stars = Math.floor(percent / 20) + 1;

    for (var i = 0; i < stars; i++) {
      $('#js-rating-review').find('.star').eq(i).removeClass('empty').addClass('full');
    }

  });

  $('#js-rating-review').mouseleave(function(e) {
    var selectedRating = parseInt($('#selected_rating').attr('value'));

    if(selectedRating) {
      for (var i = 0; i < selectedRating; i++) {
        $('#js-rating-review').find('.star').eq(i).removeClass('empty').addClass('full');
      }
    } else {
      $('#js-rating-review').find('.star').removeClass('full').addClass('empty');
    }
  });

  $('#js-rating-review').on('click', function(){
    $('#selected_rating').attr('value',stars);
  });







  $('.product_supply_type_item').on('click', function(){
    var index = $(this).index();

    $('.product_supply_type_item').removeClass('active');
    $('.product_supply_type_item').eq(index).addClass('active');

  });














  function get_spoilers() {
    $('.js_spoiler_field').each(function(indx, element){
      var rows = parseInt($(this).attr('data-spoiler-rows'));
      var show_more = $(this).find('.js-btn-more');
      var spoiler_child;

      if($(this).hasClass('catalog_card_wrapper')) {
        var spoiler_child = $(this).find('.catalog_card').eq(0).height();
      }
      show_more.addClass('visible');

      $(this).find('.spoiler_inner').height(spoiler_child * rows + show_more.height());

    });

    if(winWidth < 1024) {
      $('.js_spoiler_field_mobile').each(function(indx, element){
        var rows = parseInt($(this).attr('data-spoiler-rows'));
        var show_more = $(this).find('.js-btn-more');
        var spoiler_child;

        if($(this).hasClass('catalog_card_wrapper')) {
          var spoiler_child = $(this).find('.catalog_card').eq(0).height();
        }
        show_more.addClass('visible');

        $(this).find('.spoiler_inner').height(spoiler_child * rows * .95);

      });
    } else {
      $('.js_spoiler_field_mobile').css('height','auto')
      $('.js_spoiler_field_mobile').find('.js-btn-more').removeClass('visible');
    }
  }
  get_spoilers();
  $(window).resize(get_spoilers);

  $('.js-btn-more').on('click', function(){
    var spoiler = $(this).parents('.js_spoiler_field').find('.spoiler_inner');
    var spoiler_mobile = $(this).parents('.js_spoiler_field_mobile').find('.spoiler_inner');

    $(this).removeClass('visible');
    spoiler.height('auto');
    spoiler_mobile.height('auto');
  });

  function phone_mask() {

    $("#profile_phone").inputmask("+7 (999) 999-9999");
    $("#profile_phone").on(
    {
      keydown: function(e) { if (e.which === 32 || e.which === 37 || e.which === 39 || e.which === 38 || e.which === 40) return false; },
      change: function() { this.value = this.value.replace(/\s/g, ""); }
    });

    $("#delivery_phone").inputmask("+7 (999) 999-9999");
    $("#delivery_phone").on(
    {
      keydown: function(e) { if (e.which === 32 || e.which === 37 || e.which === 39 || e.which === 38 || e.which === 40) return false; },
      change: function() { this.value = this.value.replace(/\s/g, ""); }
    });

    $("#delivery_email").inputmask("*{3,20}@*{3,20}.*{2,7}");
    $("#support_email").inputmask("*{3,20}@*{3,20}.*{2,7}");
  }
  // phone_mask();


  $('.js-order-show').on('click', function(e){
    e.preventDefault();
    if($(this).parents('.order_item').hasClass('opened')) {
      $(this).parents('.order_item').removeClass('opened');
      $(this).text('Подробнее');
    } else {
      $(this).parents('.order_item').addClass('opened');
      $(this).text('Свернуть');
    }
  });




  $('.spoiler_click_toggle').on('click', function(e){
    e.preventDefault();
    $(this).parents('.faq_item').toggleClass('active');
  });




  $('.js-open-registration').on('click', function(e){
    e.preventDefault();
    $('.registration_block').addClass('visible');
    $('.registration_block_bgr').addClass('visible');
    $('.menu_mobile').removeClass('visible');
    $('.geo_block_bgr').removeClass('visible');
  });
  $('.js-close-registration').on('click', function(e){
    e.preventDefault();
    $('.registration_block').removeClass('visible');
    $('.registration_block_bgr').removeClass('visible');
  });



  $('.js-open-geo-block').on('click', function(e){
    e.preventDefault();
    $('.geo_block').addClass('visible');
    $('.geo_block_bgr').addClass('visible');
    $('.menu_mobile').removeClass('visible');
  });
  $('.js-close-geo-block').on('click', function(e){
    e.preventDefault();
    $('.geo_block').removeClass('visible');
    $('.geo_block_bgr').removeClass('visible');
  });



  $('.js-mobile-menu-open').on('click', function(e){
    e.preventDefault();
    $('.menu_mobile').addClass('visible');
    $('.geo_block_bgr').addClass('visible');
  });
  $('.js-mobile-menu-close').on('click', function(e){
    e.preventDefault();
    $('.menu_mobile').removeClass('visible');
    $('.geo_block_bgr').removeClass('visible');
  });


  $('.js-open-filterbar').on('click', function(e){
    if(winWidth < 680) {
      e.preventDefault();
      $('.filterbar').addClass('visible');
      $('.registration_block_bgr').addClass('visible');
    }
  });
  $('.js-close-filterbar').on('click', function(e){
    if(winWidth < 680) {
      e.preventDefault();
      $('.filterbar').removeClass('visible');
      $('.registration_block_bgr').removeClass('visible');
    }
  });


  /* Работа табов */
  $('.registration_head_item').on('click',function(){

    var ind = $(this).index();
    console.log(ind);
    $('.registration_head_item').removeClass('active');
    $('.registration_body_item').removeClass('active');

    $('.registration_head_item').eq(ind).addClass('active');
    $('.registration_body_item').eq(ind).addClass('active');

    // var he = $('.registration_body_item.active').height();
    // $('.registration_body').height(he);
  })

  function getAbsTabs() {
    $('.registration_body_item').addClass('registration_body_item_abs')
    var he = $('.registration_body_item.active').height();
    $('.registration_body').height(he);
  }
  // getAbsTabs();
  // $(window).on('scroll resize', getAbsTabs);




  function deliveryTabs(type) {
    if(type == 'pickup') {
      $('.delivery_tabs').find('.delivery_tab_item').removeClass('active');
      $('.delivery_tabs').find('.delivery_tab_item').eq(0).addClass('active');
    } else if (type == 'delivery') {
      $('.delivery_tabs').find('.delivery_tab_item').removeClass('active');
      $('.delivery_tabs').find('.delivery_tab_item').eq(1).addClass('active');
    }
  }


  $('input[name="delivery_type"]').change(function () {
    if (this.checked) {
      deliveryTabs(this.value);
    }
  });








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












  function geoSelect() {
    var options = $("#city_list option");
    var array_option = new Array();

    for(var i=1; i<options.length; i++) {

      array_option.push(options[i].text);

    }

    $("#input_search").autocomplete({

      source: array_option,
      minLength: 2,

    });

    $.expr[":"].exact = $.expr.createPseudo(function(arg) {

      return function(element) {

        return $(element).text() === arg.trim();

      };

    });

    $(document).on("click", ".ui-widget-content li div", function() {

      var target_option = $(this).text();

      $("#city_list option:exact("+target_option+")").attr("selected", "selected");

    });
  }

  geoSelect();

















  var mySwiper = new Swiper ('#category_slider', {
    direction: 'horizontal',
    slidesPerView: 3,
    loop: true,
    spaceBetween: 80,

    breakpoints: {
      1024: {
        slidesPerView: 3,
        spaceBetween: 15
      },
      680: {
        slidesPerView: 1,
        spaceBetween: 15
      }
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })


  var mainBannerSlider = new Swiper ('#main_offer_slider', {
    direction: 'horizontal',
    slidesPerView: 1,
    loop: true,
    spaceBetween: 0,
    speed: 300,
    autoplay: {
      delay: 4000,
    },

    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  })



  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    slidesPerView: 4,
    watchSlidesVisibility: true,
    watchSlidesProgress: true,

    breakpoints: {
      680: {
        slidesPerView: 3,
        spaceBetween: 15
      }
    },
  });
  var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    slidesPerView: 1,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: galleryThumbs,
    },
  });

});

