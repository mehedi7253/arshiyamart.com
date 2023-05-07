/**
  * Template Name: Daily Shop
  * Version: 1.0
  * Template Scripts
  * Author: MarkUps
  * Author URI: http://www.markups.io/

  Custom JS


  1. CARTBOX
  2. TOOLTIP
  3. PRODUCT VIEW SLIDER
  4. POPULAR PRODUCT SLIDER (SLICK SLIDER)
  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
  6. LATEST PRODUCT SLIDER (SLICK SLIDER)
  7. TESTIMONIAL SLIDER (SLICK SLIDER)
  8. CLIENT BRAND SLIDER (SLICK SLIDER)
  9. PRICE SLIDER  (noUiSlider SLIDER)
  10. SCROLL TOP BUTTON
  11. PRELOADER
  12. GRID AND LIST LAYOUT CHANGER
  13. RELATED ITEM SLIDER (SLICK SLIDER)


**/

jQuery(function($){


  /* ----------------------------------------------------------- */
  /*  1. CARTBOX
  /* ----------------------------------------------------------- */

     jQuery(".aa-cartbox").hover(function(){
      jQuery(this).find(".aa-cartbox-summary").fadeIn(500);
    }
      ,function(){
          jQuery(this).find(".aa-cartbox-summary").fadeOut(500);
      }
     );

  /* ----------------------------------------------------------- */
  /*  2. TOOLTIP
  /* ----------------------------------------------------------- */
    jQuery('[data-toggle="tooltip"]').tooltip();
    jQuery('[data-toggle2="tooltip"]').tooltip();

  /* ----------------------------------------------------------- */
  /*  3. PRODUCT VIEW SLIDER
  /* ----------------------------------------------------------- */

    jQuery('#demo-1 .simpleLens-thumbnails-container img').simpleGallery({
        loading_image: 'demo/images/loading.gif'
    });

    jQuery('#demo-1 .simpleLens-big-image').simpleLens({
        loading_image: 'demo/images/loading.gif'
    });

  /* ----------------------------------------------------------- */
  /*  4. POPULAR PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery('.aa-popular-slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
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


  /* ----------------------------------------------------------- */
  /*  5. FEATURED PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery('.aa-featured-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
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

  /* ----------------------------------------------------------- */
  /*  6. LATEST PRODUCT SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */
    jQuery('.aa-latest-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
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

  /* ----------------------------------------------------------- */
  /*  7. TESTIMONIAL SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery('.aa-testimonial-slider').slick({
      dots: true,
      infinite: true,
      arrows: false,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: true
    });

  /* ----------------------------------------------------------- */
  /*  8. CLIENT BRAND SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery('.aa-client-brand-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
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

  /* ----------------------------------------------------------- */
  /*  9. PRICE SLIDER  (noUiSlider SLIDER)
  /* ----------------------------------------------------------- */

    jQuery(function(){
      if($('body').is('.productPage')){
       var skipSlider = document.getElementById('skipstep');
        noUiSlider.create(skipSlider, {
            range: {
                'min': 0,
                '10%': 10,
                '20%': 20,
                '30%': 30,
                '40%': 40,
                '50%': 50,
                '60%': 60,
                '70%': 70,
                '80%': 80,
                '90%': 90,
                'max': 100
            },
            snap: true,
            connect: true,
            start: [20, 70]
        });
        // for value print
        var skipValues = [
          document.getElementById('skip-value-lower'),
          document.getElementById('skip-value-upper')
        ];

        skipSlider.noUiSlider.on('update', function( values, handle ) {
          skipValues[handle].innerHTML = values[handle];
        });
      }
    });



  /* ----------------------------------------------------------- */
  /*  10. SCROLL TOP BUTTON
  /* ----------------------------------------------------------- */

  //Check to see if the window is top if not then display button

    jQuery(window).scroll(function(){
      if ($(this).scrollTop() > 300) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });

    //Click event to scroll to top

    jQuery('.scrollToTop').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
    });








    jQuery(window).scroll(function(){
      if ($(this).scrollTop() > 300) {
        $('.scrollToTop2').fadeIn();
      } else {
        $('.scrollToTop2').fadeOut();
      }
    });

    //Click event to scroll to top

    jQuery('.scrollToTop2').click(function(){
      $('html, body').animate({scrollTop : 0},800);
      return false;
    });





  /* ----------------------------------------------------------- */
  /*  11. PRELOADER
  /* ----------------------------------------------------------- */

    jQuery(window).load(function() { // makes sure the whole site is loaded
      jQuery('#wpf-loader-two').delay(200).fadeOut('slow'); // will fade out
    })

  /* ----------------------------------------------------------- */
  /*  12. GRID AND LIST LAYOUT CHANGER
  /* ----------------------------------------------------------- */

  jQuery("#list-catg").click(function(e){
    e.preventDefault(e);
    jQuery(".aa-product-catg").addClass("list");
  });
  jQuery("#grid-catg").click(function(e){
    e.preventDefault(e);
    jQuery(".aa-product-catg").removeClass("list");
  });


  /* ----------------------------------------------------------- */
  /*  13. RELATED ITEM SLIDER (SLICK SLIDER)
  /* ----------------------------------------------------------- */

    jQuery('.aa-related-item-slider').slick({
      dots: false,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
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

});
$(document).ready(function(){
    $("#loginForm").validate({
      rules:{
        email:{
          required:true,
          email:true
        },
        password:{
          required:true
        }

      },
      messages:{
        email:{
          required:"Please enter a valid email",
          email:"Please enter a valid email"

        },
        password:{
          required:"Please provid a password"
        }

      }
    });



    $("#registation").validate({
      rules:{
        user_name:{
          required:true,
          minlength:2,
          accept: "[a-zA-Z]+"
        },
        pass:{
          required:true,
          minlength:6
        },
        email:{
          required:true,
          email:true,
          remote:"/check-mail"
        }
      },
      messages:{
        user_name:{
          required:"Please enter your name",
          minlength:"Your password must be in 2 characters",
          accept:"Your name mustbe in content only"
        },
        pass:{
          required:"Please provid a password",
          minlength:"Your password must be in 6 characters "
        },
        email:{
          required:"Please enter a valid email",
          email:"Please enter a valid email",
          remote:"Email already exists"
        }
      }
    });

    $('#account_Form').validate({

      rules:{
        name:{
          required : true,
          accept : "[a-zA-Z+]"
        },
        address:{
                     required:true,
                     minlength:6
              },
        city:{
                     required:true,
                     minlength:2
            }
      },
      messages:{
        name:{
          required:"Please enter your name",
          accept:"Your name mustbe in content only"
        },
        address:{
                    required:"Please provide your Address",
                    minlength: "Your Address must be atleast 10 characters long"
              },
            city:{
                required:"Please provide your City",
                minlength: "Your City must be atleast 2 characters long"
            }
      }
    });



    $("#passwordForm").validate({
        rules:{
            current_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
            new_pwd:{
                required: true,
                minlength:6,
                maxlength:20
            },
            confirm_pwd:{
                required:true,
                minlength:6,
                maxlength:20,
                equalTo:"#new_pwd"
            }
        },
        errorClass: "help-inline",
        errorElement: "span",
        highlight:function(element, errorClass, validClass) {
            $(element).parents('.control-group').addClass('error');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).parents('.control-group').removeClass('error');
            $(element).parents('.control-group').addClass('success');
        }
    });

  // Check Current User Password
    $("#current_pwd").keyup(function(){
        var current_pwd = $(this).val();
        $.ajax({
            headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            type:'post',
            url:'/check-user-pwd',
            data:{current_pwd:current_pwd},
            success:function(resp){
                /*alert(resp);*/
                if(resp=="false"){
                    $("#chkPwd").html("<font color='red'>Current Password is incorrect</font>");
                }else if(resp=="true"){
                    $("#chkPwd").html("<font color='green'>Current Password is correct</font>");
                }
            },error:function(){
                alert("Error");
            }
        });
    });

  $('#myPassword').passtrength({
    minChars: 4,
    passwordToggle: true,
    tooltip: true,
    eyeImg : "/assets/temp/images/eye.svg"
  });

  $('#copyAddress').click(function(){
    if (this.checked) {
      $('#shipping_name').val($('#billing_name').val());
      $('#shipping_address').val($('#billing_address').val());
      $('#shipping_city').val($('#billing_city').val());
      $('#shipping_pincode').val($('#billing_pincode').val());
      $('#shipping_mobile').val($('#billing_mobile').val());
    }else{
      $('#shipping_name').val('');
      $('#shipping_address').val('');
      $('#shipping_city').val('');
      $('#shipping_pincode').val('');
      $('#shipping_mobile').val('');
    }
  });

  });


