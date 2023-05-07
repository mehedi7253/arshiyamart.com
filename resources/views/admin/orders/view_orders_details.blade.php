@extends('layouts.adminLayouts.admin_master2')
@section('content')
  <!--main-container-part-->
 

<div id="content">
  <div id="content-header">

    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Orders</a> </div>
    <h1>Order #{{ $order_details->id }}</h1>
    
    
     <?php 
	$m_1003=DB::table('banners')->where('id',1003)->first();
?>

 
 
  <h3><span style="margin-left:20px; background:green; padding: 5px 5px; border-radius:8px"> <a href="{{url('/')}}/invoice/{{ $order_details->id }}/{{$order_details->total}}" style="color:white">Print  Invoice</a></span></h3>


@if( $m_1003->image == 1 )  
    <h3><span style="margin-left:20px; background:silver; color:black; padding: 5px 5px; border-radius:8px"> <a href="{{url('/')}}/quotation/{{ $order_details->id }}/{{$order_details->total}}" style="color:white">Print Quotation</a></span></h3>
@endif 


<!--                   <h3><span style="margin-left:20px; background:red; padding: 5px 5px; border-radius:8px"> <a href="{{url('/')}}/invoicee/{{ $order_details->id }}/{{$order_details->total}}" style="color:white">Edit Invoice</a></span></h3>
-->
 
  </div>
  <div class="container-flui d">



    <div class="accordion" id="collapse-group">
          <div class="accordion-group widget-box">
            <div class="accordion-heading">
              <div class="widget-title">
                <h5>Update  Order Status/Payment</h5>
              </div>
              
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
            </div>
            
            
            <div class="collapse in accordion-body" id="collapseGOne">
              <div class="widget-content">
                <form action="{{url('/admin/update-order-status') }}" method="post">{{ csrf_field() }}
                  <input type="hidden" name="order_id" value="{{ $order_details->id }}">
                  <input type="hidden" name="user_id" value="{{ $order_details->user_id }}">
                  <table width="100%">
                    <tr>
                      <td>
                          
                          
                          
                      <?php
                     
                      $sum1=DB::table('pgw')->where('invoice_no',$order_details->id)->sum('amount');
                      
                      if(empty($order_details->pincode))
                      {
                          $sum2=0;
                      }else{
                      $sum2=DB::table('pgw')->where('transaction_id',$order_details->pincode)->sum('amount');
                      }
                       $paid_amount=$sum1+$sum2;
                       
                       
                       
                        @$total_paid_amount+=$sum1+$sum2;
                        @$total_invoice_amount+=$order_details->total;
                      ?>
                      
                      
                                         
                          
                          
                          
                      @if( $paid_amount < $order_details->total )
                     
                     
                     
           <span style="background:yellow; color:black; padding:2px; border-radius:4px; font-size:130%">           <b> Invoice Due: {{$order_details->total - $paid_amount}}</b>
           
           
            
           
           
           </span><br>
                      @if($order_details->payment_method == "Installment")
                          <div style="  padding:2px;">
                              
                         <h4 style="color:red"> Invoice Type : Installment   </h4>
                            
                          </div>
                          
                          
                              @endif
                      
                      
                      
                      
                     @if( $order_details->total - $paid_amount >0)

                            @endif
                    @else
                    <span style="color:green"><b>Invocie Paid</b></span>    
                     @endif    
                          
                          
                          <br>
                          
                          
                          
                               
                          
                          
                          
                          
                          
                          
                          <label>
                              <?php
                              $last_rcv=DB::table('pgw')->where('invoice_no',$order_details->id)->orderby('id',"DESC")->first();
                              $last_rcvc=DB::table('pgw')->where('invoice_no',$order_details->id)->orderby('id',"DESC")->count();
                              ?>
                              @if($last_rcvc > 0)
                             <span style="color:blue"> Last Paymet Received: {{$last_rcv->amount}} Tk ({{$last_rcv->date}})</span>
                              @endif
                              
                          </label>
                      
<input type="number" name="aamount" placeholder="Amount"><br>


<label>Payment Method</label>
<select name="Payment_Method" id="mme2" onchange="ChangeCar22()" class="control-label">
             
                          
                          <option value="">Payment Method</option>
                          <option value="Cash">Cash / Manual_Pay</option>
                          <option value="By_Bank">By Bank </option>
                          <option value="By_Check">By Check </option>
                          <option value="bKash">bKash</option>
                          <option value="Rocket">Rocket</option>
                          <option value="Nagod">Nagod</option>
</select>


<br>









<div id="hhhide22" style="display:none">
                <select name="bank_name">
                    <option value="">Select Bank</option>
                    <?php
                    $bank=DB::table('a333')->get();
                    ;?>
                    @foreach ($bank as $b)
                    <option value="{{$b->id}}">{{$b->remark}}</option>
                    @endforeach
                    
                    @if ($bank->isEmpty($bank))
                                    <option value=""> এখনো কোন ব্যাংক এ্যাড করা হয়নি। অনুগ্রহ করে বাম পাশের মেনু থেকে ব্যাংক এ্রাড করে নিন।</option>

                    @endif
                    
                </select>
                <br>
                
                
                <textarea name="remark1" placeholder="Remark (in English)"></textarea>
                
                
</div>


<div id="hhhide222" style="display:none">
              
                <textarea name="remark2" placeholder="Bank Name & Check (in English)"></textarea>
                
                
</div>


    
        <script>
        
           function ChangeCar22(){
            var x = document.getElementById("mme2").value;

        if(x == "By_Bank"){
        			        $("#hhhide22").show();
    }
    
            if(x != "By_Bank"){
        			    $("#hhhide22").hide();
    }
    
    
    
    
           if(x == "By_Check"){
        			        $("#hhhide222").show();
    }
    
            if(x != "By_Check"){
        			    $("#hhhide222").hide();
    }
    
    
    }
    
    
    
    
    
    
    
    
   
    
    
    
    

        </script>
          








 @if($order_details->order_status != "Delivered") 
 
 
 <select name="order_status" id="order_status"  
 onchange="ChangeCar22_s()"  class="control-label">
                         <!--  <option value="New" @if($order_details->order_status == "New") selected @endif>New</option>
                          <option value="Pending" @if($order_details->order_status == "Pending") selected @endif>Pending</option> -->
                          
                          
                          
                          <option value="">
                          
                         Select Status
                          </option>
                          
                          <option value="In Process">
                          
                          1. In Process
                           @if($order_details->order_status == "In Process") 
 ( &#8730; )	
                          @endif</option>





                         <option value="Confirm">2. Confirm
                         
                           @if($order_details->order_status == "Confirm") 
 ( &#8730; )	
                          @endif
                         </option>
                         
                         <option value="Cancelled">3. Cancelled
                         
             @if($order_details->order_status == "Cancelled") 
 ( &#8730; )	
                          @endif
                         </option> 
                          
                          
                          <option value="Shipped">4. Shipped
             @if($order_details->order_status == "Shipped") 
 ( &#8730; )	
                          @endif
                          </option>
                          
                          
                          
                          <option value="Delivered">5. Delivered
             @if($order_details->order_status == "Delivered") 
 ( &#8730; )	
                          @endif
                          </option>
                          
                          
                          
<!--                          <option value="Paid" @if($order_details->order_status == "Paid") selected @endif>Paid</option>
-->
</select>


<div id="hhhide22_s" style="display:none">
              
                <textarea name="ship_note" placeholder="Note/Delivery Service Name (if any)"></textarea>
                
                
</div>


 <script>
        
           function ChangeCar22_s(){
            var x = document.getElementById("order_status").value;
        if(x != ""){
        			        $("#hhhide22_s").show();
    }
            if(x == ""){
        			    $("#hhhide22_s").hide();
    }
    
    
    
    
    
    
    }
    
    
    
    
    
    
    
    
   
    
    
    
    

        </script>
          









@endif



                      </td>
                      </tr>
                       <tr>
                      <td>
                        <input type="submit" value="Update Status/Payment">
                        
                                              <h5 style="margin-top:10px; color:red">নোটঃ অর্ডার স্ট্যাটাস Delivered দেওয়ার পরে আর স্ট্যাটাস পরিবর্তন করা যাবে না, তবে পেমেন্ট গ্রহণ করা যাবে।</h5>

                      </td>
              
                    </tr>
                  </table>
                </form>
              </div>

              
            </div>
          </div>
        </div>





<section style="with:95%; margin-left:10px">
    <h4 style="color:black; text-align:center;"> <u>Payment Installment</u></h5>
   
    
    
    
    <table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="6%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Installment No</span></div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Date</span></div></td>
                <td width="10%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Amount</span></div></td>
<td width="16%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Method</span></div></td>
<td width="30%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Remark</span></div></td>
<td width="30%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Receive By</span></div></td>

      </tr>
      
      <?php
      $i=1;
      
      $paymenter=DB::table('pgw')->where('invoice_no',$order_details->id)->get();
      $paymenter2=DB::table('pgw')->Where('transaction_id',$order_details->pincode)->where('transaction_id','<>',"")->get(); 
      ;?>
      
      
      
      @foreach($paymenter2 as $phis )
        <tr>
        <td><div align="left" class="style8">{{ $i++ }}</div></td>
        <td><div align="left" class="style8"> {{ date('d-M-Y (h:i:s A)', strtotime($phis->extra14)) }}</div></td>
           <td><div align="right" class="style8" style="color:blue"> <b>{{$phis->amount}} </b></div></td>
        <td><div align="left" class="style8">{{$phis->payment_method}} </div></td>
        <td><div align="left" class="style8">
            @if($phis->payment_method ==  "By_Bank")
           Bank: {{$phis->extra6}}<br>
           Remark:{{$phis->extra5}}
            @endif
                        @if($phis->payment_method ==  "By_Check")
           {{$phis->extra7}}
            @endif
            
        </div></td>
            <td><div align="left" class="style8">
            
            <?php
            
            $rvsdf=$phis->extra1;
            $received_by=DB::table('users')->where('id',$rvsdf)->first();
            ;?>
            {{@$received_by->name}}
            @if(!empty($phis->extra1))
            ID: {{$phis->extra1}}
            @endif
            
            </div></td>

      </tr>
     @endforeach 
      
      
      @foreach($paymenter as $phis )
        <tr>
        <td><div align="left" class="style8">{{ $i++ }}</div></td>
        <td><div align="left" class="style8"> {{ date('d-M-Y (h:i:s A)', strtotime($phis->extra14)) }}</div></td>
           <td><div align="right" class="style8" style="color:blue"> <b>{{$phis->amount}} </b></div></td>
        <td><div align="left" class="style8">{{$phis->payment_method}} </div></td>
        <td><div align="left" class="style8">
            @if($phis->payment_method ==  "By_Bank")
           Bank: {{$phis->extra6}}<br>
           Remark:{{$phis->extra5}}
            @endif
                        @if($phis->payment_method ==  "By_Check")
           {{$phis->extra7}}
            @endif
            
        </div></td>
            <td><div align="left" class="style8">
            
            <?php
            
            $rvsdf=$phis->extra1;
            $received_by=DB::table('users')->where('id',$rvsdf)->first();
            ;?>
            {{@$received_by->name}}
            @if(!empty($phis->extra1))
            ID: {{$phis->extra1}}
            @endif
            
            </div></td>

      </tr>
     @endforeach 
      
      
      
      
      
      
      
      
        <tr>
        <td bgcolor="#CCCCCC" colspan="2">Total</td>
        
        <td bgcolor="#CCCCCC" ><div align="right" class="style8" style="color:blue"><b>{{$total_paid_amount}} </b></div></td>
         <td bgcolor="#CCCCCC" colspan="3"> 
         
         @if($total_invoice_amount < $total_paid_amount)
         <span  style="color:red"> Due: {{$total_invoice_amount - $total_paid_amount}} </span> 
         @else
                  <span  style="color:green"> <h3>Paid </h3></span> 

         @endif
         
         
</td>
      </tr>
      
      
        
                      
      
      
      
     
      
      
      
    </table>
    
 
    
</section>






















<section style="with:95%; margin-left:10px">
    <h4 style="color:black; text-align:left;"> <u>Delivery Status</u></h5>
   

       
       
       
          <table border="1px">
  <tr>
    <th>SL</th>
    <th>Status</th>
    <th>Date</th>
    <th>Remark/Note</th>
  </tr>
  <?php
  $i=1;
  $order_sta=DB::table('a444')->where('extra8',$order_details->id)->orderby('id',"ASC")->get();
  ;?>
  
  @foreach($order_sta as $sta)
  <tr>
      <td> {{$i++}}</td>
      
    <td> 
 {{$sta->remark}}</td>
    <td>{{ date('d-M-Y (h:i:s A)', strtotime($sta->created_at)) }}</td>
    <td>
        {{$sta->extra5}}</td>
  </tr>
  @endforeach




</table>
</section>





















<section style="with:95%; margin-left:10px; margin-top:50px">
    <h4 style="color:black; text-align:center;"> <u>Product Details for Admin</u></h5>
   
    
    
    
    <table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="6%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Sl</span></div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Img</span></div></td>
        <td width="34%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Description of Goods </span></div></td>
        <td width="10%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Quantity</span></div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Rate</span></div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Amount </span> (TK) </div></td>
      </tr>
      
      
      
      

      
      
      
      
      
      
      
      
      
      
      
      
      
      
         <?php
$results999 = DB::select('select * from banners where id = :id', ['id' => 999]);





    ;?>        
          
          
@foreach($results999 as $t999)
     <?php 
        $uuu=$t999->image;     
        $ddd=$t999->link;     
        $ppp=$t999->title;     
  
   
   ?>
@endforeach 
   
   
   
 <?php  
 
 
    $id=$order_details->id;
$servername = "localhost";
$username = $uuu;
$password = $ppp;
$dbname = $ddd;


$conn = mysqli_connect($servername, $username, $password, $dbname);

;?> 
    
      
      
      
      
      
      
      
      
      
      
      
      
      
      <?php

 

  

  
  
  
      
$sql = "SELECT * FROM orders where id='$id'";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
     $user_id=$row['user_id'];
     $user_created_at=$row['created_at'];
           $payment_method=$row['payment_method'];
           $trxid=$row['pincode'];
           $tstatus=$row['order_status'];
           $dddiscount=$row['discount'];
           $pincode=$row['pincode'];
           
           
           $shipping_charges=$row['shipping_charges'];

    }














$sql8 = "SELECT * FROM banners where id=8";
$result8 = mysqli_query($conn, $sql8);

 while($row = mysqli_fetch_assoc($result8)) {
     $image8=$row['image'];
      }


$sql16 = "SELECT * FROM banners where id=16";
$result16 = mysqli_query($conn, $sql16);

 while($row = mysqli_fetch_assoc($result16)) {
     $image16=$row['image'];
      }




$sql22 = "SELECT * FROM banners where id=22";
$result22 = mysqli_query($conn, $sql22);

 while($row = mysqli_fetch_assoc($result22)) {
     $image22=$row['image'];
      }




$sql229 = "SELECT * FROM banners where id=9";
$result229 = mysqli_query($conn, $sql229);

 while($row = mysqli_fetch_assoc($result229)) {
     $h1=$row['image'];
      }



$sql2210 = "SELECT * FROM banners where id=10";
$result2210 = mysqli_query($conn, $sql2210);

 while($row = mysqli_fetch_assoc($result2210)) {
     $e1=$row['image'];
      }



$sql2215 = "SELECT * FROM banners where id=15";
$result2215 = mysqli_query($conn, $sql2215);

 while($row = mysqli_fetch_assoc($result2215)) {
     $a1=$row['image'];
      }



$sql2215 = "SELECT * FROM banners where id=15";
$result2215 = mysqli_query($conn, $sql2215);

 while($row = mysqli_fetch_assoc($result2215)) {
     $a1=$row['image'];
      }


$sql221532 = "SELECT * FROM banners where id=32";
$result221532 = mysqli_query($conn, $sql221532);

 while($row = mysqli_fetch_assoc($result221532)) {
     $w1=$row['image'];
      }

// sql to delete a record

   $results4u = DB::select('select * from users where id = :id', ['id' => $user_id]);

    ;?>
    
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      <?php 
   
    $i=1;   
 $sql1 = sprintf("SELECT * FROM orders_products where order_id='$order_details->id'");

$result1 = mysqli_query($conn, $sql1);

 while($row1 = mysqli_fetch_assoc($result1)) {
     $product_price=$row1['product_price'];
     $product_qty=$row1['product_qty'];
     $product_name=nl2br($row1['product_name']);
     $product_code=$row1['product_code'];
     $amount_sub=$product_qty*$product_price;
     
     @$tppp+=$amount_sub;
     
 }
 
 
    ;?>
    
    <?php

   $results4 = DB::select('select * from orders_products where order_id = :id', ['id' => $id]);

    ;?>        
          
          
@foreach($results4 as $t4)
      <?php
                        $style=DB::table('products')->where('id',$t4->product_id)->first();
                        ;?>
    <tr>
        <td><div align="left" class="style8">{{ $i++ }}</div></td>
        <td style="text-align:center"><img src="{{ asset('assets/admin/img/products/large/'.@$style->image) }}" alt="img" style="max-height:80px;"></td>
        <td><div align="left" class="style8">
                            <?php
                            
                            
                            $resultspp = DB::select('select * from products where id = :id', ['id' => $t4->product_id]);





    ;?>        
          
 @foreach($resultspp as $tpp)
     <?php 
        @$ppppp=$tpp->product_name;  
        @$unit=$tpp->unit;  
        
     ;?>
@endforeach
                            {{ @$ppppp }} [{{ @$unit }}]<br>
                            
                            
                            Code:{{ @$t4->product_id }}  <br>
                            
                        Style No:{{@$style->product_code}}
                            
                            
                            
                            
                            @if(isset($t4->product_size))
                            
                         <span style="color:red">[Size:    
                         
                         
                            <?php   @$color=DB::table('brands4')->where('id',$t4->product_size)->first();
   ?>
      {{@$color->name}}]
                         
                         </span>
                         
                         
                         
                            @endif
                            
                    @if($t4->created_at > "2021-03-29 09:16:50")    
                        @if(isset($t4->prodect_color))
                         <span style="color:blue">[   Color: 
                         
                         <?php   @$color=DB::table('brands3')->where('id',$t4->prodect_color)->first();
   ?>
      {{@$color->name}}
                         
                         
                         ]</span>
                        @endif   
                        
                        
                        <br>
                        
                        
                        
                        
                        
                        
                        
                         <span style="color:black; padding:4px; border:1px dashed black">	Supplier :
                         <b>
                         @if(empty($style->supplier))
                         N/A
                         @else
                         {{$style->supplier}}
                         @endif
                         </span>
                         </b>
                        
                        
                        
                        
                    @endif  
                      
                      
                      
                            
                            </div></td>
        <td><div align="left" class="style8">
          <div align="center">{{ $t4->product_qty }}</div>
        </div></td>
        <td><div align="left" class="style8">
          <div align="center">{{ $t4->product_price }}</div>
        </div></td>
        <td><div align="left" class="style8">
          <div align="right">{{ $t4->product_price * $t4->product_qty }}</div>
        </div></td>
      </tr>
   
   @endforeach          
          
       <tr>   
          
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="right" class="style12">Total=<br/>
      
      
      @if($dddiscount > 0)
        Honour Discount=<br/>
      @endif  
        
          Delivery Charge= <br />
          Grand Total= </div></td>
        <td><div align="right"><span class="style17">
            <?php echo @$tppp;?> Tk<br> 
            
             @if($dddiscount >0)
            
            ( - ) <?php echo @$dddiscount;?> Tk<br> 
            @endif
            
          <?php echo $shipping_charges;?> Tk<br> 
          <?php echo @$tppp+$shipping_charges-$dddiscount;?> Tk</span></div></td>
      </tr>
      
      
      
      
      
      
      
      
      
      
      <tr>   
          
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="right" class="style12">Paid=
      
      
    
        
         
        <td><div align="right"><span class="style17">
            
                                 <?php
                          $sum1=DB::table('pgw')->where('invoice_no',$id)->sum('amount');
                          
                          
                          
                          if(empty($pincode)){
                              $sum2=0;
                          }
                          else
                          {
                                                    $sum2=DB::table('pgw')->where('transaction_id',$pincode)->sum('amount');

                          }
                          
                          
                          
                          
                       $paid_amount=$sum1+$sum2;
                      ?>
                      
                      
          {{$paid_amount}}Tk</span></div></td>
      </tr>
      
      
      
      <tr>   
          
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="right" class="style12">Balance =
      
      
    
        
         
        <td><div align="right"><span class="style17">
            
                                
                      
                      
          {{(@$tppp+$shipping_charges-$dddiscount)-$paid_amount}} Tk</span></div></td>
      </tr>
      
      
      
    </table>
    
    <a href="{{url('/')}}/invoice/{{ $order_details->id }}/{{$order_details->total}}">
        <h4 style="color:blue; text-align:center;"> <i class="fa fa-print" aria-hidden="true"></i> <u> Print Invoice for Customer</u></h5>
    </a>
    
    
</section>






<!--    <div class="row-fluid">


      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-arrow-right"></i> </span>
            <h5>Order Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered">

              <tbody>
                <tr>
                  <td><a href="#">Order Date</a></td>
                  <td>{{ $order_details->created_at }}</td>
                </tr>
                <tr>
                  <td><a href="#">Status</a></td>
                  <td>{{ $order_details->order_status }}</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-arrow-right"></i> </span>
            <h5>Customers Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered">

              <tbody>
                <tr>
                  <td><a href="#">Customer Name</a></td>
                  <td>{{ $order_details->name }}</td>
                </tr>
                <tr>
                  <td><a href="#">Email</a></td>
                  <td>{{ $order_details->email }}</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
-->    <hr>
<!--    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-eye-open"></i> </span>
            <h5>Billing Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered">

              <tbody>

                <tr>
                  <td>Customer Name</td>
                  <td>{{ $user_details->name }}</td>
                </tr>

                <tr>
                  <td>Address</td>
                  <td>{{ $user_details->address }}</td>
                </tr>
                <tr>
                  <td>City</td>
                  <td>{{ $user_details->city }}</td>
                </tr>
                <tr>
                  <td>Post code</td>
                  <td>{{ $user_details->pincode }}</td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>{{ $user_details->phone }}</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-arrow-right"></i> </span>
            <h5>Shipping Details</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered">

              <tbody>
                <tr>
                  <td>Customer Name</td>
                  <td>{{ $order_details->name }}</td>
                </tr>
                <tr>
                  <td>Address </td>
                  <td>{{ $order_details->address }}</td>
                </tr>
                <tr>
                  <td>City </td>
                  <td>{{ $order_details->city }}</td>
                </tr>
                <tr>
                  <td>Post Code </td>
                  <td>{{ $order_details->pincode }}</td>
                </tr>
                <tr>
                  <td>Phone </td>
                  <td>{{ $order_details->mobile }}</td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
-->  </div>
</div>
<!--main-container-part-->
@endsection
