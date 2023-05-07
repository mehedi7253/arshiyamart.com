@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
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

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Medicine Order:</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Order Time</th>
                    <th>Name<br> Address & Mobile Number</th>
                    <th>Prescription</th>
                                       <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <?php $i=1;?>
                  @foreach ($coupons as $coupon)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      <td class="center">{{$coupon->created_at->diffForHumans() }}</td>
                      <td>{{ $coupon->name }}<br><span style="color:red"><b>Cell: {{ $coupon->mobile }}</b></span><br>Address: {{ $coupon->address }}</td>
                      
                      <td>@if (!empty($coupon->image))
                            <a href="{{ url('/admin/view-coupons3/'.$coupon->id)}}"><span style="padding:10px; background:silver; color:black">View Details</span></a>
                        @endif </td>
                      <td>-</td>
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
