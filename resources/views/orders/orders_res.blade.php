@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center"> {{ session('message_success') }} </h4>

                                 @endif
      
      
      
      
      
      <?php
if(isset($_GET['accept'])){
   $ccc_s= DB::table('coupons7')->where('id',$_GET['rid'])->first();

if($ccc_s->status < 3){
DB::table('coupons7')->where('id',$_GET['rid'])->update([
    'status'=>3,
    ]);
}
}

?>

      
      
      
      
      
      
      
      
      
      
      
      
      
      
   
   
    
      <?php
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);
$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);


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
     
      
      
      
      
        @if (Session::has('bKash'))
                      
                                  
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                   
                                      </h4>


                                 @endif
      
      
        @if (Session::has('Rocket'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                   
                                      </h4>

                                 @endif
      
        @if (Session::has('Nagad'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                    
                                      </h4>

                                 @endif
      
        <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:left; margin-left:50px;" > <i class="fa fa-home" aria-hidden="true"></i>
 Home </h3></a>
<h2 style="color:black; padding:50px 50px; text-align:center"> My Re-Saleable Product: </h2>
      
      
      
    <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Sl</th>
                
                  
                  
  <td>Invoice No</td>
  <td>Received Date</td>
  <th>Product Name</th>
  <th>Remark</th>
  

                  
                  <?php
                  $re_co=DB::table('banners')->where('id',1012)->first();
                  ;?>
                  @if($re_co->image =="1")
                  <th>Resale</th>
                  @endif
              </tr>
          </thead>
          <tbody>

<?php
$user_id = Auth::user()->id;
$orders2=DB::table('orders_products')->where('re_sale',1)->where('user_id',$user_id)->get();
$i=1;

?>


            @foreach ($orders2 as $order)
            
                               
              <tr>
                  

 <td>{{ $i++ }}</td>
 
 
 <td>{{$order->order_id}}</td>
 <td>{{$order->created_at}}</td>


 <td>
     
     
    
     <?php
     $immmmg=DB::table('products')->where('id',$order->product_id)->first();
     ?>
     <a href="#"><img src="{{ asset('assets/admin/img/products/large/'.$immmmg->image) }}" alt="img" style="max-height:100px"></a>
     
    <br>
     {{ $order->product_name }}<br>
                           <?php
                      $p_info=DB::table('products')->where('id',$order->product_id)->first();
                      ;?>
     ক্রয় মূল্য:    {{ $p_info->	price}}
     
     
</td>
                      



<?php

$se_id=DB::table('coupons7')->where('product_id',$order->product_id)->where('invoice_no',$order->order_id)->first();
$se_id_c=DB::table('coupons7')->where('product_id',$order->product_id)->where('invoice_no',$order->order_id)->count();

?>


<td>
    @if($se_id_c>0)
    
    User:  <span style="color:blue"> {{$se_id->personal_note}} </span><br>
    
    @if(!empty($se_id->admin_note))
    
      Admin:  <span style="color:green">{{$se_id->admin_note}}</span><br><br>
     <span style="background:green; padding:5px;color:white;border-radius:4px"> Price:  {{$se_id->admin_price}}</span><br>
      
    @else
      Admin:  <span style="color:red">Please Wait.. (Inreview)</span><br>
    @endif
      
      <br>
@if($se_id->admin_price > 0)


@if($se_id->status != 5)
@if($se_id->status == 3)

   Status: <span style="color:blue">Wait for Receiving</span><br><br>
   
   
   <a href="/invoice_re/{{$se_id->invoice_no}}/{{$se_id->id}}">
   <span style="background:red; padding:3px;color:white;border-radius:4px">
       Print Invoice</span>
    </a>       

@else


<a href="?accept=3&rid={{$se_id->id}}">
<button>
    Accept This Price
</button>

</a>

@endif
@endif



@if($se_id->status == 5)
<span style="color:green"> Completed </span>
@endif







@endif

@endif
</td>









<td>



<?php

?>


@if($se_id_c < 1)

<?php
$check_delivery=DB::table('orders')->where('id',$order->order_id)->first();
?>
@if($check_delivery->order_status =="Delivered")
 
<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-lg{{ $order->id}}">
                   Resale
                </button>
 @endif               
                
@else
-
@endif              
                
                
                
   <div class="modal fade" id="modal-lg{{ $order->id}}" style="z-index:9999999">
        <div class="modal-dialog modal-lg">
         
         
         
          <form action="/orders_res_send" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">

              <div class="modal-body">


<label>Product Information: </label>

<h5>Name: {{ $order->product_name}}</h5> 


     <input type="hidden" id="cash" name="product_id" value="{{$order->product_id}}" required="">







<div style="width:100%;">
    


<div style="width:30%; float:left">
    
<div style="width:15%; float:left">
     <input type="radio" id="cash" name="product_type" value="1" required="">
</div>


<div style="width:85%; float:left">
    <label for="cash">Used</label>
</div>
    
    
   
    
    
</div>


<div style="width:30%; float:left">
    
<div style="width:15%; float:left">
     <input type="radio" id="cash" name="product_type" value="2" required="">
</div>


<div style="width:85%; float:left">
    <label for="cash">New </label>
</div>
    
    
   
    
    
</div>


</div>







<br>
<div style="width:100%">
<input type="hidden" name="p_image" value="" style="width:95%"><br>
<label>ক্রয় মূল্যঃ     {{ $p_info->	price}}</label><br>
<input type="number" name="d_price" value="" placeholder="কাঙ্খিত মূল্য" style="width:100px"  required=""> 



<input type="hidden" name="invoice_no" value="{{$order->order_id}}" required=""> 
 







<br> <br>
                  
 <label>বর্তমান অবস্থায় প্রোডাক্ট এর ছবি আপলোড করুন </label>
<input type="file" name="image"  required="">                          
                  
                  
       </div>           
    


<br>


<div style="width:100%">
    <label>প্রোডাক্টের  বর্তমান অবস্থাঃ</label>
<textarea name="personal_note" style="width:95%" required=""></textarea>


                  
       </div>   








              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Apply For Resale">
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>                
              

 </td>





              </tr>
            @endforeach


          </tbody>
   
      </table>
      <?php
      $coupon=1;
      ;?>
      





  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
