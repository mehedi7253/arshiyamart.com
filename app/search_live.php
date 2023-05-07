<?php
include('../aa_config.php');

$q=$_GET["q"];
$qq=strlen($q);
if($qq > 2){
$sid=0;

$sels1="SELECT * from products 

where product_name LIKE '%$q%'
or
meta_key LIKE '%$q%' 

order by id LIMIT 1000
";



  $sqls=mysqli_query($conn, $sels1);

 while ($v=mysqli_fetch_array($sqls)) 
                    {
$sid=$v['id'];
$name=$v['product_name'];
$image=$v['image'];
$price=$v['price'];
$p_price=$v['p_price'];
$comission=$v['extra11'];

 if($comission > 0){
     $comission='<span style="color:red">(Comission: '.$comission.')</span>';
 }else
 {
     $comission="";
 }
 
 
 
  $pp=$price;  



@$response.='<a href="/product/'.$sid.'" style="padding:10px; display:block">

<div style="width:100%; border-top:1px dashed gray; float:left; text-align:left;display:block">

<img src="/assets/admin/img/products/large/'.$image.'" style="max-height:60px; float:left; margin-right:3px; "/>

<spa nstyle="ftont-size:80%; text-align:left">
<span style="color:black;"> '.$name.'</span></br>
<span style="color:blue;"> &#2547;  '.$pp.'</span>
</span>

<div>
</a>';
}











if($sid < 1){
    echo "No Product Found";

}
else{
  echo '<div  style="height:700px;  width:100%; float:left; overflow-y: scroll;">
  
  '.$response.'
  </div>';
  
}

}



?>