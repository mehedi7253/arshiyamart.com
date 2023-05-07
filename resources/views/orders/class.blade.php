@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')

<body onload="shareDiv()">

<section id="do_action aa-myaccount" >
  <div class="container" style="padding-top:100px">
      
      
      
                     @if (Session::has('message_success'))
                      
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center"> {{ session('message_success') }} </h4>

                                 @endif
      <?php
$results12 = DB::select('select * from banners where id = :id', ['id' => 12]);
$results13 = DB::select('select * from banners where id = :id', ['id' => 13]);
$results14 = DB::select('select * from banners where id = :id', ['id' => 14]);
$results22 = DB::select('select * from banners where id = :id', ['id' => 22]);
    ;?>        
          
          
@foreach($results12 as $t12)
     <?php 
       $h12=$t12->image;     
       
       /*
       4000
       $Cash_back=50;
       $cash=100;
       -
       
       
       8000
       $Cash_back=100;
       $cash=200;
       -
       
       
       16000
       $Cash_back=200;
       $cash=400;
       */
       
       
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
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: bKash. <br>
                                      Please send money to: <?php echo $h12 ;?>   (personal). <br>
                                      
                                      
                                      {{ session('bKash') }}. <br>
                                      Thanks. </span>
                                      </h4>


                                 @endif
      
      
        @if (Session::has('Rocket'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: DBBL. <br>
                                      Please Deposit to: <?php echo $h13 ;?> <br>
                                      
                                      
                                      {{ session('Rocket') }}. <br>
                                      Thanks. </span>
                                      </h4>

                                 @endif
      
        @if (Session::has('Nagad'))
                      
                                   
                                  <h4 style="color:green; margin-top:150px; padding:50px 50px; text-align:center">
                                      <span style="font-size:130%">Order Place Successfull!! </span>
                                      
                                      
                                    <br>   <br> <span style="color:black">
                                      Your Payemnt Methode is: Nagad. <br>
                                      Please send money to:<?php echo $h14 ;?>   (personal). <br>
                                      
                                      
                                      {{ session('Nagad') }}. <br>
                                      Thanks. </span>
                                      </h4>

                                 @endif
      
      
        <?php
                      $au_user=Auth::user()->id;
                      $value_user=Auth::user()->generation_value;
                      
                      $total_dr=DB::table("users")->where('up_line_id', $au_user)->count();
                      $total_allr=DB::table("users")->where('upline_arry', 'like', '%'.$au_user.'%')->count();



?>    
      
      
              <a href="{{url('/my-account')}}">    <h3 style="color:blue; padding:10px 5px; text-align:right;" > < Back to Dashboard </h3></a>





<?php
$results4 = DB::select('select * from banners where id = :id', ['id' => 4]);
$results5 = DB::select('select * from banners where id = :id', ['id' => 5]);
?>

 
 @foreach($results4 as $t4)
     <?php 
         $image4=$t4->image;     
                 $url4=$t4->link;  

     ;?>
@endforeach
  
  
   @foreach($results5 as $t5)
     <?php 
         $image5=$t5->image;     
                 $url5=$t5->link;  

     ;?>
@endforeach
        


<div class="text-center" style="width:100%; height:1600px; ">
<div class="text-center" style="width:100%; ">
    
         <div class="text-center"  style="width:100%; float:left;">
        
        

    
         
         
         <div style="width:100%; height:350px; border:4px solid silver">
               <a href="{{ $url5 }}">
              <img  src="{{url('/')}}/assets/admin/img/banners/<?php echo $image5;?>" alt="sl1 slide img" style="width:100%; height:100%;"/>
              </a>
         </div>
         



         
     </div>
    
    
    
    
    


    
</div>

<?php

$rid=rand(999999999,9999999999);

;?>
<!--<meta http-equiv="refresh" content="10;URL=/my-account?earn_id={{$rid}}" />
-->

<progress value="0" max="5" id="progressBar" style="width:100%"></progress>

<script>
    var timeleft = 5;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
  }
  document.getElementById("progressBar").value = 5 - timeleft;
  timeleft -= 1;
}, 1000);
    
</script>



<div class="row text-center"   style="left">



<style>
    #button_share img {
width: 36px;
box-shadow: 0;
padding: 6px;
display: inline;
border: 0;
}
</style>

<p style="color:red"> ডেইলি আর্নিং পেতে অনুগ্রহ করে, নিচের যে কোন একটি সোশ্যাল মিডিয়াতে শেয়ার দিন । <br>

উক্ত শেয়ার লিংক থেকে কেউ  প্রোডাক্ট  ক্রয় করলে,  আপনার ,ক্যাশ ওয়ালেটে  এ্যাফেলিয়েট কমিশন হিসাবে  ২%-২০% কমিশন  জমা হবে।   উল্লেখ্য যে, উক্ত ব্যাক্তি আজীবন যত প্রোডাক্ট ক্রয় করবেন, আপনি সবগুলোরই কমিশন পাবেন, কেননা একবার আপনার শেয়ার লিংক ব্যাবহার করে তিনি প্রোডাক্ট ক্রয় করলে তিনি আপনার এ্যাফেলিয়েট হিসাবে গন্য হবে। 


</p>

<?php

$main_w=Auth::user()->id;

;?>

<div class="mob_add">

<button id='answer-example-share-button' style="color:white; background:blue; padding:5px; border-radius:4px"><i class="fa fa-share-alt" aria-hidden="true"></i>
 Share & Earn Money!</button>
</div>

<div class="com_add">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=2486521184915649&autoLogAppEvents=1" nonce="ZOzF7KfH"></script>


        <div class="fb-share-button" data-href="{{ $url5 }}?ref=8820{{$main_w}}" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.cashbabashop.com%2Fclass&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

</div>


</div>
<br>













<div id="shareID"style="display:none">
    <a href="/my-account?earn_id={{$rid}}"> 
    <h3 style="background:red; color:white; padding:10px; border-radius:4px"> শেয়ার  করা শেষ হলে " Daily Earning" পেতে  এখানে ক্লিক করুন  </button> 
    </a>
</div>



</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$('#answer-example-share-button').on('click', () => {
  if (navigator.share) {
    navigator.share({
        title: 'CashBaba Shop | Best Product, Best Service',
        text: 'সুলভমূল্যে  মানসম্মত প্রোডাক্ট',
        url: '{{ $url5 }}?ref=8820{{$main_w}}',
      })
      .then(() => console.log('Successful share'))
      .catch((error) => console.log('Error sharing', error));
  } else {
    console.log('Share not supported on this browser, do it the old way.');
  }
});
</script>











  </div>
</section>
<!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>



<?php
$urla=$_SERVER['SERVER_NAME'];
?>


<script type="text/javascript">
function shareDiv(){
    
    
     setTimeout(function() {
   $("#shareID").show();
  }, 3000);
    


    
    
         
}
</script>

