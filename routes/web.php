<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 
//home Route
Route::get('/','IndexController@index')->name('index');

Route::get('/contact-us','IndexController@contactus')->name('contactus');
Route::post('/contactus','IndexController@contact_us');
Route::get('/track_order','IndexController@track_order')->name('track_order');
Route::get('/watch','ProductsController@watch')->name('watch');

Route::get('/brands','IndexController@brands');
Route::get('/fav','IndexController@fav');
Route::get('/offer','IndexController@offer');
Route::get('/cashback','IndexController@cashback');
Route::get('/category','IndexController@category');
Route::get('/career','IndexController@career');

Route::match(['get','post'],'/shops','IndexController@shops');
 
Route::get('/news','IndexController@news');
Route::get('/news2','IndexController@news2');





// Category route
Route::get('products/{url}','ProductsController@listCategory')->name('listing');

Route::get('products2/{url}','ProductsController@listCategory2')->name('listing2');


Route::get('products3/{url}','ProductsController@listCategory3')->name('listing3');




Route::get('/login-registerj', 'UserController@logRegj')->name('logRegj');

Route::post('/search','ProductsController@searchCategory')->name('search');

Route::get('/search2/{id}','ProductsController@searchCategory2')->name('search2');

Route::get('/allp','ProductsController@allpv')->name('allp');



Route::get('/shop/{id}','ProductsController@shop')->name('shop');


Route::get('/admin/createinvoice','ProductsController@createinvoice')->name('createinvoice');
Route::get('/admin/createinvoice_qr','ProductsController@createinvoice_qr')->name('createinvoice_qr');
Route::get('/admin/createinvoice_qrp','ProductsController@createinvoice_qrp')->name('createinvoice_qrp');



Route::get('/admin/createinvoice/{id}','ProductsController@createinvoicedelete')->name('createinvoicedelete');





Route::get('/admin/createinvoice_user','ProductsController@createinvoice_user')->name('createinvoice_user');

Route::post('/admin/adduser_by_a','UserController@adduser_by_a')->name('adduser_by_a');
Route::post('/admin/adduser_by_inv','AdminController@adduser_by_inv')->name('adduser_by_inv');

    




Route::match(['get','post'],'/checkout2', 'ProductsController@checkout2')->name('checkout2');
Route::match(['get','post'],'/order-review', 'ProductsController@orderReview')->name('orderReview');

Route::get('product/{id}','ProductsController@productdetails')->name('product-details');
// Product Attribute price
Route::get('/get-product-price','ProductsController@productPrice');
//Product Add to cart
Route::match(['get','post'],'/add-cart', 'ProductsController@addtocart');
//Cart
Route::match(['get','post'],'/cart', 'ProductsController@cart')->name('cart');

//Cart delete
Route::get('/cart-delete/{id}','ProductsController@deleteCart');

//Update Cart Quantity
Route::get('/cart/update-quantity/{id}/{quantity}/{color}/{size}/{pid}/{qty}','ProductsController@updateQuantity');
//Apply Coupon
Route::match(['get','post'],'/cart/apply-coupon', 'ProductsController@applyCoupon');

Route::match(['get','post'],'admin/login', 'AdminController@login')->name('login');
Route::get('/logout', 'AdminController@logout')->name('logout');

//User login and register
Route::get('/login-register', 'UserController@logReg')->name('logReg');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/fp', 'UserController@fp')->name('fp');
Route::get('/r', 'UserController@refund')->name('refund');



Route::get('/p', 'UserController@p')->name('p');
Route::get('/t', 'UserController@t')->name('t');


Route::get('/about', 'UserController@about')->name('about');
Route::get('/fq', 'UserController@fq')->name('fq');



Route::get('/medicine', 'IndexController@medicine')->name('medicine');
Route::get('/medicine2', 'IndexController@medicine2')->name('medicine2');



Route::get('/invoice/{id}/{inv}', 'UserController@invoice')->name('invoice');

Route::get('/quotation/{id}/{inv}', 'UserController@quotation')->name('quotation');








Route::get('/invoicee/{id}/{inv}', 'UserController@invoicee')->name('invoicee');


Route::get('/invoice_re/{id}/{inv}', 'UserController@invoice_re')->name('invoice_re');



Route::post('/user-register', 'UserController@userReg');
Route::post('/user-register2', 'UserController@userReg2');
Route::post('/medicine3',  'UserController@userReg3');






Route::get('/logout', 'UserController@logout');

Route::post('/sign-in', 'UserController@login');

//Route::match(['get','post'],'/login-register', 'UserController@logReg')->name('logReg');
Route::match(['get','post'],'/check-mail', 'UserController@checkMail');


//User
Route::group(['middleware' => ['fontlogin']],function(){
  Route::match(['get','post'],'/my-account', 'UserController@account')->name('account');
    Route::match(['get','post'],'/profile', 'UserController@profile')->name('profile');

  
  
  
        
        Route::match(['get','post'],'/checkout', 'ProductsController@checkout')->name('checkout');
        Route::match(['get','post'],'/due_paid/{id}/{total}/{paid}/{due}', 'ProductsController@due_paid')->name('due_paid');

  
  
  

  
  
  
  
  
    Route::match(['get','post'],'/createb', 'UserController@createb')->name('createb');
    Route::match(['get','post'],'/updateb', 'UserController@updateb')->name('updateb');
  

  
    
    Route::match(['get','post'],'/create2', 'UserController@create2')->name('create2');
        Route::match(['get','post'],'/create7', 'UserController@create7')->name('create7'); 

  
  
  
  
  Route::match(['get','post'],'/my_generation', 'UserController@my_generation')->name('my_generation');
  
  
  Route::match(['get','post'],'/my_l', 'UserController@my_l')->name('my_l');
  Route::match(['get','post'],'/my_w', 'UserController@my_w')->name('my_w');
  
  Route::match(['get','post'],'/my_g', 'UserController@my_g')->name('my_g');
  Route::match(['get','post'],'/my_gg', 'UserController@my_gg')->name('my_gg');
  
  
  

  
  Route::match(['get','post'],'/my_g2/{id}', 'UserController@my_g2')->name('my_g2');
  Route::match(['get','post'],'/my_r', 'UserController@my_r')->name('my_r');
  







  
  
  Route::match(['get','post'],'/shoporder', 'UserController@shoporder')->name('shoporder');
  Route::match(['get','post'],'/shopproduct', 'UserController@shopproduct')->name('shopproduct');
  Route::match(['get','post'],'/shopwallet', 'UserController@shopwallet')->name('shopwallet');
  Route::match(['get','post'],'/shopwithdraw', 'UserController@shopwithdraw')->name('shopwithdraw');
  Route::match(['get','post'],'/shopallproduct', 'UserController@shopallproduct')->name('shopallproduct');
  Route::match(['get','post'],'/shopallproduct2', 'UserController@shopallproduct2')->name('shopallproduct2');
  
  
  
  Route::match(['get','post'],'/shopaddpoduct', 'UserController@shopaddpoduct')->name('shopaddpoduct');
  
  
  Route::match(['get','post'],'/addproductmm', 'ProductsController@addproductmm')->name('addproductmmt');
  Route::match(['get','post'],'/addproductmmm', 'ProductsController@addproductmmm')->name('addproductmmm');












    
Route::match(['get','post'],'/join', 'UserController@join')->name('join');
Route::match(['get','post'],'/joining_payment', 'UserController@joining_payment')->name('joining_payment');
Route::match(['get','post'],'/joining_payment_ttt', 'UserController@joining_payment_ttt')->name('joining_payment_ttt');






Route::match(['get','post'],'/uplink_payment', 'UserController@uplink_payment')->name('uplink_payment');
Route::match(['get','post'],'/joining_payment_check', 'UserController@joining_payment_check')->name('joining_payment_check');
  
  
  
  Route::post('/check-user-pwd','UsersController@chkUserPassword');
  Route::post('/update-user-pwd', 'UserController@upPass');


  
  Route::match(['get','post'],'/place-order', 'ProductsController@placeOrder');
  Route::match(['get','post'],'/place-order2/{id}', 'ProductsController@placeOrder2');
  
  Route::get('/place-order3/{resone}/{card_type}/{amount}/{status}/{bank_tran_id}/{tran_id}', 'ProductsController@placeOrder3');
  
  
  // Route::get('/cart/update-quantity/{id}/{quantity}/{color}/{size}/{pid}/{qty}','ProductsController@updateQuantity');

  
  
  Route::match(['get','post'],'/thanks', 'ProductsController@thanks');
  
  Route::match(['get','post'],'/orders', 'ProductsController@orders');
  Route::match(['get','post'],'/orders_res', 'ProductsController@orders_res');
  
  Route::match(['get','post'],'/orders_res_send', 'UserController@orders_res_send');
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  Route::match(['get','post'],'/invite', 'ProductsController@invite');
  Route::match(['get','post'],'/t_histort', 'ProductsController@t_histort');
  Route::match(['get','post'],'/my_w_a', 'ProductsController@my_w_a');
  
  
  
  
  Route::match(['get','post'],'/order-details/{id}', 'ProductsController@orderdetails');
});



//End user login register

Route::group(['middleware' => ['auth']],function(){
    
    
      Route::match(['get','post'],'/admin/cuonedit/{id}','CategoryController@cuonedit')->name('cuonedit');




  Route::match(['get','post'],'/orders_res_send2', 'UserController@orders_res_send2');





    
  Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard');
  Route::get('admin/settings', 'AdminController@settings')->name('settings');
  Route::get('/admin/check-password', 'AdminController@chkPassword')->name('chkPassword');
  Route::match(['get','post'],'/admin/update-password', 'AdminController@updatePsw')->name('updatePsw');
  Route::match(['get','post'],'/admin/update-passwordp', 'AdminController@updatePswp')->name('updatePswp');

  // Category  Route (Admin)
  
      Route::match(['get','post'],'/admin/add_fund_a','CategoryController@add_fund_a')->name('add_fund_a');
  
  
  
  Route::match(['get','post'],'/admin/add-category','CategoryController@add_category')->name('add_category');
  Route::match(['get','post'],'/admin/add-categoryc','CategoryController@add_categoryc')->name('add_categoryc');
  
  
  
  
  
  
  
  
    Route::match(['get','post'],'/admin/add_coupon','CategoryController@add_coupon')->name('add_coupon');
 
 
 
  Route::match(['get','post'],'/admin/view_coupon','CategoryController@view_coupon')->name('view_coupon');
  
  
   
  Route::match(['get','post'],'/admin/view_request','CategoryController@view_request')->name('view_request');
  
  
  
    Route::match(['get','post'],'/admin/view_stock','CategoryController@view_stock')->name('view_stock');
  
  
    Route::match(['get','post'],'/admin/view_report','CategoryController@view_report')->name('view_report');
  
  
  
  
  
  
  
  Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@edit_category')->name('edit_category');
  Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@delete_category')->name('delete_category');
  Route::get('/admin/view-categories','CategoryController@view_category')->name('view_category');


// brand  Route (Admin)
  Route::match(['get','post'],'/admin/add-category2','CategoryController@add_category2')->name('add_category2');
  Route::match(['get','post'],'/admin/edit-category2/{id}','CategoryController@edit_category2')->name('edit_category2');
  Route::match(['get','post'],'/admin/delete-category2/{id}','CategoryController@delete_category2')->name('delete_category2');
  Route::get('/admin/view-categories2','CategoryController@view_category2')->name('view_category2');




  Route::match(['get','post'],'/admin/add-category2s','CategoryController@add_category2s')->name('add_category2s');
  Route::match(['get','post'],'/admin/edit-category2s/{id}','CategoryController@edit_category2s')->name('edit_category2s');
  Route::match(['get','post'],'/admin/delete-category2s/{id}','CategoryController@delete_category2s')->name('delete_category2s');
  Route::get('/admin/view-categories2s','CategoryController@view_category2s')->name('view_category2s');








  Route::match(['get','post'],'/admin/add-category3','CategoryController@add_category3')->name('add_category3');
  Route::match(['get','post'],'/admin/edit-category3/{id}','CategoryController@edit_category3')->name('edit_category3');
  Route::match(['get','post'],'/admin/delete-category3/{id}','CategoryController@delete_category3')->name('delete_category3');
    Route::get('/admin/view-categories3','CategoryController@view_category3')->name('view_category3');

  
  
  
  
  
  
  Route::match(['get','post'],'/admin/add-category3_ins','CategoryController@add_category3_ins')->name('add_category3_ins');
  Route::match(['get','post'],'/admin/edit-category3_ins/{id}','CategoryController@edit_category3_ins')->name('edit_category3_ins');
  Route::match(['get','post'],'/admin/delete-category3_ins/{id}','CategoryController@delete_category3_ins')->name('delete_category3_ins');
    Route::get('/admin/view-categories3_ins','CategoryController@view_category3_ins')->name('view_category3_ins');

  
  
  
   Route::match(['get','post'],'/admin/add-category3_mont','CategoryController@add_category3_mont')->name('add_category3_mont');
  Route::match(['get','post'],'/admin/edit-category3_mont/{id}','CategoryController@edit_category3_mont')->name('edit_category3_mont');
  Route::match(['get','post'],'/admin/delete-category3_mont/{id}','CategoryController@delete_category3_mont')->name('delete_category3_mont'); 
    Route::get('/admin/view-categories3_mont','CategoryController@view_category3_mont')->name('view_category3_mont');

  
  
  
  
  
  
    Route::match(['get','post'],'/admin/add-category3_affi','CategoryController@add_category3_affi')->name('add_category3_affi');
    Route::match(['get','post'],'/admin/edit-category3_affi/{id}','CategoryController@edit_category3_affi')->name('edit_category3_affi');
    Route::match(['get','post'],'/admin/delete-category3_affi/{id}','CategoryController@delete_category3_affi')->name('delete_category3_affi'); 
    Route::get('/admin/view-categories3_affi','CategoryController@view_category3_affi')->name('view_category3_affi');
  
  
  
  
  
  
  
  
    Route::match(['get','post'],'/admin/add-feature1','CategoryController@add_feature1')->name('add_feature1');
    Route::match(['get','post'],'/admin/edit-feature1/{id}','CategoryController@edit_feature1')->name('edit_feature1');
    Route::match(['get','post'],'/admin/delete-feature1/{id}','CategoryController@delete_feature1')->name('delete_feature1'); 
    
    Route::get('/admin/view-feature1','CategoryController@view_feature1')->name('view_feature1');
  
  
  
  
  
  
  
  
     Route::get('/admin/view_applicant','AdminController@view_applicant')->name('view_applicant');

       Route::get('/admin/view_applicant2','AdminController@view_applicant2')->name('view_applicant2');

  




  Route::match(['get','post'],'/admin/add-category4','CategoryController@add_category4')->name('add_category4');
  Route::match(['get','post'],'/admin/edit-category4/{id}','CategoryController@edit_category4')->name('edit_category4');
  Route::match(['get','post'],'/admin/delete-category4/{id}','CategoryController@delete_category4')->name('delete_category4');
  Route::get('/admin/view-categories4','CategoryController@view_category4')->name('view_category4');



  // Products  Route (Admin)
  Route::match(['get','post'],'/admin/add-product','ProductsController@add_products')->name('add_products');
  Route::match(['get','post'],'/admin/add-productm','ProductsController@add_productsm')->name('add_productsm');
  
  
  
  Route::match(['get','post'],'/admin/add-bulk','ProductsController@add_bulk')->name('add_bulk');
  
  
  Route::get('/admin/view-products','ProductsController@view_products')->name('view_products');
  
  
  
  Route::get('/admin/view-products_dis','ProductsController@view_products_dis')->name('view_products_dis');
  Route::get('/admin/view-products_camp','ProductsController@view_products_camp')->name('view_products_camp');
  
  
  
  
  
  
  
  
  
    Route::get('/admin/view-products2','ProductsController@view_products2')->name('view_products2');

  
  Route::get('/admin/view-productsm','ProductsController@view_productsm')->name('view_productsm');
  
   Route::match(['get','post'],'/admin/c_invoice','ProductsController@c_invoice')->name('c_invoice');
   Route::match(['get','post'],'/admin/c_invoice_qr','ProductsController@c_invoice_qr')->name('c_invoice_qr');
  
  
  
  
  
  
  
  Route::get('/admin/g_trx','ProductsController@g_trx')->name('g_trx');
  
  
  
  
  Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@edit_products')->name('edit_products');
  Route::get('/admin/delete-product-image/{id}','ProductsController@deleteProductsImg')->name('deleteProductsImg');
  
  
  Route::get('/admin/delete-product/{id}','ProductsController@deleteProducts')->name('deleteProducts');

  // Products  Attributes (Admin)
  Route::match(['get','post'],'/admin/add-attribute/{id}','ProductsController@add_attribute')->name('add_attribute');
  Route::match(['get','post'],'/admin/edit-attribute/{id}','ProductsController@edit_attribute')->name('edit_attribute');
  Route::get('/admin/delete-attribute/{id}','ProductsController@deleteAttribute')->name('deleteAttribute');

  Route::match(['get','post'],'/admin/add-images/{id}','ProductsController@add_images')->name('add_images');
  Route::get('/admin/delete-image/{id}','ProductsController@deleteImage');

  //Coupons  rote
  Route::match(['get','post'],'admin/add-coupon','CouponController@addCoupon')->name('add_coupon');
  Route::match(['get','post'],'admin/view-coupons','CouponController@viewCoupon')->name('view_coupon');

  
  
    
    Route::match(['get','post'],'admin/view-couponsm','CouponController@viewCouponm')->name('view_couponm');
    Route::match(['get','post'],'admin/view-couponsn','CouponController@viewCouponn')->name('view_couponn');
  
  
  
  
  
  
  
  Route::match(['get','post'],'admin/edit-coupon/{id}','CouponController@editCoupon')->name('edit_coupon');
  Route::get('/admin/delete-coupon/{id}','CouponController@deleteCoupon');

  //Banners Route
  Route::match(['get','post'],'admin/add-banner','BannersController@addBanner')->name('add_banner');
  Route::match(['get','post'],'admin/view-banners','BannersController@viewBanner')->name('view_banner');
  Route::match(['get','post'],'admin/edit-banners/{id}','BannersController@editBanner')->name('edit_banner');
  Route::match(['get','post'],'admin/delete-banners/{id}','BannersController@deleteBanner');

  //Orders Route
  Route::get('/admin/view-orders','ProductsController@view_orders')->name('view_orders');
    Route::get('/admin/view-quotation','ProductsController@view_quotation')->name('view_quotation');
  
  Route::get('/admin/view-orders-details/{id}','ProductsController@view_orders_details')->name('view_orders_details');
  // Update Order Status

  Route::get('/contact_request','AdminController@contactReq')->name('contactReq');

	Route::post('/admin/update-order-status','ProductsController@updateOrderStatus');
	Route::post('/admin/editmer','AdminController@updateb');
	
	
	  Route::get('/admin/view_payment','AdminController@view_payment')->name('view_payment');
	  Route::get('/admin/view_payment_r','AdminController@view_payment_r')->name('view_payment_r');
	  
	  
	  
	  
	  Route::get('/admin/view_payment2','AdminController@view_payment2')->name('view_payment2');
	  Route::get('/admin/view_payment_g','AdminController@view_payment_g')->name('view_payment_g');
	  
	  
	  
	  
	  Route::get('/admin/pin_payment','AdminController@pin_payment')->name('pin_payment');
	  
	  
	  
	  Route::get('/admin/view_genaration','AdminController@view_genaration')->name('view_genaration');
	  
	  
//	  Route::get('/admin/view_genaration_u/{id}','AdminController@view_genaration_u')->name('view_genaration_u');
	    Route::match(['get','post'],'admin/view_genaration_u/{id}','AdminController@view_genaration_u');

	  
	  
	  
	  
  Route::get('/admin/delete_pay/{id}','AdminController@delete_pay')->name('delete_pay');
  Route::get('/admin/app_pay/{id}','AdminController@app_pay')->name('app_pay');
  Route::get('/admin/app_pay2/{id}','AdminController@app_pay2')->name('app_pay2');
  Route::get('/admin/app_pay_g/{id}','AdminController@app_pay_g')->name('app_pay_g');
  Route::get('/admin/app_pay_r/{id}','AdminController@app_pay_r')->name('app_pay_r');
  
  Route::get('/admin/app_pay_p/{id}','AdminController@app_pay_p')->name('app_pay_p');
  
  

	
	
	
	
  Route::match(['get','post'],'admin/view-coupons2','CouponController@viewCoupon2')->name('view_coupon2');
  
  
  
  
  
  
  
    Route::match(['get','post'],'admin/view-coupons3/{id}','CouponController@viewCoupon3')->name('view_coupon3');
  
	
	
	  Route::match(['get','post'],'admin/view-coupons7','CouponController@viewCoupon7')->name('view_coupon7');
  
  
	
	

});

Auth::routes();

Route::get('/home', 'IndexController@index')->name('home');
