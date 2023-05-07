<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Session;
use App\Category;
use App\Product; 
use Alert;
use App\ProductsAttribute;
use App\ProductImage;
use DB;
use App\Coupon;
use App\DeliveryAddress;
use App\User;
use Image;
use App\Order;
use App\OrdersProduct;
use App\Banner; 
 
    
      @$grand_total=$_SESSION['grand_total'];
      @$shipping_charge=$_SESSION['shipping_charge'];
      @$pgtxid=$_SESSION['pgtxid'];
      @$pgt_amount=$_SESSION['pgt_amount'];

 Session::put('grand_total',$grand_total);
 Session::put('shipping_charge',$shipping_charge);
 Session::put('pgtxid',$pgtxid);
 Session::put('pgt_amount',$pgt_amount);



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_products(Request $request)
    {

      if ($request->isMethod('post')) {
        $data = $request->all();
        @$stock_m=$data['stock_m'];
        @$image_m=$data['image_m'];
        
        $ccolor=implode(', ',$data['instructor']); 
        $product = new Product;
        if (empty($data['category_id'])) {
          return back()->with('message_error', 'Please Select Category');
        }
        //echo "<pre>"; print_r($data); die;
        $product->category_id     = $data['category_id'];

        if (!empty($data['position'])) {
          $pos = $data['position'];
        }else {
          $pos = '';
        }




//Installment
if (!empty($data['down_payment'])) {
          $down_payment = $data['down_payment'];
        }else {
          $down_payment = '';
        }   
        
        
        
if (!empty($data['number_installment'])) {
          $number_installment = $data['number_installment'];
        }else {
          $number_installment = '';
        }    
        

if (!empty($data['inttallment_amount'])) {
          $inttallment_amount = $data['inttallment_amount'];
        }else {
          $inttallment_amount = '';
        }
//end Installment








        
        if (!empty($data['grantee'])) {
          $grantee = $data['grantee'];
        }else {
          $grantee = '';
        }   
        
             if (!empty($data['video'])) {
          $video = $data['video'];
        }else {
          $video = '';
        }    
        

      if (!empty($data['image_r'])) {
          $re_sale = $data['image_r'];
        }else {
          $re_sale = '';
        }
        
              if (!empty($data['extra1'])) {
          $extra1 = $data['extra1'];
        }else {
          $extra1 = '';
        }
        
        
        if (!empty($data['warranty'])) {
          $warranty = $data['warranty'];
        }else {
          $warranty = '';
        }
        

        if (!empty($data['meta_key'])) {
          $meta_key = $data['meta_key'];
        }else {
          $meta_key = '';
        }

        if (!empty($data['meta_description'])) {
          $meta_description = $data['meta_description'];
        }else {
          $meta_description = '';
        }
        
        
        
        if (!empty($data['supplier'])) {
          $supplier = $data['supplier'];
        }else {
          $supplier= '';
        }
        
        
        
        
                if (!empty($data['extra3'])) {
          $extra3 = $data['extra3'];
        }else {
          $extra3= '';
        }
        
        if (!empty($data['extra4'])) {
          $extra4 = $data['extra4'];
        }else {
          $extra4= '';
        }
          
          
          
                    
        if (!empty($data['extra9'])) {
          $extra9 = $data['extra9'];
        }else {
          $extra9= '';
        }
             
          
          
          
        if (!empty($data['extra10'])) {
          $extra10 = $data['extra10'];
        }else {
          $extra10= '';
        }
             
          
                if (!empty($data['extra11'])) {
          $extra11 = $data['extra11'];
        }else {
          $extra11= '';
        }
               
          
        
               
        if (!empty($data['offertk'])) {
          $price=$data['price']-$data['offertk'];
          $p_price=$data['price'];
          
        }else {
          $price=$data['price'];
          $p_price=$data['p_price'];
        }   
         
        



         



      
  $s_b=$data['category_id'];

           $adds3sb = Category::where('id', $s_b)->first();
           $p_categoryp= $adds3sb->parent_id;
           $ctid= $adds3sb->id;

if($p_categoryp=="0")
{
     $p_category= $ctid;
}
else
{
    $p_category= $adds3sb->parent_id;
}




        $product->position     = $pos;
        $product->parent_id     = $p_category;
        
        
        $product->product_name    = $data['product_name'];
        $product->brand    = $data['brands'];
        $product->extra1    = $extra1;
        
        
        
        

        
        
        $product->product_color   =$ccolor;
        $product->product_code   = $data['product_style'];
        
        $product->grantee   = $data['grantee'];
        $product->warranty   = $data['warranty'];
        $product->re_sale   = $data['image_r'];
        $product->supplier   = $data['supplier'];
        $product->meta_description   = $data['meta_description'];
        $product->meta_key   = $data['meta_key'];
        
        
        $product->extra3   = $extra3;
        $product->extra4   = $extra4;
        $product->extra10   = $extra10;
        $product->extra11   = $extra11;
        
        
    
        $product->extra6   = $down_payment;
        $product->extra7   = $number_installment;
        $product->extra8   = $inttallment_amount;
        $product->extra9   = $extra9;
        
        
        
        
        
        
        $product->description     = $data['description'];
        
        $product->unit     = $data['unit'];
        
        $product->price           = $price;
        $product->p_price           = $p_price;


        if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,9999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/products/large/'.$filename;
            $small_image_path ='assets/admin/img/products/small/'.$filename;

            Image::make($image)->resize(250,300)->save($large_image_path);
            Image::make($image)->resize(500,600)->save($small_image_path);

            $product->image = $filename;
          }
        }else {
          $product->image = '';
        }

        if (empty($data['status'])) {
          $status = 0;
        }else {
          $status = 1;
        }
        
        
        
        
        
     if (empty($data['offer'])) {
          $offer = "";
        }else {
          $offer = $data['offer'];
        }
           
        
        if (empty($data['cash_back'])) {
          $cash_back = "";
        }else {
          $cash_back = $data['cash_back'];
        }
                
        
         if (empty($data['child_id'])) {
          $child_id = "";
        }else {
          $child_id = $data['child_id'];
        }
                
        
        
        
        
        
        
        if (empty($data['position2'])) {
          $position2= 0;
        }else {
          $position2 = 1;
        }
        
           if (empty($data['position3'])) {
          $position3= 0;
        }else {
          $position3 = 1;
        }     
        
        
        
        

        $product->status = $status;
        
        $product->position2     = $position2;
        $product->position3     = $position3;
        $product->child_id     = $child_id;

          $product->offer     = $offer;
        $product->cash_back     = $cash_back;
        $product->extra5     = $video;
        
        
        $product->save();
        
        
        $lastid=DB::table('products')->max('id');
        
        if($image_m==1){
            
            return redirect('/admin/add-images/'.$lastid);

                    }
                elseif($stock_m==1){
            
            return redirect('/admin/add-attribute/'.$lastid);

                    }
 else{
       return back()->with('message_success','Product Added Successfully');
        } 
        
        
        
        
        
        
        
       
      }
        $categories = Category::where('parent_id',0)->get();
        $categories_drop = "<option selected disabled> Categories</option>";
        foreach ($categories as $cat) {
          $categories_drop .= "<option value = '" .$cat->id ."'>" . $cat->name ."</option>";
          $sub_cat = Category::where('parent_id' , $cat->id)->get();
            foreach ($sub_cat as $sub) {
              $categories_drop .= "<option value = '" .$sub->id ."'>" ."&nbsp;--&nbsp;" .$sub->name ."</option>";
            }
        }



       return view('admin.products.add_products' , compact('categories_drop'));
      
        
        
    }





   public function view_products2(Request $request){

      $products = Product::orderby('id','DESC')->where('status',9)->get();
      
      
      
      

      foreach ($products as $key => $val) {
        $category_name = Category::where(['id' => $val->category_id])->first();
         //$products[$key]->category_name = $category_name->name;
      }
      return view('admin.products.view_products2',compact('products'));
    }





public function c_invoice(Request $request){
$user_id = Auth::user()->id;
DB::table('orders_products')->insert([
    
    'user_id'=>$user_id,
    'product_id'=>$request->id,
    'product_qty'=>$request->qty,
    'product_price'=>$request->product_price,
    'product_name'=>$request->product_name,
    'status'=>1
    
    
    ]);

     
      return back();
    }





public function c_invoice_qr(Request $request){
$user_id = Auth::user()->id;



  if ($request->isMethod('post')) {
        $data = $request->all();
        foreach ($data['id'] as $key => $val) {
            if($data['qty'][$key] > 0){

        DB::table('orders_products')->insert([
    
    'user_id'=>$user_id,
    'product_id'=>$data['id'][$key],
    'product_qty'=>$data['qty'][$key],
    'product_price'=>$data['product_price'][$key],
    'extra5'=>$data['description'][$key],
    'product_name'=>$data['product_name'][$key],
    'status'=>1
    
    
    
    
    
    ]);

            }
     
    }
 return back();
}}




public function addproductmm(Request $request)
    {
        
         $user_id = Auth::user()->id;
		      $myshop= DB::table('shops')->where('owner_user_id',$user_id)->first();
		      $shop_id=$myshop->id;
        
        
        
        

      if ($request->isMethod('post')) {
        $data = $request->all();
        $product = new Product;
        if (empty($data['category_id'])) {
          return back()->with('message_error', 'Please Select Category');
        }
        //echo "<pre>"; print_r($data); die;
        $product->category_id     = $data['category_id'];

        if (!empty($data['position'])) {
          $pos = $data['position'];
        }else {
          $pos = '';
        }

      
  $s_b=$data['category_id'];

           $adds3sb = Category::where('id', $s_b)->first();
           $p_categoryp= $adds3sb->parent_id;
           $ctid= $adds3sb->id;

if($p_categoryp=="0")
{
     $p_category= $ctid;
}
else
{
    $p_category= $adds3sb->parent_id;
}












        $product->position     = $pos;
        $product->parent_id     = $p_category;
        
        
        $product->product_name    = $data['product_name'];
        $product->brand    = $data['brands'];
        
        
     
     if (empty($data['spnote'])) {
          $spnote = "";
        }else {
          $spnote = $data['spnote'];
        }        
        
        
        
        $product->spnote    = $spnote;
        
        
        
        

        
        
        $product->product_color   = $data['product_color'];
        
        $product->care   = $data['care'];
        
        
        
        
        $product->description     = $data['description'];
        
        $product->unit     = $data['unit'];
        
        $product->price           = $data['price'];


        if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/products/large/'.$filename;
            $small_image_path ='assets/admin/img/products/small/'.$filename;

            Image::make($image)->resize(250,300)->save($large_image_path);
            Image::make($image)->resize(500,600)->save($small_image_path);

            $product->image = $filename;
          }
        }else {
          $product->image = '';
        }

        if (empty($data['status'])) {
          $status = 0;
        }else {
          $status = 1;
        }
        
        
        
        
        
     if (empty($data['offer'])) {
          $offer = "";
        }else {
          $offer = $data['offer'];
        }
           
           
           
             
     if (empty($data['p_price'])) {
          $p_price = "";
        }else {
          $p_price = $data['p_price'];
        }      
           
           
        
        if (empty($data['cash_back'])) {
          $cash_back = "";
        }else {
          $cash_back = $data['cash_back'];
        }
                
        
         if (empty($data['child_id'])) {
          $child_id = "";
        }else {
          $child_id = $data['child_id'];
        }
                
        
        
        
        
        
        
        if (empty($data['position2'])) {
          $position2= 0;
        }else {
          $position2 = 1;
        }
        
           if (empty($data['position3'])) {
          $position3= 0;
        }else {
          $position3 = 1;
        }     
        
        
        
        

        $product->status = 9;
        
        $product->position2     = $position2;
        $product->position3     = $position3;
        $product->child_id     = $child_id;
        $product->shop_id     = $shop_id;
        $product->p_price     = $p_price;

          $product->offer     = $offer;
        $product->cash_back     = $cash_back;
        
        
        $product->save();
        return back()->with('message_success','Product Added Successfully');
      }
        

    }














 public function addproductmmm(Request $request){
     
   
                $user_id = Auth::user()->id;
		        $myshop= DB::table('shops')->where('owner_user_id',$user_id)->first();
		        $shop_id=$myshop->id;     

         if ($request->isMethod('post')) {

        if (empty($request->price)) {
          return back()->with('message_error', 'Please input Price.');
        }
        
      DB::table('s_product')->insert([
                          'shop_id'         => $shop_id,
                          'product_id'   =>  $request->pid,
                          'price'   =>  $request->price,
                          'c_id'   =>  $request->c_id,
                          'sub_c_id'   =>  $request->sub_c_id,
                          'child_id'   =>  $request->child_id,
                          'status'   =>  1
                        
                        
                            ]);
          
                 return back()->with('message_success','Product Added Successfully');
}
else
{
                   return back()->with('message_error','Not Addeded!');
  
}
    }

















    public function add_productsm(Request $request)
    {

      if ($request->isMethod('post')) {
        $data = $request->all();
        $product = new Product;
        if (empty($data['product_name'])) {
          return back()->with('message_error', 'Please Insert Product Name');
        }
        //echo "<pre>"; print_r($data); die;
        $product->category_id     = 99999;

        if (!empty($data['position'])) {
          $pos = $data['position'];
        }else {
          $pos = '';
        }

      
  /*$s_b=$data['category_id'];

           $adds3sb = Category::where('id', $s_b)->first();
           $p_categoryp= $adds3sb->parent_id;
           $ctid= $adds3sb->id;

if($p_categoryp=="0")
{
     $p_category= $ctid;
}
else
{
    $p_category= $adds3sb->parent_id;
}*/




        $product->position     = $pos;
        $product->parent_id     = 999999;
        
        
        $product->product_name    = $data['product_name'];
        $product->brand    = $data['brands'];
        
        
        
        

        
        
        $product->product_color   = 'N/A';
        
        $product->care   = 'N/A';
        
        
        
        
        $product->description     = $data['description'];
        
        $product->unit     = $data['unit'];
        
        $product->price           = $data['price'];
        $product->p_price           = "";


        if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,9999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/products/large/'.$filename;
            $small_image_path ='assets/admin/img/products/small/'.$filename;

            Image::make($image)->resize(250,300)->save($large_image_path);
            Image::make($image)->resize(500,600)->save($small_image_path);

            $product->image = $filename;
          }
        }else {
          $product->image = '';
        }

        if (empty($data['status'])) {
          $status = 0;
        }else {
          $status = 1;
        }
        
        
        
        
        
     if (empty($data['offer'])) {
          $offer = "";
        }else {
          $offer = $data['offer'];
        }
           
        
        if (empty($data['cash_back'])) {
          $cash_back = "";
        }else {
          $cash_back = $data['cash_back'];
        }
                
        
         if (empty($data['child_id'])) {
          $child_id = "";
        }else {
          $child_id = $data['child_id'];
        }
                
        
        
        
        
        
        
        if (empty($data['position2'])) {
          $position2= 0;
        }else {
          $position2 = 1;
        }
        
           if (empty($data['position3'])) {
          $position3= 0;
        }else {
          $position3 = 1;
        }     
        
        
        
        

        $product->status = $status;
        
        $product->position2     = $position2;
        $product->position3     = $position3;
        $product->child_id     = $child_id;

          $product->offer     = $offer;
        $product->cash_back     = $cash_back;
        
        
        $product->save();
        return back()->with('message_success','Medicine Added Successfully');
      }
        $categories = Category::where('parent_id',0)->get();
        $categories_drop = "<option selected disabled> Categories</option>";
        foreach ($categories as $cat) {
          $categories_drop .= "<option value = '" .$cat->id ."'>" . $cat->name ."</option>";
          $sub_cat = Category::where('parent_id' , $cat->id)->get();
            foreach ($sub_cat as $sub) {
              $categories_drop .= "<option value = '" .$sub->id ."'>" ."&nbsp;--&nbsp;" .$sub->name ."</option>";
            }
        }

        return view('admin.products.add_productsm' , compact('categories_drop'));
    }















    public function view_products(Request $request){

      $products = Product::orderby('id','DESC')->where('category_id','<',99999)->get();
      
      
      foreach ($products as $key => $val) {
        $category_name = Category::where(['id' => $val->category_id])->first();
         //$products[$key]->category_name = $category_name->name;
      }
      return view('admin.products.view_products',compact('products'));
    }











    public function view_products_dis(Request $request){
  
      return view('admin.products.view_products_dis');
    }




    public function view_products_camp(Request $request){
     
      return view('admin.products.view_products_camp',compact('products'));
    }





















  public function view_productsm(Request $request){

      $products = Product::orderby('id','DESC')->where('category_id','=',99999)->get();
      
      
      
      

      foreach ($products as $key => $val) {
        $category_name = Category::where(['id' => $val->category_id])->first();
         //$products[$key]->category_name = $category_name->name;
      }
      return view('admin.products.view_productsm',compact('products'));
    }








public function add_bulk(Request $request)
    {
            $aa_user=DB::table('users')->whereNull('rank')->where('id','>',10)->get();

        return view('admin.products.add_bulk' , compact('aa_user'));
    }











    public function g_trx(){

    
      
      

      return view('admin.products.g_trx');
    }



 
 









   
    public function edit_products(Request $request , $id){
      if ($request->isMethod('post')) {
        $data = $request->all();
        if ($request->hasFile('image')) {
                      $image = Input::file('image');

         $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,9999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/products/large/'.$filename;
            $small_image_path ='assets/admin/img/products/small/'.$filename;

            Image::make($image)->resize(250,300)->save($large_image_path);
            Image::make($image)->resize(500,600)->save($small_image_path);   
            
            
            
                

        }else {
          $filename = $data['current_img'];
        }
        
        
 
        if (empty($data['enable'])) {
          $status = 0;
        }else {
          $status = 1;
        }
        if (!empty($data['position'])) {
          $pos = $data['position'];
        }else {
          $pos = '';
        }


        if (!empty($data['extra1'])) {
          $extra1 = $data['extra1'];
        }else {
          $extra1 = '';
        }

    if (!empty($data['video'])) {
          $video = $data['video'];
        }else {
          $video = '';
        }




if (empty($data['position2'])) {
          $position2= 0;
        }else {
          $position2 = 1;
        }




        
                if (!empty($data['extra3'])) {
          $extra3 = $data['extra3'];
        }else {
          $extra3= '';
        }
        
                      if (!empty($data['extra4'])) {
          $extra4 = $data['extra4'];
        }else {
          $extra4= '';
        }
          
          
          
          
                  if (!empty($data['extra9'])) {
          $extra9 = $data['extra9'];
        }else {
          $extra9= '';
        }
            
          
          
                              if (!empty($data['extra10'])) {
          $extra10 = $data['extra10'];
        }else {
          $extra10= '';
        }
            
          
                
                if (!empty($data['extra11'])) {
          $extra11 = $data['extra11'];
        }else {
          $extra11= '';
        }
                   


        if (!empty($data['meta_key'])) {
          $meta_key = $data['meta_key'];
        }else {
          $meta_key = '';
        }

        if (!empty($data['meta_description'])) {
          $meta_description = $data['meta_description'];
        }else {
          $meta_description = '';
        }
        
        
        
        if (!empty($data['supplier'])) {
          $supplier = $data['supplier'];
        }else {
          $supplier= '';
        }
        






//Installment
if (!empty($data['down_payment'])) {
          $down_payment = $data['down_payment'];
        }else {
          $down_payment = '';
        }   
        
        
        
if (!empty($data['number_installment'])) {
          $number_installment = $data['number_installment'];
        }else {
          $number_installment = '';
        }    
        

if (!empty($data['inttallment_amount'])) {
          $inttallment_amount = $data['inttallment_amount'];
        }else {
          $inttallment_amount = '';
        }
//end Installment

















    if (!empty($data['grantee'])) {
          $grantee = $data['grantee'];
        }else {
          $grantee = '';
        }   
        
        
        
        
          if (!empty($data['re_sale'])) {
          $re_sale = 1;
        }else {
          $re_sale =0;
        }   
        
          
        
        
        
        
                if (!empty($data['warranty'])) {
          $warranty = $data['warranty'];
        }else {
          $warranty = '';
        }







if (empty($data['position3'])) {
          $position3= 0;
        }else {
          $position3 = 1;
        }




      
  $s_b=$data['category_id'];

           $adds3sb = Category::where('id', $s_b)->first();
           $p_categoryp= $adds3sb->parent_id;
           $ctid= $adds3sb->id;

if($p_categoryp=="0")
{
     $p_category= $ctid;
}
else
{
    $p_category= $adds3sb->parent_id;
}






        Product::where('id',$id)->update([
            'category_id'   => $data['category_id'] ,
            
            'position'      => $pos ,
            'position2'      => $position2 ,
            'position3'      => $position3 ,
            'parent_id'      => $p_category ,
            'extra1'      => $extra1,
            'status'      => 1 ,
            'product_name'  => $data['product_name'] ,
            'product_color' => $data['product_color'] ,
            'brand' => $data['brands'] ,
            'grantee'      => $grantee ,
            'warranty'      => $warranty ,
            're_sale'      => $re_sale ,
            'supplier'      => $supplier ,
            'meta_key'      => $meta_key ,
            'meta_description'      => $meta_description ,
            
            
            'description'   => $data['description'] ,
            'care'          => $data['care'] ,
            'offer'          => $data['offer'] ,
            
            'price'         => $data['price'],
            'p_price'         => $data['p_price'],
            
            'unit'         => $data['unit'],
            'extra5'         => $video,
            'extra3'         => $extra3,
            'extra4'         => $extra4,
            'extra9'         => $extra9,
            'extra10'         => $extra10,
            'extra11'         => $extra11,

            
    
        'extra6'   => $down_payment,
       'extra7'   => $number_installment,
        'extra8'   => $inttallment_amount,
        
            
           'image'         => $filename,
            
            
            
            
            
            'status'        => $status

        ]);
        
if(empty($data['shop_id']))
        {
                    $shop_id="";

        }
        else
        {
                    $shop_id=$data['shop_id'];

        }
        $ppid=$id;
        $ppprice=$data['price'];
        $cciidd=$data['category_id'];
        $sub_schildid=$p_category;

if(isset($data['ss_status'])){
if($data['ss_status']==9){
         DB::table('s_product')->insert([
                          'shop_id'         => $shop_id,
                          'product_id'   =>  $ppid,
                          'price'   =>  $ppprice,
                          'c_id'   =>  $cciidd,
                          'sub_c_id'   =>  $sub_schildid,
                          'status'   =>  1
                        
                        
                            ]);
        
        
}     
        
}       
    
        
        
        
        
        

        return back()->with('message_success','Update Successfully ...!!');
      }
      $productDetails = Product::where('id', $id)->first();

      $categories = Category::where('parent_id',0)->get();
      $categories_drop = "<option selected disabled> Categories</option>";
      foreach ($categories as $cat) {

        if ($cat->id == $productDetails->category_id) {
          $selected = "selected";
        }else {
          $selected = "";
        }

        $categories_drop .= "<option value = '" .$cat->id ."'".$selected.">" . $cat->name ."</option>";
        $sub_cat = Category::where('parent_id' , $cat->id)->get();
          foreach ($sub_cat as $sub) {
            if ($sub->id == $productDetails->category_id) {
              $selected = "selected";
            }else {
              $selected = "";
            }
            $categories_drop .= "<option value = '" .$sub->id ."'".$selected.">" ."&nbsp;--&nbsp;" .$sub->name ."</option>";
          }
      }

      return view('admin.products.edit_products',compact('productDetails','categories_drop'));
    }

    public function deleteProductsImg($id){
      $productImage= Product::where('id',$id)->first();
      //echo "<pre>"; print_r($data); die;

      $image_path = "assets/admin/img/products/";

      if (file_exists($image_path.$productImage->image)) {
        unlink($image_path.$productImage->image);
      }

      Product::where('id',$id)->update(['image'=>'']);
      return back()->with('message_success','Image Deleted Successfully');
    }

    public function deleteProducts($id){
      Product::where('id',$id)->delete();
      //echo "<pre>"; print_r($data); die;
      return back()->with('message_success','Product has been Deleted Successfully');
    }


       public function add_attribute(Request $request,$id){
      $pro_att = Product::with('attribute')->where('id',$id)->first();
      // $pro_att = json_decode(json_encode($pro_att));

    //  echo "<pre>" ; print_r($pro_att); die;

      if ($request->isMethod('post')) {
        $data = $request->all();
        //echo "<pre>"; print_r($data);die;
        foreach ($data['sku'] as $key => $val) {

          if (!empty($val)) {

/*            $attrCountSku = ProductsAttribute::where('sku',$val)->count();
            if($attrCountSku>0){
              return back()->with('message_error', 'Color already Exists ...!!!');
            }
            $attrCountSize = ProductsAttribute::where(['product_id'=>$id,'size'=>$data['size'][$key]])->count();
            if ($attrCountSize>0) {
              return back()->with('message_error', ''.$data['size'][$key] .'Size already Exists ...!!!');
            }*/

            $attribute = new ProductsAttribute;
            $attribute->product_id = $id;
            $attribute->sku   = $val;
            $attribute->size  = $data['size'][$key];
            $attribute->price = $data['price'][$key];
            $attribute->app = $data['app'][$key];
            
            
            $attribute->stock = $data['stock'][$key];
            
            
            
            
            
            $attribute->save();

          }
        }
        return back()->with('message_success','Product attribute added Successfully');
      }
      return view('admin.products.add_attribute',compact('pro_att'));
    }


    public function edit_attribute(Request $request ,$id){
      if ($request->isMethod('post')) {
        $data = $request->all();
        
        /*
        
                    $cuccent_stock=$data['pstock']+$data['attrStock'];

                    DB::table('products_attributes')->where('id',$data['attrId'])->update([
                    'stock'=>$cuccent_stock,
                    'price'=>$data['attrPrice'],
                    ]);
        
        */
        
        
        //echo "<pre>"; print_r($data);die;

       foreach ($data['attrId'] as $key => $attr) {
            
          ProductsAttribute::where('id', $data['attrId'][$key])->update(['price'=>$data['attrPrice'][$key],'app'=>$data['appPrice'][$key], 'stock'=>$data['attrStock'][$key]+$data['pstock'][$key]]);
        }
        
        
        
        
        
        return back()->with('message_success','Update Successfully');
      }
    }
    
    
    
    public function deleteAttribute($id){
      ProductsAttribute::where('id', $id)->delete();
      return back()->with('message_success','Attribute deleted Successfully');
    }


    public function listCategory($url){
      //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $countCat = Category::where(['url'=>$url , 'status'=>1])->count();
        /*if($countCat==0){
          abort(404);
        }*/

        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $cat_details = Category::where('url',$url)->first();


        //echo $cat_details->id; die;
        if (@$cat_details-> parent_id == 0) {
          $subCategories = Category::where('parent_id', @$cat_details->id)->get();
          foreach ($subCategories as $subCat) {
            $cat_ids[] = $subCat->id;
          }
          $allproducts = Product::where('category_id',@$cat_details->id)->where('status',1)->get();
        }else {
          $allproducts = Product::where('category_id',@$cat_details->id)->where('status',1)->get();
        }

        return view('products.listing')->with(compact('cat_details','allproducts','categories'));
    }








    public function listCategory2($url){
      //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $countCat = Category::where(['url'=>$url , 'status'=>1])->count();
        /*if($countCat==0){
          abort(404);
        }*/

        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
        $cat_details = Category::where('url',$url)->first();


        //echo $cat_details->id; die;
        if ($cat_details-> parent_id == 0) {
          $subCategories = Category::where('parent_id', $cat_details->id)->get();
          foreach ($subCategories as $subCat) {
            $cat_ids[] = $subCat->id;
          }
          $allproducts = Product::where('category_id',$cat_details->id)->where('status',1)->get();
        }else {
          $allproducts = Product::where('category_id',$cat_details->id)->where('status',1)->get();
        }

        return view('products.listing2')->with(compact('cat_details','allproducts','categories'));
    }




    public function listCategory3($url){
     

        return view('products.listing3');
    }


















    public function searchCategory(Request $request){
      //$categories = Category::with('categories')->where(['parent_id'=>0])->get();
      
      
      
      
      
      
/*     public function search(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            $search=$data['search'];
            $jatio1=  News::where('headline', 'like', '%'.$search.'%')->get();

        }
        
        */
        

        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      //  $cat_details = Category::where('url',$url)->first();

            $data=$request->all();
            $search=$data['search'];
            $allproducts = Product::where('product_name', 'like', '%'.$search.'%')->where('status',1)->get();
            
        
          //$allproducts = Product::where('category_id',$cat_details->id)->where('status',1)->get();
        

        return view('products.search')->with(compact('allproducts','categories'));
    }









    public function searchCategory2($id){

       
        	            $allproducts = DB::table('products')->where('brand', 'like', '%'.$id.'%')->where('status',1)->get();


        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
     

        return view('products.search2')->with(compact('allproducts','categories'));
    }





    public function watch(){
        return view('watch');
    }






    public function shop($id){

       $shopid=$id;
       $allproducts="";

        return view('products.shop')->with(compact('allproducts','shopid'));
    }









    public function allpv(){

        $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      //  $cat_details = Category::where('url',$url)->first();


            $allproducts = Product::where('status',1)->get();
            
        
          //$allproducts = Product::where('category_id',$cat_details->id)->where('status',1)->get();
        

        return view('products.allp')->with(compact('allproducts','categories'));
    }












    public function productdetails($id){
      $countProduct = Product::where(['id'=>$id])->count();
      
      $pro_details       = Product::with('attribute')->where('id',$id)->first();
      $relatedProducts   = Product::where('id','!=',$id)->where(['category_id'=>$pro_details->category_id])->paginate(8);
      $categories        = Category::with('categories')->where(['parent_id'=>0])->get();
      $pro_att_img       = ProductImage::where('product_id',$id)->get();
      $total_stock       = ProductsAttribute::where('product_id',$id)->sum('stock');



      return view('products.product-details')->with(compact('pro_details','categories','pro_att_img','total_stock','relatedProducts','countProduct'));
    }

    public function productPrice(Request $request){
      $data = $request->all();
      // echo "<pre>";print_r($data);die;

      $proAtt = explode("-",$data['idSize']);
      $proAttribute = ProductsAttribute::where(['product_id' => $proAtt[0] , 'size' => $proAtt[1] ])->first();
      echo $proAttribute->price;
      echo "#";
      echo $proAttribute->stock;
    }






    public function add_images(Request $request,$id){
      $pro_att = Product::with('attribute')->where('id',$id)->first();

      if ($request->isMethod('post')) {
        $data = $request->all();


        if ($request->hasFile('image')) {
            $files = $request->file('image');

            foreach ($files as $file) {
              $images = new ProductImage;
              $name2 = $file->getClientOriginalName();
              $name = rand(111,9999999999).'.'.$name2;
              $destinationPath ='assets/admin/img/products/';
              $imagePath = $destinationPath. "/".  $name;
              
              
              

                          Image::make($file)->resize(500,600)->save($imagePath);   

              
              
              $images->image = $name;
              $images->product_id = $data['product_id'];
              $images->save();
            }
          }
          return back()->with('message_success','images added .................');
      }

      $productImage = ProductImage::where('product_id',$id)->get();

      return view('admin.products.add_images',compact('pro_att','productImage'));
    }





    
    
    
    
    
    
    


    public function deleteImage($id){
      ProductImage::where('id',$id)->delete();
      return back()->with('message_success','Image Deleted Successfully');
    }





    public function addtocart(Request $request){
      Session::forget('couponAmount');
      Session::forget('countCode');
      $data = $request->all();
      // echo "<pre>"; print_r($data);die;
      if (empty(Auth::user()->email)) {
        $data['user_email'] = '';
      }else{
        $data['user_email'] = Auth::user()->email;
      }
      $session_id = Session::get('session_id');



      if (empty($session_id)) {
          
          session_start();
     $ses_id=session_id();
       // $session_id = str_random(40);
       $session_id=session_id();
        Session::put('session_id',$session_id);
      }
      
      

      $countProducts = DB::table('cart')->where([
              'product_id'      => $data['product_id'],
              'product_code'    => $data['product_code'],
              're_sale'         => $data['re_sale'],
              'session_id'      => $session_id
            ])->count();


      if ($countProducts>0) {
                return back()->with('message_error','This product already added  to Card List ');
      }else {
         if(isset($data['size']))
         {
             $psize=$data['size'];
             
         }
         else
         {
             $psize="";
         }
         
         $fcrCart = DB::table('products')->where(['id' => $data['product_id']])->first();
         
         $cc_back=$fcrCart->cash_back;
       
       
       
       if(!empty($data['size'])>0){
       if(!empty($data['product_color'])>0){
           
                $fcrCart = DB::table('products_attributes')->where('product_id',$data['product_id'])->where('sku',$data['product_color'])->where('size',$data['size'])->first();
                $profit=$fcrCart->price - $fcrCart->app;
                
       }else
       {
           $profit='';
       }
           
       }
       else{
           $profit='';
       }
       
       
       
       
       
       
       
       if(isset($data['product_color'])){
           $color9=$data['product_color'];
       }else{
          $color9=""; 
       }
       
       
       
       
              if(isset($data['quantity'])){
           $qty=$data['quantity'];
       }else{
          $qty=1; 
       }
       
       if($qty<1){
           $qty=1;
       }
       
       
       
       
       
       
       
        DB::table('cart')->insert([
          'product_id'      => $data['product_id'],
          'product_name'    => $data['product_name'],
          'product_code'    => $data['product_code'],
          'cash_back'    => $cc_back,
          'product_color'   => $color9,
          'price'           => $data['price'],
          'quantity'        => $qty,
          'size'        => $psize,
          're_sale'         => $data['re_sale'],
          'profit'         => $profit,

          'user_email'      => $data['user_email'],
          'session_id'      => $session_id
        ]);
      }
      
      
/*      if(isset($data['atc'])){
      
                      return back()->with('message_sss','This product added  to Card List ');
}else{
      

      return redirect('/cart')->with('message_success','Product added Successfully');
}

*/




if(isset($data['order_bt'])){
   
    return redirect('/cart')->with('message_success','Product added Successfully');
}else
{
      return back()->with('message_sss','Product added Successfully');
}


      

    }



















    public function cart(){
       $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      // $total = Cart::total();
      
        $session_id = Session::get('session_id');
        $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();
      

      // echo "<pre>"; print_r($userCart); die;
      foreach ($userCart as $key => $product) {

        $productDetail = Product::where('id',$product->product_id)->first();
        $userCart[$key]->image = $productDetail->image;
      }
      // echo "<pre>"; print_r($userCart); die;
      return view('products.cart')->with(compact('userCart','categories'));
    }

    public function deleteCart($id){
      Session::forget('couponAmount');
      Session::forget('countCode');
      DB::table('cart')->where('id', $id)->delete();

      return back()->with('message_error','Product deleted from cart ');
    }

    public function updateQuantity($id,$quantity,$color,$size,$pid,$qty){
      Session::forget('couponAmount');
      Session::forget('countCode');
      $qty2=$qty+1;
      
      
     if($quantity>0){ 
      if($color>0){
          @$previous_count=DB::table('products_attributes')
          ->where('product_id',$pid)
          ->where('sku',$color)
          ->where('size',$size)
          ->sum('stock'); 
          
          
          if($qty2>$previous_count){
                    return back();
              
          }else{
                             DB::table('cart')->where('id', $id)->increment('quantity',$quantity);

          }
          
          
            
     }else
     {
       DB::table('cart')->where('id', $id)->increment('quantity',$quantity);  
     }
     
     
     
     }
     
     
     
     
     
     
     
      else{
                              
DB::table('cart')->where('id', $id)->increment('quantity',$quantity);
      }
      
      
      
      
      
      
      
      
      
      
      
      
      return back();
    }

    public function applyCoupon(Request $request){

      Session::forget('couponAmount');
      Session::forget('countCode');

      $data = $request->all();
      // echo "<pre>"; print_r($data); die;
      $countCoupon = Coupon::where('coupon_code',$data['apply_coupon'])->count();
      if($countCoupon == 0){
        return back()->with('message_error','Coupon not valid');
      }else{
        // echo "Success";die;
        $couponDetails = Coupon::where('coupon_code',$data['apply_coupon'])->first();
        if ($couponDetails == "0") {
          return back()->with('message_error','Coupon is not active ..!!' );
        }

        $expiry_date = $couponDetails->expiry_date;
        $courrent_date = date('Y-m-d');
        if ($expiry_date < $courrent_date) {
          return back()->with('message_error','Coupon date is not valid ..!!' );
        }
        if (Auth::check()) {
          $user_email = Auth::user()->email;
          $userCart = DB::table('cart')->where('user_email' , $user_email)->get();
        }else {
          $session_id = Session::get('session_id');
          $userCart = DB::table('cart')->where('session_id', $session_id)->get();
        }

        $total_amount = 0;
        foreach ($userCart as $item) {
          $total_amount = $total_amount + ($item->price * $item->quantity);
        }

        if ($couponDetails->amount_type == "Fixed") {
          $countAmount = $couponDetails->amount;
        }else {
          $countAmount = $total_amount * ($couponDetails->amount/100);
        }

        //echo $countAmount;die;
        Session::put('couponAmount',$countAmount);
        Session::put('countCode',$data['apply_coupon']);
        return back()->with('message_success', 'Coupon code successfully added');
      }

    }

    public function checkout(Request $request){

    
if(isset(Auth::user()->id))
{
    
    
    if(isset($request->cus_dis)){
     $affiliate_com=Session::get('my_aff_com');
     
     if($request->cus_dis > $affiliate_com ){
         
         return back()->with('message_success','আপনার ডিসকাউন্ট এর পরিমাণ সঠিক নয়।');
     }else{
             Session::put('cus_dis', $request->cus_dis);

     }
    }
    

    
    
    
    
    
    
      $user_id = Auth::user()->id;
      $user_email = Auth::user()->email;
      $userDetails = User::find($user_id);
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $shippingCount = DeliveryAddress::where('user_id', $user_id)->count();
      $shippingDetails = array();
      if ($shippingCount>0) {
        $shippingDetails = DeliveryAddress::where('user_id', $user_id)->first();
      }

      $session_id = Session::get('session_id');
      DB::table('cart')->where(['session_id'=>$session_id])->update(['user_email'=>$user_email]);

      if ($request->isMethod('post')) {
        $data = $request->all();
        
        if(!empty($data ['billing_note'])){
            $note=$data ['billing_note'];
        }
        else{
            $note="";
        }
        
        
        if(!empty($data ['quickd'])){
            $quickd=$data ['quickd'];
        }
        else{
            $quickd=2;
        }
          
        
        

        if ( empty($data ['billing_name']) || empty($data ['billing_address']) || empty($data ['billing_mobile']) || empty($data ['billing_name']) || empty($data ['billing_address'])  || empty($data ['billing_mobile']) ) {
          return redirect()->back()->with('message_error','Please fill all checkout fields');
         }


        User::where('id',$user_id)->update([
          'name'=>$data['billing_name'],'address'=>$data['billing_address'],'city'=>$data['dcity'],'pincode'=>$data['dmmm']
        ]);
   

        if ($shippingCount>0) {
            
            
          DeliveryAddress::where('user_id',$user_id)->update(['name'=>$data['billing_name'],'address'=>$data['billing_address'],'extra7'=>$note,'extra1'=>$quickd,'mobile'=>$data['billing_mobile']]);

        }else {
          $shipping = new DeliveryAddress;
          $shipping->user_id = $user_id;
          $shipping->user_email = $user_email;
          $shipping->name = $data['billing_name'];
          $shipping->address = $data['billing_address'];
          $shipping->city = '';
          $shipping->pincode ='';
          $shipping->mobile = $data['billing_mobile'];
          $shipping->extra7 = $note;
          $shipping->extra1 = $quickd;
          $shipping->save();

        }
        return redirect()->action('ProductsController@orderReview');
      }

      return view('products.checkout')->with(compact('userDetails','shippingDetails','categories'));
    
} 
else
{
    return view('users.login-registerj');
}
    } 
    
    
    
       
    
    
    
    
    
    
    
    
  public function checkout2(Request $request){
        
           if ($request->isMethod('post')) {
   
        
        $data = $request->all();
$pp=$data['billing_mobile'];



        $users_count =  User::where(['phone' => $data['billing_mobile']])->count();
        if ($users_count>0) {
            

      return view('users.logReg')->with('message_reshop','rr');
      

        }else {
            
            
        $adds6 = Banner::where('id', 32)->first();

            $urrl32= $adds6->image;     
            
            
            
          $user = new User;

          $user->name = $data['billing_name'];
          $user->phone = $data['billing_mobile'];
 $user->email =''.$pp.'@'.$urrl32.'';
           $user->password = bcrypt($data['billing_mobile']);

 
 
          $user->save();
          
          
          
         $users_countt =  User::where(['phone' => $data['billing_mobile']])->first();
         $tem_id=$users_countt->id;
         $tem_email=$users_countt->email;
                  $tem_pass=$users_countt->password;
         

           if (Auth::attempt(['phone' => $data['billing_mobile'] , 'password' => $data['billing_mobile'] ])) {
            Session::put('fontSession' , $data['billing_mobile']);
           }

        }
          
          
          
        

      $user_id = $tem_id;
      $user_email = $tem_email;
      
      
      
      $userDetails = User::find($user_id);
    $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $shippingCount = DeliveryAddress::where('user_id', $user_id)->count();
      $shippingDetails = array();
      if ($shippingCount>0) {
        $shippingDetails = DeliveryAddress::where('user_id', $user_id)->first();
      }

      $session_id = Session::get('session_id');
     // DB::table('cart')->where(['session_id'=>$session_id])->update(['user_email'=>$user_email]);

      if ($request->isMethod('post')) {
        $data = $request->all();

        if ( empty($data ['billing_name']) || empty($data ['billing_address']) || empty($data ['billing_mobile']) || empty($data ['billing_name']) || empty($data ['billing_address'])  || empty($data ['billing_mobile']) ) {
          return redirect()->back()->with('message_error','Please fill all checkout fields');
         }


        User::where('id',$user_id)->update([
          'name'=>$data['billing_name'],'address'=>$data['billing_address'],'phone'=>$data['billing_mobile'],'city'=>$data['dcity'],'pincode'=>$data['dmmm']
        ]);


        if ($shippingCount>0) {
          DeliveryAddress::where('user_id',$user_id)->update(['name'=>$data['billing_name'],'address'=>$data['billing_address'],'mobile'=>$data['billing_mobile']]);

        }else {
          $shipping = new DeliveryAddress;
          $shipping->user_id = $user_id;
          $shipping->user_email = $user_email;
          $shipping->name = $data['billing_name'];
          $shipping->address = $data['billing_address'];
          $shipping->city = '';
          $shipping->pincode ='';
          $shipping->mobile = $data['billing_mobile'];
          $shipping->save();

        }
        return redirect()->action('ProductsController@orderReview');
      }
}
      return view('products.checkout2')->with(compact('userDetails','shippingDetails','categories'));
    }
    
    
    
    
    
      
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    public function orderReview(){
      $user_id = Auth::user()->id;
      $user_email = Auth::user()->email;
      $userDetails = User::find($user_id);
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();
      $shippingDetails = DeliveryAddress::where('user_id', $user_id)->first();




      $session_id = Session::get('session_id');







      $userCart = DB::table('cart')->where(['session_id' => $session_id])->get();
      // echo "<pre>"; print_r($userCart); die;
      foreach ($userCart as $key => $product) {

        $productDetail = Product::where('id',$product->product_id)->first();
        $userCart[$key]->image = $productDetail->image;
      }
      return view('products.orderReview',compact('userDetails','shippingDetails','userCart','categories'));
    }




















    public function placeOrder(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        //echo "<pre>";print_r($user_email);die;
        
        
            
$discount_ss=Session::get('discount_ss');



$vat=Session::get('vat');
$coupon_num=Session::get('coupon_num');

if(!empty($discount_ss)){
    $discount_ss=$discount_ss;
}else{
    $discount_ss=0;
}

if(!empty($coupon_num)){
    $coupon_num=$coupon_num;
}else{
    $coupon_num="";
}   
     
     
     

$cus_dis=Session::get('cus_dis');
if(!empty($cus_dis)){
    $cus_dis=$cus_dis;
}else{
    $cus_dis=0;
}


     $affiliate_com=Session::get('my_aff_com');
if($affiliate_com > 0){
   $affiliate_comission=$affiliate_com-$cus_dis;
}else{
    $affiliate_comission=0;
}
        
        $total_discount_all=$cus_dis+$discount_ss;
        
        $shippingdetails = DeliveryAddress::where(['user_id'=> $user_id])->first();
        //echo "<pre>";print_r($user_email);die;

        // if (empty(Session::get('countCode'))) {
        //   $couponCode ='';
        // }else {
        //   $couponCode = Session::get('countCode');
        // }
        // if (empty(Session::get('couponAmount'))) {
        //   $couponAmount = '';
        // }else{
        //   $couponAmount = Session::get('couponAmount');
        // }

        $order = new Order;
        $order->user_id       = $user_id;
        $order->user_mail    = 	$user_email;
        $order->name          = $shippingdetails->name;
        $order->city          = $shippingdetails->city;
        $order->address       = $shippingdetails->address;
        //$order->country = $shippingdetails->country;
        $order->mobile        = $shippingdetails->mobile;
        $order->coupon_code   = '';
        $order->coupon_amount = '';
        $order->order_status  = "In Process";
        $order->extra1  = $shippingdetails->extra1;
        $order->extra7  = $shippingdetails->extra7;
        $order->extra3  = $vat;
        $order->extra10  = $affiliate_comission;
        
        
        
        
        $order->shipping_charges= $data['shipping_charge'];
        $order->payment_method= $data['payment_method'];

                $order->coupon_code= $coupon_num;
        $order->discount= $total_discount_all;
        if(!isset($data['trxid']))
        {
            $order->pincode       ="";
        }
        else
        {
            $order->pincode       = $data['trxid'];
        }
                

        
        
        
        $p_method=$data['payment_method'];
        
        $ssm=$shippingdetails->mobile;
        $ssn= $shippingdetails->name;
        
        $order->total         =  $data['grand_total'];

        
        
        
        

$iowelkfsd=$data['grand_total']*2;
$sdf34=$data['grand_total'];
$reduce_a=$sdf34-$iowelkfsd;



        if($p_method=="shop_wallet")
        {
            
                    DB::table('ac_shop')->insert([
                          'user_id'         => $user_id,
                          'amount'          => $reduce_a,
                          'remark'          => "Shopping bill pay",
                          'sender_number'   => $user_id,
                          'status'          => 1,
                     
                            ]);
        }






        $order->save();
        
        
                         Session::forget('coupon_dis');
                 Session::forget('coupon_type');
          Session::forget('coupon_num');
         Session::forget('discount_ss');

                 Session::forget('cus_dis');
         Session::forget('my_aff_com');
        

        $order_id = DB::getPDO()->lastInsertId();
        //echo "<pre>";print_r($order_id);die;

      $session_id = Session::get('session_id');




        $cartProducts = DB::table('cart')->where(['session_id' => $session_id])->get();
        
        
        
        foreach ($cartProducts as $pro) {
          $cartpro = new OrdersProduct;
          //echo "<pre>";print_r($cartpro);die;
          $cartpro->order_id = $order_id;
          $cartpro->user_id = $user_id;
          $cartpro->product_id = $pro->product_id;
          $cartpro->product_code = $pro->product_code;
          $cartpro->product_name = $pro->product_name;
          $cartpro->prodect_color = $pro->product_color;
          $cartpro->product_size = $pro->size;
          $cartpro->product_price = $pro->price;
          $cartpro->product_qty = $pro->quantity;
          $cartpro->re_sale = $pro->re_sale;
          $cartpro->profit = $pro->profit;
          
          
          
          
          
          $cccttk=($pro->price*$pro->quantity)/100*$pro->cash_back;
          
          $cartpro->cashback = $cccttk;
          $cartpro->save();
          
    //Stock Calculation  stat    
          @$previous_count=DB::table('products_attributes')
          ->where('product_id',$pro->product_id)
          ->where('sku',$pro->product_color)
          ->where('size',$pro->size)
          ->sum('stock');
          
          
          @$log_count=DB::table('products_attributes')
          ->where('product_id',$pro->product_id)
          ->count();
          
          if($log_count>0){
                        $ccc=$previous_count - $pro->quantity;

              
            DB::table('products_attributes')
            ->where('product_id',$pro->product_id)
            ->where('sku',$pro->product_color)
            ->where('size',$pro->size)            
            ->update([
                'stock'=>$ccc
                ]);
              
          }
          
       //Stock Calculation end       
          

        }
        Session::put('order_id' ,$order_id);
        Session::put('total' ,$data['grand_total']);
        
        $tt_bill=$data['grand_total'];
        
        
        
        
    //Send SMS4
    
    
           $adds6 = Banner::where('id', 32)->first();
           $urrl32= $adds6->image;
           
           
           $adds31 = Banner::where('id', 31)->first();
           $number31= $adds31->image;    
           
           
           $adds33 = Banner::where('id', 33)->first();
           $apiurl= $adds33->image;
           
           $adds34 = Banner::where('id', 34)->first();
           $apikey= $adds34->image;     
    
           $adds35 = Banner::where('id', 35)->first();
           $sender= $adds35->image;  
    
    $adds3510 = Banner::where('id', 10)->first();
           $email10= $adds3510->image; 
    
    
    
    
    
    
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$ssm", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"ধন্যবাদ  আপনার অর্ডার নং: $order_id,  পরিমাণ: $tt_bill,  ধন্যবাদ"
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);
         
   
    

         
         
         
         
         
         
         
         
                 
                        
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$number31", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"একটি অর্ডার করেছেন। নং: $order_id, পরিমাণ: $tt_bill, মোবাইল: $ssm"
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);        
        
  //main Function
  
  
$to = "$user_email";
$subject = "Order Success ($urrl32)";
$message = '<div>
<html>
<head>
<title> Order Success ('.$urrl32.') </title>
</head>

<body>
<p>Dear '.$ssn.', <br>

your bill no: '.$order_id.', Amount: '.$tt_bill.'
<br>

<a href="https://'.$urrl32.'/invoice/'.$order_id.'/'.$tt_bill.'" style="color:white;padding:20px; border-radius:4px"> <img src="https://www.sure.com.bd/invoice_download.png"></a>

<br>

Thanks, <br/>
Sales Department,<br/>
<a href="https://'.$urrl32.'">'.$urrl32.'</a><br>
</body>
</html>
</div>'
;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: < '.$email10.' >' . "\r\n";

mail($to,$subject,$message,$headers);










 
$to = "$email10";
$subject = "Now Order ($urrl32)";
$message = '<div>
<html>
<head>
<title> Now Order ('.$urrl32.') </title>
</head>

<body>
<p>Dear '.$ssn.' <br>

'.$ssn.' Place a order No: '.$order_id.', Amount: '.$tt_bill.', Mobile: '.$ssm.'"
<br>


<a href="https://'.$urrl32.'/invoice/'.$order_id.'/'.$tt_bill.'" style="color:white;padding:20px; border-radius:4px"> <img src="https://www.sure.com.bd/invoice_download.png"></a>

<br>





Thanks, <br/>
Support Department,<br/>
<a href="https://'.$urrl32.'">'.$urrl32.'</a><br>
</body>
</html>
</div>'
;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: < '.$email10.' >' . "\r\n";

mail($to,$subject,$message,$headers);








  
  
  //end mail funciton
  
  
  
  
  
  
  
  
  
  
        
//Session Product Quary
$session_id = Session::get('session_id');
DB::table('cart')->where('session_id',$session_id)->delete();


        
        
        
        
        
        
        
        
        
        
        if($p_method=='COD')
    {
    
    
return redirect('/orders')->with('message_success','Order place successfull, We will contact as soon as posible.  Your Payment Method is Cash On Delivery!');;
    }
    
    
    elseif($p_method=='bKash')
    {
           
 return redirect('/orders')->with('bKash', ' Your amount is: '.$tt_bill.',   Reference Number: '.$order_id.'');;
    
         
    }
    
    
    
    elseif($p_method=='Rocket')
    {
 return redirect('/orders')->with('Rocket', ' Your amount is: '.$tt_bill.',   Reference Number: '.$order_id.'');;
    
     
    }
    
        elseif($p_method=='Nagad')
    {
        
        
 return redirect('/orders')->with('Nagad',' Your amount is: '.$tt_bill.',   Reference Number: '.$order_id.'');;
    
    }
        
        
        elseif($p_method=='shop_wallet')
    {
        
        
 return redirect('/orders')->with('message_success','Order place successfull!');;
    
    }
    
    
    
            elseif($p_method=='Pay_Later')
    {
        
        
 return redirect('/orders')->with('message_success','Order place successfull! Please Pay within 72 hours');;
    
    }
    
    
    
    
     elseif($p_method=='Installment')
    {
        
        
 return redirect('/orders')->with('message_success','Order place successfull! ');;
    
    }
    
    
         else
    {
        
        
 return redirect('/orders')->with('message_success','Order place successfull! ');;
    
    }
    
    
    
        

      }
    }
























 public function due_paid($id,$total,$paid,$due){
 $id=$id;
 $total=$total;
 $paid=$paid;
 $due=$due;
           return view('products.due_paid',compact('id','total','paid','due'));

 }



 public function placeOrder3($resone, $card_type, $amount, $status, $bank_tran_id, $tran_id){
        $invoceno=Session::get('invoice_no');
        
        
        
     $resone=$resone;
        $card_type=$card_type;
        $amount=$amount;
        $status=$status;
        $bank_tran_id=$bank_tran_id;
        $tran_id=$tran_id;
        $tran_date=date('Y-d-m');
        
     /*   
        $insert="INSERT INTO pgw (resone, payment_method, amount, response_code, status, transaction_id, m_transaction_id, date,invoice_no)
        VALUES ('$resone', '$card_type', '$amount', '1', '$status', '$bank_tran_id', '$tran_id', '$tran_date', $invoceno)";*/
        
        
        
                    DB::table('pgw')->insert([
                          'resone'         => $resone,
                          'payment_method'         => $card_type,
                          'amount'         => $amount,
                          'response_code'         => 1,
                          'status'         => $status,
                          
                          

                          'transaction_id'          => $bank_tran_id,
                          
                          
                          
                          'm_transaction_id'          => $tran_id,
                          
                          
                          'date'   => $tran_date,
                          'invoice_no'          => $invoceno,
                     
                            ]);
                  
        
        
        
         return redirect('/orders')->with('message_success','Paid successfull!');;

        
        

}


 public function placeOrder2($id){


       $grand_total=Session::get('grand_total');
       $shipping_charge=Session::get('shipping_charge');
       
$discount_ss=Session::get('discount_ss');
$vat=Session::get('vat');
$coupon_num=Session::get('coupon_num');

if(!empty($discount_ss)){
    $discount_ss=$discount_ss;
}else{
    $discount_ss=0;
}



if(!empty($coupon_num)){
    $coupon_num=$coupon_num;
}else{
    $coupon_num="";
}

       
       
       $cus_dis=Session::get('cus_dis');
if(!empty($cus_dis)){
    $cus_dis=$cus_dis;
}else{
    $cus_dis=0;
}



     $affiliate_com=Session::get('my_aff_com');
if($affiliate_com > 0){
   $affiliate_comission=$affiliate_com-$cus_dis;
}else{
    $affiliate_comission=0;
}
   
        
        
        $total_discount_all=$cus_dis+$discount_ss;
       
       
       
       
       
       
       
       
       
                $pgtxid=$id;
                $cartProducts3333 = DB::table('pgw')->where(['transaction_id' => $id])->first();
                $pgt_amount= $cartProducts3333->amount;
                $pgt_status= $cartProducts3333->status2;
        
        
                 DB::table('pgw')->where(['transaction_id' => $id])->update([
          'status2'=>1
        ]);


  // print_r($pgt_status);
     
     
      if ($pgt_status < 1) {
        $user_id = Auth::user()->id;
        $user_email = Auth::user()->email;
        //echo "<pre>";print_r($user_email);die;
        
        
        
        
        $shippingdetails = DeliveryAddress::where(['user_id'=> $user_id])->first();
        //echo "<pre>";print_r($user_email);die;

        // if (empty(Session::get('countCode'))) {
        //   $couponCode ='';
        // }else {
        //   $couponCode = Session::get('countCode');
        // }
        // if (empty(Session::get('couponAmount'))) {
        //   $couponAmount = '';
        // }else{
        //   $couponAmount = Session::get('couponAmount');
        // }

        $order = new Order;
        $order->user_id       = $user_id;
        $order->user_mail    = 	$user_email;
        $order->name          = $shippingdetails->name;
        $order->city          = $shippingdetails->city;
        $order->address       = $shippingdetails->address;
        //$order->country = $shippingdetails->country;
        $order->mobile        = $shippingdetails->mobile;
        $order->coupon_code   = '';
        $order->coupon_amount = '';
        $order->extra3  = $vat;
        
                $order->extra10  = $affiliate_comission;

        
        $order->order_status  = "In Process";
        
        
        
        
                  $order->pay_amount = $pgt_amount;

        $order->shipping_charges= $shipping_charge;
        $order->payment_method= 'Get_way';
        $order->coupon_code= $coupon_num;
        $order->discount= $total_discount_all;

        
        if(!isset($pgtxid))
        {
            $order->pincode       ="";
        }
        else
        {
            $order->pincode       = $pgtxid;
        }
                

        
        
        
        $p_method='Get_way';
        
        $ssm=$shippingdetails->mobile;
        $ssn= $shippingdetails->name;
        
        $order->total         = $grand_total;

        
        
        
    





        $order->save();






                         Session::forget('coupon_dis');
                 Session::forget('coupon_type');
          Session::forget('coupon_num');
         Session::forget('discount_ss');
         
         
         Session::forget('cus_dis');
         Session::forget('my_aff_com');








        $order_id = DB::getPDO()->lastInsertId();
        //echo "<pre>";print_r($order_id);die;

      $session_id = Session::get('session_id');




        $cartProducts = DB::table('cart')->where(['session_id' => $session_id])->get();
        foreach ($cartProducts as $pro) {
          $cartpro = new OrdersProduct;
          //echo "<pre>";print_r($cartpro);die;
          $cartpro->order_id = $order_id;
          $cartpro->user_id = $user_id;
          $cartpro->product_id = $pro->product_id;
          $cartpro->product_code = $pro->product_code;
          $cartpro->product_name = $pro->product_name;
          $cartpro->prodect_color = $pro->product_color;
          $cartpro->product_size = $pro->size;
          $cartpro->product_price = $pro->price;
          $cartpro->product_qty = $pro->quantity;
          $cartpro->re_sale = $pro->re_sale;
          $cartpro->profit = $pro->profit;
          
          $cccttk=($pro->price*$pro->quantity)/100*$pro->cash_back;
          
                    $cartpro->cashback = $cccttk;

          
          
          $cartpro->save();
          
          
          
          //Stock Calculation  stat  
    if($pro->size > 0){
          @$previous_count=DB::table('products_attributes')
          ->where('product_id',$pro->product_id)
          ->where('sku',$pro->product_color)
          ->where('size',$pro->size)
          ->sum('stock');
          
          
          if($previous_count>0){
                        $ccc=$previous_count - $pro->quantity;

              
            DB::table('products_attributes')
            ->where('product_id',$pro->product_id)
            ->where('sku',$pro->product_color)
            ->where('size',$pro->size)            
            ->update([
                'stock'=>$ccc
                ]);
              
          }
    } 
       //Stock Calculation end       
          

          
          
          
          
          
          

        }
        Session::put('order_id' ,$order_id);
        Session::put('total' ,$grand_total);
        
        $tt_bill=$grand_total;
        
        
        
        
    //Send SMS4
    
    
           $adds6 = Banner::where('id', 32)->first();
           $urrl32= $adds6->image;
           
           
           $adds31 = Banner::where('id', 31)->first();
           $number31= $adds31->image;    
           
           
           $adds33 = Banner::where('id', 33)->first();
           $apiurl= $adds33->image;
           
           $adds34 = Banner::where('id', 34)->first();
           $apikey= $adds34->image;     
    
           $adds35 = Banner::where('id', 35)->first();
           $sender= $adds35->image;  
    
    $adds3510 = Banner::where('id', 10)->first();
           $email10= $adds3510->image; 
    
    
    
    
    
    
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$ssm", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"Dear $ssn, your bill no: $order_id, Amount: $tt_bill, Thanks, $urrl32"
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);
         
   
    

         
         
         
         
         
         
         
         
                 
                        
$url = "$apiurl?api_key=$apikey&type=text";
$smsdata = array(
'contacts' =>"$number31", //Here will be client's mobile number
'senderid' =>"$sender",
'msg' =>"$ssn Place a order No: $order_id, Amount: $tt_bill, Mobile: $ssm"
);
$ch = curl_init(); // Initialize cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($smsdata));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
curl_exec($ch);        
        
  //main Function
  
  
$to = "$user_email";
$subject = "Order Success ($urrl32)";
$message = '<div>
<html>
<head>
<title> Order Success ('.$urrl32.') </title>
</head>

<body>
<p>Dear '.$ssn.', <br>

your bill no: '.$order_id.', Amount: '.$tt_bill.'
<br>

<a href="https://'.$urrl32.'/invoice/'.$order_id.'/'.$tt_bill.'" style="color:white;padding:20px; border-radius:4px"> <img src="https://www.sure.com.bd/invoice_download.png"></a>

<br>

Thanks, <br/>
Sales Department,<br/>
<a href="https://'.$urrl32.'">'.$urrl32.'</a><br>
</body>
</html>
</div>'
;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: < '.$email10.' >' . "\r\n";

mail($to,$subject,$message,$headers);










 
$to = "$email10";
$subject = "Now Order ($urrl32)";
$message = '<div>
<html>
<head>
<title> Now Order ('.$urrl32.') </title>
</head>

<body>
<p>Dear '.$ssn.', <br>

$ssn Place a order No: '.$order_id.', Amount: '.$tt_bill.', Mobile: '.$ssm.'"<br>
<a href="https://'.$urrl32.'/invoice/'.$order_id.'/'.$tt_bill.'" style="color:white;padding:20px; border-radius:4px"> <img src="https://www.sure.com.bd/invoice_download.png"></a>

<br>

Thanks, <br/>
Support Department,<br/>
<a href="https://'.$urrl32.'">'.$urrl32.'</a><br>
</body>
</html>
</div>'
;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= 'From: < '.$email10.' >' . "\r\n";

mail($to,$subject,$message,$headers);








  
  
  //end mail funciton
  
  
  
  
  
  
  
  
  
  
        
//Session Product Quary
$session_id = Session::get('session_id');
DB::table('cart')->where('session_id',$session_id)->delete();


        
        
        
        
        
        
        
        
        
        
        
        
 return redirect('/orders')->with('message_success','Order place successfull!');;
    
    
        

      }
    }










    public function thanks(Request $request){

      $user_email = Auth::user()->email;
      DB::table('cart')->where('user_email',$user_email)->delete();
      return view('products.thanks');
    }

    public function orders(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $orders = Order::with('orders')->where('user_id', $user_id)->orderby('id', 'DESC')->get();
      // $orders = json_decode(json_encode($orders));
      // echo "<pre>"; print_r($orders);die;

      return view('orders.orders',compact('orders','categories'));
    }
    
    
    
    
    
      public function orders_res(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $orders = Order::with('orders')->where('user_id', $user_id)->orderby('id', 'DESC')->get();
      // $orders = json_decode(json_encode($orders));
      // echo "<pre>"; print_r($orders);die;

      return view('orders.orders_res',compact('orders','categories'));
    }
    
    
    
    
    
    
    
    
    
    
    
      public function invite(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $orders = Order::with('orders')->where('user_id', $user_id)->orderby('id', 'DESC')->get();
      // $orders = json_decode(json_encode($orders));
      // echo "<pre>"; print_r($orders);die;

      return view('orders.invite',compact('orders','categories'));
    }
    
     


    
    

    
    
    
    public function createinvoice(Request $request){

      $products = Product::orderby('id','DESC')->whereNull('shop_id')->where('category_id','<',99999)->get();
      
            foreach ($products as $key => $val) {
        $category_name = Category::where(['id' => $val->category_id])->first();
      }
      return view('admin.products.createinvoice',compact('products'));
    }

    
    
    
    
    
        
    public function createinvoice_qr(Request $request){
      $products = Product::orderby('id','DESC')->whereNull('shop_id')->where('category_id','<',99999)->get();
            foreach ($products as $key => $val) {
        $category_name = Category::where(['id' => $val->category_id])->first();
      }
      return view('admin.products.createinvoice_qr',compact('products'));
    }

    
    
    
    
    
            
    public function createinvoice_qrp(Request $request){
      return view('admin.products.createinvoice_qrp');
    }

    
    
    
    
    
    
    
    
        public function createinvoicedelete($id){
              $user_id = Auth::user()->id;
                          
                          
                $pppid=DB::table('orders_products')->where('id',$id)->first();
                $order_o=$pppid->user_id;
              
              if($user_id == $order_o){
            DB::table('orders_products')->where('id',$id)->delete();
              }

      return back();
    }

    
    
      public function createinvoice_user(){
      return view('admin.products.createinvoice_user');
    }
    
    
    
    
    
    
    
      public function t_histort(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $orders = Order::with('orders')->where('user_id', $user_id)->orderby('id', 'DESC')->get();
      // $orders = json_decode(json_encode($orders));
      // echo "<pre>"; print_r($orders);die;

      return view('orders.t_histort',compact('orders','categories'));
    }
    
    
    
    
    
    
    
    
     
      public function my_w_a(){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $orders = Order::with('orders')->where('user_id', $user_id)->orderby('id', 'DESC')->get();
      // $orders = json_decode(json_encode($orders));
      // echo "<pre>"; print_r($orders);die;

      return view('orders.my_w_a',compact('orders','categories'));
    }
    
    
    
    
    public function orderdetails($order_id){
      $categories = Category::with('categories')->where(['parent_id'=>0])->get();

      $user_id = Auth::user()->id;
      $orderDetails = Order::with('orders')->where('id', $user_id)->first();
      // $orderDetails = json_decode(json_encode($orderDetails));
      // echo "<pre>"; print_r($orderDetails);die;

      return view('orders.orderdetails',compact('orderDetails','categories'));
    }

    public function view_orders(){
     // $orders = Order::with('orders')->orderby('id','DESC')->get();
    //  echo "<pre>";print_r($orders);die;
      return view('admin.orders.view_orders');
    }
    
    
    
        public function view_quotation(){
      return view('admin.orders.view_quotation');
    }
    

    public function view_orders_details($order_id){
      $order_details = Order::with('orders')->where('id',$order_id)->first();
      $user_id = $order_details->user_id;
      $user_details = User::where('id', $user_id)->first();
      return view('admin.orders.view_orders_details')->With(compact('order_details','user_details'));
    }






    public function updateOrderStatus(Request $request){
    if($request->isMethod('post')){
        $data = $request->all();
                            $auth_user_id = Auth::user()->id;

        
        if(isset($data['order_status'])){
            
                    Order::where('id',$data['order_id'])->update(['order_status'=>$data['order_status']]);
       
       
       if(!empty($data['ship_note'])){
           $ship_note=$data['ship_note'];
       }else{
           $ship_note="";
       }
       
       
       
       
       if(!empty($data['order_status'])){
           
           if($data['order_status']=="In Process"){
               $numaric_status=1;
           }elseif($data['order_status']=="Confirm"){
                  $numaric_status=2;
           }
           
           elseif($data['order_status']=="Cancelled"){
                  $numaric_status=3;
           }
           
                    elseif($data['order_status']=="Shipped"){
                  $numaric_status=4;
           }  
           
          elseif($data['order_status']=="Delivered"){
                  $numaric_status=5;
           }       
           
       }
       
       
       
       
       
       
       
        
        DB::table('a444')->insert([
            'remark' => $data['order_status'],
            'extra1' => $auth_user_id,
            'extra2' => $numaric_status,
            'extra5' => $ship_note,
            'extra8' => $data['order_id'],
            ]);
        
        
        
        
if($data['order_status']=='Cancelled')
        {
            DB::table('orders_products')->where(['order_id'=>$data['order_id']])->update([
                'd_status'=>3,
                ]);
}
if($data['order_status']=='Shipped')
        {
            DB::table('orders_products')->where(['order_id'=>$data['order_id']])->update([
                'd_status'=>2,
                ]);
}


if($data['order_status']=='Confirm')
        {
            DB::table('orders_products')->where(['order_id'=>$data['order_id']])->update([
                'd_status'=>4,
                ]);
}




 }






		
        $cccbbb = DB::table('banners')->where(['id' => 73])->first();
        $cash_m_a=$cccbbb->image;
        
     
        $cccbbbb = DB::table('banners')->where(['id' => 74])->first();
        $cash_p=$cccbbbb->image;   
        
               $cccbbbb_on= DB::table('banners')->where(['id' => 1007])->first();
        $cash_b_on=$cccbbbb_on->image;   
         
        
        
        
        if(!empty($data['aamount'])){
            $date=date('d-M-Y');

            $amount=$data['aamount'];
                if($amount>0){
                    
                    if(empty($data['remark1']))
                     {
                        $remark1="";
                    }
                    else{
                              $remark1=$data['remark1'];
                    }
                    
                    
                    
                   if(empty($data['remark2']))
                     {
                        $remark2="";
                    }
                    else{
                              $remark2=$data['remark2'];
                    }
                               
                    
                    
                    
                    
                     if(empty($data['bank_name']))
                     {
                        $bank_name="";
                    }
                    else{
                              $bank_name=$data['bank_name'];
                    }
                    
                    
                    
                    $auth_user_id = Auth::user()->id;

                     DB::table('pgw')->insert([
                          'invoice_no'         => $data['order_id'],
                          'amount'          => $amount,
                          'payment_method'  => $data['Payment_Method'],
                          'm_transaction_id'   =>"",
                          'transaction_id'   => "",
                          'resone'   => "",
                          'response_code'   => "",
                          'status'   => "",
                          'response_code'   => "",
                          'extra5'   =>$remark1,
                          'extra7'   =>$remark2,
                          'extra6'   =>$bank_name,
                          'extra1'   =>$auth_user_id,
                          
                          
                          
                          'date'          => $date,
                     
                            ]);
                    
                }
            
            
        }
        
        
        
        
        
        
        
        if(isset($data['order_status'])){
        if($data['order_status']=='Delivered')
        {
            
            
            DB::table('orders_products')->where(['order_id'=>$data['order_id']])->update([
                'd_status'=>1,
                ]);
            
                   $b_user=$data['user_id'];
                   $invoice_amount=DB::table('orders')->where(['id'=>$data['order_id']])->first();
                   
                   $amount_total=$invoice_amount->total;
                   $amount_delivery=$invoice_amount->shipping_charges;
                   $ccccPstatus=$invoice_amount->order_status;
                   $own_id_comission=$invoice_amount->extra10;
                   
                   $amount_j=$amount_total - $amount_delivery;
                
                //lavel-1
                $uuuuuuuu = DB::table('users')->where(['id'=>$b_user])->first();
                $f_pu_line=$uuuuuuuu->ref_upline;
                
                
                
                $uuuuuuuu2 = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $uuuuuuuu2_count = DB::table('users')->where(['id'=>$f_pu_line])->count();
                if($uuuuuuuu2_count > 0){
                @$affiliate_com1=$uuuuuuuu2->affiliate_com;

                }else{
                                        $affiliate_com1=0;

                }
                
                
                
                
                //Affiliate_2       is general affiliate off.       
                if($own_id_comission > 0) {
                $affiliate_com1=0;
                }             
                              
                              
                              
                              
                                 
                                

if($affiliate_com1>0){
                
                if($f_pu_line>0){
                    
                $rc12=$amount_j/100*$affiliate_com1;
                DB::table('ac_main')->insert([
                          'user_id'         => $f_pu_line,
                          'amount'          => $rc12,
                          'remark'          => "Spot Commission",
                          'sender_number'   => $b_user,
                          'status'          => 1,
                     
                            ]);
                  
                   
                
                }
                
                
                
                
                
                
                
/*                    $rc12=$amount_j/100*4;
                    DB::table('ac_main')->insert([
                          'user_id'         => $f_pu_line,
                          'amount'          => $rc12,
                          'remark'          => "Commission (1 L)",
                          'sender_number'   => $b_user,
                          'status'          => 1,
                     
                            ]);
                  */
                   
                
                }
                
           
           
           
           
           
           
           
           
                     //Affiliate Create
                     //Fild 1002 is 1 = (2 level affiliate)
                     //Fild 1002 is 2 = (Individual Affilate Comission *Paid Package)

                     
         $affi=DB::table('banners')->where('id',1002)->first();
         if($affi->image == 1){
             DB::table('users')->where('id',$b_user)->update([
                 'affiliate_com'=>12,
                 ]);
                 
                 
                 
                 
                 
                 //2Lavel
                $uuuuuuuu = DB::table('users')->where(['id'=>$f_pu_line])->first();
                $f_pu_line=$uuuuuuuu->ref_upline;
                
                

                if($f_pu_line>0){
                $rc12=$amount_j/100*2;
                


                DB::table('ac_main')->insert([
                      'user_id'         => $f_pu_line,
                      'amount'          => $rc12,
                      'remark'          => "Commission (2 L)",
                      'sender_number'   => $b_user,
                      'status'          => 1,
                 
                        ]);
             
               
                   
                
                }
                
                
                
                
                
                 
                 
                 
                 
         }
         
            
            
      
           
           
           
                   $affi=DB::table('banners')->where('id',1002)->first();
         if($affi->image == 2){
             
             if($own_id_comission >0){
               DB::table('ac_main')->insert([
                      'user_id'         => $b_user,
                      'amount'          => $own_id_comission,
                      'remark'          => "Commission",
                      'sender_number'   => $b_user,
                      'status'          => 1,
                 
                        ]);
             
         } }
           
           
            //Affiliate End
             
           
           
                
                
                
}






                
              
                
                
                

                
                
                
                
                
                
                
                
                
                
         
         
  if($cash_b_on>0){          
    if($cash_m_a>0){    
         
         if($amount_j>=$cash_m_a){
                
                $rc123=$amount_j/100*$cash_p;


                    DB::table('ac_shop')->insert([
                          'user_id'         => $b_user,
                          'amount'          => $rc123,
                          'remark'          => "Cash Back Commission",
                          'sender_number'   => $b_user,
                          'status'          => 1,
                     
                            ]);
                  
                   
                
                }
                
         
         
    }
  }
         
         
         $cash_back_amount=DB::table('orders_products')->where(['order_id'=>$data['order_id']])->get()->sum("cashback");
           if($cash_back_amount > 0 ){
                

                    DB::table('ac_shop')->insert([
                          'user_id'         => $b_user,
                          'amount'          => $cash_back_amount,
                          'remark'          => "Cash Back Commission",
                          'sender_number'   => $b_user,
                          'status'          => 1,
                     
                            ]);
                  
                   
                
                }
         
         
         
         
         
         
         
         
         
                
                
                
        }}
        
        
        
        
        
        
        
        
        
        
        
        return redirect()->back()->with('message_success','Order Status has been updated successfully!');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
