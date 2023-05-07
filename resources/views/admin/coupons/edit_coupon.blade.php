@extends('layouts.adminLayouts.admin_master')
@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-categories') }}">View Coupons</a> <a href="{{ url('/admin/add-category') }}" class="current">Add Coupons</a> </div>
    <h1>Coupons</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          @if(Session::has('message_success'))

          <div class="controls">
              <div class="alert alert-success">

                  <strong style="color:#000">{{ session('message_success') }}</strong>

              </div>
            </div>
          @endif
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Add Coupons</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-coupon/'.$all_coupon->id) }}" name="add_coupon" id="add_coupon">
              {{ csrf_field() }}


              <div class="control-group">
                <label class="control-label">Coupon Code</label>
                <div class="controls">
                  <input type="text" name="coupon_code" id="coupon_code" value="{{ $all_coupon->coupon_code }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Amount</label>
                <div class="controls">
                  <input type="number" name="amount" id="amount" value="{{ $all_coupon->amount }}">
                </div>
              </div>


              <div class="control-group">
                <label class="control-label">Discount Type</label>
                <div class="controls">
                  <select name="amount_type" style="width:25%" >
                    <option @if($all_coupon->amount_type == "Percentage") selected @endif value="Percentage">Percentage</option>
                    <option @if($all_coupon->amount_type == "Percentage") selected @endif value="Fixed">Fixed</option>

                  </select>
                </div>
              </div>

              <div class="control-group">
                  <label class="control-label">Expire Date</label>
                  <div class="controls">
                    <input type="text" name="expiry_date" id="expairDate" value="{{ $all_coupon->expiry_date }}">
                  </div>
              </div>

              <div class="control-group">
                <label class="control-label">Enable</label>
                <div class="controls">
                  <input type="checkbox" name="status" id="status" value="1" @if($all_coupon->status == "1") checked @endif  >
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Update " class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
