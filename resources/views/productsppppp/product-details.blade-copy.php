@extends('layouts.temp2.master')
@section('content')
  <section id="aa-product-details">
  <div class="container">
    <div class="row">
      <!-- <div class="col-sm-3">
        @include('layouts.fontLayouts.category')
      </div> -->

      <div class="col-sm-9 padding-right">
        @if (Session::has('message_error'))
                 <div class="control-group">
                     <div class="controls">
                         <div class="alert alert-danger">

                             <strong style="color:#000">{{ session('message_error') }}</strong>

                         </div>
                       </div>
                 </div>
         @endif
        <div class="product-details"><!--product-details-->
          <div class="col-sm-5">
            <div class="view-product">
              <img class="mainImage" src="{{ asset('assets/admin/img/products/'.$pro_details->image) }}" alt="" />
              {{-- <h3>ZOOM</h3> --}}
            </div>
            <div id="similar-product" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                  <div class="item active">
                    @foreach ($pro_att_img as $product_img)
                      <img class="changeImage" style="width:100px;" src="{{ asset('assets/admin/img/products/'.$product_img->image) }}" alt="">
                    @endforeach
                  </div>
                  </div>

                <!-- Controls -->
                <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                </a>
                <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
                </a>


              </div>
          </div>
          <div class="col-sm-7">
            <form class="cartForm" name="cartForm" action="{{ url('/add-cart') }}" method="post">
              {{ csrf_field() }}

              <input type="hidden" name="product_id" value="{{ $pro_details->id }}">
              <input type="hidden" name="product_name" value="{{ $pro_details->product_name }}">
              <input type="hidden" name="product_code" value="{{ $pro_details->product_code }}">
              <input type="hidden" name="product_color" value="{{ $pro_details->product_color }}">
              <input type="hidden" name="price" id="price" value="{{ $pro_details->price }}">

            <div class="product-information"><!--/product-information-->
              <img src="" class="newarrival" alt="" />
              <h2>{{ $pro_details->product_name }}</h2>
              <p>Code: {{ $pro_details->product_code }}</p>
              <img src="{{ asset('assets/temp/images/product-details/rating.png') }}" alt="" />
              <p>
                <select id="selSize" name="size" style="width:120px">
                  <option value="">Choice Size</option>
                  @foreach ($pro_details->attribute as $pro_attribute)
                    <option value="{{ $pro_details->id }}-{{ $pro_attribute->size }}">{{ $pro_attribute->size }}</option>
                  @endforeach
                </select>
              </p>
              <span>
                <span id="getPrice">TK. {{ $pro_details->price }}</span>
                <label>Quantity:</label>
                <input type="text" name="quantity" value="1" />
                @if ($total_stock>0)
                  <button id="cartBtn" type="submit" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                  </button>
                @endif
              </span>
              <span>

              </span>
              <p><b>Availability:</b> <span id="avalable">@if($total_stock>0) Out of Stock @else In Stock @endif </span> </p>
              <p><b>Condition:</b> New</p>
              <p><b>Brand:</b> E-SHOPPER</p>
              <a href=""><img src="{{ asset('assets/temp/images/product-details/share.png') }} " class="share img-responsive"  alt="" /></a>
            </div><!--/product-information-->
          </div>
        </div><!--/product-details-->

        <div class="category-tab shop-details-tab"><!--category-tab-->
          <div class="col-sm-12">
            <ul class="nav nav-tabs">
              <li><a href="#details" data-toggle="tab">Details</a></li>
              <li><a href="#care" data-toggle="tab">Metarial & Care</a></li>
              <li><a href="#tag" data-toggle="tab">Delivery Option</a></li>
              <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane fade" id="details" >

              <div style="padding:25px;padding-top:0px;" class="col-sm-12">
                <p>{{ $pro_details->description }}</p>
              </div>


            </div>

            <div class="tab-pane fade" id="care" >
              <div class="col-sm-3">
                {{-- <div class="product-image-wrapper"> --}}
                  {{-- <div class="single-products"> --}}
                    <div class="productinfo text-center">
                      <p>{{ $pro_details->care }}</p>
                    </div>
                  {{-- </div>  --}}
                {{-- </div> --}}
              </div>
            </div>

            <div class="tab-pane fade" id="tag" >

              <p style="padding:15px;">Cash on delivery</p>

            </div>

            <div class="tab-pane fade active in" id="reviews" >
              <div class="col-sm-12">
                <ul>
                  <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                  <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                  <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <p><b>Write Your Review</b></p>

                <form action="#">
                  <span>
                    <input type="text" placeholder="Your Name"/>
                    <input type="email" placeholder="Email Address"/>
                  </span>
                  <textarea name="" ></textarea>
                  <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
                  <button type="button" class="btn btn-default pull-right">
                    Submit
                  </button>
                </form>
              </div>
            </div>

          </div>
        </div><!--/category-tab-->

        <div class="recommended_items"><!--recommended_items-->
          @if (!empty($relatedProducts))
            <h2 class="title text-center">Related Products</h2>
          @endif


          <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <?php $count = 1;?>
              @foreach ($relatedProducts->chunk(3) as $rel_product)

                <div <?php if($count == 1){ ?>  class="item active" <?php } else{ ?> class="item" <?php } ?>>

                  @foreach ($rel_product as $item)
                    <div class="col-sm-4">
                      <div class="product-image-wrapper">
                        <div class="single-products">
                          <div class="productinfo text-center">
                            <img style="height: 250px;" src="{{ asset('assets/admin/img/products/'.$item->image) }}" alt="" />
                            <h2>TK. {{ $item->price }}</h2>
                            <p>{{ $item->product_name }}</p>
                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i><a href="{{ url('/product/'.$item->id) }}"> View Details</a></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
                <?php $count++;?>
              @endforeach
            </div>
             <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
              <i class="fa fa-angle-left"></i>
              </a>
              <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
              <i class="fa fa-angle-right"></i>
              </a>
          </div>
        </div><!--/recommended_items-->

      </div>
    </div>
  </div>
</section>
<script>
$(document).ready(function(){
  $('.changeImage').click(function(){
    var image = $this.attr('src');
    alert("image");
    $('.mainImage').attr('src',image);

  });
});
</script>
@endsection
