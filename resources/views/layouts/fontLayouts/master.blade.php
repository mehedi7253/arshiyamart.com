<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-teleshop</title>
    <link href="{{ asset('assets/temp/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('assets/temp/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/temp/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/temp/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/temp/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/temp/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/temp/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/temp/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/temp/css/passtrength.css') }}" rel="stylesheet">



<link rel="stylesheet" type="text/css" href="{{ asset('assets/temp2') }}/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/temp2') }}/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets/temp2') }}/css/theme-color/default-theme.css" rel="``stylesheet">
    <link id="switcher" href="{{ asset('assets/temp2') }}/css/theme-color/bridge-theme.css" rel="stylesheet">
    <!-- Top Slider CSS -->
    <link href="{{ asset('assets/temp2/css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ asset('assets/temp2/css/style.css') }}" rel="stylesheet">



    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/temp/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/temp/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/temp/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/temp/images/ico/apple-touch-icon-57-precomposed.png') }}">
    
    
    
    <style>
        
        
        



@media only screen and (max-width: 500px) {
                        .mob_add{
                    display:none;
                }
                
                   .com_add{
                    display:block;
                } 

}


@media screen  and (min-width: 501px) {
                    .mob_add{
                    display:block;
                }
                
                   .com_add{
                    display:none;
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
    
    
    
</head><!--/head-->

<body>
    

@include('layouts.fontLayouts.header')


@yield('content')

@include('layouts.fontLayouts.footer')

  <script src="{{ asset('assets/temp/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/temp/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/temp/js/jquery.scrollUp.min.js') }}"></script>
  <script src="{{ asset('assets/temp/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/temp/js/price-range.js') }}"></script>
  <script src="{{ asset('assets/temp/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('assets/temp/js/main.js') }}"></script>
  <script src="{{ asset('assets/temp/js/jquery.validate.js') }}"></script>
  <script src="{{ asset('assets/temp/js/passtrength.js') }}"></script>
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
  <script type="text/javascript" src="j{{ asset('assets/temp2') }}/s/nouislider.js"></script>
  <!-- Custom js -->
  <script src="{{ asset('assets/temp2') }}/js/custom.js"></script>
</body>
</html>
