@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
     
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
              <h5>Medicine Note:</h5>
            </div>
            
            
           
            
            
            
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
             
                <tbody>
                  
                  @foreach ($coupons as $coupon)
                    
                      <td><div style="padding:5px; border:1px solid; font-size:110%">Name: {{ $coupon->name }}<br><span style="color:red"><b>Cell: {{ $coupon->mobile }}</b></span><br>Address: {{ $coupon->address }}</div><br>
                      <div style="padding:5px; border:1px solid; font-size:110%"><span style="color:red"> Note:</span> {!! $coupon->note !!}</div></td>
                     
                    </tr>
                  @endforeach

                </tbody>
              </table>
              
              
                      @if (!empty($coupon->image))
                           <img src="{{ asset('assets/admin/img/ppp/large/'.$coupon->image)}}"/>
                        @endif  
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
