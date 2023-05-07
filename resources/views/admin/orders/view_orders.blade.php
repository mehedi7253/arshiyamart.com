@extends('layouts.adminLayouts.admin_master')
@section('content')
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View Orders</a> </div>
      <h1>Orders Report</h1>
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
        ->where('extra11','!=',1)
        ->orderby('id','DESC')->get();
        
        $t_order=DB::table('orders')
        ->whereDate('created_at','>=',$f)
        ->whereDate('created_at','<=',$t)
        ->where('extra11','!=',1)
        ->whereNull('seller')
        ->count();
        
        

    }
    
       if($type==2){
    
        $orders=DB::table('orders')
        ->whereDate('created_at','>=',$f)
        ->whereDate('created_at','<=',$t)
        ->where('seller','>',0)
        ->where('extra11','!=',1)
        ->orderby('id','DESC')->get();
        
        $t_order=DB::table('orders')
        ->whereDate('created_at','>=',$f)
        ->whereDate('created_at','<=',$t)
        ->where('extra11','!=',1)
        ->where('seller','>',0)
        ->count();

    } 




}
else
{

    
    $orders=DB::table('orders')
    ->whereNull('extra11')
    ->orderby('id','DESC')->get();
    
    
    $t_order=DB::table('orders')
    ->where('extra11','=',1)
    ->count();
    
    

}








;?> <span style="color:red; text-align:center"><i class="fa fa-circle" aria-hidden="true"></i>
  ই-কমার্স নীতিমালা অনুযায়ী ক্রেতা-বিক্রেতা একই শহরে হলে ৫দিনের মধ্যে , পৃথক শহরে হলে ১০দিনের মধ্যে অবশ্যই ডেলিভারী দিতে হবে। 
              (সম্মানিত উদ্যোক্তা প্রতি আহবান, নিয়মিত আপডেট ই-কমার্স নীতিমালাটি জেনে নিবেন ও সেই অনুযায়ী বিসনেস পরিচালনা করবেন।)<br>
          <i class="fa fa-circle" aria-hidden="true"></i> যে সকল অর্ডার এর Status এর পর সবুজ বৃত্ত চিহ্ন আছে, সেগুলো Quick ডেলিভারীর নিতে আগ্রহী। 

              </span>
          <div class="widget-box">
              
           
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5 style="color:red">: Search Order by Order No, Customar Name, Phone No, Order Status (In Process, Shipped, Delivered), Date. </h5>
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
                      <td>Tk={{ $order->total }}
                      
                      
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
                      <span style="background:{{$color}}; color:white; padding:2px 2px;">{{ $order->order_status }}</span> 
                     @if($order->extra1 ==1 ) 
                     <i class="fa fa-circle" aria-hidden="true" style="color:green"></i>

                     @endif
                      
                      <br>
                      
                      
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
                        @$total_invoice_amount+=$order->total;
                      ?>
                      
                      
                     Total Bill: {{$order->total}} <br>
                     Paid: {{$paid_amount}}<br>
                     
                     
                    
                     
                     
                     @if( $paid_amount < $order->total )
                     
                        --- <br>
                     
           <span style="background:red; color:white; padding:5px; border-radius:4px">           <b>  Due: {{$order->total - $paid_amount}}</b> </span><br>
                      
                      
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
           
           
 
           
           
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
