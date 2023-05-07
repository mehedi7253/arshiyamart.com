@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')

  <section id="aa-product">

    <div class="container">

    	<div class="contact" style="height: 80px;margin-top: 25px;width: 100%">
    		<h2>Contact Us</h2>
    	</div>

      <div class="row">
          
          
          
          
          
          
          	@if (Session::has('message_success'))
							 <div class="control-group">
									 <div class="controls">
											 <div class="alert alert-success">

													 <strong style="color:#000">{{ session('message_success') }}</strong>

											 </div>
										 </div>
							 </div>
			 @endif
          
          
          
          
          

                      
                      
        <div class="col-md-12">
          <div class="row">
          	<div class="col-md-6">
          		<form action="{{ url('/contactus') }}" method="post">@csrf
				  <div class="form-group">
				    <label for="exampleInputEmail12">Full Name</label>
				    <input type="text" class="form-control" name="name" id="exampleInputEmail12" aria-describedby="emailHelp" placeholder="Enter Full Name" required="" value="@if (!empty(Auth::check()))<?php
				   $anme=Auth::user()->name;?>{{$anme}}@endif">
				    
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email" required="" value="@if (!empty(Auth::check()))<?php
				   $anme=Auth::user()->email;?>{{$anme}}@endif">
				   
				  </div>

				  <div class="form-group">
				    <label for="exampleInputPassword1">Phone</label>
				    <input type="text" class="form-control" id="exampleInputPassword1" name="sub" placeholder="Phone Number" required="" value="@if (!empty(Auth::check()))<?php
				   $anme=Auth::user()->phone;?>{{$anme}}@endif">
				  </div>
				<div class="form-group">
				    <label for="exampleInputtext1">Comment</label>
				    <textarea id="exampleInputtext1" class="form-control"  name="comment" required="">@if(isset($_GET['product_name']))I have requested  to product name {{$_GET['product_name']}} (Product ID: {{$_GET['id']}});@endif</textarea>
				  </div>

				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
          	</div>
          	
        <?php
        	$m_9=DB::table('banners')->where('id',9)->first();
        	$m_10=DB::table('banners')->where('id',10)->first();
        	$m_15=DB::table('banners')->where('id',15)->first();






        ;?>  	
          	
          	
          	
          	<div class="col-md-6">
          		<div class="address">
          			<h4 style="font-weight: 900;">Address</h4>
          			<p>{{$m_15->image}}</p>
          			<p>Bangladesh.</p>
          		</div>
          		<div class="email">
          			<h4 style="font-weight: 900;">Email</h4>
          			<p>{{$m_10->image}}</p>
          			
          		</div>
          		<div class="phone">
          			<h4 style="font-weight: 900;">Help Line</h4>
          			<p>{{$m_9->image}}</p>
          			
          		</div>
          		
          	</div>
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