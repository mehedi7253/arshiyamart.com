@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Shops</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
      <h1>User</h1>
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
           
                                       <a href="{{ url('/admin/add-bulkm') }}">           <h4 style="color:red">Click here to Copy All Marchant Mobile Number (for Bulk SMS)</h4>
</a>

<?php

if(isset($_GET['did']))
{
   $sllsd=$_GET['did'];
        $userCart = DB::table('shops')->where(['id' => $sllsd])->delete();
        echo "<h2>1  Delete Success</h2>";
}


if(isset($_GET['aid']))
{
   $sllsd=$_GET['aid'];
        $userCart = DB::table('shops')->where(['id' => $sllsd])->update(['status'=>2]);

        echo "<h2>1  Delete Success</h2>";
}




;?>

















          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>All User</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                                        
<th>Edit</th>
              <th>Action</th>      <th>Shop Name & Logo</th>
                  
                    <th>NID</th>
  
  <th>Address</th>
  <th>Status</th>
  <th>Delete</th>
  
                   
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  @foreach ($coupons as $coupon)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      
                                            <td>
                                            
                                              

              <?php
if($coupon->commissio > 0 ){
   $commissio=$coupon->commissio;
}else
{
      $commissio=0;
}
;?>     
                  <span style="color:blue; font-size:130%"> {{ $coupon->shop_name }} </span><br>
                  <span style="color:red;font-size:110%"> Comissoion: <b>{{$commissio}}</b> %</span><br>
                                                                
                 <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-lg{{ $coupon->id }}">
                   View / Edit Details
                </button>

   <div class="modal fade" id="modal-lg{{ $coupon->id }}">
        <div class="modal-dialog modal-lg">
          <form action="{{ url('/admin/editmer') }}" method="post" enctype="multipart/form-data">
              @csrf
          <div class="modal-content">

              <div class="modal-body">

<div class="text-center"> <img src="{{url('/')}}/assets/admin/img/shops/{{$coupon->logo}}" style="max-height:50px"></div>

<label>Store Name: </label>
<input type="text" name="shop_name" value="{{ $coupon->shop_name }}" style="width:95%" required="">


<label>Help Line: </label>
<input type="text" name="helpline" value="{{ $coupon->helpline }}" style="width:95%" required="">

<label>Address </label>
<input type="text" name="address" value="{{ $coupon->address }}" style="width:95%" required="">



<label> Comission :  <span style="color:red">( প্রোডাক্ট বিক্রয়ের উপর যত % কমিশন কেটে নেওয়া হবে, শুধু ইংরেজীতে সংখ্যা লিখতে হবে। )  </span></label>




<input type="number" name="commissio" value="{{ $commissio }}" style="width:45%" required="">%


<input type="hidden" name="p_image" value="{{ $coupon->logo }}" style="width:95%">
<input type="hidden" name="id" value="{{ $coupon->id }}" style="width:95%">

                  
 <label>Change Logo </label>
<input type="file" name="file">                          
                  
                  
                  
    

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" value="Update Marchent">
              </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>                
                   
                   <td>

                                             
                                             

                   @if($coupon->status != 2) <a href="?aid={{$coupon->id}}" style="color:green">Approve</a> @else <span style="color:green">OK</span> @endif   </td>





      
      
      
      
      
      
      
      
                   </td>
                      
                      <td> <img src="{{url('/')}}/assets/admin/img/shops/{{$coupon->logo}}" style="height:50px"><br>{{ $coupon->shop_name }}
                      
                      
                     
                      </td>
                                            <td><a href="{{url('/')}}/assets/admin/img/shops/{{$coupon->nid}}"><img src="{{url('/')}}/assets/admin/img/shops/{{$coupon->nid}}" style="height:50px"></a></td>

                      <td>
                          <?php
                          
                             $sllsd1=$coupon->dist;
        $userCarte = DB::table('all_dist')->where(['dist_code' => $sllsd1])->first();
                          ;?>
                          {{ $userCarte->dist_name }}<br>
                      
                      
                      
                      
                    <?php
                          
                             $sllsd11=$coupon->ps;
        $userCarter = DB::table('ps_name')->where(['id' => $sllsd11])->first();
                          ;?>        
                      
                      
                      
                      
                        {{ $userCarter->name }}<br>{{ $coupon->address }}<br>
                        Help Line: {{ $coupon->helpline }}</td>
                      
                
          <td>
               @if($coupon->status < 2)
               Processing
                           @endif
               @if($coupon->status == 2)
              <span style="color:green"> Active </span>
                           @endif
               @if($coupon->status == 3)
            <span style="color:red">Suspend</span>
            @endif
               
              
              
          </td>      
                
                
                
                      
                      <td>
                    @if($coupon->status < 2) <a href="?did={{$coupon->id}}" style="color:red"> Delete </a> @else  @endif</br>
                    
                    
                    @if($coupon->status == 2) <a href="?did={{$coupon->id}}" style="color:red"> Suspend </a> @else  @endif</br>
                    @if($coupon->status == 3) <a href="?did={{$coupon->id}}" style="color:red"> Un Suspend </a> @else  @endif</td>
                      
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
  
  
  
  





<script>

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
@endsection
