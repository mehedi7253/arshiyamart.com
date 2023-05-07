<html oncontextmenu="return false">

<script type="text/javascript">
     

document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}


</script> 
@extends('layouts.temp2.master')
@section('content')
@include('layouts.temp2.nav')


  <section id="cart_items checkout" style="width:90%; margin:auto">
		<div class="container" style="margin-bottom:100px">
    <div class="shopper-informations">
      <div class="row">
      </div>
    </div>
    
    <?php
                      $main_w=Auth::user()->id;
                      $total_cash_wallet=DB::table("ac_main")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");
                      $total_shop_wallet=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','>', 0)-> get()->sum("amount");


                      $total_cash_wallet_w=DB::table("ac_main")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $total_shop_wallet_w=DB::table("ac_shop")->where('user_id', $main_w)->where('amount','<', 0)-> get()->sum("amount");
                      $tsw=$total_shop_wallet-$total_shop_wallet_w;

?>

    <?php
    
    
          $user_idd = Auth::user()->id;

    
    
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);

$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);
$results6 = DB::select('select * from banners where id = :id', ['id' => 6]);


    ;?>        
          
          
   
   
          
          
@foreach($results12 as $t12)
     <?php 
       $h12=$t12->image;     
     ;?>
@endforeach

@foreach($results13 as $t13)
     <?php 
         $h13=$t13->image;     
     ;?>
@endforeach
   
 
 @foreach($results14 as $t14)
     <?php 
        $h14=$t14->image;     
     ;?>
@endforeach
     
   
      
 @foreach($results22 as $t22)
     <?php 
        $h22=$t22->image;     
     ;?>
@endforeach
     
      
    
    
    
    
    
    
    
    


      

        
   @foreach($results6 as $t6)
     <?php 
        $h6=$t6->image;     
     ;?>
@endforeach  
    
  
    
    
    
    <div class="checkout-area" style="margin-top:100px;">
            <div class="row">
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
                  <h2 style="text-align:center">Please Review & Final Submit</h2>
                  <h4 style="text-align:center; color:red">নিচের সব কিছু পূনরায় দেখে Final Submit করুন</h4>



              <div class="col-sm-6 col-sm-offset-0 ">
                <div class="login-form"><!--login form-->
                  <h3><u></u></h3>


                    <div class="form-group">
      							
                    </div>
                    
                 

          		
          		
          	<form id="regForm" method="post" action="{{url('/')}}/sslp2/sp.php">
                <div class="tab">
                    
                       <h4>Invoice No: <span style="color:red"> {{$id}}</span></h4>
                       <h4>Total Amount: <span style="color:red">{{$total}}</span></h4>
                       <h4>Paid : <span style="color:red">{{$paid}}</span></h4>
                       <h4>Current Due : <span style="color:red">{{$due}}</span></h4>
                          <?php
      Session::put('invoice_no', $id);
      
      
      
       $user_name = Auth::user()->	name;
       $user_email = Auth::user()->	email;
       $user_address = Auth::user()->address;
       $user_phone= Auth::user()->	phone;
      
      
      
                          ;?>    		
          		
                    <label> র্বতমানে আপনি যত টাকা পে করতে আগ্রহী (Currently Interested Amount)
                    :</label>
                    
                 
                    
                    <input type="hidden" placeholder="Amount" id="pamount" name="address" value="{{$user_address}}" required>
                    <input type="hidden" placeholder="Amount" id="pamount" name="mobile" value="{{$user_phone}}" required>
                    <input type="hidden" placeholder="Amount" id="pamount" name="name" value="{{$user_name}}" required>
                    
                    
                    
                  <p><input type="number" placeholder="Amount" id="pamount" name="pamount" value="" max="{{$due}}" required></p>
                </div>                
                <center>
                    
                    <button type="submit" id="submit" name="submit"  class="aa-browse-btn"   style="float:right; width:100%">Confim & Submit</button>
                </center>                
                </div>
              </form>
          	
          		
          		
          		
          		
          		
          		
          		
          		
          		
          		
          			
		</div>
	
	</section> <!--/#cart_items-->
@endsection
