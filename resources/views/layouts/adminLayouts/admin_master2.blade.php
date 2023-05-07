<?php
$a_admin=Auth::user()->admin;



;?>



@if($a_admin == 1)

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin @yield('title')</title> 
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-responsive.min.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/fullcalendar.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/uniform.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/matrix-style.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/matrix-media.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" />

{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css"> --}}

<link href="{{ asset('assets/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('assets/admin/css/jquery.gritter.css') }}" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="{{ url('/admin/dashboard') }}">Admin</a></h1>
</div>
<!--close-Header-part-->

@include('layouts.adminLayouts.admin_header')
@include('layouts.adminLayouts.admin_sidebar')


@yield('content')


<!--end-main-container-part-->
@include('layouts.adminLayouts.admin_footer')




<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>

<script src="{{ asset('assets/admin/js/jquery.ui.custom.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.uniform.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/admin/js/matrix.js') }}"></script>

<script src="{{ asset('assets/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/matrix.form_validation.js') }}"></script>

<script src="{{ asset('assets/admin/js/matrix.tables.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>

{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
  $( "#expairDate" ).datepicker();
} ); --}}
</script>
</body>
</html>
@else
Your not permit to view this page. 


<?php
    echo '<meta http-equiv="refresh" content="0;URL=../" />';

;?>

@endif

