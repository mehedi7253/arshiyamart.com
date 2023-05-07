@extends('layouts.fontLayouts.master')
@section('content')

<section id="cart_items">
  <div class="container">
    <div class="breadcrumbs">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Thanks</li>
      </ol>
    </div>

  </div>
</section> <!--/#cart_items-->

<section id="do_action">
  <div class="container">
    <div class="heading" align="center">
      <h3>Your Cash on Delivery has been placed</h3>
      <p>Your total order number is {{ Session::get('order_id') }} and your payable amount is {{ Session::get('total') }}</p>
    </div>

  </div>
</section><!--/#do_action-->

@endsection
<?php
  Session::forget('order_id');
  Session::forget('total');
?>
