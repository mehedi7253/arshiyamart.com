@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">


<div style="margin-top:50px; margin-left:100px">

<h2>Select Brands</h2>


          <ul>
              <?php
              $brand=DB::table('brands')->get()
              ;?>
              @foreach($brand as $bb)
              <a href="{{ url('/admin/createinvoice_qr') }}?qid={{$_GET['qid']}}&brand={{$bb->id}}"><li><h3>{{$bb->name}}</h3></li></a>
              
              @endforeach
              
          </ul>
          
          
      </div>    
          
          
        </div>
      </div>
    </div>
  </div>

    <div id="myModal" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button">×</button>
        <h3>{{ @$product->product_name }}</h3>
      </div>
      <div class="modal-body">
        <p>Categories   :<strong> {{ @$product->category_name }}</strong></p>
        <p>Code         :<strong> {{ @$product->product_code }}</strong></p>
        <p>Colours      :<strong> {{ @$product->product_color }}</strong></p>
        <p>Price        :<strong> {{ @$product->price }}</strong></p>
        <p class="center">@if (!empty($product->image))
            <img style="height:200px;" src="{{ asset('assets/admin/img/products/'.$product->image)}}" alt="">
        @endif</p>
        <p>Description  : {{ @$product->description }}</p>
      </div>
    </div>


@endsection
