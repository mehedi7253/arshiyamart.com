@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
-->      <h1>Rank Instant</h1>
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
              <h5>All Rank-1 <span style="color:red; font-size:20px"></span></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>SL</th>
                    <th>Shopping Amount</th>
                    <th>Rank Name</th>
                    <th>Instant Comission <br>
                      (Rank অর্জন করার পর শুধু <br> মাত্র একবার পাবেন)</td></th>
                    <th>Product Purchase Comission <br>(Life time)</th>
                    {{-- <th>Brand Description</th> --}}
                    <th>Award/Gift</th>
                    <th>Monthly <br>Salary</th>
                    <th>Edit</th>
<!--                    <th>Delete</th>
-->                    
                  </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                  @foreach ($categories as $category)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                      <td>{{ $category->monthly_value }}</td>
                      <td>{{ $category->rank_name }}</td>
                      <td>{{ $category->comission }}<br>
                      </td>
                      <td>{{ $category->comission2 }} %</td>
                     
                          <td>{{ $category->extra5 }} </td>
                      <td>{{ $category->extra3 }} 
                      
                      @if($category->extra1 == 1)
                      TK
                      @endif
                      
                                            @if($category->extra1 == 2)
                      %
                      @endif
                     
                     
                     
                      <td class="center">
                        <div class="fr"><a href="{{ url('/admin/edit-category3_ins/'.$category->id) }}" class="btn btn-primary btn-mini">Edit</a>
                        </div>
                      </td>
                      
     <!--                 <td>
                          <div class="fr">
 <a href="{{ url('/admin/delete-category3_ins/'.$category->id) }}" class="btn btn-danger btn-mini del1">Delete</a>                   </div>
                      </td>  -->   
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
