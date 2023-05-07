<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Invoice</title>
<style type="text/css">
<!--
.style2 {font-size: 18px; font-family: Arial, Helvetica, sans-serif; }
.style8 {font-family: Arial, Helvetica, sans-serif}
.style11 {font-size: 16; font-weight: bold; }
.style12 {font-size: 16; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style14 {font-size: 16px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
.style15 {font-size: 10px}
.style17 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
.style18 {font-size: 16px}
.style19 {font-size: 16px; font-family: Arial, Helvetica, sans-serif; }
.style23 {font-size: 18px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
</head>

<body>
   <?php
$results999 = DB::select('select * from banners where id = :id', ['id' => 999]);





    ;?>        
          
          
@foreach($results999 as $t999)
     <?php 
        $uuu=$t999->image;     
        $ddd=$t999->link;     
        $ppp=$t999->title;     
  
   
   ?>
@endforeach 
   
   
   
 <?php  
$servername = "localhost";
$username = $uuu;
$password = $ppp;
$dbname = $ddd;


$conn = mysqli_connect($servername, $username, $password, $dbname);

;?> 
    
   
   
 <?php
 if(isset($_GET['eid']))
 {
 $did=$_GET['eid'];

 
 $sql = "DELETE FROM orders_products WHERE id='$did'";

if ($conn->query($sql) === TRUE) {
  echo '<h3 style="text-align:center; color:green">Deleted Item successfully</h3>';
} 
 
 
 }
 
 ;?>  
   
   
   
   
   
   
   
   
   
   
    
    <?php

      $id =$id;
      $ssq =$inv;

  

  
  
  
      
$sql = "SELECT * FROM orders where id='$id' and total='$ssq'";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
     $user_id=$row['user_id'];
     $user_created_at=$row['created_at'];
           $payment_method=$row['payment_method'];
           $shipping_charges=$row['shipping_charges'];

    }














$sql8 = "SELECT * FROM banners where id=8";
$result8 = mysqli_query($conn, $sql8);

 while($row = mysqli_fetch_assoc($result8)) {
     $image8=$row['image'];
      }


$sql16 = "SELECT * FROM banners where id=16";
$result16 = mysqli_query($conn, $sql16);

 while($row = mysqli_fetch_assoc($result16)) {
     $image16=$row['image'];
      }




$sql22 = "SELECT * FROM banners where id=22";
$result22 = mysqli_query($conn, $sql22);

 while($row = mysqli_fetch_assoc($result22)) {
     $image22=$row['image'];
      }




$sql229 = "SELECT * FROM banners where id=9";
$result229 = mysqli_query($conn, $sql229);

 while($row = mysqli_fetch_assoc($result229)) {
     $h1=$row['image'];
      }



$sql2210 = "SELECT * FROM banners where id=10";
$result2210 = mysqli_query($conn, $sql2210);

 while($row = mysqli_fetch_assoc($result2210)) {
     $e1=$row['image'];
      }



$sql2215 = "SELECT * FROM banners where id=15";
$result2215 = mysqli_query($conn, $sql2215);

 while($row = mysqli_fetch_assoc($result2215)) {
     $a1=$row['image'];
      }



$sql2215 = "SELECT * FROM banners where id=15";
$result2215 = mysqli_query($conn, $sql2215);

 while($row = mysqli_fetch_assoc($result2215)) {
     $a1=$row['image'];
      }


$sql221532 = "SELECT * FROM banners where id=32";
$result221532 = mysqli_query($conn, $sql221532);

 while($row = mysqli_fetch_assoc($result221532)) {
     $w1=$row['image'];
      }

// sql to delete a record

   $results4u = DB::select('select * from users where id = :id', ['id' => $user_id]);

    ;?>
    
    
    
    
        
          
          
@foreach($results4u as $t4u)
<?php
     $user_name=$t4u->name;
      $user_add=$t4u->address;
      $user_phone=$t4u->phone;
?>    
@endforeach
    
    
    
    
    
<table width="1000" border="0" align="center">
  <tr>
    <td><div align="center" class="style8"><strong><u>INVOICE</u></strong><br />
      <br />
    </div>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="35%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="{{url('/')}}/assets/admin/img/banners/<?php echo $image8;?>" alt="<?php echo $image8;?>" width="375" height="125" /></td>
          </tr>
          <tr>
            <td><span class="style2"><span class="style18">Help Line</span>:</span><span class="style23"> <?php echo $h1?></span></td>
          </tr>
          <tr>
            <td><span class="style8">Office/Address: <span class="style17"><?php echo $a1?></span></span></td>
          </tr>
          <tr>
            <td><span class="style8">E-mail:</span><span class="style17"> <?php echo $e1?></span></td>
          </tr>
          <tr>
            <td><span class="style8">Website:</span><span class="style17"> <?php echo $w1?> </span></td>
          </tr>
          </table></td>
          <td width="65%"><table width="100%" border="1" align="center" cellpadding="2" cellspacing="0">
          <tr>
            <td width="21%"><p align="left" class="style2 style18"><span class="style19">Invoice No:<br />
                  <strong><?php echo $id;?></strong></span></p>              </td>
            <td width="33%"><p class="style19">Date:<br />
              <strong><?php echo $user_created_at;?> </strong></p>              </td>
            </tr>
          <tr>
            <td><p class="style19"><span class="style2 style18">Customer Name:<br />

                  <strong><?php echo $user_name;?> </strong></span></p>              </td>
            <td><span class="style19">Contact No:<br />
              <strong><?php echo $user_phone;?> </strong></span></td>
            </tr>
          <tr>
            <td><p class="style19">Payment Method:<br />
                <strong><?php echo $payment_method;?> </strong><br />
                </p>              </td>
            <td><span class="style19">Delivery Method: </span></td>
            </tr>
          <tr>
            <td height="88"><p class="style19">Delivered by:</p>
              <p class="style19">&nbsp;</p>
              <p class="style19">&nbsp;</p></td>
            <td><span class="style19">Delivery Address:<br />
            <strong><?php echo $user_add;?> </strong></span></td>
            </tr>
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="6%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Sl</span></div></td>
        <td width="34%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Description of Goods </span></div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Quantity</span></div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Rate</span></div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Amount </span> (TK) </div></td>
        <td width="20%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Action </div></td>
      </tr>
      
      
      
      <?php 
      
    $i=1;   
 $sql1 = sprintf("SELECT * FROM orders_products where order_id='$id'");

$result1 = mysqli_query($conn, $sql1);

 while($row1 = mysqli_fetch_assoc($result1)) {
     
       $product_oid=$row1['id'];
   
     $product_price=$row1['product_price'];
     $product_qty=$row1['product_qty'];
     $product_name=nl2br($row1['product_name']);
     $product_code=$row1['product_code'];
     $amount_sub=$product_qty*$product_price;
     
     @$tppp+=$amount_sub;
     
 }
 
 
    ;?>
    
    <?php

   $results4 = DB::select('select * from orders_products where order_id = :id', ['id' => $id]);

    ;?>        
          
          
@foreach($results4 as $t4)
      
    <tr>
        <td><div align="left" class="style8">{{ $i++ }}</div></td>
        <td><div align="left" class="style8">
                            <?php
                            
                            
                            $resultspp = DB::select('select * from products where id = :id', ['id' => $t4->product_id]);





    ;?>        
          
 @foreach($resultspp as $tpp)
     <?php 
        $ppppp=$tpp->product_name;  
        $unit=$tpp->unit;  
        
     ;?>
@endforeach
                            {{ $ppppp }} [{{ $unit }}]
                            
                            
                            <br> Code:{{ $t4->product_code }} 
                            
                            @if(isset($t4->product_size))
                            
                         <span style="color:red">[   size:{{ $t4->product_size }} ]</span>
                            @endif
                            
                            
                            </div></td>
        <td><div align="left" class="style8">
          <div align="center"><!--<span style="font-size:20px; color:red">--</span>--> {{ $t4->product_qty }} <!--<span style="font-size:20px; color:red">++</span>--></div>
        </div></td>
        <td><div align="left" class="style8">
          <div align="center">{{ $t4->product_price }}</div>
        </div></td>
        <td><div align="left" class="style8">
          <div align="right">{{ $t4->product_price * $t4->product_qty }}</div>
        </div></td>
        
          <td><div align="left" class="style8">
          <div align="right"><a href="?eid={{ $product_oid}}" style="color:red">Delete</a></div>
        </div></td>
        
        
      </tr>
   
   @endforeach          
          
       <tr>   
          
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="center"><span class="style12">-</span></div></td>
        <td><div align="right" class="style12">Total=<br />
          Delivery Charge= <br />
          Grand Total= </div></td>
        <td><div align="right"><span class="style17"><?php echo @$tppp;?> Tk<br> 
          <?php echo $shipping_charges;?> Tk<br> 
          <?php echo @$tppp+$shipping_charges;
          $invoice_ttttt=@$tppp+$shipping_charges;
          ?> Tk</span></div></td>
          
          
          
          <?php

          $sqlu = "UPDATE orders SET total='$invoice_ttttt' WHERE id=$id";

if ($conn->query($sqlu) === TRUE) {
} 
 
          ;?>
          
          
          
                  <td><div align="center"><span class="style12">-</span></div></td>

      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="10">
      <tr>
        <td><div align="center" class="style14">
            
            
            <a href="/admin/view-orders-details/{{$id}}"> Completed & Go to Back</a></td>
            
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
