@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-product') }}" >Add Payment </a> <a href="{{ url('/admin/view-products') }}" class="current">View Payment</a> </div>
      <h1>All Payment</h1>
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
           
           
           
<form id="account_Form" class="aa-login-form" name="accountForm" action="{{ url('/admin/pin_payment') }}" method="post">
								@csrf          
           <input type="hidden" name="cp" value="3">
           
           
  <button type="submit" class="btn btn-default" style="width:100%; background:green; font-size:130%; color:white; padding:10px 0px">Create PIN +</button>
</form>         
       
       
       
       
       
       
       
           

 <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    
                                         
                   <th>PIN Serial</th>

                    <th>PIN Number</th>
<th>User by</th>
                    

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($viewpayment as $pay)
                    <tr class="gradeX">
                      <td>{{ $pay->id }}</td>
                      
                      
                        <td>
                                        
{{ $pay->full_pin }}
                </td>
                
                      
                      
                      
                       
              
                <td>
                    @if($pay->use_by < 1)
           -
                             @else 
                             
            <span style="color:red"> {{ $pay->name}} ({{ $pay->use_by }})</span><br> <span style="color:blue">Upline: {{ $pay->upline }}</span>
                          
                             
                             @endif

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
