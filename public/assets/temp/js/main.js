/*price range*/

 $('#sl2').slider();

	var RGBChange = function() {
	  $('#RGB').css('background', 'rgb('+r.getValue()+','+g.getValue()+','+b.getValue()+')')
	};

/*scroll to top*/

$(document).ready(function(){
	$(function () {
		$.scrollUp({
	        scrollName: 'scrollUp', // Element ID
	        scrollDistance: 300, // Distance from top/bottom before showing element (px)
	        scrollFrom: 'top', // 'top' or 'bottom'
	        scrollSpeed: 300, // Speed back to top (ms)
	        easingType: 'linear', // Scroll to top easing (see http://easings.net/)
	        animation: 'fade', // Fade, slide, none
	        animationSpeed: 200, // Animation in speed (ms)
	        scrollTrigger: false, // Set a custom triggering element. Can be an HTML string or jQuery object
					//scrollTarget: false, // Set a custom target element for scrolling to the top
	        scrollText: '<i class="fa fa-angle-up"></i>', // Text for element, can contain HTML
	        scrollTitle: false, // Set a custom <a> title if required.
	        scrollImg: false, // Set true to use image
	        activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
	        zIndex: 2147483647 // Z-Index for the overlay
		});
	});
});

$(document).ready(function(){
  $("#selSize").change(function(){
    var idSize = $(this).val();
    if (idSize == "") {
      return false;
    }
    $.ajax({
      type : 'get',
      url  : '/get-product-price',
      data : {idSize:idSize},
      success:function(resp){
        // alert(resp);
        var arr = resp.split("#");
        $("#getPrice").html("TK." +arr[0] );
        $("#price").val(arr[0]);
        if (arr[1]==0) {
          $('#cartBtn').hide();
          $('#avalable').text('Out of Stock');
        }else{
          $('#cartBtn').show();
          $('#avalable').text('In Stock');
        }
      },error:function(){
        alert("Error");
      }
    });
  });
});


$(document).ready(function(){
  $('.changeImage').click(function(){
    var image = $(this).attr('src');
    $('.mainImage').attr('src',image);
    //alert("nahid");
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

  function selectPaymentMethod(){
    if ($('#Paypal').is(':checked') || $('#COD').is(':checked')) {


    }else {
      alert("Please select one payment method");
      return false;
    }
  }
