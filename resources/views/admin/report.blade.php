@extends('layouts.adminLayouts.admin_master')
@section('content')
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View Orders</a> </div>
      <h1>All Report</h1>
    </div>



    <div class="container-fluid">
      <hr>
  <?php
  $inv=DB::table('banners')->where('id',1003)->first();
  ;?>    
      @if($inv->image == 1)
       <form action="" method="get">
          @csrf
    <input type="date" name="f"required=""> to 
    <input type="date" name="t"required=""> 
    
    
      <label><input type="radio" name="type" required="" value="0">Online Sale</label>
      <label><input type="radio" name="type" required="" value="2">Direct Store Sale</label>

    
    
    <br>
 
    
    
    
    <input type="submit" name="submit_r" value="See Report" >
</form>
      @else
 <form action="" method="get">
          @csrf
    <input type="date" name="f"required=""> to 
    <input type="date" name="t"required=""> 
    <input type="hidden" name="type" required="" value="0">
    
    <br>
 
    
    
    
    <input type="submit" name="submit_r" value="See Report" >
</form>
@endif


      <hr>
      
      <div class="row-fluid">
        <div class="span12">

          @if (Session::has('message_success'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success">  

                               <strong style="color:#000">{{ session('message_success') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif
<?php
if(isset($_GET['submit_r'])){
    $f=$_GET['f'];
    $t=$_GET['t'];
    $type=$_GET['type'];
    
    
    if($type==0){
    
        $orders=DB::table('orders')
        ->whereDate('created_at','>=',$f)
        ->whereDate('created_at','<=',$t)
        ->whereNull('seller')
        ->orderby('id','DESC')->get();
        
        $t_order=DB::table('orders')
        ->whereDate('created_at','>=',$f)
        ->whereDate('created_at','<=',$t)
        ->whereNull('seller')
        ->count();
        
        

    }
    
       if($type==2){
    
        $orders=DB::table('orders')
        ->whereDate('created_at','>=',$f)
        ->whereDate('created_at','<=',$t)
        ->where('seller','>',0)
        ->orderby('id','DESC')->get();
        
        $t_order=DB::table('orders')
        ->whereDate('created_at','>=',$f)
        ->whereDate('created_at','<=',$t)
        ->where('seller','>',0)
        ->count();

    } 




}
else
{

    
    $orders=DB::table('orders')
    ->orderby('id','DESC')->where('id','<',1)->get();
    
    
    $t_order=DB::table('orders')->where('id','<',1)
    ->count();
    
    

}








;?> 
          <div class="widget-box">
              
           
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>

                    <th style="width: 7%!important;">Order_NO_&_Time</th>
                    <th>Customer Name & Email</th>
<!--                    <th>Ordered Product</th>
-->                    <th>Order Amount & Status</th>
                    <th>Payment Method</th>
                    <th>Actions</th>


                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($orders as $order)
                   
   
                  <?php if($order->order_status == 'Delivered')
                                     {
                                      @$orders_pppppr13333 =DB::table('orders_products')->where('order_id',$order->id)->first();
                                      @$orders_pppppr1 +=$orders_pppppr13333->profit * $orders_pppppr13333->product_qty;
                                      @$orders_ppppprsw =$orders_pppppr13333->profit * $orders_pppppr13333->product_qty;
                                      
                                      
                                     }
                                     
                                      {
                                      @$orders_pp3f =DB::table('orders_products')->where('order_id',$order->id)->where('re_sale',1)->first();
                                      @$orders_pppppr2_resel +=$orders_pp3f->profit * $orders_pp3f->product_qty;
                                     }

                   ?>
                   
                   
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      <td class="center">Order No: <span style="color:red">{{ $order->id }}</span>
                      <br><span style="color:blue">{{ date('d-M-Y (h:i:s A)', strtotime($order->created_at)) }}</span>
                      
                      </td>
                      <td class="center">{{ $order->name }}<br>
                      {{ $order->user_mail }}</td>
      <!--                <td class="center">
                        
                      </td>-->
                      <td>Tk={{ $order->total-$order->discount }}
                      
                      
                      <?php $c_status=$order->order_status; 
                      if($c_status=='Cancelled')
                      {
                          $color='red';
                      }
                      elseif($c_status=='Delivered')
                      {
                           $color='green';
                      }
                      
                      
                       elseif($c_status=='In Process')
                      {
                           $color='gray';
                      }
                      
                      elseif($c_status=='Confirm')
                      {
                           $color='pink';
                      }
                                           
                       elseif($c_status=='Shipped')
                      {
                           $color='blue';
                      }
                      else
                       {
                           $color='';
                      }
                      
                      ;?>
                      <span style="background:{{$color}}; color:white; padding:2px 2px;">{{ $order->order_status }}</span><br>
                      
                      
                     Profit={{@$orders_ppppprsw}}
                      
                      
                      </td>
                      
                      
                      <td><span style="color:red"><b>{{ $order->payment_method }} </b></span>
                      
                      
                      
                      
                      <br>
                      
                     
                     
                     
                     
                      <?php
                     
                      $sum1=DB::table('pgw')->where('invoice_no',$order->id)->sum('amount');
                      
                      if(empty($order->pincode))
                      {
                          $sum2=0;
                      }else{
                      $sum2=DB::table('pgw')->where('transaction_id',$order->pincode)->sum('amount');
                      }
                       $paid_amount=$sum1+$sum2;
                       
                       
                       
                        @$total_paid_amount+=$sum1+$sum2;
                        @$total_invoice_amount+=$order->total-$order->discount;
                      ?>
                      
                      
                     Total Bill: {{$order->total-$order->discount}} <br>
                     Paid: {{$paid_amount}}<br>
                     
                     
                    
                     
                     
                     @if( $paid_amount < $order->total )
                     
                        --- <br>
                     
           <span style="background:red; color:white; padding:5px; border-radius:4px">           <b>  Due: {{$order->total-$order->discount - $paid_amount}}</b> </span><br>
                      
                      
                           @if( $order->total-$order->discount - $paid_amount >0)

                            @endif
                    @else
                    <span style="color:green"><b>Invocie Paid</b></span>    
                     @endif
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                     
                      </td>




                      <td class="center">
                        <div class="fr">


                           <a target="_blank" href="{{ url('/admin/view-orders-details/'.$order->id) }}" class="btn btn-success btn-mini">View Orders</a>



                        </div>
                      </td>
                    </tr>
                  @endforeach

                </tbody>
              </table>
            </div>
            <h4>
            @if(isset($_GET['t']))
           Reports/Summary of : {{$f}} to {{$t}}
           @else
           Reports/Summary of: All
           @endif
           </h4>
           <style>
               th, td {
  padding: 5px;
}
           </style>
           <table border="1" padding="5">
               <tr>
                   <th>Sl</th>
                   <th>Particular</th>
                   <th>Total</th>
               </tr>
               
              <tr>
                   <td>1</td>
                   <td>Orders</td>
                   <td>{{$t_order}}</td>
               </tr>
       
       
                <tr>
                   <td>2</td>
                   <td>Invoice Amount</td>

                   <td>{{@$total_invoice_amount}}</td>
               </tr>
               
              <tr>
                   <td>3</td>
                   <td>Paid</td>

                   <td>{{@$total_paid_amount}}</td>
               </tr>            
               
               
              <tr>
                   <td>4</td>
                   <td>Due</td>
          
                   <td>{{@$total_invoice_amount - @$total_paid_amount}}</td>
               </tr>             
               
         
         
                       
               
                <tr style="background:green; color:white; margin-top:5px">
                   <td>5</td>
                   <td>Profit (Only Delivery Product)</td>
          
                   <td>{{@$orders_pppppr1}}</td>
               </tr>             
                
         
         
         
         
         
         
         
         
         
         
         
<?php
$r_countrtt=DB::table('banners')->where('id',1012)->first();
?> 



@if($r_countrtt->image == "1")
         <tr style="background:green; color:white">
                   <td>6</td>
                   <td>Profit (Only Delivery Product) (*With Out Re-Sale Product)</td>
          
                   <td>
                       <?php
                       @$p1111=@$orders_pppppr1-@$orders_pppppr2_resel;
                       if($p1111>0){
                           @$p1111=@$p1111;
                       }else
                       {
                         @$p1111=0; 
                       }
                       
                       ?>
                       
                       {{@$p1111}}</td>
          </tr> 
          
          
          
          
          
          
          
                  <tr style="background:green; color:white">
                   <td>7</td>
                   <td>Profit (Only Delivery  Re-Sale Product)</td>
          
                   <td>
                      
                       
                       {{@$orders_pppppr2_resel}}</td>
          </tr> 
           
          
          
          
          
         @endif
         
         
         
         
         
         
         
         
               
               
           </table>

 
           
           
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
