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
                    <thead>
                      <tr>
                        <th>Cancle</th>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $total_amount= 0 ;?>
                    @foreach ($userCart as $cart)
                      <tr>
                        <td>
                            <a class="cart_quantity_delete" href="{{ url('/cart-delete/'.$cart->id) }}"><fa class="fa fa-close"></fa></a>

                        </td>
                        <td><a href="#"><img src="{{ asset('assets/admin/img/products/large/'.$cart->image) }}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">
                            
                            
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
                        
                        
                        
                        
                        
                        
                        
                        <small>Code: {{ $cart->product_code }}</small>
                        
                        
                        
                        
                        @if(isset($cart->product_code))
                        
                                             <br>   <small><span style="color:red">Size: {{ $cart->size }}</span></small>

                        @endif
                        </a></td>
                        <td>{{ $cart->price }}</td>
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
                            
                <a class="cart_quantity_down" href="{{ url('cart/update-quantity/'.$cart->id.'/'.$cccc.'') }}" style="font-size:30px"> - </a>
                
                <input class="cart_quantity_input" type="text" name="quantity" value="{{ $cart->quantity }}" autocomplete="off" disabled=""  size="2">
                <a class="cart_quantity_up" href="{{ url('/cart/update-quantity/'.$cart->id.'/1') }}" style="font-size:30px"> + </a>

              </div></td>
                        <td>TK. {{ $cart->price*$cart->quantity }}</td>
                      </tr>
                      
                      
                      
                      
                      <?php $total_amount = $total_amount + ($cart->price*$cart->quantity); ?>
                    @endforeach
                    
 
                       <tr>
                        <td>
                            -

                        </td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><b>Grand Total=</b></td>
                        <td><b>TK. {{ $total_amount }}</b></td>
                      </tr>
                                         
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                      {{-- <tr> --}}
                        {{-- <td colspan="6" class="aa-cart-view-bottom">
                        <form class="" action="{{ url('/cart/apply-coupon') }}" method="post">
                        @csrf
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" name="apply_coupon" placeholder="Coupon">
                            <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
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
             
             
           
               
             
      <div style="width:100%">
                   
                                  
                       <div style="width:40%; float:left;">
                           
                                           <a href="{{ url('/') }}" class="aa-cart-view-btn" ><i class="fa fa-cart-plus" aria-hidden="true" style="font-size:18px"></i> Buy More</a>

                       </div>
                       
                       
                       
                       
                  @if($total_amount>0)     
                       
                       <div style="width:55%; float:left">
                          
                           
                           @if(!isset(Auth::user()->id))
                           
                                          <a href="{{ url('/checkout') }}" class="aa-cart-view-btn" style="font-size:90%">Confirm Order <i class="fa fa-forward" aria-hidden="true"></i></a>
                         @else
                         
                          <a href="{{ url('/checkout') }}" class="aa-cart-view-btn" style="font-size:90%">Confirm Order <i class="fa fa-forward" aria-hidden="true"></i></a>
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
