@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')
  <section id="form">

 

    <div class="shopper-informations">
      <div class="row">
      </div>
    </div>
          <div class="row" style="width:80%; margin:auto;">

        @if (Session::has('message_success'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger"> 

                             <strong style="color:#000">{{ session('message_success') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
         @if (Session::has('message_error'))
                  <div class="control-group">
                      <div class="controls">
                          <div class="alert alert-danger">

                              <strong style="color:#000">{{ session('message_error') }}</strong>

                          </div>
                        </div>
                  </div>
          @endif
        <form  action="{{ url('/checkout') }}" method="post" >
          @csrf
        <div class="col-sm-6 col-sm-offset-3" style="margin-bottom:100px; margin-top:50px">
          <div class="login-form"><!--login form-->
            <h3>Product Delivery Address</h3>


              <div class="form-group">
								<input name="billing_name" id="billing_name" required="" type="text" @if(!empty($userDetails->name)) value="{{ $userDetails->name }}" @endif placeholder="Your Name" class="form-control" />
              </div>
              
               <div class="form-group">
								<input name="billing_mobile" id="billing_mobile" required="" type="number" @if(!empty($userDetails->phone)) value="{{ $userDetails->phone }}" @endif placeholder="Mobile" class="form-control" />
              </div>
              
              <div class="form-group">
                   <?php
                    $aa_dist=DB::table('all_dist')->orderby('dist_name','ASC')->get();
                   ;?>
<select name="dcity" required="" id="mySelect" onchange="ChangeCarList()">
   
   
   
   
   <?php


        $s_dis = Session::get('s_dis');



;?>

    
    
    @if(isset($s_dis))
    
                   <?php
                    $aa_dist_sesstion=DB::table('all_dist')->where('dist_code',$s_dis)->first();
                   ;?>
    <option value="{{$aa_dist_sesstion->dist_code}}" style="background:blue; color:whtie"><span style="background:blue; color:whtie">{{$aa_dist_sesstion->dist_name}}</span></option>
    
    @else
    <option value="">Select Delivery City</option>
    @endif
   
   
   
   
   
    @foreach ($aa_dist as $dist)
    <option value="{{$dist->dist_code}}">{{$dist->dist_name}}</option>
    @endforeach
</select>                  
              </div>

        
        
        
        
        <br>
        
<select name="ps" id="sm14" style="width:40%; padding:6px;" required>
                       <option value="">Select P.S/Thana</option>
</select>
    
        
          <br>
        
           <br>
              
    <!--          
        <div class="form-group">
                   
<select name="tps" required="">
    <option value="">Select P.S/Upzilla</option>
   
    <option value=""></option>
   
</select>                  
              </div>       
              
              -->
              
              
              <div class="form-group">
              <textarea name="billing_address" id="billing_address" type="text" style="width:100%"  placeholder="Delivery Address ">@if(!empty($userDetails->address)) {{ $userDetails->address }}@endif</textarea>    
                  
              </div>
              
              
              
              
              
              
              
              
 
<?php
$check_pa=DB::table('banners')->where('id',1011)->first();
;?>








@if($check_pa->image == 2)
<div class="form-group">
    
    
<!--<label style="color:blue">Select Payment Method:</label> <br>

<input type="radio" id="con" name="dmmm" value="2" required="">
<label for="con">COD (পণ্য হাতে পেয়ে টাকা প্রদান) </label><br>
<span style="color:red">[অর্ডার করার সময় শুধু মাত্র ডেলিভারী চার্জ bKash পে করতে হবে] 

</span>
<br>
<br><br>
-->



<!--
<input type="radio" id="nn" name="dmmm" value="7" required="">
<label for="nn"><img src="https://nagad.com.bd/wp-content/uploads/2019/04/Nagad_Logo_for_web__128x53.svg" style="height:40px; width:70px; margin-left:5px">

 
</label><br>
[Pay from your Nagad account using Nagad payment geteway] 
<br>
<br><br>
<br>
-->

<!--<input type="radio" id="bb" name="dmmm" value="" required="">
<label for="bb"><img src="https://www.bkash.com/sites/all/themes/bkash/logo-bn.png?87980" style="height:40px; width:70px"></label><br>
[Pay from your bKash account using bKash payment geteway] 
<br>
<br><br>
<br>
-->


<label style="color:blue">Select Payment Method:</label> <br><br>
 <!--
<input type="radio" id="nn" name="dmmm" value="7" required="">
<label for="nn"><img src="https://nagad.com.bd/wp-content/uploads/2019/04/Nagad_Logo_for_web__128x53.svg" style="height:40px; width:70px; margin-left:5px">


</label><br>
[Pay from your Nagad account using Nagad payment geteway] 
<br>
<br><br>
<br>


<input type="radio" id="bb" name="dmmm" value="" required="">
<label for="bb"><img src="https://www.bkash.com/sites/all/themes/bkash/logo-bn.png?87980" style="height:40px; width:70px"></label><br>
[Pay from your bKash account using bKash payment geteway] <br>
<span style="color:red"> [সম্মানিত কাস্টমার মহোদয়, আমাদের  বিকাশ পেমেন্ট ডেভেলপ চলতেছে, অনুগ্রহ করে আজ বিকাশ পেমেন্ট না করার জন্য অণুরোধ করা হলো।]  </span></label>
<br>
<br><br>
<br>
-->

<input type="radio" id="pg" name="dmmm" value="6" required="">
<label for="pg"><img src="https://shurjopay.com.bd/dev/images/shurjoPay.png" style="height:30px; width:90px"></label><br>

[Pay using Shurjo pay geteway for Card/Bank Payment] 
<br>
<br><br>
<br>





<input type="radio" id="pertial" name="dmmm" value="10" required="">
<label for="pertial">COD/Partial Payment</label><br>
[(পণ্য হাতে পেয়ে টাকা পরিশোধ করতে হবে ]
<br><br><br><br>







<!--
<input type="radio" id="swlatter" name="dmmm" value="9" required="">
<label for="swlatter">Pay Later</label><br>
[Pay Later (24 hours)] 
<br>

<br><br><br>
-->



<input type="radio" id="sw" name="dmmm" value="5" required="">
<label for="sw">My Shop Wallet</label>











</div>






@endif




















@if($check_pa->image == 1)
<div class="form-group">
    
    
<!--<label style="color:blue">Select Payment Method:</label> <br>

<input type="radio" id="con" name="dmmm" value="2" required="">
<label for="con">COD (পণ্য হাতে পেয়ে টাকা প্রদান) </label><br>
<span style="color:red">[অর্ডার করার সময় শুধু মাত্র ডেলিভারী চার্জ bKash পে করতে হবে] 

</span>
<br>
<br><br>
-->



<!--
<input type="radio" id="nn" name="dmmm" value="7" required="">
<label for="nn"><img src="https://nagad.com.bd/wp-content/uploads/2019/04/Nagad_Logo_for_web__128x53.svg" style="height:40px; width:70px; margin-left:5px">

 
</label><br>
[Pay from your Nagad account using Nagad payment geteway] 
<br>
<br><br>
<br>
-->

<!--<input type="radio" id="bb" name="dmmm" value="" required="">
<label for="bb"><img src="https://www.bkash.com/sites/all/themes/bkash/logo-bn.png?87980" style="height:40px; width:70px"></label><br>
[Pay from your bKash account using bKash payment geteway] 
<br>
<br><br>
<br>
-->


<input type="radio" id="pg" name="dmmm" value="6" required="">
<label for="pg"><img src="https://www.sslcommerz.com/wp-content/uploads/2019/11/footer_logo.png" style="height:30px; width:100px"></label><br>

[Pay using SSLCOMMERZ  for Card/Bank Payment] 
<br>
<br><br>
<br>



<!--
<input type="radio" id="sw" name="dmmm" value="5" required="">
<label for="sw">My Shop Wallet</label><br>
[Pay from my Shop Wallet] 
<br>
<br><br>
<br>
-->

<input type="radio" id="pertial" name="dmmm" value="10" required="">
<label for="pertial">COD/Partial Payment</label><br>
[পণ্য হাতে পেয়ে টাকা পরিশোধ করতে হবে ]
<br><br><br><br>







<!--
<input type="radio" id="swlatter" name="dmmm" value="9" required="">
<label for="swlatter">Pay Later</label><br>
[Pay Later (24 hours)] 
<br>

-->

</div>






@endif













@if($check_pa->image == 0)                           
          
          <div class="form-group">
<select name="dmmm" required="">
    <option value="">Select Payment Method</option>
    <option value="1">COD (পণ্য হাতে পেয়ে টাকা প্রদান)</option>
    <option value="2">bKash (বিকাশে প্রদান)</option>
    <option value="3">Rocket (রকেটে প্রদান)</option>
    <option value="4">Nagad (নগদে  প্রদান)</option>
    <option value="5">My Shop Wallet</option>
</select>                    
              </div>
@endif
              












     <br><br>        
     <label><span style="font-size:80%">Extra Note (if any) [যদি আপনার কোন বলার থাকে, না থাকলে খালি রাখুন]
     </span></label>

     <div class="form-group">
              <textarea name="billing_note" id="billing_address" type="text" style="width:100%" placeholder="Extra Note "></textarea>    
                  
              </div>











<br>
<input type="checkbox" id="pgy2"  name="quickd" value="1">
<label for="pgy2" style="font-size:80%">
    
  Need Quick Delivery (Delivery Charge + extra 30tk )
</label>

<br>
<br>
<input type="checkbox" id="pgy"  required="">
<label for="pgy" style="font-size:80%">I accept  <a href="/t" style="color:blue"> Terms & Condition </a> and  <a href="/r" style="color:blue">Refund & Return policy </a></label><br>



<br><br><br>




                    <button type="submit" class="aa-browse-btn" style="float:right; width:50%">Next</button>


<!--              <button type="submit" class="btn btn-default">Checkout</button>
-->


          </div><!--/login form-->
        </div>

       <!-- <div class="col-sm-4">
          
            <h2>Shipping Address</h2>


                   <div class="form-group">
     								<input name="shipping_name" id="shipping_name" type="text" @if(!empty($shippingDetails->name)) value="{{ $shippingDetails->name }}" @endif placeholder="Shipping Name" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_address" id="shipping_address" type="text" @if(!empty($shippingDetails->address)) value="{{ $shippingDetails->address }}" @endif placeholder="Shipping Address" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_city" id="shipping_city" type="text" @if(!empty($shippingDetails->city)) value="{{ $shippingDetails->city }}" @endif placeholder="Shipping City" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_pincode" id="shipping_pincode" type="text" @if(!empty($shippingDetails->pincode)) value="{{ $shippingDetails->pincode }}" @endif placeholder="Zilla Code" class="form-control" />
                   </div>
                   <div class="form-group">
     								<input name="shipping_mobile" id="shipping_mobile" type="text" @if(!empty($shippingDetails->mobile)) value="{{ $shippingDetails->mobile }}" @endif placeholder="Mobile" class="form-control" />
                   </div>



          </div>        </div>-->

       </form>
      </div>

  </section>
@endsection















<?php
$urla=$_SERVER['SERVER_NAME'];
?>


<script type="text/javascript">
function ChangeCarList(){
    var x = document.getElementById("mySelect").value;
     $.ajax({
            url:'https://{{$urla}}/app/search_ps.php?dis_id='+x,
                        success:function(response){
                        $('#sm14').html(response);
                        }
                        
        });
}
</script>


