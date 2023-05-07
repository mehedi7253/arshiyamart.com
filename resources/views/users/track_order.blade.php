@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')

  <section id="aa-product">

    <div class="container">

    	<div class="contact" style="height: 80px;margin-top: 25px;width: 100%">
    		<h2 style="text-align:center;">Track your Order</h2>
    	</div>

      <div class="row" >

        <div class="col-md-12">
          <div class="row">
                        	<div class="col-md-3"></div>

              
              
          	<div class="col-md-6">
          		<form action="" method="get">@csrf
				 
				 
				 
				  <div class="form-group">
				    <label for="exampleInputEmail12">Your Order Number</label>
				    <input type="text" class="form-control" name="order_number" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="Enter Order Number" required="">
				    
				  </div>
	
	
				  
				  <button type="submit" class="btn btn-primary">Track</button>
				</form>
				
				
				
				
				
				
				
				
				
				
				
          	</div>
          	
          	
          	
          	
        <?php
        	$m_9=DB::table('banners')->where('id',9)->first();
        	$m_10=DB::table('banners')->where('id',10)->first();
        	$m_15=DB::table('banners')->where('id',15)->first();






        ;?>  	
          	
          	
          
          </div>


        </div>


      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
            <div class="row">

        <div class="col-md-12">
          <div class="row">
                        	<div class="col-md-3"></div>

              
              
          	<div class="col-md-6">
          	
          	
          	
          	@if(isset($_GET['order_number']))
          	<?php
          	$t_order=DB::table('orders')->where('id',$_GET['order_number'])->first();
          	$t_order_c=DB::table('orders')->where('id',$_GET['order_number'])->count();
          	?>
          	
          	
          	@if($t_order_c > 0)
          
          
          <h3 style="color:green; margin-top:100px; text-align:center">আপনার  প্রদানকৃত অর্ডার নম্বরঃ
          
          {{$t_order->id}}   </h3>
          
          <br>
          
          
          
          
          
          
          
          
          
          
          
          

          <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
       
       
       
         <h3 style="color:green; margin-top:5px; text-align:center">        Last Status: {{$t_order->order_status}} </h3>

       
          <table>
  <tr>
    <th>Status</th>
    <th>Date</th>
    <th>Remark</th>
  </tr>
  <?php
  $order_sta=DB::table('a444')->where('extra8',$t_order->id)->orderby('id',"ASC")->get();
  ;?>
  
  @foreach($order_sta as $sta)
  <tr>
    <td> <i class="fa fa-check" aria-hidden="true"></i>
 {{$sta->remark}}</td>
    <td>{{ date('d-M-Y (h:i:s A)', strtotime($sta->created_at)) }}</td>
    <td>
        {{$sta->extra5}}</td>
  </tr>
  @endforeach




</table>
          	
          	
          	
          	@else
          	<h3 style="color:red; margin-top:100px; text-align:center">আপনার প্রদানকৃত অর্ডার নম্বরটি সঠক নয়!</h3>
          	@endif
          	
          	
          	
          	
          	@endif
				
				
				
				
				
				
				
				
				
				
          	</div>
          	
          	
          	
          	
        <?php
        	$m_9=DB::table('banners')->where('id',9)->first();
        	$m_10=DB::table('banners')->where('id',10)->first();
        	$m_15=DB::table('banners')->where('id',15)->first();






        ;?>  	
          	
          	
          
          </div>


        </div>


      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      

      <div class="row" style="margin-top:25px;">
      	        <div class="col-md-12">
      	            
<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.998727648905!2d90.41858581498266!3d23.818644284555763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b1ce77ff97%3A0x6330df4b1fedb2cf!2sProgati%20Sarani%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1585395573305!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    -->  
        </div>
      </div>
     </div>
    </section>     	


@endsection