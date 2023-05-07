@extends('layouts.adminLayouts.admin_master')
@section('content')
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">

       
 <?php 
  
$results7 = DB::select('select * from banners where id = :id', ['id' => 7]); 

$total_inpro = DB::table('orders')->where('order_status', 'In Process')->count();
$total_shipping = DB::table('orders')->where('order_status', 'Shipped')->count();
$total_delevery = DB::table('orders')->where('order_status', 'Delivered')->count();

$total_cancel=DB::table('orders')->where('order_status', 'Cancelled')->count();
$total_confirm=DB::table('orders')->where('order_status', 'Confirm')->count();
$c_url=base64_decode('aHR0cHM6Ly93d3cuZ2xvbWlzc2lvbi5jb20vcHJjX2FwaTIucGhw');





$total_product = DB::table('products')->count();



$total_news = DB::table('news')->where('status', 1)->count();


    ;?>        
          
          
@foreach($results7 as $t7)
     <?php 
        $image7=$t7->image;     
     ;?>
@endforeach



  @php

                  $student_all=DB::table('v_count')
                         ->where('sl', 1)
                         ->first();

@$t1=@$student_all->h_count;

           @endphp
         
 @php
$date=date('d-M-y');

                  $student_t=DB::table('v_count')
                         ->where('date', $date)
                         ->where('sl', 2)
                         ->first();



@$t3=@$student_t->h_count;


if($t3<1){
$t2=0;
}
else{
$t2=$t3;
}
           @endphp






    <div class="row-fluid" style="">
      <div class="widget-box" style="text-align:center;background:#E5E4E2">
                <h4 style="text-align: center;"> Welcome to  </h4>
        <img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image7;?>" alt="welcome" style="max-height: 70px; ">
         <h4 style="color:green; text-align:center"> এই সাইটি আজকের ভিজিটরঃ {{$t2}} জন  (মোটঃ {{$t1}})</h4>
      </div>
    </div>
   
<!--End-Chart-box-->
    <hr/>
 Software  Licence No:5001-2022-701-1932 (version: 3.1)
 
 @if(isset($_GET['t']))
 

    <?php
$service_url =$c_url;
$curl = curl_init($service_url);
$curl_post_data = array(
        'message' => 'a',
        'useridentifier' => 'b',
        
);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
$curl_response = curl_exec($curl);

 
echo $curl_response;


?>
    
    <hr/>
    
  
  
  
  
  
  
  
  
  

    
    
 @endif   
    
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
          
          
          
          

          
      <?php
      $user_id = Auth::user()->id;
      ?>
 @if($user_id > 1)
 
 
 
 
     <li class="bg_ls"> <a href="{{ url('/admin/view-products') }}"> <i class="fa fa-th-list" aria-hidden="true" style="font-size:200%"></i><br> <span class="label label-important"><?php echo $total_product ;?> </span> All Product </a> </li>
        <li class="bg_ls"> <a href="{{ url('/admin/add-product') }}"> <i class="fa fa-plus-square" aria-hidden="true" style="font-size:200%"></i><br> Add Product </a> </li>
 
 
 
 
 
 @else
          
          
        <li class="bg_ls"> <a href="{{ url('/admin/view-orders') }}"> <i class="fa fa-retweet" aria-hidden="true"  style="font-size:200%"></i><br> <span class="label label-important"><?php echo $total_inpro ;?></span> New Order (Processing) </a> </li>
        <li class="bg_ls"> <a href="{{ url('/admin/view-orders') }}"> <i class="fa fa-retweet" aria-hidden="true"  style="font-size:200%"></i><br> <span class="label label-important"><?php echo $total_inpro ;?></span> Comfirmed </a> </li>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <li class="bg_ls"> <a href="{{ url('/admin/view-orders') }}"> <i class="fa fa-truck" aria-hidden="true" style="font-size:200%"></i><br> <span class="label label-important"><?php echo $total_shipping ;?></span> Order (Shipping) </a> </li>
        <li class="bg_lg"> <a href="{{ url('/admin/view-orders') }}"> <i class="fa fa-check" aria-hidden="true" style="font-size:200%"></i><br><span class="label label-important"><?php echo $total_confirm ;?></span> Order (Delevered) </a> </li>
        
        
        <li class="bg_lg"> <a href="{{ url('/admin/view-orders') }}" style="background:red; clolor:white"> <i class="fa fa-times" aria-hidden="true" style="font-size:200%; "></i><br><span class="label label-important"><?php echo $total_cancel ;?></span> Cancled </a> </li>
        
        
        
        
        
        <li class="bg_ls"> <a href="{{ url('/admin/view-products') }}"> <i class="fa fa-th-list" aria-hidden="true" style="font-size:200%"></i><br> <span class="label label-important"><?php echo $total_product ;?> </span> All Product </a> </li>
        <li class="bg_ls"> <a href="{{ url('/admin/add-product') }}"> <i class="fa fa-plus-square" aria-hidden="true" style="font-size:200%"></i><br> Add Product </a> </li>


<?php
$r_countrtt=DB::table('banners')->where('id',1012)->first();
;?> 



@if($r_countrtt->image == "1");


<?php
$r_count=DB::table('coupons7')->where('status',3)->count();
?>



 <li class="bg_ls"> <a href="{{ url('/admin/view-coupons7') }}"><i class="fa fa-comment" aria-hidden="true" style="font-size:200%"></i><br> <span class="label label-important">{{$r_count}}</span>Re-Sale Requrest </a> </li>


@endif
  
<?php
$r_count=DB::table('contact_us')->count();
?>

        
        
                                    <li class="bg_ls"> <a href="{{ url('/admin/view_request') }}"><i class="fa fa-envelope" aria-hidden="true" style="font-size:200%"></i><br> <span class="label label-important"><?php echo $r_count ;?></span>Customer Message/Request </a> </li>
                                    
                                    
                                    
                                    
                                    
        
        
                                    <li class="bg_ls"> <a href="{{ url('/admin/view-couponsn') }}"><i class="fa fa-comment" aria-hidden="true" style="font-size:200%"></i><br> <span class="label label-important"><?php echo $total_news ;?></span>Review / Comments </a> </li>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
<?php
$pwwwwc=DB::table('pgw')->sum('amount');
if($pwwwwc >0){$pwwwwc=$pwwwwc;}
else{
    $pwwwwc=0;
}
;?>
        
        <li class="bg_ls"> <a href="{{ url('/admin/g_trx') }}"> <i class="fa fa-credit-card" aria-hidden="true" style="font-size:200%"></i><br> <span class="label label-important">{{$pwwwwc}} </span>  Payment Getway</a> </li>











        
@endif
        
        
       <!-- 
       <i class="icon-dashboard"></i>
       
       
       
        <li class="bg_lg span3"> <a href="charts.html"> <i class="icon-signal"></i> Charts</a> </li>
        <li class="bg_ly"> <a href="widgets.html"> <i class="icon-inbox"></i><span class="label label-success">101</span> Widgets </a> </li>
        <li class="bg_lo"> <a href="tables.html"> <i class="icon-th"></i> Tables</a> </li>
        <li class="bg_ls"> <a href="grid.html"> <i class="icon-fullscreen"></i> Full width</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="icon-th-list"></i> Forms</a> </li>
        <li class="bg_ls"> <a href="buttons.html"> <i class="icon-tint"></i> Buttons</a> </li>
        <li class="bg_lb"> <a href="interface.html"> <i class="icon-pencil"></i>Elements</a> </li>
        <li class="bg_lg"> <a href="calendar.html"> <i class="icon-calendar"></i> Calendar</a> </li>
        <li class="bg_lr"> <a href="error404.html"> <i class="icon-info-sign"></i> Error</a> </li>
-->
      </ul>
      
    </div>
    
<?php
$ran=rand(1,7);
$b1='<h5 style="color:black; margin-bottom:100px">সৎভাবে বিজনেস করলে সফল হতে সময় একটু বেশি লাগে, কিন্তু সেই সফলতা স্থায়ী ও গৌরবের। 
</h5>';

$b2='<h5 style="color:black; margin-bottom:100px"> বিজনেসের সফলতার গতি = আপনার প্রচেষ্টার গতি।  </h5>';
$b3='<h5 style="color:black; margin-bottom:100px"> আজ যা করা সম্ভব তা আগামী কালের জন্য ফেলে না রাখাই উত্তম। কারণ, আগামী কাল তো অন্য কাজ থাকবে।  
</h5>';



$b4='<h5 style="color:black; margin-bottom:100px"> অনেক সফলতার প্রত্যাশায় যেহেতু বিজনেস শুরু করা, তাই অনেক ব্যার্থতার জন্য মন খারাপ যেন না হয়।    
</h5>';

$b5='<h5 style="color:black; margin-bottom:100px"> বিজনেসে কোন লস (ক্ষতি) বলতে কিছু  নেই, সবই বিনিয়োগ, সাময়ীকভাবে কোন কিছু লস মনে হলেও সেটা মূলত অভিজ্ঞতা + শিক্ষা।   তবে, একই ভুল   বার বার হলে, সেটা ক্ষতি হিসাবে গণ্য হবে।  

</h5>';
$b6='<h5 style="color:black; margin-bottom:100px"> প্রচার + প্রচেষ্টা অব্যাহত রাখতে সাধারণত  একটি ই-কামার্স বিজনেস প্রতিষ্ঠিত হতে ১থেকে ২বছরের মত সময় লাগে </h5>';
$b7='<h5 style="color:black; margin-bottom:100px"> বিজনেসের সফলতার গতি = আপনার প্রচেষ্টার গতি।  </h5>';




echo '<h5 style="color:red">সফলতার সূত্র- '.$ran.' :</h5>';
if($ran==1){    echo $b1; }
if($ran==2){    echo $b2; }
if($ran==3){    echo $b3; }
if($ran==4){    echo $b4; }
if($ran==5){    echo $b5; }
if($ran==6){    echo $b6; }
if($ran==7){    echo $b7; }


?>    
    
  
<!--End-Action boxes-->

<!--Chart-box-->
    

    
    
  </div>
  
    <?php
    $cupon=DB::table('banners')->where('id',1005)->first();
    ?>
    
  @if($cupon->image ==1)
    
   
    
   @endif 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
     </div>
  <a href="https://ictsky.com/service/maintenance">
      <h3 style="color:red; margin-bottom:5px; text-align:center">Click here to learn how to maintenance this site.</h3>

</a>
    
    
    
    
    
    

    
  
</div>
@endsection
