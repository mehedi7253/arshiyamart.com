 <?php
 
 
$results7 = DB::select('select * from banners where id = :id', ['id' => 7]);




 
    ;?>            
                
      
   
    
@foreach($results7 as $t7) 
     <?php 
        $image7=$t7->image;     
     ;?>   
@endforeach








<style>
 

#navbar {
  background-color:#EFF7F8;
  position: fixed;
  top: 0;
  width: 100%;
  display: block;
  transition: top 0.3s;
 
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 0px;
  text-decoration: none;
  font-size: 17px;
   color:black;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}








.dropdown2 {
  position: relative;
  display: inline-block;
}

.dropdown-content2 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content2 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content2 a:hover {background-color: #f1f1f1}

.dropdown2:hover .dropdown-content2 {
  display: block;
}

.dropdown2:hover .dropbtn {
  background-color: #3e8e41;
}
</style>






<div  class="com_add">
    





                
<div  style="height:40px; width:100%; top:0; position:fixed; float:left; z-index:19999; border:2px solid white;  border:0px;">
         
         
<div id="topbaru"  style="height:40px; width:100%; ; float:left; z-index:199999; border:2px solid white;  border:0px; display:block" >
         
<div id="navbar" style="float:left; width:100%">
    
    <div style="float:left; width:80%">
 <?php
 $h99=DB::table('banners')->where('id',9)->first();
 $h10=DB::table('banners')->where('id',10)->first();
 
$h9=$h99->image;
$tags = explode(',',$h9);
$i = 1;
foreach($tags as $key) {    
    echo '<a href="tel:'.$key.'"><p style="margin-left:8px; color:black; font-size:98%;margin-top:5px"><span class="fa fa-phone" style="color:black"></span> '.$key.' </p></a>';    
    
    
     if ($i++ == 1) break;
}


$h9=$h10->image;
$tags = explode(',',$h9);
$i = 1;
foreach($tags as $key) {  
    
    
      echo '<a href="'.$key.'" style="margin-left:10px;margin-top:5px" >
  <i class="fa fa-envelope" aria-hidden="true" style="color:black"></i>  '.$key.'
</a>';     
    
         if ($i++ == 1) break;
}



?>






 






<?php
$check_vendor=DB::table('banners')->where('id',1010)->first();
?>
@if($check_vendor->image == 1)


            @if (empty(Auth::check()))
             <a href="#" style="; margin-left:60px;margin-top:5px; "  data-toggle="modal" data-target="#modal-lgm"     ><i class="fa fa-shopping-bag" aria-hidden="true" style="color:black"></i>
             Merchant </a>
             
             
            <a href="#" style=";margin-left:60px;margin-top:5px;" data-toggle="modal" data-target="#modal-lga"     ><i class="fa fa-money" aria-hidden="true" style="color:black"></i>
                  Affiliate </a>
                  
                  
                  
            <a href="#" style=";margin-left:60px;margin-top:5px;" data-toggle="modal" data-target="#modal-lgu"     ><i class="fa fa-user" aria-hidden="true" style="color:black"></i>
                  User </a>

            @else

             <a href="/createb" style="; margin-left:60px;margin-top:5px; "      ><i class="fa fa-shopping-bag" aria-hidden="true" style="color:black"></i>
             Merchant </a>
             
             
            <a href="/my-account?affilite=1" style=";margin-left:60px;margin-top:5px;"    ><i class="fa fa-money" aria-hidden="true" style="color:black"></i>
                  Affiliate </a>
                  
                  
                  
            <a href="/my-account" style=";margin-left:60px;margin-top:5px;"  ><i class="fa fa-user" aria-hidden="true" style="color:black"></i>
                  User </a>

            @endif

         
         
                     
         
         
         

@else





  @if (empty(Auth::check()))
       
             
            <a href="#" style=";margin-left:60px;margin-top:5px;" data-toggle="modal" data-target="#modal-lga"     ><i class="fa fa-money" aria-hidden="true" style="color:black"></i>
                  Affiliate </a>
                  
                  
                  
            <a href="#" style=";margin-left:60px;margin-top:5px;" data-toggle="modal" data-target="#modal-lgu"     ><i class="fa fa-user" aria-hidden="true" style="color:black"></i>
                  User </a>

            @else



             
            <a href="/my-account?affilite=1" style=";margin-left:60px;margin-top:5px;"    ><i class="fa fa-money" aria-hidden="true" style="color:black"></i>
                  Affiliate </a>
                  
                  
                  
            <a href="/my-account" style=";margin-left:60px;margin-top:5px;"  ><i class="fa fa-user" aria-hidden="true" style="color:black"></i>
                  User </a>

            @endif




















@endif



<a href="/track_order" style=";margin-left:60px;margin-top:5px;"  ><i class="fa fa-plane" aria-hidden="true" style="color:black"></i>
                  Track your Order </a>









</div>

  
<div style="width:20%; float:right; margin-right:-7%">
<?php 
	$ficon=DB::table('banners')->where('id',11)->first();
	$app_icon=DB::table('banners')->where('id',30)->first();
	$y_app_icon=DB::table('banners')->where('id',29)->first();
	
	?>	
<a href="{{ $ficon->image }}" target="_blank"><span class="fa fa-facebook-official" style="color:#0080ff; font-size:160%;margin-top:5px"></span></a>
<a href="{{ $y_app_icon->image }}" target="_blank" style="margin-left:20px"><span class="fa fa-youtube" style="color:red; font-size:160%;margin-top:5px"></span></a>
<a href="{{ $app_icon->image }}" target="_blank" style="margin-left:20px"><span class="fa fa-android" style="color:#76B52F; font-size:160%;margin-top:5px"></span></a>
</div>




  </div>
  
</div>









 <section id="menu"style="padding:5px; height:50px" >
    

           
             <a href="#" style="float:left; margin-top:8px; margin-left:5px"> 
                <span id="sidebarCollapse2" style="color:white; display:black;  padding:50px 4px";>
                                <i class="fa fa-bars" aria-hidden="true" ></i>
                                <span>All</span>
                            </span>
            
            </a>
            
            
            
            
            
            
                <a href=" {{url('/')}} "><img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image7;?>" alt="logo img" style="float:left; margin-left:20px; height: 40px; border-radius:4px"></a>
                
                
                
                
                
                
                
                
                
           
            
             <div style="float:left; width:35%; margin-top:2px; margin-left:50px; background:Orange;  border-radius:4px; height:36px; font-size:90%">
                 
 <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","/app/search_live.php?q="+str,true);
  xmlhttp.send();
}
 


function showResultm(str) {
  if (str.length==0) {
    document.getElementById("livesearchm").innerHTML="";
    document.getElementById("livesearchm").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearchm").innerHTML=this.responseText;
      document.getElementById("livesearchm").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","/app/search_live.php?q="+str,true);
  xmlhttp.send();
}




</script>                
                 
                <form>
                    
                                        @csrf
                                        
                                        
 



 <div  style="height:36px;background:white; padding:4px; width:80%; border-top-left-radius:4px;border-bottom-left-radius:4px; float:left">  

                  <input type="text" name="search" id="" autocomplete="off" placeholder=" Search Product..." required="" style="width:100%;  background:white;  border: 1px solid white;"
                  onkeyup="showResult(this.value)"
                  >
</div>




 <div  style="height:36px; width:width:20%;  float:left; background:Orange; "> 
<!--                  <button type="submit" style="height:35px;   background:white;border:0px"> <span class="fa fa-search" style="padding: 0px 10px;color:black"></span></button>
-->                  
<button type="submit" style=" height:35px; margin-top:0px;width:100%; padding:10px; background:Orange; color:white;  border:0px"> 
<span style="margin-left:20px;">
    <i class="fa fa-search" aria-hidden="true" style="font-size:130%"></i>

    </span>
</button>
</div>                  
            
            
            

                  
                </form>
                              <div  style="background:white;   width:100%;float:left; ;" id="livesearch"></div>

              </div>
              
              
              
              
              
              
            
   

            
            
            
            
            
            
            
            
            
              <div style="float:left; width:auto; margin-top:5px; padding:5px;  margin-left:14px; font-size:110%">
               <a href="{{url('/')}}/fav" style="color:white"><i class="fa fa-heart-o" aria-hidden="true"></i>
 </a>
                </div>
                
                
              <?php
                    $installment=DB::table('banners')->where('id','1019')->first();
;?>    @if($installment->image != 1)            
                
                        
              <div style="float:left; width:auto; margin-top:5px; padding:4px;  margin-left:2px">
               <a href="{{url('/')}}/news" style="color:white"><i class="fa fa-commenting" aria-hidden="true"></i> Review </a>
                </div>
            
                         
            
            
            
                   <div style="float:left; width:auto; margin-top:5px; padding:5px;  margin-left:2px; font-size:90%">
               <a href="{{url('/')}}/offer?camping=1" style="color:white"><i class="fa fa-bullhorn" aria-hidden="true"></i> Campaigns
 </a>
                </div>
                
     @endif           
                
                   
            
       @if($installment->image == 1)   
     
              <div style="float:left; width:auto; margin-top:-5px; padding:5px;  margin-left:2px; font-size:90%; ">
               <a href="{{url('/')}}/watch" style="color:red;font-size:160%; margin-top:-15px">
<img src="/app/l1.gif" style="max-height:40px"/>
</a>
                </div>
        @endif           
            
            
            
            
            
            
       
     
 
     
     
            
            
            
                          

            
     
            
            <div  style="float:right; margin-top:5px; padding:4px; margin-right:40px" >
                
                
                 <!--  <div style="float:left;  width:auto; margin-top:5px; padding:5px;  margin-left:2px; font-size:110%">
               
                <a href="{{url('/')}}/cart" style="color:white"><i class="fa fa-shopping-cart" aria-hidden="true"></i> 
                    
                </a>
              <sup>  <span id="showw10" style="color:white;font-size:110%;pading:4px;"> </span></sup>
        </div>  -->
                 
                
                
                <ul class="aa-head-top-nav-right">
                  <!-- <li class="hidden-xs"><a href="{{ url('/cart') }}">My Cart</a></li> -->
                  

<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>






<div class="#" style="float:left; margin-right:20px;">

                  
                  
                  <div><a href="/cart" style="color:white"> <i class="fa fa-shopping-cart" aria-hidden="true" style="color:white;font-size:130%"></i> 
                  
                   <sup>  <span id="showw10" style="color:white;font-size:110%; pading:4px;"> </span></sup>
                  </a>
                  </div>
              

 </div>
 
 


<div class="#" style="float:left">
                  @if (empty(Auth::check()))
                  
                  
                  
                  <div><a href="/login-registerj" style="color:white"> <i class="fa fa-lock" aria-hidden="true" style="color:white;font-size:90%"></i>
 Login </a></div>
 
 @endif
 </div>


<div class="#" style="float:right">
                    @if (empty(Auth::check()))
                  
            <div><a href="/login-register" style="color:white"> <i class="fa fa-user" aria-hidden="true" style="color:white; font-size:90%"></i>
 Register </a></div>
 
                  
 
 @endif
 </div>







<div class="dropdown" style="float:right; margin-left:18px">
                  @if (empty(Auth::check()))
                  
        
                  
                  
                 
                  @else
                  <li><a href=""style="color:white"><i class="fa fa-user" aria-hidden="true" style="color:white"></i> My Account</a></li>
                  @endif
  
  
  
  
  
  
  
  
   @if (empty(Auth::check()))
  
  <div class="dropdown-content" style="margin-right:100px;">
  <a href="{{ url('/login-registerj') }}"><p> Login</p></a>
  <a href="{{ url('/login-register') }}"><p> Signup</p></a>

 
  
</div>
   @else




  <div class="dropdown-content" style="margin-right:100px;">
<a href="{{ url('/my-account?main=1') }}"><p>Dashboard</p> </a>

<a href="{{ url('/profile') }}"><p> Profile</p> </a>


<?php
	      $user_id = Auth::user()->id;
	      $myshop= DB::table('shops')->where('owner_user_id',$user_id)->count();
?>
@if($myshop>0)
<a href="/my-account?store=1"><p> My Store</p> </a>
@endif





<a href="/my-account?affilite=1"><p> Affiliate</p> </a>





<a href="{{ url('/profile?e=2') }}" style="font-size:70%"> <p>Change Passowrd</p> </a>
<a href="{{ url('/logout') }}"> <p>  Logout</p> </a>


</div>






@endif

</div>





                </ul>
              </div>
            
    
  </section>
  </div>
  
  </div>
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   






 
<div class="mob_add">
     <div style="height:50px; width:100%; top:0; position:fixed; float:left; z-index:19999; border:2px solid white;  border:0px;">


 <section id="menu"style="padding:5px" >
    
    
    
<div style="float:left;  width:30%;">
           
             <a href="#" style="float:left; margin-top:4px; margin-left:5px"> 
                <span id="sidebarCollapse22" style="color:white; display:black; padding:50px 4px";>
                                <i class="fa fa-bars" aria-hidden="true" ></i>
                                <span>All</span>
                            </span>
            
            </a>
            
 </div>          
            
             
            
               
 <div style="float:left;  width:50%;  text-align:center;">
                             <a href=" {{url('/')}} "><img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image7;?>" alt="logo img" style="text-align:center; height: 40px; max-width:100%; border-radius:4px; margin-left:-45px;"></a>

                 
</div>
            
           
            
                 
   <div style="float:left;  width:20%;">         
   
   

       <i class="fa fa-search" onclick="myFunction()" aria-hidden="true" style="font-size:150%; color:white; padding:4px;margin-left:-20px;"></i>
  
  
  
                                  

      <a href="/cart">
                 
                 <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:150%; color:white; padding:4px"></i>
                 
     </a>            

                 
                 

           
            
            

            
                                                
</div>
            
            
         <hr>
 <div id="myDIV" style="width:100%;  text-align:center; display:none;">
  
  <form>
       @csrf
   <div class="search" style="width:100%">
      <input  name="search" type="text" class="searchTerm" autocomplete="off" placeholder="  Search product here.."
       onkeyup="showResultm(this.value)"
      
      >
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
   </form>
   
                                 <div  style="background:white;  width:70%; margin-left:15%;  overflow-y: scroll;" id="livesearchm"></div>

   
</div>           
    
    
    
    <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
    
    
    
    
    
    
    
    
  </section>
  
  
  

  
  
  

  
  </div> 
  
  
 
  
   
  </div>
  
  
  
  
  
  
  
  </div>