@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-product') }}" >Add Product</a> <a href="{{ url('/admin/view-products') }}" class="current">View Products</a> </div>
      <h1>General Setting</h1>
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
            
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>No</th>

                    <th>Description</th>
                    <th>Content</th>
                    <th>Actions</th>

                  </tr>
                </thead>
               
   @if(!isset($_GET['a']))            
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($banners as $banner)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                        @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
    @endif            
           
           
           
           
           
           
           
           
           
     @if(isset($_GET['a']))  
     <?php
     $a=$_GET['a'];
     ;?>
     @if($a == 1)
     <?php
     $bannerss=DB::table('banners')->where('id',40)->get();
     $bannersss=DB::table('banners')->where('id',1013)->get();
     ;?>
     
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannerss as $banner)
                    <tr class="gradeX">
                      <td>2</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
                
                
                
                
                 <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannersss as $banner)
                    <tr class="gradeX">
                      <td>1</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
                
                
                
                
    @endif       
    

    @endif                   
           
           
           
           
           
           
           
           
                  
           
           
     @if(isset($_GET['a']))  
     <?php
     $a=$_GET['a'];
     ;?>
     @if($a == 2)
     <?php
     $bannerss=DB::table('banners')->where('id',70)->get();
     ;?>
     
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannerss as $banner)
                    <tr class="gradeX">
                      <td>1</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
                
                
                
    
                
                
                
                
                
    @endif       
    

    @endif                   
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
           
                @if(isset($_GET['a']))  
     <?php
     $a=$_GET['a'];
     ;?>
     @if($a == 4)
     <?php
     $bannerss=DB::table('banners')->where('id',1015)->get();
     $bannersss=DB::table('banners')->where('id',1016)->get();
     $bannerssss=DB::table('banners')->where('id',1017)->get();
     ;?>
     
     
     
     
     
           <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannerssss as $banner)
                    <tr class="gradeX">
                      <td>3</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
     
     
     
     
     
     
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannerss as $banner)
                    <tr class="gradeX">
                      <td>2</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
                
                
                
                
                 <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannersss as $banner)
                    <tr class="gradeX">
                      <td>1</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
                
                
                
                
                
                
                
                
             
                
                
                
                
                
                
                
    @endif       
    

    @endif    
           
           
           
           
           
           
           
           
           
           
           
      
                 
           
     @if(isset($_GET['a']))  
     <?php
     $a=$_GET['a'];
     ;?>
     @if($a == 3)
     <?php
     $bannerss=DB::table('banners')->where('id',6)->get();
     $bannersss=DB::table('banners')->where('id',22)->get();
     ;?>
     
                <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannerss as $banner)
                    <tr class="gradeX">
                      <td>2</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
                
                
                
                
                 <tbody>
                  <?php $i = 1;?>
                   @foreach ($bannersss as $banner)
                    <tr class="gradeX">
                      <td>1</td>
                      <td style="width:200px;">{{ $banner->title }}</td>

                      <td style="width:150px;">
                         @if (empty($banner->status))
                            <img style="height:100px;" src="{{ asset('assets/admin/img/banners/'.$banner->image)}}" alt="">
                         @else
                         
                         
                         {{ $banner->image }}
                         
                        @endif
                      </td>
                      <td class="center">
                        <div class="fr">


                           <a href="{{ url('/admin/edit-banners/'.$banner->id) }}" class="btn btn-primary btn-mini">Edit</a>

                          

                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
                
                
                
                
                
                
                
                
                
             
                
                
                
                
                
                
                
    @endif       
    

    @endif                   
           
      
      
                   </table>
               </div>
          </div>
          
          
          
          
  @if(isset($_GET['a']))  
     <?php
     $a=$_GET['a'];
     ;?>
     @if($a == 3)         
          
          
          
      @if(isset($_GET['dist']))
      @php
      $dis=$_GET['dist'];
      DB::table('banners')->where('id',1014)->update([
      'image' => $dis
      
      ]);
      @endphp
      @endif
          
          
          
          
               
      @if(isset($_GET['coddd']))
      @php
      $ccccc=$_GET['coddd'];
      DB::table('banners')->where('id',1018)->update([
      'image' => $ccccc
      
      ]);
      @endphp
      @endif     
          
          
          
          <div style="border:1px dashed black; width:95%">
                        <form style="width:300px; margin-left:5px" method="get" action=""> 
                        @csrf
                     
                
                
                
                
                
                <?php
                    $c_city=DB::table('banners')->where('id',1014)->first();
                    
                    $aa_dist_sesstione=DB::table('all_dist')->where('dist_code',$c_city->image)->first();
                    $aa_dist_sesstionec=DB::table('all_dist')->where('dist_code',$c_city->image)->count();
                    
                    
                    
                    
                    $aa_dist=DB::table('all_dist')->get();
                 ;?>
                 
                         <label>Current City:
                         @if($aa_dist_sesstionec < 1)
                        <span style="color:red"><b> District Not set yet. </b></span>
                         @else
                         <span style="color:green"><b>
                         {{@$aa_dist_sesstione->dist_name}} 
                         </b></span>
                         @endif
                         
                         </label>
        
                 
                 
  <select name="dist" required>                 

    <option value="">Select Delivery City</option>
    
   
    @foreach ($aa_dist as $dist)
    <option value="{{$dist->dist_code}}">{{$dist->dist_name}}</option>
    @endforeach
</select>                  
                
                
        
        <input type="hidden"  value="3" name="a">
        <input type="submit"  value="Update In City">
        
        
        
                  
                  
              </form>
              </div>
              
              
              
              
              
              
              
              
              
              
              
              
          <div style="border:1px dashed black; width:95%; margin-top:50px">
                        <form style="width:300px; margin-left:5px" method="get" action=""> 
                        @csrf
                     
                
                
                
                
                
                <?php
                    $c_city=DB::table('banners')->where('id',1018)->first();
                    
                  
                    
                    
                    
                    
                                    ;?>
                 
                         <label>COD এর ক্ষেত্রে ডেলিভারী চার্জ অগ্রীম প্রদান বাধ্যতামূলক :
                         @if($c_city->image == 1)
                        <span style="color:green"><b> বর্তমানে  On  আছে</b></span>
                         @else
                         <span style="color:red"><b>
                    বর্তমানের     Off আছে
                         </b></span>
                         @endif
                         
                         </label>
        
                 
                 
  <select name="coddd" required>                 

    <option value="">Select Option </option>
    <option value="1">On </option>
    <option value="2">Off </option>
    
   
  

</select>                  
                
                
        
        <input type="hidden"  value="3" name="a">
        <input type="submit"  value="Update COD Setting">
        
        
        
                  
                  
              </form>
              </div>     
              
              
              
              
              
   @endif           
   @endif           
              
          
          
          
          
          
          
        </div>
      </div>
    </div>
  </div>


@endsection
