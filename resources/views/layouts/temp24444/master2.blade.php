<?php 
use App\Http\Controllers\Controller;
use App\Product;
$cartCount = Product::cartCount();
?>

<!DOCTYPE html>


 <?php
 
 
$results7 = DB::select('select * from banners where id = :id', ['id' => 7]);
$results9 = DB::select('select * from banners where id = :id', ['id' => 9]);

 
$results16 = DB::select('select * from banners where id = :id', ['id' => 16]);
$results17 = DB::select('select * from banners where id = :id', ['id' => 17]);
$results18 = DB::select('select * from banners where id = :id', ['id' => 18]);
$results27 = DB::select('select * from banners where id = :id', ['id' => 27]);
$results30 = DB::select('select * from banners where id = :id', ['id' => 30]);
$results37 = DB::select('select * from banners where id = :id', ['id' => 37]);





    ;?>        
          
 @foreach($results37 as $t37)
     <?php 
        $image37=$t37->image;     
     ;?>
@endforeach


@foreach($results7 as $t7)
     <?php 
        $image7=$t7->image;     
     ;?>
@endforeach



@foreach($results9 as $t9)
     <?php 
         $h=$t9->image;     
     ;?>
@endforeach
   
   
   
   
   
 
 @foreach($results16 as $t16)
     <?php 
         $h16=$t16->image;     
     ;?>
@endforeach
  
  
   @foreach($results17 as $t17)
     <?php 
         $h17=$t17->image;     
     ;?>
@endforeach
        
        
   @foreach($results18 as $t18)
     <?php 
         $h18=$t18->image;     
     ;?>
@endforeach
        
   @foreach($results27 as $t27)
     <?php 
         $h27=$t27->image;     
     ;?>
@endforeach
        
@foreach($results30 as $t30)
     <?php 
         $h30=$t30->image;     
     ;?>
@endforeach






<?php
$urla=$_SERVER['SERVER_NAME'];

/*
if($urla =='www.milimishi.com')
{
    $r=1;
}
elseif($urla =='milimishi.com')
{
    $r=1;
}
else
{
    echo '<meta http-equiv="refresh" content="0;URL=https://ictsky.com" />';

}*/



?>





    
    
<?php

     $bg_t_c=$image37;
       
?> 





<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta name="theme-color" content="{{$bg_t_c}}" />

    
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $h16;?></title>
    <meta name="Description" content="<?php echo $h17;?>" />
      <meta name="keywords" content="<?php echo $h18;?>">
    <!-- Font awesome -->
        <link rel="SHORTCUT ICON" href="{{url('/')}}/assets/admin/img/banners/<?php echo $h27;?>" />

    

    
    <link href="{{ asset('assets/temp2/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('assets/temp2/css/bootstrap.css') }}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ asset('assets/temp2/css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/temp2/css/jquery.simpleLens.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/temp2/css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/temp2/css/nouislider.css') }}">
    <!-- Theme color-->
    
   <!-- 
   @if($image37=="red")
       <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/red-theme.css') }}" rel="stylesheet">
   @elseif($image37=="dark-red")    
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/dark-red-theme.css') }}" rel="stylesheet">

   @elseif($image37=="green")    
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/green-theme.css') }}" rel="stylesheet">
   @elseif($image37=="lite-blue")    
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/lite-blue-theme.css') }}" rel="stylesheet">           
   @elseif($image37=="orange")    
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/orange-theme.css') }}" rel="stylesheet">

   @elseif($image37=="pink")    
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/pink-theme.css') }}" rel="stylesheet">

   @elseif($image37=="purple")    
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/purple-theme.css') }}" rel="stylesheet">

   @elseif($image37=="yellow")    
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/yellow-theme.css') }}" rel="stylesheet">

   
           
@else
           <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/default-theme.css') }}" rel="stylesheet">

    @endif-->
    
     
    
    
    <!-- <link id="switcher" href="{{ asset('assets/temp2/css/theme-color/bridge-theme.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/temp2') }}/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/temp2') }}/css/nouislider.css">

    <!-- Top Slider CSS -->
    <link href="{{ asset('assets/temp2/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Top Slider CSS -->
    <link href="{{ asset('assets/temp2/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ asset('assets/temp2/css/style.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>




    
    <style>
        
   
   
   
   
   
   
    
   
   
   
   

h2 {
  color: {{$bg_t_c}};  
}
.aa-primary-btn:hover, .aa-primary-btn:focus {
  color: {{$bg_t_c}}; 
  border-color: {{$bg_t_c}};
}
.aa-secondary-btn {  
  color: {{$bg_t_c}};  
}
.aa-secondary-btn:hover, .aa-secondary-btn:focus {
  background-color: {{$bg_t_c}};  
}
.aa-browse-btn {
  background-color: {{$bg_t_c}};  
  border: 1px solid {{$bg_t_c}};  
}
.aa-browse-btn:hover, .aa-browse-btn:focus {
  color: {{$bg_t_c}};
}
.aa-add-to-cart-btn:hover, .aa-add-to-cart-btn:focus {
  color: {{$bg_t_c}};
  border-color: {{$bg_t_c}};
}
.aa-filter-btn {
  background-color: {{$bg_t_c}};
  border: 1px solid {{$bg_t_c}};  
}
.aa-cart-view-btn {
  background-color: {{$bg_t_c}};  
}
#aa-header .aa-header-bottom .aa-header-bottom-area .aa-logo a > span {
  color: {{$bg_t_c}};  
}
#aa-header .aa-header-bottom .aa-header-bottom-area .aa-logo a strong {
  color: {{$bg_t_c}};
}
#aa-header .aa-header-bottom .aa-header-bottom-area .aa-search-box button {
  background-color: {{$bg_t_c}};  
}
#aa-header .aa-header-bottom .aa-cartbox .aa-cart-link {
  color: {{$bg_t_c}};  
}
#aa-header .aa-header-bottom .aa-cartbox .aa-cart-link .aa-cart-notify {
  border: 1px solid {{$bg_t_c}};  
  color: {{$bg_t_c}};  
}
#aa-header .aa-header-bottom .aa-cartbox .aa-cart-link .aa-cart-notify:after { 
  border-top-color: {{$bg_t_c}};  
}
#aa-header .aa-header-bottom .aa-cartbox .aa-cartbox-summary ul li .aa-remove-product:hover, #aa-header .aa-header-bottom .aa-cartbox .aa-cartbox-summary ul li .aa-remove-product:focus {
  border-color: {{$bg_t_c}};
}
#menu {
  background-color: {{$bg_t_c}}; 
}
#menu .menu-area .navbar-default .navbar-nav .open a {
  color: {{$bg_t_c}};
}
#menu .menu-area .navbar-default .navbar-nav .dropdown-menu li a {
  color: {{$bg_t_c}};
}
#menu .menu-area .navbar-default .navbar-nav .dropdown-menu li a:hover, #menu .menu-area .navbar-default .navbar-nav .dropdown-menu li a:focus { 
  background-color: {{$bg_t_c}};
}
.scrollToTop {
  background-color: {{$bg_t_c}};
  border: 1px solid {{$bg_t_c}};  
}
.scrollToTop:hover,
.scrollToTop:focus { 
  color: {{$bg_t_c}}; 
}
#wpf-loader-two .wpf-loader-two-inner:before {
  background: {{$bg_t_c}};  
}
#wpf-loader-two .wpf-loader-two-inner:after {
  background: {{$bg_t_c}};  
}
#wpf-loader-two {
  background-color: {{$bg_t_c}};  
}
#aa-slider .aa-slider-area .seq-title span {
  color: {{$bg_t_c}};  
}
#aa-slider .aa-slider-area .seq .seq-next:hover, #aa-slider .aa-slider-area .seq .seq-next:focus {  
  background-color: {{$bg_t_c}};
}
#aa-slider .aa-slider-area .seq .seq-prev:hover, #aa-slider .aa-slider-area .seq .seq-prev:focus {  
  background-color: {{$bg_t_c}};
}
#aa-promo .aa-promo-area .aa-promo-banner .aa-prom-content span {  
  color: {{$bg_t_c}};
}
#aa-promo .aa-promo-area .aa-promo-banner .aa-prom-content h4 a:hover {
  color: {{$bg_t_c}} !important;
}
.aa-products-tab li a:hover, .aa-products-tab li a:focus {  
  border-bottom: 1px solid {{$bg_t_c}};
}
.aa-products-tab li.active a {
  border-bottom: 1px solid {{$bg_t_c}} !important;  
}
.aa-products-tab li.active a:hover, .aa-products-tab li.active a:focus {  
  border-bottom: 1px solid {{$bg_t_c}};
}
.aa-product-catg li figure .aa-add-card-btn:hover {
  color: {{$bg_t_c}};
}
.aa-product-catg li .aa-product-title a:hover, .aa-product-catg li .aa-product-title a:focus {
  color: {{$bg_t_c}};
}
.aa-product-catg li .aa-product-price {
  color: {{$bg_t_c}};  
}
.aa-product-catg li .aa-product-hvr-content a:hover, .aa-product-catg li .aa-product-hvr-content a:focus {
  color: {{$bg_t_c}};
}
#quick-view-modal .modal-content button.close:hover {
  color: {{$bg_t_c}}; 
}
#quick-view-modal .modal-content .aa-product-view-content .aa-price-block .aa-product-avilability span {
  color: {{$bg_t_c}};
}
#quick-view-modal .modal-content .aa-product-view-content .aa-prod-view-size a:hover, #quick-view-modal .modal-content .aa-product-view-content .aa-prod-view-size a:focus {
  border-color: {{$bg_t_c}};
  color: {{$bg_t_c}};
}
#quick-view-modal .modal-content .aa-product-view-content .aa-prod-quantity .aa-prod-category a {
  color: {{$bg_t_c}}; 
}
.slick-prev,
.slick-next {
  background-color: {{$bg_t_c}};
}
#aa-support .aa-support-area .aa-support-single span {
  color: {{$bg_t_c}}; 
}
#aa-testimonial .aa-testimonial-area .aa-testimonial-slider li.slick-active {
  background-color: {{$bg_t_c}};
}
.aa-latest-blog-single .aa-blog-img:hover .aa-blog-img-caption {
  background-color: {{$bg_t_c}};
}
.aa-latest-blog-single .aa-blog-info .aa-blog-title a:hover {
  color: {{$bg_t_c}};
}
.aa-latest-blog-single .aa-blog-info .aa-read-mor-btn {
  color: {{$bg_t_c}};  
}
.aa-latest-blog-single .aa-blog-info .aa-read-mor-btn:hover span, .aa-latest-blog-single .aa-blog-info .aa-read-mor-btn:focus span {  
  color: {{$bg_t_c}};
}
#aa-subscribe .aa-subscribe-area .aa-subscribe-form input[type="submit"] {
  background: {{$bg_t_c}} none repeat scroll 0 0;
  border: 1px solid {{$bg_t_c}};  
}
#aa-footer .aa-footer-bottom .aa-footer-bottom-area > p a:hover, #aa-footer .aa-footer-bottom .aa-footer-bottom-area > p a:focus {
  color: {{$bg_t_c}};
}
#aa-catg-head-banner .aa-catg-head-banner-area .aa-catg-head-banner-content .breadcrumb .active {
  color: {{$bg_t_c}};
}
#aa-product-category .aa-sidebar .aa-sidebar-widget h3 {
  color: {{$bg_t_c}};
  border-bottom: 1px solid {{$bg_t_c}};
}
#aa-product-category .aa-sidebar .aa-sidebar-widget .aa-catg-nav li a:hover, #aa-product-category .aa-sidebar .aa-sidebar-widget .aa-catg-nav li a:focus {
  color: {{$bg_t_c}};
}
#aa-product-category .aa-sidebar .aa-sidebar-widget .tag-cloud a:hover, #aa-product-category .aa-sidebar .aa-sidebar-widget .tag-cloud a:focus {
  background-color: {{$bg_t_c}};
}
#aa-product-category .aa-sidebar .aa-sidebar-widget .aa-recently-views ul li .aa-cartbox-info h4 a:hover, #aa-product-category .aa-sidebar .aa-sidebar-widget .aa-recently-views ul li .aa-cartbox-info h4 a:focus {
  color: {{$bg_t_c}};
}
#aa-product-category .aa-product-catg-content .aa-product-catg-head .aa-product-catg-head-right a:hover, #aa-product-category .aa-product-catg-content .aa-product-catg-head .aa-product-catg-head-right a:focus {
  color: {{$bg_t_c}};
}
#aa-product-category .aa-product-catg-content .aa-product-catg-pagination .pagination li a:hover,
#aa-product-category .aa-product-catg-content .aa-product-catg-pagination .pagination li span:hover {
  color: {{$bg_t_c}};
}
#aa-product-category .aa-product-catg-content .aa-product-catg-pagination .pagination li a:focus,
#aa-product-category .aa-product-catg-content .aa-product-catg-pagination .pagination li span:focus {
  background-color: {{$bg_t_c}};
}
#aa-product-details .aa-product-details-area .aa-product-details-content .aa-product-view-content .aa-prod-quantity .aa-prod-category a {
  color: {{$bg_t_c}};
}
#aa-product-details .aa-product-details-area .aa-product-details-bottom .nav-tabs li a:hover, #aa-product-details .aa-product-details-area .aa-product-details-bottom .nav-tabs li a:focus {
  color: {{$bg_t_c}};
}
#aa-product-details .aa-product-details-area .aa-product-details-bottom .aa-review-form .aa-review-submit {  
  background-color: {{$bg_t_c}};  
  border-color: {{$bg_t_c}};  
}
#aa-product-details .aa-product-details-area .aa-product-details-bottom .aa-review-form .form-control:focus {
  border-color: {{$bg_t_c}};
}
#cart-view .cart-view-area .cart-view-table .table tbody tr td .aa-cart-title {
  color: {{$bg_t_c}};
}
#cart-view .cart-view-area .cart-view-table .table tbody tr td .aa-cart-title:hover {
  color: {{$bg_t_c}};
}
#checkout .checkout-area .checkout-left .panel-group .panel-default .panel-heading .panel-title a { 
  color: {{$bg_t_c}};
}
#checkout .checkout-area .checkout-right h4 { 
  color: {{$bg_t_c}};
}
#login-modal .modal-dialog .aa-register-now a {
  color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-content .aa-blog-content-single h4 a:hover, #aa-blog-archive .aa-blog-archive-area .aa-blog-content .aa-blog-content-single h4 a:focus {
  color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-content .aa-blog-content-single .aa-article-bottom .aa-post-author a {
  border-bottom: 1px solid {{$bg_t_c}};
  color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget h3 {
  color: {{$bg_t_c}};
  border-bottom: 1px solid {{$bg_t_c}};  
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget .aa-catg-nav li a:hover, #aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget .aa-catg-nav li a:focus {
  color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget .tag-cloud a:hover, #aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget .tag-cloud a:focus {
  background-color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget .aa-sidebar-price-range .noUi-connect {
  background: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget .aa-recently-views ul li .aa-cartbox-info h4 a:hover, #aa-blog-archive .aa-blog-archive-area .aa-blog-sidebar .aa-sidebar-widget .aa-recently-views ul li .aa-cartbox-info h4 a:focus {
  color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-archive-pagination .pagination li a:hover,
#aa-blog-archive .aa-blog-archive-area .aa-blog-archive-pagination .pagination li span:hover {
  color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-archive-pagination .pagination li a:focus,
#aa-blog-archive .aa-blog-archive-area .aa-blog-archive-pagination .pagination li span:focus {
  background-color: {{$bg_t_c}};
}
#aa-blog-archive .aa-blog-archive-area .aa-blog-archive-pagination .pagination .active a {
  background-color: {{$bg_t_c}};
}
.aa-blog-details h2 a:hover, .aa-blog-details h2 a:focus {
  color: {{$bg_t_c}};
}
.aa-blog-details .aa-blog-content-single .blog-single-tag a:hover, .aa-blog-details .aa-blog-content-single .blog-single-tag a:focus {
  color: {{$bg_t_c}}; 
}
.aa-blog-details .aa-blog-content-single .blog-single-social a:hover, .aa-blog-details .aa-blog-content-single .blog-single-social a:focus {
  color: {{$bg_t_c}}; 
}
.aa-blog-details .aa-blog-navigation .aa-blog-prev {
  background-color: {{$bg_t_c}};
  border: 1px solid {{$bg_t_c}};  
}
.aa-blog-details .aa-blog-navigation .aa-blog-next {
  background-color: {{$bg_t_c}};
  border: 1px solid {{$bg_t_c}};  
}
.aa-blog-details .aa-blog-comment-threat .comments .commentlist li .reply-btn {
  background-color: {{$bg_t_c}};  
}
.aa-blog-details .aa-blog-comment-threat .comments .commentlist li .author-tag {
  background-color: {{$bg_t_c}};  
}
.aa-blog-details #respond input[type="text"]:focus,
.aa-blog-details #respond input[type="email"]:focus,
.aa-blog-details #respond input[type="url"]:focus {
  border-color: {{$bg_t_c}};
}
.aa-blog-details #respond textarea:focus {
  border-color: {{$bg_t_c}};
}
.aa-blog-details #respond .form-submit input:hover {
  color: {{$bg_t_c}} !important;
}
#aa-contact .aa-contact-area .aa-contact-address .aa-contact-address-left .comments-form .form-control:focus {
  border-color: {{$bg_t_c}};
}
#aa-contact .aa-contact-area .aa-contact-address .aa-contact-address-left .comments-form button {
  border: 1px solid {{$bg_t_c}};  
}
#aa-error .aa-error-area {
  border: 5px solid {{$bg_t_c}};  
}
#aa-error .aa-error-area h2 {
  border-bottom: 3px solid {{$bg_t_c}};  
}
#aa-error .aa-error-area a:hover, #aa-error .aa-error-area a:focus {
  color: {{$bg_t_c}};
  border-color: {{$bg_t_c}};
}
#aa-footer .aa-footer-bottom .aa-footer-bottom-area > p a:hover, #aa-footer .aa-footer-bottom .aa-footer-bottom-area > p a:focus {
  color: {{$bg_t_c}};
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: {{$bg_t_c}};
}
   
   
   
   
   
   
   
   
   
   
   
   
   
   
        
        


@media screen  and (min-width: 501px) {
                    .mob_add{
                    display:none;
                }
                
                   .com_add{
                    display:block;
                } 
}

@media only screen and (max-width: 500px) {
                        .mob_add{
                    display:block;
                }
                
                   .com_add{
                    display:none;
                }  

}


    
}
@media only screen and (max-width: 350px) {
                        .mob_add{
                    display:block;
                }
                
                   .com_add{
                    display:none;
                }         
                
}

    </style>
    




  </head>
  <body style="margin-top:54px">
   <!-- wpf loader Two -->
<!--    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>-->
    <!-- / wpf loader Two -->
  <!-- SCROLL TOP BUTTON -->
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  
  <!-- / header section -->

  <!-- / menu -->






@yield('content')






  <!-- Subscribe section -->
  <!-- <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- / Subscribe section -->

 @include('layouts.temp2.footer')

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form" action="">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="account.html">Register now!</a>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  <script src="{{ asset('assets/temp/js/jquery.js') }}"></script>

  <script src="{{ asset('assets/temp/js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('assets/temp/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/temp/js/price-range.js') }}"></script>
  <script src="{{ asset('assets/temp/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/temp/js/main.js') }}"></script>
  <script src="{{ asset('assets/temp/js/jquery.validate.js') }}"></script>
  <script src="{{ asset('assets/temp/js/passtrength.js') }}"></script>

  <!-- jQuery library -->
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
-->  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('assets/temp2') }}/js/bootstrap.js"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{ asset('assets/temp2') }}/js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{ asset('assets/temp2') }}/js/jquery.smartmenus.bootstrap.js"></script>
  <!-- To Slider JS -->
  <script src="{{ asset('assets/temp2') }}/js/sequence.js"></script>
  <script src="{{ asset('assets/temp2') }}/js/sequence-theme.modern-slide-in.js"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="{{ asset('assets/temp2') }}/js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="{{ asset('assets/temp2') }}/js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ asset('assets/temp2') }}/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="j{{ asset('assets/temp2') }}/js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="{{ asset('assets/temp2') }}/js/custom.js"></script>






<?php
$urla=$_SERVER['SERVER_NAME'];

/*
if($urla =='www.milimishi.com')
{
    $r=1;
}
elseif($urla =='milimishi.com')
{
    $r=1;
}
else
{
    echo '<meta http-equiv="refresh" content="0;URL=https://ictsky.com" />';

}
*/


?>
<!--<script type="text/javascript"
    src="http://code.jquery.com/jquery-1.10.1.min.js"></script>-->
    
<script type="text/javascript">


    $(document).ready(
            function() {
                setInterval(function() {
                    var randomnumber = Math.floor(Math.random() * 100);
                    $('#showww').load('https://{{$urla}}/cart_count.php');
                   $('#showw').load('https://{{$urla}}/cart_count.php');
                   $('#showwm').load('https://{{$urla}}/cart_count.php');

                }, 100);
            });

  
/* $(document).ready(function(){
     setInterval(function () {
                $('#showw').load('https://{{$urla}}/cart_count.php')
            }, 1000);

		});    
		*/
</script>


<div class="com_add">
<a class="aa-cart-link" href="{{ url('/cart') }}">
<div style="height:50px; width:55px; left:0; position:fixed; float:left; z-index:9999; bottom:250px;border-radius:8px; margin-left:-5px; border:2px solid white; background:{{$bg_t_c}}">
  <img class="cart2"  src="https://ictsky3.milimishi.com/assets/temp2/img/cart_logo3.png" style="height:100%">


        <div style="height:50px; left:0; position:fixed;  z-index:9999; bottom:250px; ">
           <p style="margin-left:18px; margin-top:0px; color:#0DB1F3; font-size:13px; color:white"><b><?php
           $cart_c=$cartCount;
           if($cart_c<10)
           {
               echo "0";
           }
           ;?> <span id="showw">{{ $cartCount }}</span></b></p> 
        </div> 
 
</div> 
</a>
</div>



                   
<!--<div class="scrollToTop2">-->
<a class="aa-cart-link" href="https://api.whatsapp.com/send?phone=+88{{$h}}&text=Hi!">
 <div style="height:50px; right:0; position:fixed;  margin-right:5px; z-index:9999; border-radius:50%; bottom:80px; ">
    <img src="{{ asset('app') }}/whatsapp.png" style="height:100%">


</div> 
</a>





































<div class="mob_add">
     <div style="height:40px; width:100%; bottom:0; position:fixed; float:left; z-index:19999; border:2px solid white; background:{{$bg_t_c}}; border:0px">
       



<a href="#" id="sidebarCollapse3">
 <div style="height:40px; left:5; position:fixed; float:left;  border:2px solid white; border-radius:50%; border:0px">
    <img src="https://ictsky3.milimishi.com/assets/temp2/img/home_logo3.png" style="height:100%">


</div> 
</a>






<a class="aa-cart-link" href="{{ url('/cart') }}">
<div class="cart" style="height:40px; left:60px; position:fixed; float:left;  border:2px solid white; border-radius:50%; border:0px">
    <img src="https://ictsky3.milimishi.com/assets/temp2/img/cart_logo3.png" style="height:100%">


       
           
       
 </div> 
 <div style="height:55px; left:76px; position:fixed; float:left;  border:2px solid white; border-radius:50%; border:0px;">
     <p style="font-size:13px; color:white"><b><?php
           $cart_c=$cartCount;
           if($cart_c<10)
           {
               echo "0";
           }
           ;?> <span id="showwm">{{ $cartCount }}</span></b></p> 
     </div>
</a>







<div style="height:40px; left:130px; position:fixed; float:left;  border:2px solid white; border-radius:50%; border:0px; margin-top:6px">
  

 @if (empty(Auth::check()))
                  <a href="{{ url('/login-register') }}">
                      <i class="fa fa-user" aria-hidden="true" style="font-size:30px; color:white"></i>
                      </a>
                  
                 
                  @else
                  <a href="{{ url('/my-account') }}">
                      
                      <i class="fa fa-user" aria-hidden="true" style="font-size:30px; color:white"></i>
                      </a>
                  @endif
       <a href="tel:{{$h}}" style="margin-left:30px; maargin-top:5px">
                      <i class="fa fa-phone" aria-hidden="true" style="font-size:30px; maargin-top:5px; color:white"></i>
                     
                      </a>
       
 </div> 






</div>

</div>
  





























        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        
   
<style>


p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a, a:hover, a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
#sidebar {
    width: 250px;
    position: fixed;
    top: 0;
    left: -250px;
    height: 100vh;
    z-index: 999;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
    overflow-y: scroll;
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);
}

#sidebar.active {
    left: 0;
}

#dismiss {
    width: 35px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    background: #7386D5;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    -webkit-transition: all 0.3s;
    -o-transition: all 0.3s;
    transition: all 0.3s;
}
#dismiss:hover {
    background: #fff;
    color: #7386D5;
}

.overlay {
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: rgba(0, 0, 0, 0.7);
    z-index: 998;
    display: none;
}

#sidebar .sidebar-header {
    padding: 10px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 10px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 5px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}


a[data-toggle="collapse"] {
    position: relative;
}

a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
    content: '\e259';
    display: block;
    position: absolute;
    right: 20px;
    font-family: 'Glyphicons Halflings';
    font-size: 0.6em;
}
a[aria-expanded="true"]::before {
    content: '\e260';
}


ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}
a.download {
    background: #fff;
    color: #7386D5;
}
a.article, a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}


/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */
#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
    position: absolute;
    top: 0;
    right: 0;
}



/* ---------------------------------------------------
    Flyto Style
----------------------------------------------------- */



/* helpers */
.flt-right { float: right; }

.text-uc { text-transform:uppercase; }

.clearfix:before,
.clearfix:after {
    content: " ";
    display: table;
}

.clearfix:after {
    clear: both;
}





</style>
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="wrapper" style="background:{{$bg_t_c}}">
            <!-- Sidebar Holder -->
            <nav id="sidebar" style="z-index:99999;">
                <div id="dismiss">
                    <i class="glyphicon glyphicon-arrow-left"></i>
                </div>
<!--
                <div class="sidebar-header">
                    <h3>Bootstrap Sidebar</h3>
                </div>-->

                <ul class="list-unstyled components">
                    <p>All Category</p>
                    
                    
              <?php
              $md = DB::table('banners')
       ->where(['id' => 1008])
        ->first();
      ;?>
      @if(!empty($md->image))
     
              <li style="background:silver"><a href="{{url('/')}}/medicine">Prescription Delivery</a></li>
              
      @endif
              
                         
                            <li style="background:silver;"><a href="{{url('/')}}/shops">All Shops</a></li>
                            <li  style="background:silver; color:balck"><a href="{{url('/')}}/brands">All Brands</a></li>
                            <li style="background:silver"><a href="{{url('/')}}/offer">Discount</a></li>
                            <li style="background:silver"><a href="{{url('/')}}//cashback">Cash Back Offer</a></li>

              
              
              
<?php
      $categoriess = DB::table('categories')->where(['parent_id'=>0])->orderby('o_c','ASC')->get();
?>

              @foreach ($categoriess as $cat)
                @if ($cat->status == "1")
              <li> <a href="#homeSubmenu{{ $cat->id }}" data-toggle="collapse" aria-expanded="false"><img src="{{url('/')}}/assets/admin/img/category_icon/{{$cat->img}}" style="max-width:30px;border-radius:4%; margin-right:3px; background:white">{{ $cat->name }}</a>
                
                   <ul class="collapse list-unstyled" id="homeSubmenu{{ $cat->id }}">
                <?php
                $mainn_c=$cat->id;
                
      $categoriess_s = DB::table('categories')->where(['parent_id'=>$mainn_c])->get();
      
      $ssmm=DB::table('categories')->where(['parent_id'=>$mainn_c])->count();
?>     

@if($ssmm>1)
                      @foreach ($categoriess_s as $sub_cat)
                        @if ($sub_cat->status == "1")
                        <li><a href="{{ asset('products/'.$sub_cat->url) }}/?scid={{$sub_cat->id}}"><i class="fa fa-circle" aria-hidden="true"></i>
{{ $sub_cat->name }}</a></li>
                        @endif
                      @endforeach
@else
<li> <a href="{{ asset('products/'.$cat->url) }}?cid={{ $cat->id}} ">{{ $cat->name }}</a>
@endif                      
                      
                      
                    </ul>

                
                
                
              </li>




            @endif
            @endforeach                    
                    
                    
                  
                 
                  
                  
                    
                    
                 
                    
                </ul>

                					
		
            </nav>

            <!-- Page Content Holder -->
            <div id="contrrent">

                
   <!--             
	<div class="com_add">

 <div style="height:50px; left:0; position:fixed; float:left; z-index:9999; border:2px solid white; border-radius:50%; bottom:420px; ">
 <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Open Sidebar</span>
                            </button>

</div> 



</div>
-->
                           
                        
	
        				
						
					<!--	
						
						 <button type="button" id="sidebarCollapse2" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Open Sidebar</span>
                            </button>-->
        </div>
</div>

        
        
        
        
        
        
        
        
      
        
        
        
        
        
        
        

        <div class="overlay"></div>


        <!-- jQuery CDN -->
        <!-- Bootstrap Js CDN -->
        <!-- jQuery Custom Scroller CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#dismiss, .overlay').on('click', function () {
                    $('#sidebar').removeClass('active');
                    $('.overlay').fadeOut();
                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
				$('#sidebarCollapse2').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
                $('#sidebarCollapse22').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
                
                
                	$('#sidebarCollapse3').on('click', function () {
                    $('#sidebar').addClass('active');
                    $('.overlay').fadeIn();
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
                
                
				
            });
        </script>
    
    
    
    
    
<!--    <script src="https://code.jquery.com/jquery.js"></script>
-->	

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script>
	(function ($, window, document, undefined) {
    $.fn.flyto = function ( options ) {
        
    // Establish default settings
        
        var settings = $.extend({
            item      : '.flyto-item',
            target    : '.flyto-target',
            button    : '.flyto-btn',
            shake     : true
        }, options);
        
        
        return this.each(function () {
            var 
                $this    = $(this),
                flybtn   = $this.find(settings.button),
                target   = $(settings.target),
                itemList = $this.find(settings.item);
            
        flybtn.on('click', function () {
            var _this = $(this),
                eltoDrag = _this.parent().find("img").eq(0);
        if (eltoDrag) {
            var imgclone = eltoDrag.clone()
                .offset({
                top: eltoDrag.offset().top,
                left: eltoDrag.offset().left
            })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': eltoDrag.height() /2,
                    'width': eltoDrag.width() /2,
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                    'top': target.offset().top + 10,
                    'left': target.offset().left + 15,
                    'height': eltoDrag.height() /2,
                    'width': eltoDrag.width() /2
            }, 1000, 'easeInOutExpo');
            
            if (settings.shake) {
            setTimeout(function () {
                target.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);
            }

    
            imgclone.animate({
                'width': 0,
                'height': 0
            }, function () {
                $(this).detach()
            });
        }
        });
        });
    }
})(jQuery, window, document);
	
	</script>
    <script>
        $('.items').flyto({
            item      : 'li',
            target    : '.cart',
            button    : '.my-btn'
        });
        
         /* $('.items').flyto({
            item      : 'li',
            target    : '.cart2',
            button    : '.my-btn'
        });
        */
        
        
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>
