@extends('layouts.temp2.master')
@section('content')
	@include('layouts.temp2.nav')



<section id="do_action">
  <div class="container">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>Product Code</th>
                  <th>Product Name</th>
                  <th>Product Size</th>
                  <th>Product Color</th>
                  <th>Product Price</th>
                  <th>Product Qty</th>

              </tr>
          </thead>
          <tbody>

            @foreach ($orderDetails as $prodetails)
              <tr>
                  <td>{{ $prodetails->product_id }}</td>
                  <td>

                      {{ $prodetails->product_name }}

                  </td>
                  <td>{{ $prodetails->product_size }}</td>
                  <td>{{ $prodetails->prodect_color }}</td>
                  <td>{{ $prodetails->product_price }}</td>
                  <td>{{ $prodetails->product_qty }}</td>


              </tr>
            @endforeach


          </tbody>
          <tfoot>
              <tr>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Size</th>
                <th>Product Color</th>
                <th>Product Price</th>
                <th>Product Qty</th>
              </tr>
          </tfoot>
      </table>

  </div>
</section><!--/#do_action-->

@endsection
