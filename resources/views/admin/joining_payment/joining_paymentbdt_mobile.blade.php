@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-product') }}" >Add Payment </a> <a href="{{ url('/admin/view-products') }}" class="current">View Payment</a> </div>
      <h1>Mobile Recharge (BDT)</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">






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
$servername = "localhost";
$username = $uuu;
$password = $ppp;
$dbname = $ddd;
$conn = mysqli_connect($servername, $username, $password, $dbname);




if(isset($_GET['stock_off']))
{
    
    $id=$_GET['stock_off'];
    $sql = "UPDATE products SET stock=1 WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
      echo '<h3 tyle="color:green; text-align:center">Successfully Stock Off</h3>';
    }
}


if(isset($_GET['stock_on']))
{
    
    $id=$_GET['stock_on'];
    $sql = "UPDATE products SET stock='' WHERE id='$id'";
    
    if (mysqli_query($conn, $sql)) {
      echo '<h3 style="color:green; text-align:center">Successfully Stock On</h3>';
    }
}


;?> 









          @if (Session::has('message_success'))
                   <div class="control-group">
                       <div class="controls">
                           <div class="alert alert-success">

                               <strong style="color:#000">{{ session('message_success') }}</strong>

                           </div>
                         </div>
                   </div>
           @endif



          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5 style="color:red"> মোবাইল রিচার্জ এর আবেদন সমূহ</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        <th>Approved</th>

                    <th>Recharge Information</th>

                   
                    
                    

                  </tr>
                </thead>
                <tbody>
                    
  
                    
                    
                  <?php $i = 1;?>
                   @foreach ($viewpayment as $pay)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>

                      
                      
                      
                      
                       <td class="center">
                           @if($pay->status!=2)
                           
                                                       <a href="{{ url('/admin/app_paybdt_mobile/'.$pay->id) }}"  style="padding:8px; background:green; color:white"> Approved & Finish</a>  <br> <br>
                                                       {{ date('d-M-Y (h:i:s A)', strtotime($pay->created_at)) }}<br>
                                                       
                                                       
                                           <?php
                                           $vieg555= DB::table('users')->where('id',$pay->user_id)->first();
?>            
                                              {{$vieg555->name}}  ({{ $pay->user_id}})       
                                                       
                                                       
                                                       
                            
                            
                            @else
                            <a href="">OK</a>

                            @endif
                      </td>
                      
                    
                      
                      
                       
                <td>
                                        	Mobile Number:  <span style="color:blue; font-size:140%">{{ $pay->sender_number}}</span><br>
                                        	Method: <span style="color:blue; font-size:140%">{{ $pay->payment_method}}</span><br>
                                        	Type: <span style="color:blue; font-size:140%">{{ $pay->sim_type}}paid</span><br>
                                        	Amount:<span style="color:red; font-size:140%"> {{ -$pay->amount}} </span><br>

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
