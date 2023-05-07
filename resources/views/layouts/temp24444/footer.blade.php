  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
    
    
    
   
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
                      <li><a href="{{ url ('/')}}/login-register">User Login</a></li>
                      <li><a href="{{ url ('/')}}/cart">Cart Page</a></li>
                      <li><a href="{{ url ('/')}}/about">About Us</a></li>

       
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Our Policy</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="{{ url('/') }}/t">Terms & Condition</a></li>
                      <li><a href="{{ url('/') }}/p">Privacy Policy</a></li>
                      <li><a href="{{ url('/') }}/fq">F & Q</a></li>

                    </ul>
                  </div>
                  
                  
                  
            
                  
                  
                  
                </div>
              </div>
              
              
              

              
              
              
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p><span class="fa fa-phone"></span><?php echo $h9?></p>
                      <p><span class="fa fa-envelope"></span><?php echo $h10?></p>
                      
                      
                      <p><span class="fa  fa-map-marker
"></span><?php echo $h15?></p>
                    
                       
                     
                    
                    </address>
                    <div class="aa-footer-social">
                      <a href="<?php echo $h11?>" target="_blank"><span class="fa fa-facebook" ></span></a>
                      <a href="<?php echo $h28?>" target="_blank"><span class="fa fa-twitter"></span></a>
                      
                      <a href="<?php echo $h29?>" target="_blank"><span class="fa fa-youtube"></span></a>
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
                      
                      <li><img src="http://milimishi.com/img/pgw.png" style="width:100%"> </li>
                                            
                                            
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

<div class="com_add">

<a  href="#" id="sidebarCollapse">
 <div style="height:50px; width:55px; left:0; position:fixed; float:left; z-index:9999; border-radius:8px;margin-left:-5px; bottom:320px; border:2px solid white; background:{{$bg_t_c}}; text-align:right">
    <img src="https://ictsky3.milimishi.com/assets/temp2/img/home_logo3.png" style="height:100%">


</div> 
</a>


</div>




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

    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/<?php echo $talk?>/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    

  </footer>
  <!-- / footer -->
