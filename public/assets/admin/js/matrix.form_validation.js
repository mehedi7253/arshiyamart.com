
$(document).ready(function(){

	$("#current_pwd").keyup(function(){
		var current_pwd = $("#current_pwd").val();

		$.ajax({
			type : 'get',
			url : '/admin/check-password',
			data : {current_pwd:current_pwd},

		success:function(resp){
				// alert(resp);
				if(resp == "false"){
					$("#chkPassword").html("<font color='red'>Current Password is Incorrent</font>");
				}else if(resp=="true") {
					$("#chkPassword").html("<font color='green'>Current Password is Corrent</font>")
				}
			},error:function(){
				alert("Error");
			}


		});
	});

	$('input[type=checkbox],input[type=radio],input[type=file]').uniform();

	$('select').select2();

	// Form Validation
    $("#add_category").validate({
		rules:{
			cat_name:{
				required:true
			},
			description:{
				required:true,
			},
			// url:{
			// 	required:true,
			// 	url: true
			// }
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
	// Form Validation for products
    $("#add_products").validate({
		rules:{
			parent_id:{
				required:true
			},
			product_name:{
				required:true
			},
			product_code:{
				required:true
			},
			product_color:{
				required:true
			},
			description:{
				required:true,
			},
			product_price:{
				required:true,
				number:true
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
	// Edit Validation for products
    $("#edit_products").validate({
		rules:{
			category_id:{
				required:true
			},
			product_name:{
				required:true
			},
			product_code:{
				required:true
			},
			product_color:{
				required:true
			},
			description:{
				required:true,
			},
			price:{
				required:true,
				number:true
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

    $("#basic_validate").validate({
		rules:{
			required:{
				required:true
			},
			email:{
				required:true,
				email: true
			},
			date:{
				required:true,
				date: true
			},
			url:{
				required:true,
				url: true
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


	$("#number_validate").validate({
		rules:{
			min:{
				required: true,
				min:10
			},
			max:{
				required:true,
				max:24
			},
			number:{
				required:true,
				number:true
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

	$("#password_validate").validate({
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

	$("#delCat").click(function(){

			if(confirm('Are you want to delete this Category ..?')){
				return true;
			}else {
				return false;
			}
 });


 $(document).ready(function(){
     var maxField = 10; //Input fields increment limitation
     var addButton = $('.add_button'); //Add button selector
     var wrapper = $('.field_wrapper'); //Input field wrapper
     var fieldHTML = '<div style="margin-top:5px;"><input style="margin-right: 3px;" type="text" name="sku[]" id="sku" placeholder="Sku"/><input style="margin-right: 3px;" type="text" name="size[]" id="size" placeholder="Size" /><input style="margin-right: 3px;" type="text" name="price[]" id="price" placeholder="Price"/><input style="margin-right: 3px;" type="text" name="stock[]" id="stock" placeholder="Stock"/><a href="javascript:void(0);" class="remove_button">Remove </div>'; //New input field html
     var x = 1; //Initial field counter is 1

     //Once add button is clicked
     $(addButton).click(function(){
         //Check maximum number of input fields
         if(x < maxField){
             x++; //Increment field counter
             $(wrapper).append(fieldHTML); //Add field html
         }
     });

     //Once remove button is clicked
     $(wrapper).on('click', '.remove_button', function(e){
         e.preventDefault();
         $(this).parent('div').remove(); //Remove field html
         x--; //Decrement field counter
     });
 });


 $(".del").click(function(){
	 var id = $(this).attr('rel');
	 var deleteFunction = $(this).attr('rel1');

	 swal({
		  title: 'Are you sure ?',
		  text: "You won't be able to Delete this Product!!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
	 },
	 function(){
		 window.location.href="/admin/"+deleteFunction+"/"+id;
	 });

 });




 $(".delaa").click(function(){
	 var id = $(this).attr('relaa');
	 var deleteFunction = $(this).attr('rel1aa');

	 swal({
		  title: 'Are you sure ?',
		  text: "You want to approve this!!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, Apprive it!'
	 },
	 function(){
		 window.location.href="/admin/"+deleteFunction+"/"+id;
	 });

 });





 $(".del1").click(function(){
	 var id = $(this).attr('rel');
	 var deleteFunction = $(this).attr('rel1');

	 swal({
		  title: 'Are you sure ?',
		  text: "You won't be able to Delete this Category!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
	 },
	 function(){
		 window.location.href="/admin/"+deleteFunction+"/"+id;
	 });

 });


 $(".delCoupon").click(function(){
	 var id = $(this).attr('rel');
	 var deleteFunction = $(this).attr('rel1');

	 swal({
		  title: 'Are you sure ?',
		  text: "You won't be able to Delete this Category!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
	 },
	 function(){
		 window.location.href="/admin/"+deleteFunction+"/"+id;
	 });

 });


 $(".delbanner").click(function(){
	 var id = $(this).attr('rel');
	 var deleteFunction = $(this).attr('rel1');

	 swal({
		  title: 'Are you sure ?',
		  text: "You won't be able to Delete this Banner!",
		  type: 'warning',
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
	 },
	 function(){
		 window.location.href="/admin/"+deleteFunction+"/"+id;
	 });

 });

});
