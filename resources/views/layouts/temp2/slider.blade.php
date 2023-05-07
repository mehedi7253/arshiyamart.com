<!-- Start slider -->
  <section id="aa-slider" >
    
    <section id="aa-product">
    <div class="container">
      <div class="row">
       <div class="col-md-12" style="padding:7px">
            
            
    <div class="com_add" class="aa-slider-area" style="height:300px; margin-bottom:10px; margin-top:35px">
           
       <?php   
$results1 = DB::select('select * from banners where id = :id', ['id' => 1]);
$results2 = DB::select('select * from banners where id = :id', ['id' => 2]);
$results3 = DB::select('select * from banners where id = :id', ['id' => 3]);
$results4 = DB::select('select * from banners where id = :id', ['id' => 4]);
$results5 = DB::select('select * from banners where id = :id', ['id' => 5]);

             
 

$results55 = DB::select('select * from banners where id = :id', ['id' => 55]);
$results56 = DB::select('select * from banners where id = :id', ['id' => 56]);
$results57 = DB::select('select * from banners where id = :id', ['id' => 57]);
$results58 = DB::select('select * from banners where id = :id', ['id' => 58]);

    ;?>        
      




          
@foreach($results55 as $t55)
     <?php 
        $image55=$t55->image;     
        $url55=$t55->link;  
     ;?>
@endforeach

 
@foreach($results56 as $t56)
     <?php 
        $image56=$t56->image;     
        $url56=$t56->link;  
     ;?>
@endforeach



@foreach($results57 as $t57)
     <?php 
        $image57=$t57->image;     
        $url57=$t57->link;  
     ;?>
@endforeach


@foreach($results58 as $t58)
     <?php 
        $image58=$t58->image;     
        $url58=$t58->link;  
     ;?>
@endforeach



  @foreach($results1 as $t1)
     <?php 
        $image1=$t1->image;     
                $url1=$t1->link;  

     ;?>
@endforeach        
          
@foreach($results2 as $t2)
     <?php 
        $image2=$t2->image;     
                $url2=$t2->link;  

     ;?>
@endforeach

@foreach($results3 as $t3)
     <?php 
         $image3=$t3->image;     
                 $url3=$t3->link;  

     ;?>
@endforeach
   
 
 @foreach($results4 as $t4)
     <?php 
         $image4=$t4->image;     
                 $url4=$t4->link;  

     ;?>
@endforeach
  
  
   @foreach($results5 as $t5)
     <?php 
         $image5=$t5->image;     
                 $url5=$t5->link;  

     ;?>
@endforeach
        
 





 
 <div style="width100%; height:300px; margin:auto">
     <div style="width:100%; height:300px; float:left">
          <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <li>
              <div class="seq-model" style="width:100%; height:100%"/>
              <a href="{{ $url1 }}">
                <img data-seq src="{{url('/')}}/assets/admin/img/banners/<?php echo $image1;?>" alt="sl1 slide img" style="width:100%; height:300px"/>
                </a>
              </div>

            </li>
            
        
        
         <li>
              <div class="seq-model" style="width:100%; height:100%"/>
              <a href="{{ $url2 }}">
                <img data-seq src="{{url('/')}}/assets/admin/img/banners/<?php echo $image2;?>" alt="sl1 slide img" style="width:100%; height:300px"/>
                </a>
              </div>

            </li>
        
        
        
        
            
             <li>
              <div class="seq-model" style="width:100%; height:100%"/>
                <a href="{{ $url3 }}">
                <img data-seq src="{{url('/')}}/assets/admin/img/banners/<?php echo $image3;?>" alt="sl2 slide img" style="width:100%; height:300px"/>
             </a>
              </div>

            </li>
            
            
 
            
                 <li>
              <div class="seq-model" style="width:100%; height:100%"/>
                <a href="{{ $url55 }}">
                <img data-seq src="{{url('/')}}/assets/admin/img/banners/<?php echo $image55;?>" alt="sl2 slide img" style="width:100%; height:300px"/>
             </a>
              </div>

            </li>       
            
            
            
            
            
            
            
             <li>
              <div class="seq-model" style="width:100%; height:100%"/>
                <a href="{{ $url56 }}">
                <img data-seq src="{{url('/')}}/assets/admin/img/banners/<?php echo $image56;?>" alt="sl2 slide img" style="width:100%; height:300px"/>
             </a>
              </div>

            </li>       
             
            
            
            
            
            
            
            
                 
             <li>
              <div class="seq-model" style="width:100%; height:100%"/>
                <a href="{{ $url57 }}">
                <img data-seq src="{{url('/')}}/assets/admin/img/banners/<?php echo $image57;?>" alt="sl2 slide img" style="width:100%; height:300px"/>
             </a>
              </div>

            </li>       
                
            
              <li>
              <div class="seq-model" style="width:100%; height:100%"/>
                <a href="{{ $url58 }}">
                <img data-seq src="{{url('/')}}/assets/admin/img/banners/<?php echo $image58;?>" alt="sl2 slide img" style="width:100%; height:300px"/>
             </a>
              </div>

            </li>             
            
            
            
          </ul>
        </div>
        
        
        
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
     </div>
     
     
     
 
     
     
     
 </div> 
        
        
        
     
      
      
      
      
      
      
    </div>
    </div>
    </div>
    </div>
  </section>
  </section>

