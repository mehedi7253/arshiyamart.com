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

 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">  
         <div class="cart-view-area">
             
             
             @if(isset($_GET['cupon']))
             <?php
                                       $p_minimum_shop=Session::get('coupon_t');


             $date=date('Y-m-d');
             $code=$_GET['cupon'];
             $coupon_count=DB::table('cupon_code')->where('code',$code)->count();
             
             if($coupon_count > 0){
             $coupon_dis=DB::table('cupon_code')->where('code',$code)->first();
            $type=$coupon_dis->type;
            $minimum_shop=$coupon_dis->minimum_shop;
            
            
                                                   Session::put('coupon_nimimum_shop', $minimum_shop);

            
            
            if($type == 2){
                $type_a="Tk";
            }else{
                $type_a="%";
            }
             
             $amount=$coupon_dis->commission;
             
             
             if($date > $coupon_dis->valide_date ){
                 echo'<div class="control-group">
                     <div class="controls">
                         <div class="alert alert-success" style="background:red">

                             <strong style="color:white">Sorry!!! Coupon Validity Date is Expired</strong>

                         </div>
                       </div>
                 </div>';
             }else{
                 
                 if($p_minimum_shop >= $minimum_shop){
                   echo'<div class="control-group">
                     <div class="controls">
                         <div class="alert alert-success">

                             <strong style="color:black">Congratulation!!! you got '.$amount.' '.$type_a.' coupon discount.</strong>

                         </div>
                       </div>
                 </div>';
                 
                 Session::put('coupon_dis',$amount);
                 Session::put('coupon_type',$type);
                 Session::put('coupon_num',$code);
                 }else{
                       echo'<div class="control-group">
                     <div class="controls">
                          <div class="alert alert-success" style="background:red">

                             <strong style="color:white">দুঃখিত! কুপন ডিসকাউন্ট পেতে কমপক্ষে 
                             '.$minimum_shop.' টাকার পন্য ক্রয় করতে হবে। </strong>

                         </div>
                       </div>
                 </div>';
                 }
             
                 
                 
                 
             }
             
             
             
             
             }
             else{
                 
                 echo'<div class="control-group">
                     <div class="controls">
                         <div class="alert alert-success" style="background:red">

                             <strong style="color:white">Sorry!!! Your Coupon Code is Invalid</strong>

                         </div>
                       </div>
                 </div>';
             }
             
             ?>
             
             @endif
             
             
             
             <h3 style="text-align:center">Cart List</h3>
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                
           
                
                  <table class="table">
                    @if (Session::has('message_success'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-success">

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
         
         <?php
         $cuppp_dis2=Session::get('coupon_dis');
if( $cuppp_dis2 > 0){
                 $cccoupon_minimum_amount=Session::get('coupon_nimimum_shop');
                 $p_minimum_shop=Session::get('coupon_t');

                 
                if($p_minimum_shop < $cccoupon_minimum_amount  ){
    
    echo'<div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger">

                             <strong style="color:#000"> আপনার কুপনটি বাতিল হয়েছে, অনুগ্রহ করে পুনরায় কুপন কোড ব্যাবহার করুন।</strong>

                         </div>
                       </div>
                 </div>';
    
    
    
    
    
    Session::put('coupon_dis',"");
                 Session::put('coupon_type',"");
                 Session::put('coupon_num',"");
}
                 
}           
                 
         
         ;?>
         
         
         
         
                    <thead>
                      <tr>
                      
                     
                        <th >Product</th>
                      
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Cancel</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $total_amount= 0 ;

                    ?>
                    @foreach ($userCart as $cart)
                      <tr>
                        
                       
                        <td style="text-align:left;">
                            
                            
                            <a href="#"><img src="{{ asset('assets/admin/img/products/large/'.$cart->image) }}" alt="img" style="width:80px;height:100px"></a>
                            
                            
                            <br>
                            <?php
                            
                            
                            $resultspp = DB::select('select * from products where id = :id', ['id' => $cart->product_id]);





    ;?>        
          
 @foreach($resultspp as $tpp)
     <?php 
        $ppppp=$tpp->product_name;     
     ;?>
@endforeach
                            {{ $ppppp }} 
                            
                            
                            
                            <br>
                        
                        
                        
                        
                        
                        
                        
                        <small>
                        
                        <?php
                        $style=DB::table('products')->where('id',@$cart->product_code)->first();
                        ;?>
                        Style No:{{@$style->product_code}}
                        <br>
                        Code: {{ @$cart->product_code }}<br>
                        Color:
                        
                        <?php   @$color=DB::table('brands3')->where('id',$cart->product_color)->first();
   ?>
      {{@$color->name}}
                        
                        </small>
                        
                        
                        
                        
        
                       <br>
                        
                   <span style="color:blue" >    Price: {{ $cart->price }}</span>
                   
                   <br>
                    
                        </td>
                        
                        
                        
                        
                        <td><div class="cart_quantity_button">
                            
                            @if($cart->quantity>1)
                            <?php
                            $cccc=-1;
                            ;?>
                            @else
                            <?php
                            $cccc=0;
                            ;?>
                            @endif
                            
                            <?php
                            @$cart->product_color;
                            @$cart->size;
                            
                            
                            
                            
                            
                            if($cart->product_color >0){
                                $colorrrrr=$cart->product_color;
                            }else{
                               $colorrrrr=0;
                              
                            }
                            
                            
                            
                              if($cart->size >0){
                                $sizeee=$cart->size;
                            }else{
                               $sizeee=0;
                              
                            }
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            ;?>
                            
                            
                            
                            
                                <a class="cart_quantity_up"  href="{{ url('/cart/update-quantity/'.$cart->id.'/1/') }}/{{$colorrrrr}}/{{$sizeee}}/{{$cart->product_id}}/{{ $cart->quantity }}" style="font-size:30px"> + </a> 
              
                   <br>
                <input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity }}" autocomplete="off" disabled=""  size="2">
                
                <br>
           
             <a class="cart_quantity_down" href="{{ url('cart/update-quantity/'.$cart->id.'/'.$cccc.'') }}/{{$colorrrrr}}/{{$sizeee}}/{{$cart->product_id}}/{{ $cart->quantity }}" style="font-size:40px"> - </a>
           

              </div></td>
                        <td>{{ $cart->price*$cart->quantity }}</td>
                        
                        
                        <td><a class="cart_quantity_delete" href="{{ url('/cart-delete/'.$cart->id) }}" style="color:red"> <fa class="fa fa-trash-o" style="color:red"></fa></a></td>
                        
                        
                        
                      </tr>
                      
                      
                      
                      
                      <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); 
                      
                                                Session::put('coupon_t', $total_amount);

                      ?>
                    @endforeach
                    
 
                       <tr>
                      <?php
                                    $vat2=DB::table('banners')->where('id',70)->first();      
                                    
                                    if($vat2->image >0){
                                        $vat=$vat2->image;
                                         $vat_a=$total_amount/100*$vat;
                                    }else{
                                         $vat=0;
                                         $vat_a=0;
                                    }
                                    
                                   

                      ;?>

                        <td colspan="2" style="text-align:right"><b>Grand Total (TK) =<br>
                        
                        VAT ({{$vat}})% =
                        
                        </b></td>
                        <td><b> <?php
                        
                        
echo(round($total_amount));
echo"<br>";

echo(round($vat_a));


$t_amount_p=round($total_amount);
      Session::put('grand_total', $t_amount_p);


if($t_amount_p < 1){
          Session::forget('coupon_dis');
          Session::forget('coupon_type');
          Session::forget('coupon_num');
          Session::forget('discount_ss');

}


?>



</b></td>
<td>-</td>
                      </tr>
                      
                      
                      
                      
                                         
 <?php
 $coupon_dis=Session::get('coupon_dis');
 $type= Session::get('coupon_type');
 ?>                 
                    
                    
    @if(!empty($coupon_dis))          
                       <tr>
                        <td colspan="2" style="text-align:right"><b>Coupon Discount =</b></td>
                        <td>
                            @if($type == 2)
                            <b>{{$coupon_dis}}</b>
                            
                            <?php
                           Session::put('discount_ss',$coupon_dis);
                           ?>

                            @endif
                            
                             @if($type == 1)
                            <b>{{$t_amount_p/100*$coupon_dis}}</b>
                            
                            <?php
                            $coupon_disw=$t_amount_p/100*$coupon_dis;
                           Session::put('discount_ss',$coupon_disw);
                           ?>
                            @endif
                            
                            
                            
                            </td>
<td>-</td>
                      </tr>     
   @endif                  
                    
                    
                    
           
           
           
           
           
           
           
        @if (!empty(Auth::check()))   
  @if(empty($coupon_dis))      
  
 
   
        <?php
        $ida=Auth::user()->id;
        $idad=Auth::user()->promotional_dis;
        ;?>    
        
        
        @if($idad >0)
        <tr>
                        <td colspan="2" style="text-align:right"><b>Promotional Discount {{$idad}}% =</b></td>
                        <td>
                            
                            
                            <b>{{$t_amount_p/100*$idad}}</b>
                            
                            <?php
                            $coupon_disw=$t_amount_p/100*$idad;
                            Session::put('discount_ss',$coupon_disw);
                            ?>
                          
                            
                            
                            
                            </td>
                <td>-</td>
                      </tr>     
        
        
        @endif
                            
   @endif                 
                    
   @endif                    
                    
                    
        
                    
                    
                    
                    
                    
                    
                    
                      {{-- <tr> --}}
                        {{-- <td colspan="6" class="aa-cart-view-bottom">
                        <form class="" action="{{ url('/cart/apply-coupon') }}" method="post">
                        @csrf
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" name="apply_coupon" placeholder="Coupon">
                            <input class="aa-cart-view-btn"  type="submit" value="Apply Coupon">
                          </div> --}}
                          <!-- <input class="aa-cart-view-btn" type="submit" value="Update Cart"> -->
                         {{-- </form>
                        </td> --}}
                      {{-- </tr> --}}
                      </tbody>
                  </table>
                </div>
             </form>
             
             
             
             <!-- Cart Total view -->
             <div class="cart-view-total">
               
             <!--  <table class="aa-totals-table">
                 <tbody>
                    @if (!empty(Session::get('couponAmount')))
                   <tr>
                     <th>Subtotal</th>
                     <td>TK. <?php echo $total_amount ;?> </td>
                   </tr>
                   <tr>
                     <th>Discount Price</th>
                     <td>TK. <?php echo Session::get('couponAmount') ;?>  </td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td> <span>TK. <?php echo $total_amount - Session::get('couponAmount') ;?>  </td>
                   </tr>
                   @else
                   <tr>
                     <th>Total</th>
                     <td>TK. <?php echo $total_amount ;?> </td>
                   </tr>
                    @endif
                    
                    
                    
                    
                 </tbody>
               </table>-->
               
 
 
 
 
 
  
         
 
 
               

               
               
               
             </div>
             <?php
             $cccppp=DB::table('banners')->where('id',1005)->first();
             ?>
             
    @if($cccppp->image ==1)         
         <div style="width:100%; text-align:left">  
         <h4 style="color:blue"><b>কুপন ব্যাবহার করুন (যদি থাকে) </b></h4>
         <form action="" methode="POST">
             @csrf
             <input type="text" name="cupon" required="">
             <input type="submit" name="btn" value="Apply Cupon">
             
         </form>
         </div>
     @endif          
             
             
         <?php
          @$min_a2=DB::table('banners')->where('id',71)->first();
          @$min_a=@$min_a2->image - 1;
          if(@$min_a >0 ){
              $min_a=$min_a;
          }else
          {
              $min_a=99;
          }
           $min_a4=$min_a+1;
        ?>       
              @if( $total_amount < $min_a4)   
             <h5 style="color:red; ">   অর্ডার নিশ্চিত করার জন্য সর্ব নিম্ন {{ $min_a4 }} টাকার প্রোডাক্ট ক্রয় করতে হবে। 
              
              
              </h5> @endif
             
             
             
             
      <div style="width:100%">
                   
                                  
                       <div style="width:40%; float:left;">
                           
                                           <a href="{{ url('/') }}" class="aa-cart-view-btn" style="font-size:70%; background:red;color:white; padding:10px; border-radius:4px"><i class="fa fa-cart-plus" aria-hidden="true" style="font-size:18px"></i> Buy More</a>

                       </div>
                       
                       
                       
          
                       
                       
                  @if( $total_amount > $min_a)   
                       
                       <div style="width:55%; float:left">
                          
                           
                           @if(!isset(Auth::user()->id))
                           
                                          <a href="{{ url('/checkout') }}" class="aa-cart-view-btn" style="font-size:70%; background:red;color:white; padding:10px; border-radius:4px">Confirm Order <i class="fa fa-forward" aria-hidden="true"></i></a>
                         @else
                         
                          <a href="{{ url('/checkout') }}" class="aa-cart-view-btn" style="font-size:70%; background:red;color:white; padding:10px; border-radius:4px">Confirm Order <i class="fa fa-forward" aria-hidden="true"></i></a>
                         @endif

                       </div>
                       
                       @endif
                       
                       
                       
                       
                       
                       
                       
               </div>        
             
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->


@endsection
