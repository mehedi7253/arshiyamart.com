  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container" >
        <div class="row" >
        <div class="col-md-12" >
          <div class="aa-footer-top-area" >
            <div class="row" >
         
              <?php
     $bannerss=DB::table('banners')->where('id',1017)->first();
     ;?>

            {{@$bannerss->image}}
            
    <?php
  
    
$results9 = DB::select('select * from banners where id = :id', ['id' => 9]);
$results10 = DB::select('select * from banners where id = :id', ['id' => 10]);
$results11 = DB::select('select * from banners where id = :id', ['id' => 11]); 
$results15 = DB::select('select * from banners where id = :id', ['id' => 15]); 
$results16 = DB::select('select * from banners where id = :id', ['id' => 16]);

$results28 = DB::select('select * from banners where id = :id', ['id' => 28]);
$results29 = DB::select('select * from banners where id = :id', ['id' => 29]);

$results30 = DB::select('select * from banners where id = :id', ['id' => 30]);
$results888 = DB::select('select * from banners where id = :id', ['id' => 888]);





    ;?>        
          
@foreach($results9 as $t9)
     <?php 
         $h9=$t9->image;     
     ;?>
@endforeach
     
     
     

@foreach($results10 as $t10)
     <?php 
         $h10=$t10->image;     
     ;?>
@endforeach
   
   
@foreach($results11 as $t11)
     <?php 
         $h11=$t11->image;     
     ;?>
@endforeach   
   
   
@foreach($results15 as $t15)
     <?php 
         $h15=$t15->image;     
     ;?>
@endforeach  
   
@foreach($results16 as $t16)
     <?php 
         $h16=$t16->image;     
     ;?>
@endforeach 
   
   
   
@foreach($results28 as $t28)
     <?php 
         $h28=$t28->image;     
     ;?>
@endforeach
   
   
    
@foreach($results29 as $t29)
     <?php 
         $h29=$t29->image;     
     ;?>
@endforeach
    
    
@foreach($results30 as $t30)
     <?php 
         $h30=$t30->image;     
     ;?>
@endforeach 
    
           
@foreach($results888 as $t888)
     <?php 
        $talk=$t888->image;     
     ;?>
     
@endforeach      
     
     
              
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Quick Link</h3>
                    <ul class="aa-footer-nav">
                         @if (empty(Auth::check()))
                        
                        
                      <li><a href="{{ url ('/')}}/login-register">User Login</a></li>
                      @else
                       <li><a href="{{ url ('/')}}/my-account">User Profile</a></li>
                      @endif
                      
                      
                      
                      <li><a href="{{ url ('/')}}/career">Job/Career with us</a></li>
                      <li><a href="{{ url ('/')}}/about">About Us</a></li>
                      <li><a href="{{ url ('/')}}/contact-us">Contact Us</a></li>

                      <li><a href="{{ url ('/')}}/track_order">Track Your Order
</a></li>

                <?php
                	     

                $check_mul=DB::table('banners')->where('id',1010)->first();
                	

                ;?>          
                          
        @if( $check_mul->image == 1 )    
                   
                   @if (empty(Auth::check()))
                                                <li style="margin-top:10px"><a href="{{ url ('/')}}/login-register?m=1" style="background:red; color:white; border-radius:5px; padding:4px;">Be Marchant/Create Store</a></li>

                   @else
                   
                   
                   
                    <?php
                     $user_id = Auth::user()->id;
                     $business_count=DB::table('shops')->where('owner_user_id',$user_id)->count();
                     ?>
                     
                     @if($business_count < 1)
                     <li style="margin-top:10px"><a href="{{ url ('/')}}/createb" style="background:red; color:white; border-radius:5px; padding:4px;">Be Marchant/Create Store</a></li>
                    @else
                     <li style="margin-top:10px"><a href="{{ url ('/')}}/my-account?store=1" style="background:red; color:white; border-radius:5px; padding:4px;">My Store Dashboard</a></li>


                     @endif
        
        
                @endif
                            


        @endif






                      <li><a href="<?php echo $h30?>"><img src="/app/icon_img/app_w.png" style="width:200px; margin-top:10px"> </a></li>



                    </ul>
                  </div>
                </div>
              </div>
              
              
              
              
              
              
              
              <div class="col-md-2 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Our Policy</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="{{ url('/') }}/t">Terms & Condition</a></li>
                      <li><a href="{{ url('/') }}/p">Privacy Policy</a></li>
                      <li><a href="{{ url('/') }}/r">Refund & Return policy</a></li>
                      <li><a href="{{ url('/') }}/fq">F A Q</a></li>
                     

                    </ul>
                  </div>
                  
                  
                  
            
                  
                  
                  
                </div>
              </div>
              
              
              

              
              
              
              <div class="col-md-4 col-sm-6" >
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                        <?php

$tags = explode(',',$h9);

foreach($tags as $key) {    
    echo '<a href="tel:'.$key.'"><p><span class="fa fa-phone"></span>'.$key.'</p></a>';    
}
?> 
                        
                        
                        
                        
                      
                      <p><span class="fa fa-envelope"></span><?php echo $h10?></p>
                      
                      
                      <p><span class="fa  fa-map-marker"></span><?php echo $h15?></p>
                    
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                     
                    
                    </address>
                    <div class="aa-footer-social">
                      <a href="<?php echo $h11?>" target="_blank"><span class="fa fa-facebook" style="color:white; font-size:130%"></span></a>
                      
                      
                                         
                                         
<?php 
	$ins_prmi=DB::table('banners')->where('id',41)->first();
	
	?>	
                                         
                                            <a href="{{ $ins_prmi->image }}" target="_blank"><span class="fa fa-instagram" style="color:white; font-size:130%" ></span></a>

                                       <a href="<?php echo $h29?>" target="_blank"><span class="fa fa-youtube" style="color:white; font-size:130%"></span></a>
  
                   
                   
                    </div>
                  </div>
                </div>
              </div>
              
              
                      <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    
                    
                           <div class="aa-footer-widget">
                    <h3>We Accept</h3>
                    <ul class="aa-footer-nav">
                      
                      <li><img src="https://www.milimishi.com/img/pgw.png" style="width:95%"> </li>
                                            
                                            
                                            <li style="margin-top:20px">
                                            
                                           <!-- <form>
                                                @csrf
                                                <input name="sb" type="email"  placeholder=" Email ID" required="" style="width:70%; background:silver;text-align:center;">
                                                <input type="submit" name="submit" value="Subscribe" style="width:70%; background:{{$bg_t_c}}; color:white; margin:auto; text-align:center">
                                            </form>-->
                                            
                                            
                                            </li>

                    </ul>
                    
                    
                    
                  </div>

       
                    
                  </div>
                </div>
              </div>  
                   
<!--<div class="scrollToTop2">-->





<?php
$urla=$_SERVER['SERVER_NAME'];


/*if($urla =='www.milimishi.com')
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


            
            
            
            
            
            
            
            
            
              
            </div>
          </div>
        </div>
        
        
        
       
        
        
        
        
        
        
        
        
      </div>
     </div> 
    </div>




















    
<!-- Messenger Chat Plugin Code -->
<?php
$f_chat=DB::table('banners')->where('id',1013)->first();
?>
@if(!empty($f_chat->image))
<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "{{$f_chat->image}}");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    @endif
  <!-- / footer -->
