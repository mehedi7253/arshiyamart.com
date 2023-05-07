@extends('layouts.adminLayouts.admin_master')
@section('content')
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View Orders</a> </div>
      <h1>Quotation</h1>
    </div>



    <div class="container-fluid">
    
      
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


if(isset($_GET['bill'])){
DB::table('orders')
->where('id',$_GET['bill'])->update([
    'extra11'=>NULL,
    ]);
}





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
    ->orderby('id','DESC')->where('extra10',1)->get();
    
    
    $t_order=DB::table('orders')->where('extra10',1)
    ->count();
    
    

}








;?> 
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
                      
                      
                     Profit={{@$orders_ppppprsw}}<br>
                     
                     @if($order->extra11 == 1)
                     <a href="?bill={{$order->id}}" style="padding:5px; color:white; background:green">Approve </a>
                     @endif
                     
                     
                      
                      
                      </td>
                      
                      
                     




                      <td class="center">
                        <div class="fr">
                            
                            

@if($order->extra11 != 1)
                           <a target="_blank" href="{{ url('/admin/view-orders-details/'.$order->id) }}" class="btn btn-success btn-mini" style="background:green; color:white">View Bill</a>
@endif                          
                          
                          
                           <a target="_blank" href="{{ url('/quotation/'.$order->id) }}/1000" class="btn btn-success btn-mini" style="background:red; color:white">View Invoice</a>


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
