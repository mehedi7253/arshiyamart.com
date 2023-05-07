@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')

  <section id="aa-product">

    <div class="container">
        
  
        
        
        
        
 

      <div class="row" >






<h3 style="text-align:center; margin-top:60px; color:red">
নির্দিষ্ট এরিয়ার স্টোরগুলো খুজে পেতে সার্চ করুন</h3>
<form id="account_Form" class="aa-login-form" name="accountForm" action="{{url('/')}}/shops" method="post" enctype="multipart/form-data">
								@csrf
	
	
	 <?php
                    $aa_dist=DB::table('all_dist')->orderby('dist_name','ASC')->get();
                   ;?>
           														
							

<select name="dis" style="width:40%; padding:6px;" id="mySelect" onchange="ChangeCarList()"  required>
                       <option value="">Select Distrct</option>

@foreach ($aa_dist as $dist)
    <option value="{{$dist->dist_code}}">{{$dist->dist_name}}</option>
    @endforeach</select>

							

<select name="ps" id="sm14" style="width:40%; padding:6px;" required>
                       <option value="">Select P.S/Thana</option>
  </select>




<input type="submit"  style="width:15%; background:silver; font-size:130%;" value="Search">
</form>


















        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
   
                                 

                  
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="men">
                        
                        
                        
                        
                        
                        
                        
                      			
		<div class="row" style="margin-bottom:10px; margin-top:20px;">
		
		
		
	
		
	@if(isset($r_ps))
	
		
	
		<?php
		
        $bangladesh_n_p = DB::table('shops')
       ->where('status',2)
       ->where('ps',$r_ps)
        ->orderby('id', 'ASC')
        ->get();
        
        
        		
        $bsn_p = DB::table('ps_name')
       ->where('id',$r_ps)
        ->first();
        
        
        
        
        ?>	
    @else
        
        	
		<?php
		
        $bangladesh_n_p = DB::table('shops')
       ->where(['status' => 2])
        ->orderby('id', 'ASC')
        ->get();
        
        
        ?>

	@endif
	
	
	
	
	
		@if(isset($r_ps))
    	<div class="contact" style="height: 80px;margin-top: 25px;width: 100%">
    		<h3 style="text-align:center">--- {{ $bsn_p->name }} all shops---</h3>
    	</div>
        @else
    	<div class="contact" style="height: 80px;margin-top: 25px;width: 100%">
    		<h2 style="text-align:center">Our All Store</h2>
    	</div>
        @endif
	
	
			@foreach ($bangladesh_n_p as $bnp)		

	
		
			<div   style="margin-top:5px; float:left">
				   	<a href="{{url('/')}}/shop/{{$bnp->id}}"> 
    				   	<div style="float:left; width:100%; padding: 1px 1px; background:#FFFFFF; font-size:120%; color:black; border-radius:4px;text-align:center; border:0px solid gray">
    				        @if(!empty($bnp->logo))
    				        <img src="{{url('/')}}/assets/admin/img/shops/{{$bnp->logo}}" style="height:100px; border-radius:8px">
    				        @else
<i class="fa fa-paper-plane" aria-hidden="true" style="font-size:100%"></i>



@endif

    				        <br>
    				     <span style="font-size:60%; color:blue"><b> {{$bnp->shop_name}}</b></span> <br>
    				     @if(!isset($r_ps))
    				         				     <span style="font-size:60%">
    				         				         <?php
    				                $bsn_ps = DB::table('ps_name')->where('id',$bnp->ps)->first();
    				                $bsn_d = DB::table('all_dist')->where('dist_code',$bnp->dist)->first();
        
    				         				         ;?>
    				         				         <span style="color:red">{{$bsn_d->dist_name}}</span><br>
    				         				         <span style="color:green">{{$bsn_ps->name}}</span> 

    				     @else
    				         				     <span style="font-size:60%">
    				         		 <?php
    				                $bsn_ps = DB::table('ps_name')->where('id',$bnp->ps)->first();
    				                $bsn_d = DB::table('all_dist')->where('dist_code',$bnp->dist)->first();
        
    				         				         ;?>		         
    				         				         <span style="color:green"> {{$bnp->po}}</span> 

    				     @endif
                </div>
					</a>
					
				</div>	

		
	@endforeach				

				
	
				
				
	
				</div>				
			
			
			
			
			
			
			
                        
             </div>           
                        
                        
                        
                      
                    </div>
                  

                  </div>
               
                 
              </div>
            </div>


        </div>


      </div>

      
     </div>
    </section>     	


@endsection







 
<?php
$urla=$_SERVER['SERVER_NAME'];
?>


<script type="text/javascript">
function ChangeCarList(){
    var x = document.getElementById("mySelect").value;
     $.ajax({
            url:'https://{{$urla}}/app/search_ps.php?dis_id='+x,
                        success:function(response){
                        $('#sm14').html(response);
                        }
                        
        });
}
</script>



