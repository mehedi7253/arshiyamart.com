<!DOCTYPE html>
<html lang="en">

<head>
        <title> Admin LogIn</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-responsive.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/css/matrix-login.css') }}" />
        <link href="{{ asset('assets/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    
    
       @if (!empty(Auth::check()))
       
       <?php
       $user_id = Auth::user()->admin;
        if($user_id == 1){
        echo '<meta http-equiv="Refresh" content="0;URL=/admin/dashboard" />';
        }
       
       ?>
       
       @endif
    
    
    
    
    
    <body>
   
 <?php
 
 
$results7 = DB::select('select * from banners where id = :id', ['id' => 7]);






    ;?>        
          
          
@foreach($results7 as $t7)
     <?php 
        $image7=$t7->image;     
     ;?>
@endforeach     
        
         
  
        
        
        
        
        <div id="loginbox">
            <form id="loginform" class="form-vertical" action="{{ url('admin/login') }}" method="post">
              @csrf
				 <div class="control-group normal_text"> <h3><img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image7;?>" alt="Logo" style="height:70px; border-radius:8px"/></h3></div>

@if (Session::has('flash_message_error'))
         <div class="control-group">
             <div class="controls">
                 <div class="alert alert-danger">

                     <strong style="color:#000">{{ session('flash_message_error') }}</strong>

                 </div>
               </div>
         </div>
 @endif
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" name="email" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" name="submit" class="btn btn-success" value=" Login " /></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>

        <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/js/matrix.login.js') }}"></script>
    </body>

</html>
