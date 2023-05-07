<?php
session_start();
$ses_id=session_id();

include('aa_config.php');

@$pid=$_GET['pid'];
@$pcolor=$_GET['pcolor'];
@$psize=$_GET['psize'];
@$offer=$_GET['offer'];


/*$ll_price="SELECT offer, price from products  id='$pid'"; 
$result54 = mysqli_query($conn, $ll_price);
while ($vv=mysqli_fetch_array($result54)) {
            @$cart_count222=$v['stock'];
        }
*/


        

$ll_sels1g="SELECT stock, price from products_attributes
where size='$psize' and sku='$pcolor' and product_id='$pid'"; 
$result5 = mysqli_query($conn, $ll_sels1g);

        while ($v=mysqli_fetch_array($result5)) {
            @$cart_count222=$v['stock'];
            @$price_cc=$v['price'];
          //  @$r_id=$v['id'];
        }

$findc=mysqli_num_rows($result5);

if($findc>0)
{


        if($cart_count222<1)
        {
            $cart_count22=0;
            $price_cc=0;
        }
        else
        {
            $cart_count22=$cart_count222;
            $price_cc=$price_cc;
        }

}else
{
    $cart_count22=0;
    $price_cc=0;
}



//Offer Canculation

if($offer >0){
    $hg=$price_cc/100*$offer;
    $opp=$price_cc-$hg;
    
   $offer_test='
                   <span class="aa-product-price" style="font-size:102%; color:red"><del>Tk '.$price_cc.'  </del></span>

   
   <span class="aa-product-view-price"style="font-size:100%">  TK : '.$opp.' </span>
   
   
              <input type="hidden" name="price" id="price" value="'.$opp.'">

   ';  
}
else
{
   $offer_test='
   <span style="font-size:100%">TK :'.$price_cc.'</span><br>
                 <input type="hidden" name="price" id="price" value="'.$price_cc.'">

   ';  
   
}


?>


<?php 
if($cart_count22>0){

echo '
           
           '.$offer_test.'
                        

           

<div class="aa-prod-quantity">


                      <label>Quantity: </label>
                      
                      
                <input type="number" name="quantity" value="" min="1" max="'.$cart_count22.'" style="width:60px; font-size:20px" required/><span style="color:red; font-size:50%"> Available: '.$cart_count22.'</span> 
                
                   
                
                    </div>';
}
else{
   
   if($pcolor > 0 and $psize > 0){
    echo '<span style="color:red; font-size:80%">Not Available</span>';
   }
   else {
     echo '<span style="color:red">Please Select Color & Size</span>';  
   }
}
;?>