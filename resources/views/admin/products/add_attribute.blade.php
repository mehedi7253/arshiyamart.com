@extends('layouts.adminLayouts.admin_master2')
@section('content')

  <div id="content">
      
      
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/view-products') }}">View products</a> <a href="{{ url('/admin/add-product') }}" class="current">Add Product Stock</a> </div>
      
      
      
   </div>   
      
      
 <div style="padding:10px; border:1px dashed black; width:94%; margin-left:2%">   
     <h3 style="padding:10px">SKU :  (Stock keeping unit)</h3>
    
<p style="padding:10px; font-size:120%">কোন প্রোডাক্ট এর SKU (Stock) এ্যাড সময় সময় তার কালার ও সাইজ খুজে না পেলে অনুগ্রহ করে Color Library ও 
 Size Library থেকে যুক্ত করে নিন।  </p>
   
   
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12"> 
          <div class="widget-box">

            @if (Session::has('message_success'))
                     <div class="control-group">
                         <div class="controls">
                             <div class="alert alert-success">

                                 <strong style="color:#000">{{ session('message_success') }}</strong>

                             </div>
                           </div>
                     </div>
             @endif
            @if (Session::has('message_error'))
                     <div class="control-group">
                         <div class="controls">
                             <div class="alert alert-danger">

                                 <strong style="color:#000">{{ session('message_error') }}</strong>

                             </div>
                           </div>
                     </div>
             @endif

            <div class="widget-title"> 
              <h5 >Product Name: <span style="color:red; font-size:130%">{{ $pro_att->product_name}}</span></h5>
            </div>

          
          </div>
        </div>
        <form class="form-horizontal" method="post" action="{{ url('/admin/add-attribute/'.$pro_att->id) }}" name="add_products" id="add_products" novalidate="novalidate" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="widget-box">
            <input type="hidden" name="product_id" value="{{ $pro_att->id }}">
            <div class="control-group">
                <div class="field_wrapper">
                  <div>
                      
<!--                      <input required="" type="text" name="sku[]" id="sku" placeholder="Color"/>
-->                      <select name="sku[]" required="" style="width:120px">
    <?php
    $color1=DB::table('brands3')->get();
    ?>
        <option value="">Select Color</option>
    @foreach ($color1 as $color)
    <option value="{{$color->id}}">{{$color->name}}</option>
    @endforeach
                          

                      </select>
                      
                      
                      
                      
<!--                      <input required type="text" name="size[]" id="size" placeholder="Size"/>
-->                    
 <select name="size[]" required="" style="width:120px">
    <?php
    $color1=DB::table('brands4')->get();
    ?>
        <option value="">Select Size</option>
    @foreach ($color1 as $color)
    <option value="{{$color->id}}">{{$color->name}}</option>
    @endforeach
                          
</select>

<input type="text" name="app[]" id="price" placeholder="গড় ক্রয় মূল্য"required="" />

<input type="text" name="price[]" id="price" placeholder="বিক্রয় মূল্য"required="" />


                      <input required type="text" name="stock[]" id="stock" placeholder="Stock"/>
<!--                      <a href="javascript:void(0);" class="add_button" title="Add field">Add Field</a>
-->                  </div>
                </div>
              </div>

                <div class="form-actions">
                  <input type="submit" value="Add Stock (SKU)" class="btn btn-success">
                </div>
                
                
                

                
                
                
                
                
              </div>
          </form>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>All Attributges Record</h5>
        </div>
          <div class="widget-content nopadding">
        
        
        
          <form class="" action="{{ url('/admin/edit-attribute/'.$pro_att->id) }}" method="post">
            {{ csrf_field() }}
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                    <th>SKU নং</th>
<!--                  <th>Attribute ID</th>
-->                  <th>কালার</th>
                  <th>সাইজ</th>
                  <th>ক্রয়  মূল্য</th>
                  <th>বিক্রয় মূল্য</th>
                  <th>স্টক</th>
                  <th>আপডেট</th>
                  <th>ডিলেট</th>


                </tr>
              </thead>
              <tbody>

      


                <?php $i = 1;?>
                 @foreach ($pro_att['attribute'] as $attribute)
             <tr class="gradeX">
                    <td>{{ $i++ }}</td>
<!--                    <td style="width:200px;"> <input type="hidden" name="attrId[]" value="{{ $attribute->id }}"> {{ $attribute->id }}</td>
-->                    <td>
                    <?php
    @$color1=DB::table('brands3')->where('id',$attribute->sku)->first();
    ?>
      {{@$color1->name}}
                    
                    </td>
                   
                   
                   
                    <td>
                    <?php
    @$color1=DB::table('brands4')->where('id',$attribute->size )->first();
    ?>
      {{@$color1->name}}
                    
                    </td>
                    <td > <input style="width:60px;" type="number" name="appPrice[]" value="{{ $attribute->app }}"> </td>
                    
                    
                    
                    
                                        <td > <input style="width:60px;" type="number" name="attrPrice[]" value="{{ $attribute->price }}"> </td>
                    
                    
                    
                    
                    
                    
                    
                    <td >
                        @if($attribute->stock >4)
                                                <span style="color:green">  <b>{{ $attribute->stock }}</b>  </span>

                        @else
                        <span style="color:red">  <b>{{ $attribute->stock }}</b>  </span>
                        @endif
                        
                        
                        
                        
                        + <input style="width:60px;" type="number" name="attrStock[]" value="0"> </td>
                    <td class="center">



<input style="width:60px;" type="hidden" name="attrId[]" value="{{ $attribute->id }}">
<input style="width:60px;" type="hidden" name="pstock[]" value="{{ $attribute->stock }}">

                          <input type="submit" class="btn btn-primary btn-mini" name="submit" value="Update">
                    </td>  
                      
                      
                      <td class="right">   
<!--                      <a href="{{ $attribute->id }}" <?php /*id="delattribute" href="{{ url('/admin/delete-attribute/'.$attribute->id) }}" */?> rel="{{ $attribute->id }}" rel1="delete-attribute" href="javascript:" class="btn btn-danger btn-mini del"> Delete</a>
-->                      <a href="/admin/delete-attribute/{{ $attribute->id }}" style="color:red"> Delete</a>

                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
            </form>
          </div>
          </div>
          </div>
        </div>
        
</div>        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <hr>
        
        
        
        
        
        
      <div style="padding:10px; border:1px dashed black; width:94%; margin-left:2%">
        
        <h3 style="text-align:left">Product Image</h3>
           <h6 style="color:red"> একাধিক ইমেইজ যুক্ত করার ক্ষেত্রে প্রতিটি ইমেজের সাইজ সর্বোচ্চ 200 কেবি এর মধ্যে রাখবেন। ( উচ্চতা: 600px  ও প্রস্ত 500px  এর মধ্যে থাকলে সাইট দ্রুত লোড হবে।) </h5>
        <form class="form-horizontal" method="post" action="{{ url('/admin/add-images/'.$pro_att->id) }}" name="add_images" id="add_images" novalidate="novalidate" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="widget-box">
            <input type="hidden" name="product_id" value="{{ $pro_att->id }}">
            <div style="margin:0 auto" class="control-group">
                <div   class="field_wrapper">
                  <table class="table table-bordered table-striped">
                    <tbody>
                      <tr class="odd gradeX">
                      <td style="width:150px;"> <label  for="image">Choose Product Image</label></td>
                      <td><input type="file" name="image[]" id="image" required="" value="Choose Product Image" multiple ></td>

                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

                <div class="form-actions">
                  <input type="submit" value="Add Image" class="btn btn-success">
                </div>
                
              </div>
          </form>
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
          <h5>All Attributges Record</h5>
        </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Image</th>
                  <th>Sku</th>
                  <th>Delete</th>

                </tr>
              </thead>
              <tbody>


                <?php $i = 1;
                
                 $productImage = DB::table('product_images')->where('product_id',$pro_att->id)->get();
                
                
                ?>
                 @foreach ($productImage as $pro_img)
                  <tr class="gradeX">
                    <td>{{ $i++ }}</td>
                    <td class="center">
                         <img style="height:200px;width:200px;" src="{{ asset('assets/admin/img/products/'.$pro_img->image) }}" alt="">
                         </td>


                    <td class="center">
                        
          <span style="font-size:120%; color:blue"> Sku : সেট করা হয়নি <span>
                 
                 
                 <br>
                        
                        
                        <form>
                            <?php
                            $attribute_p=DB::table('products_attributes')->where('product_id',$pro_att->id)->get();
                            
                            ?>
                            
                            
                            
                            
                            
                            
                            
                            
                            <select name="sku_id" required="">
                             @foreach ($attribute_p as $attribute)   
                             <option value="">Select SKU (if any)</option>
                                <?php
    @$color1=DB::table('brands3')->where('id',$attribute->sku)->first();
    ?>
      <?php
    @$color2=DB::table('brands4')->where('id',$attribute->size )->first();
    ?>
     
      <option value="">{{@$color1->name}} -  {{@$color2->name}}</option>
      
      
      
      
                            @endforeach
                            </select>
                            <br>
                            <input type="submit" value="Update">
                        </form>
                        
<!--  
                      <a <?php /*id="delImg" href="{{ url('/admin/delete-image/'.$pro_img->id) }}" */?> rel="{{ $pro_img->id }}" rel1="delete-image" href="javascript:" class="btn btn-danger btn-mini del">Delete</a>
-->
                    </td>
                    
                      <td class="center">
                      <a aref="#">Delete</a>
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
