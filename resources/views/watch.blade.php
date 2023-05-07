@extends('layouts.temp2.master')
@section('content')
  <!-- menu -->

@include('layouts.temp2.nav')








    <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
{
   $devise=1; 
}
else{
       $devise=2; 

}
;?>



















<style>
    .button {
  width: 148px;
  height: 148px;
  cursor: pointer;
  &:hover {
    fill: white;
  }
}

.defs {
  position: absolute;
  top: -9999px;
  left: -9999px;
}


.buttons {
  padding: 1rem;
  float: left;
}

body {
  padding: 1rem;
}
</style>





<svg class="defs">
  <defs>
    <path id="pause-button-shape" d="M24,0C10.745,0,0,10.745,0,24s10.745,24,24,24s24-10.745,24-24S37.255,0,24,0z M21,33.064c0,2.201-1.688,4-3.75,4
s-3.75-1.799-3.75-4V14.934c0-2.199,1.688-4,3.75-4s3.75,1.801,3.75,4V33.064z M34.5,33.064c0,2.201-1.688,4-3.75,4
s-3.75-1.799-3.75-4V14.934c0-2.199,1.688-4,3.75-4s3.75,1.801,3.75,4V33.064z" />
    <path id="play-button-shape" d="M24,0C10.745,0,0,10.745,0,24s10.745,24,24,24s24-10.745,24-24S37.255,0,24,0z M31.672,26.828l-9.344,9.344
C20.771,37.729,19.5,37.2,19.5,35V13c0-2.2,1.271-2.729,2.828-1.172l9.344,9.344C33.229,22.729,33.229,25.271,31.672,26.828z" />
  </defs>
</svg>















  <section id="aa-product">

    <div class="container">


    

      <div class="row" >

        <div class="col-md-12">
          <div class="row" style="height:850px; ">
                        	<!--<div class="col-md-3"></div>-->




  


@if($devise == 1)

<div>
    
            <div   class="h-video" style="position:relative; width:94%; height:220px; margin-top:50px; margin-left:3%">
                
            <?php
                    	$m_9=DB::table('banners')->where('id',42)->first();
                            ;?> 
                      		<iframe id="video"  width="100%" height="100%" src="https://www.youtube.com/embed/{{$m_9->image}}?enablejsapi=1" title="YouTube video player"
                      		frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                      		encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
             <div class="home-video" style="position: absolute;  width:100%; 
             height:320px; margin-top:-230px;">
             <img src="/app/tv2.png" style="width:100%; height:280px">
              
              
              
              
              
              
           
              
            
            </div>
     		
     </div>	








   
              
              <div class="buttons" id="hhh" style="position: absolute; margin-left:80px;  margin-top:20px; float:left">
              <!-- if we needed to change height/width we could use viewBox here -->
            
                      <svg class="button" id="play-button">
                <use xlink:href="#play-button-shape">
              </svg>
              
              
          
            </div>

            
              <div class="buttons" id="hhh" style="position: absolute; margin-left:200px;  margin-top:20px; float:left">
              <!-- if we needed to change height/width we could use viewBox here -->
            
                      <svg class="button" id="pause-button">
                <use xlink:href="#pause-button-shape">
              </svg>
              
              
          
            </div>








@else

    <div>
    
            <div   class="h-video" style="position:relative; width:78%; height:420px; margin-top:50px; margin-left:11%">
                
            <?php
                    	$m_9=DB::table('banners')->where('id',42)->first();
                            ;?> 
                      		<iframe id="video"  width="100%" height="100%" src="https://www.youtube.com/embed/{{$m_9->image}}?enablejsapi=1" title="YouTube video player"
                      		frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                      		encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            
             <div onmouseover="myFunction()" onmouseout="myFunction2()" class="home-video" style="position: absolute;  width:86%; height:480px; margin-top:-440px; margin-left:7%">
             <img src="/app/tv2.png" style="width:100%; height:530px">
              
              
              <div class="buttons" id="hhh" style="position: absolute; margin-left:47%; margin-top:-335px;">
              <!-- if we needed to change height/width we could use viewBox here -->
              <svg class="button" id="play-button">
                <use xlink:href="#play-button-shape">
              </svg>
            <!--  <svg class="button" id="pause-button">
                <use xlink:href="#pause-button-shape">
              </svg>-->
            </div>
              
            
            </div>
     		
     </div>	
 	
@endif


 	
 

 



 	
          	
          	
          
          </div>


        </div>


      </div>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
      
      
      
      
      
      <script>
// https://developers.google.com/youtube/iframe_api_reference

// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player("video", {
    events: {
      // call this function when player is ready to use
      onReady: onPlayerReady
    }
  });
}

function onPlayerReady(event) {
  // bind events
  var playButton = document.getElementById("play-button");
  playButton.addEventListener("click", function () {
    player.playVideo();
  });

  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function () {
    player.pauseVideo();
  });
}

// Inject YouTube API script
var tag = document.createElement("script");
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName("script")[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);




function myFunction(){

    	$(document).ready(function(){
    $("#hhh").show();
});
    
}


function myFunction2(){

    	$(document).ready(function(){
    $("#hhh").hide();
});
    
}




</script>





    
     </div>
    </section>     	


@endsection