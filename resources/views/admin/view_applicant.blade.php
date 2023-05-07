@extends('layouts.adminLayouts.admin_master')
@section('content')


  <div id="content">
    <div id="content-header">
<!--      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('/admin/add-category') }}" >Add Category</a> <a href="{{ url('/admin/view-categories') }}" class="current">View Categories</a> </div>
-->      <h1>All Applicant</h1>
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
              <h5>All Applicant <span style="color:red; font-size:20px"></span></h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>SL/th>
                    <th>Post</th>
                    <th>Applicant Info</th>
                    
                    <th>Details</th>
                    
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $i=1;
                    $categories=DB::table('job_profile')->orderby('sl',"DESC")->get();
                    ;?>
                  @foreach ($categories as $category)
                    <tr class="gradeX">
                        
                      <td>{{ $i++ }}</td>
                      <td>
                          <?php
                          $categories=DB::table('rank_promotion')->where('id',$category->post_id)->first();
                          ;?>
                          
                          {{@$categories->rank_name}}
                          
                          
                      </td>

                   <td>
                            <img style="max-height:70px;" src="{{ asset('job/image/'.$category->img)}}" alt="">
                            
                            
                            <br>
                            <span style="color:red; font-size:120%"> {{ $category->n_1 }} </span><br>
                          Mobile Number: <span style="color:black; font-size:120%">   {{ $category->n_23 }}  </span> <br>
                          Applicant ID: <span style="color:black; font-size:120%"> {{ $category->sl }} </span> <br>
                      </td>

                         
                                     
                      <td class="center">
                          
                        <div class="fr"><a href="{{ url('/admin/view_applicant2/') }}?aid={{$category->sl}}" class="btn btn-primary btn-mini">View Application</a>
                        </div>
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
