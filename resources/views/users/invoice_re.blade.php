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

      $id =$id;
      $ssq =$inv;

  

  
  
  
      
$sql = "SELECT * FROM orders where id='$id'";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
     $user_id=$row['user_id'];
     $user_created_at=$row['created_at'];
           $payment_method=$row['payment_method'];
           $trxid=$row['pincode'];
           $tstatus=$row['order_status'];
           $dddiscount=$row['discount'];
           $pincode=$row['pincode'];
           
           
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
    <td><div align="center" class="style8"><strong><u>Re-Sale Invoice</u></strong><br />
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
            <td><span class="style8">Website:</span><span class="style17"> <?php echo $w1?> </span>
            
            
               <br><br><br>
            
            
            
            </td>
          </tr>
          </table></td>
          
       
          
          <td width="65%"><table width="100%" border="1" align="center" cellpadding="2" cellspacing="0">
          <tr>
            <td width="21%"><p align="left" class="style2 style18"><span class="style19">Invoice No: <br />
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
        
        </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="1" cellspacing="0" cellpadding="5">
      <tr>
        <td width="6%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Sl</span></div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Purchase Product</span></div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Re-Sale Product </span></div></td>
        <td width="34%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Re-mark</span></div></td>
        <td width="15%" bgcolor="#CCCCCC"><div align="center" class="style11"><span class="style8">Re-Sale Price</span></div></td>
      </tr>
      
      

                  <?php $i=1;?>
                  
                  
                  <?php
                        $coupons7 = DB::table('coupons7')->where('id',$ssq)->get();
                  ;?>
                  
                  @foreach ($coupons7 as $re_sale)
                    <tr class="gradeX">
                      <td>{{ $i++ }}</td>
                    
                    
                    
                    
                 
                     
                      <td>
                      
                     
                      
                      
                      
                      <?php
                      $p_info=DB::table('products')->where('id',$re_sale->product_id)->first();
                      ;?>
                      
                      
                   
                      
                      
                      
                    
                      
                      
                      {{ $p_info->product_name}}
                       <br>ক্রয় মূল্য:
                      {{ $p_info->	price}}
         
               
               </td>           
               <td>         
               
                                   



        
                      <br>ধরণ:
                      @if($re_sale->product_type ==2)
                      নতুন
                      @endif
                      
                         
                      @if($re_sale->product_type ==1)
                      ব্যাবহৃত
                      @endif
                      
                       
                      
                      
                      
                 
                      
                      
           
                      </td>
              
                   
                      <td>
                     
                      
                    
                      
            <span style="color:blue"> {{$re_sale->personal_note}} </span><br>
                      
                      
                      
                      
                      
                        
              @if(empty($re_sale->admin_price))        
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-lg{{$re_sale->id}}">
                   Set Price
                </button>
               @else
                

               
               @if($re_sale->status ==3)
                
                

        
                
               @endif
              
                
                      
               @endif       
          
          
               @if($re_sale->status ==5)
               <span style="color:green"> Completed </span>

               @endif
          
          
          
          
          
    



          
          
          
          
                      
                      
                      
                      
                      </td>
                      
                      <td>
                          {{$re_sale->admin_price}}
                      </td>
                      
                      
                      
                      
                      
                      
                    </tr>
                  @endforeach

              
              </table>
              
              
              </td>
  </tr>
</table>
</body>
</html>
