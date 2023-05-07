@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-product') }}" >Add Payment </a> <a href="{{ url('/admin/view-products') }}" class="current">View Payment</a> </div>
      <h1>All Geneeration</h1>
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
              <h5 style="color:red"> সকল জেনারেশন</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        <th>Name & Photo</th>

                    <th>Contact Details</th>

                    <th>Upline & Rank</th>   
                    
                    <th>Earning</th>

                    <th>Details</th>
                    
                    

                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($viegen as $gen)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                      
                       <td class="center">
                        {{$gen->name}}<br>
                        ID: {{$gen->j_mobile}}<br>
                        A. Code: 8820{{$gen->id}}
                      </td>
                      
                      
                       
                <td>
                     Cell={{$gen->j_mobile}}<br>
                           Dist={{$gen->home_district}}      

                </td>
                
               
                <td>
                   Rank=
                   
                   @if($gen->rank==1)
                   Gemeral
                   
                   @endif
                   <br>
                   
                   <?php
                   $upl_id=$gen->up_line_id;
                     $up_name=DB::table("users")->where('id', $upl_id)-> first();

                   ?>

                   
                   
                           Upline=<span style="color:red">{{$up_name->name}} </span><br><span style="color:black">A.Code:</span> <span style="color:red">8820{{$up_name->id}}</span><br>
                </td>
                      
                      
                 <td class="center">
                           Cash_B:
                           
                           <?php 
                           
                           $erid=$gen->id;
                       
$er_main=DB::table("ac_main")->where('user_id', $erid)-> get()->sum("amount");
$er_shop=DB::table("ac_shop")->where('user_id', $erid)-> get()->sum("amount");



    ;?>        
                
                           
                          
                           
                           <span style="color:red">{{@$er_main}}</span><br>
                          Shop_B: <span style="color:red">{{ @$er_shop }}</span><br>

                      </td>
                
                     
                      
                      <td class="center">
                                                    <a href="{{url('/admin/view_genaration_u/'.$gen->id)}}/">Edit/Update</a>
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
