@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add News</a> <a href="{{ url('/admin/view-categories') }}" class="current">View News</a> </div>
      <h1>News</h1>
    </div>
    <div class="container-fluid">
      <hr>
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

if(isset($_GET['did']))
{
   $sllsd=$_GET['did'];
        $userCart = DB::table('news')->where(['id' => $sllsd])->delete();
        echo "<h2>1  Delete Success</h2>";
}


if(isset($_GET['aid']))
{
   $sllsd=$_GET['aid'];
        $userCart = DB::table('news')->where(['id' => $sllsd])->update(['status'=>2]);

        echo "<h2>1  Delete Success</h2>";
}




;?>


          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All News</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        <th>Action</th>

                    <th>Remark</th>
                  
                    <th>Image</th>
  <th>User</th>
  <th>Delete</th>
  
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  @foreach ($coupons as $coupon)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                                            <td>
                                            
                                              

                   
                   
                   @if($coupon->status != 2) <a href="?aid={{$coupon->id}}" style="color:green">Approve</a> @else <span style="color:green">OK</span> @endif   </td>
                   
                   
                      
                      <td> {{ $coupon->post }}
                      
                      
                     
                      </td>
                                            <td><a href="{{url('/')}}/admin/news/{{$coupon->image}}"><img src="{{url('/')}}/admin/news/{{$coupon->image}}" style="height:50px"></a></td>

                      <td>
                          <?php
                          
                             $sllsd1=$coupon->user_id;
        $userCarte = DB::table('users')->where(['id' => $sllsd1])->first();
                          ;?>
                          {{ $userCarte->name }}<br>
                      
                      
                      
                   
                      
                      <td>@if($coupon->status != 2) <a href="?did={{$coupon->id}}" style="color:red">Delete</a> @else - @endif</td>
                      
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
