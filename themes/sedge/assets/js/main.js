(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}
if (windowWidth <= 767) {
  $(window).scroll(function() {
      if ($(this).scrollTop()) {
          $('.to-top-btn-cntlr').fadeIn();
      } else {
          $('.to-top-btn-cntlr').fadeOut();
      }
  });
  }
if( $('.to-top-btn-cntlr').length ){
  $(".to-top-btn-cntlr").click(function() {
      $("html, body").animate({scrollTop: 0}, 1000);
   });
}
/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


var swiper = new Swiper('.catagorySlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.catagorySlider-arrows .swiper-button-next',
      prevEl: '.catagorySlider-arrows .swiper-button-prev',
    },
    breakpoints: {
       639: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1199: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1920: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });

if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}



/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


  /*start of Noyon*/
  if( $('.hambergar-icon').length ){
    $('.hambergar-icon').click(function(){
      $('body').toggleClass('allWork');
    });
  }
  if( $('li.menu-item-has-children > a').length ){
    $('li.menu-item-has-children > a').click(function(e){
     event.preventDefault();
     $(this).next().slideToggle(300);
     $(this).parent().toggleClass('sub-menu-arrow');
   });
  }


  if( $('.xs-hdr-srch').length ){
    $('.xs-hdr-srch').click(function(e){
      event.preventDefault();
      $('.xs-hdr-srch-wrap').toggleClass('hdr-rgt-srch-input-show');
    });
  }

  $(document).click(function(event) { 
    var $target = $(event.target);
    if(!$target.closest('.xs-hdr-srch-wrap').length && 
      $('.xs-hdr-srch-btm').is(":visible")) {
      $('.xs-hdr-srch-wrap').removeClass('hdr-rgt-srch-input-show');
  }        
});

/*$('.xs-hdr-srch').click(function(){
  $('.xs-hdr-srch-btm').slideToggle(300);
});*/

  $(".type-order-format .woocommerce-input-wrapper span").each(function(){
        $(this).append('<div class="radio-custom"></div>')
  });
  $(".billing-address-wrap .same-as-shipping-address,.login-info p:first-child,.form-row .woocommerce-form__label-for-checkbox").each(function(){
          $(this).append('<div class="checkbox-custom"></div>')
  });
  $('.variations_form table.variations select#pa_diameter,.variations_form table.variations select#pa_aantal-stuks').addClass('selectpicker');

  // accordion
  if( $('.accordion-order-title').length ){
      $( ".orders-crtl" ).first().find('.hh-accordion-title').addClass('hh-accordion-active');
      $( ".hh-accordion-active").next().slideDown(300);
    $('.accordion-order-title').click(function(){
        $(this).next().slideToggle(300);
        $(this).parents('li').siblings().find('.order-details').slideUp(300);
        $(this).toggleClass('hh-accordion-active');
        $(this).parents('li').siblings().find('.accordion-order-title').removeClass('hh-accordion-active');
    });
  }

  /**
Slick slider
*/
if( $('#related-product-slider').length ){
    $('#related-product-slider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          }
        },
        {
          breakpoint: 700,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots:true,
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots:true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}
if(windowWidth < 768){
  if( $('.bsBlogItemSlider').length ){
    $('.bsBlogItemSlider').slick({
      dots: true,
      infinite: true,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  }
}
  /* -- About page left bg control --*/

if(windowWidth > 768){
  var AboutTextImgSecWrp = $('.about-img-text-sec-wrp').width();
  var AboutTextImgSecWrpContainer = $('.about-img-text-sec-wrp .container').width();
  var LeftBgWidthCal = (AboutTextImgSecWrp - AboutTextImgSecWrpContainer);
  var LeftBgWidthCalDiv =  (LeftBgWidthCal / 2) ;
  var AboutTextImgRgtCon = $('.about-img-text-wrp').outerHeight();
  $('.about-img-text-bg').height(AboutTextImgRgtCon).width(LeftBgWidthCalDiv);

  $(window).resize(function(){
    var AboutTextImgSecWrp = $('.about-img-text-sec-wrp').width();
    var AboutTextImgSecWrpContainer = $('.about-img-text-sec-wrp .container').width();
    var LeftBgWidthCal = (AboutTextImgSecWrp - AboutTextImgSecWrpContainer);
    var LeftBgWidthCalDiv =  (LeftBgWidthCal / 2) ;
    var AboutTextImgRgtCon = $('.about-img-text-wrp').outerHeight();
    $('.about-img-text-bg').height(AboutTextImgRgtCon).width(LeftBgWidthCalDiv); 
  });
}

$('.wpforms-field-email').on('click', function(){
  $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
});


$('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click',function(){
    $('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-field-container .wpforms-has-error label.wpforms-error').append('<span></span>');
});

$('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-field-container .wpforms-has-error label.wpforms-error').each(function(){
    $(this).append('<span></span>')
});


  /*var swiper = new Swiper('.ftrTopSlider', {
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 0,
    navigation: {
      nextEl: '.restaurantGallerySliderArrows .swiper-button-next',
      prevEl: '.restaurantGallerySliderArrows .swiper-button-prev',
    }
  });*/

  if( $('.ftrTopSlider').length ){
    $('.ftrTopSlider').slick({
      dots: false,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 6,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: false,
            dots: false
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

$("#register_next").prop("disabled",true);
$("#reg_email").bind('blur keyup change click', function(){
  if(isValidEmailAddress($(this).val())){
    $(this).css({"border": "0px solid red", "color": "#000"});
    $("#register_next").prop("disabled",false);
  }else{
    $(this).css({"border": "1px solid red", "color": "red"});
    $("#register_next").prop("disabled",true);
  }
})

$("#for_business").on('change', function(){
var html = '<p class="form-row form-row-wide" id="billing_company_field">' +
        '<label for="billing_company" class="">Bedrijfsnaam</label>' +
        '<span class="woocommerce-input-wrapper">' +
          '<input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="Bedrijfsnaam">' +
        '</span>' +
      '</p>' +
      '<p class="form-row form-row-wide" id="billing_btw_nummer_field">' +
        '<label for="billing_btw_nummer" class="">BTW-nummer</label>' +
        '<span class="woocommerce-input-wrapper">' +
          '<input type="text" class="input-text " name="billing_btw_nummer" id="billing_btw_nummer" placeholder="BTW-nummer" required>' +
        '</span>' +
      '</p>'+
      '<p class="form-row form-row-wide" id="billing_btw_nummer_field">' +
        '<label for="billing_reference" class="">Referentie</label>' +
        '<span class="woocommerce-input-wrapper">' +
          '<input type="text" class="input-text " name="billing_reference" id="billing_reference" placeholder="Referentie" required>' +
        '</span>' +
      '</p>';

  $("#extra_fields").html(html);
});
$("#private").on('change', function(){

var html = '';
  $("#extra_fields").empty(html);
})

jQuery('body').on('wc_cart_emptied', function(){
  location.reload();
  //console.log('wc_cart_emptied triggered');
});

// Registration form validation
$("#re_password").bind('blur keyup change', function(){
  $("#register_action_btn").attr('disabled','disabled');
  var pass = $('#re_password').val();
  //check the strings
  if(pass.length >= 8){
    $('.error-rel_password').text('');
    $(this).css({"border": "2px solid #F3F3F3", "color": "#9EA5AB"});
  }else{
    $('.error-rel_password').text('Wachtwoord zou moeten minimaal 8 karakters');
    $(this).css({"border": "2px solid #D17181", "color": "#D17181"});
    $("#register_action_btn").attr('disabled','disabled');
  }
});


$("#confirm_password").bind('blur keyup change click', function(){
  $("#register_action_btn").prop("disabled",false);
    var pass = $('#re_password').val();
    var confpass = $(this).val();
    //check the strings
    if(pass == confpass){
    //if both are same remove the error and allow to submit
    $('.error-confirm_password').text('');
    $(this).css({"border": "2px solid #F3F3F3", "color": "#9EA5AB"});
    $("#register_action_btn").prop("disabled",false);
    }else{
    //if not matching show error and not allow to submit
    $('.error-confirm_password').text('Wachtwoord komt niet overeen');
    $(this).css({"border": "2px solid #D17181", "color": "#D17181"});
    $("#register_action_btn").prop("disabled",true);
    }
});

/* Checkout field show/hide */
if ($("#billing_order_type_Zakelijk").is(":checked")) {
    $('#billing_company_field').addClass('show-company');
    $('#vat_number_field').addClass('show-vat_number');
    $('#billing_reference_field').addClass('show-reference');
}
$("#billing_order_type_Zakelijk").on('change', function(){
    if ($(this).is(":checked")) {
        $('#billing_company_field').addClass('show-company');
        $('#vat_number_field').addClass('show-vat_number');
        $('#billing_reference_field').addClass('show-reference');
    }
});
$("#billing_order_type_Particulier").on('change', function(){
    if ($(this).is(":checked")) {
        $('#billing_company_field').removeClass('show-company');
        $('#vat_number_field').removeClass('show-vat_number');
        $('#billing_reference_field').removeClass('show-reference');
    }
});

// Coupon code triger
$("#apply_coupon_code").click(function(){
    var couponCode = $('#coupon_code_enter').val();
    $("body .checkout_coupon.woocommerce-form-coupon input#coupon_code").val(couponCode)
    $(".checkout_coupon button").submit();

});

/**
Cart quantity updates
*/
//$(".ywgc_enter_code").appendTo("#giftcard-here");
/*jQuery('div.woocommerce').on('change', '.qty', function(){
    jQuery("[name='update_cart']").prop("disabled", false);
    jQuery("[name='update_cart']").trigger("click"); 
});*/
jQuery('body').on('click', '.qty1 .minus', function(){
    var spinner = $(this),
      input = spinner.next().find('input[type="number"]'),
      min = 1,
      max = input.attr('max');

      var oldValue = parseFloat(input.val());
      if (oldValue <= min) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue - 1;
      }
      spinner.next().find("input").val(newVal);
      spinner.next().find("input").trigger("change");

    jQuery("[name='update_cart']").prop("disabled", false);
    jQuery("[name='update_cart']").trigger("click"); 
});
jQuery('body').on('click', '.qty1 .plus', function(){
    var spinner = $(this),
      input = spinner.prev().find('input[type="number"]'),
      min = 1,
      max = input.attr('max');

      var oldValue = parseFloat(input.val());
      if (oldValue <= max) {
        var newVal = oldValue;
      } else {
        var newVal = oldValue + 1;
      }
      spinner.prev().find("input").val(newVal);
      spinner.prev().find("input").trigger("change");

    jQuery("[name='update_cart']").prop("disabled", false);
    jQuery("[name='update_cart']").trigger("click"); 
});

//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

})(jQuery);

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
    return pattern.test(emailAddress);
}