 <?php
 
 
$results7 = DB::select('select * from banners where id = :id', ['id' => 7]);





    ;?>        
          



@foreach($results7 as $t7)
     <?php 
        $image7=$t7->image;     
     ;?>
@endforeach















<div class="com_add">
     <div style="height:40px; width:100%; top:0; position:fixed; float:left; z-index:19999; border:2px solid white;  border:0px;">

 <section id="menu"style="padding:5px" >
    
                                     <a href=" {{url('/')}} "><img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image7;?>" alt="logo img" style="float:left; height: 40px; border-radius:4px"></a>

           
             <a href="#" style="float:left; margin-top:8px; margin-left:5px"> 
                <span id="sidebarCollapse2" style="color:white; display:black;  padding:50px 4px";>
                                <i class="fa fa-bars" aria-hidden="true" ></i>
                                <span>Menu</span>
                            </span>
            
            </a>
            
            
            
            
           
            
             <div style="float:left; width:50%; margin-left:100px">
                <form action="{{ url('/search') }}" method="post">
                    
                                        @csrf

                  <input type="text" name="search" id="" placeholder="Search product (Name)" required="" style="height:39px; width:70%; border-radius:4px; background:white;  border: 1px solid #ccc;
">
                  <button type="submit" style="height:40px; margin-left:-5px"><span class="fa fa-search" style="padding: 0px 10px"></span></button>
                </form>
              </div>
            
            
            
            
            
            
            
            
            <div  style="float:right; margin-top:5px; padding:5px" >
                <ul class="aa-head-top-nav-right">
                  <!-- <li class="hidden-xs"><a href="{{ url('/cart') }}">My Cart</a></li> -->
                  

                  @if (empty(Auth::check()))
                  <li><a href="{{ url('/login-register') }}" style="color:white"> <i class="fa fa-user" aria-hidden="true" style="color:white"></i>
 Login</a></li>
                  
                 
                  @else
                  <li><a href="{{ url('/my-account') }}"><i class="fa fa-user" aria-hidden="true" style="color:white"></i>My Account</a></li>
                  @endif

                </ul>
              </div>
            
    
  </section>
  </div>
  
  </div>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
 
<div class="mob_add">
     <div style="height:40px; width:100%; top:0; position:fixed; float:left; z-index:19999; border:2px solid white;  border:0px;">

 <section id="menu"style="padding:5px" >
    

           
             <a href="#" style="float:left; margin-top:4px; margin-left:5px"> 
                <span id="sidebarCollapse22" style="color:white; display:black; padding:50px 4px";>
                                <i class="fa fa-bars" aria-hidden="true" ></i>
                                <span>Menu</span>
                            </span>
            
            </a>
            
            
            
            
           
            
             <div style="float:left; width:50%; margin-left:4px">
                <form action="{{ url('/search') }}" method="post">
                    
                                        @csrf

                  <input type="text" name="search" id="" placeholder="Search product" required="" style="height:27px; width:72%; border-radius:2px; background:white;  border: 1px solid #ccc;
">
                  <button type="submit" style="height:28px; margin-left:-5px"><span class="fa fa-search" style="padding: 0px 0px"></span></button>
                </form>
              </div>
            
            
            
                                                 <a href=" {{url('/')}} "><img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image7;?>" alt="logo img" style="float:right; max-height: 50px; max-width:80px; border-radius:4px"></a>

            
            
            
         
            
    
  </section>
  </div> 
  
  
  
   
  </div>
  
  
  
  
  
  
  
  </div>
