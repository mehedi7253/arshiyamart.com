<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Category;
use Image;
use DB;


//upto table a444 used


class CategoryController extends Controller
{
  


 public function add_category3_affi(Request $request){
      if ($request->isMethod('post')) {
       
        $data = $request->all();

DB::table('a222')->insert([
          
            'remark'      => $data['rank_name'],
            'extra1'    => $data['extra1'],
            'extra2'    => $data['extra2'],
            'extra5'    => $data['extra5'],
            'extra3'    => $data['extra3'],
        ]);

        
        
        
        
        return redirect('/admin/view-categories3_affi')->with('message_success','Affiliate Rank added successfully');
      }
      $lavels =DB::table('a222')->get();

      return View('admin.categories.add_category3_affi',compact('lavels'));
    }


      public function edit_category3_affi(Request $request , $id){
      if($request->isMethod('post')){
          
           $data = $request->all();
        DB::table('a222')->where('id', $id)->update([
 
          
          
          
            'remark'      => $data['rank_name'],
            'extra1'    => $data['extra1'],
            'extra2'    => $data['extra2'],
            'extra5'    => $data['extra5'],
            'extra3'    => $data['extra3'],
   
          
          
          
          
        ]);
        
        
        return back()->with('message_success','Update Rank successfully');
      };
      $categories = DB::table('a222')->where(['id'=> $id])->first();
      $lavels =DB::table('a222')->get();
      return view('admin.categories.edit_category3_affi' ,compact('categories','lavels'));
    }



public function delete_category3_affi($id){
      if(!empty($id)){
        DB::table('a222')->where('id',$id)->delete();
        return back()->with('message_success','Rank deleted successfully');
      }
    }
    
    


    
    
    public function view_category3_affi(){
    
       DB::table('a222')->whereNull('extra5')->delete();

      $categories =DB::table('a222')->orderby('id',"ASC")->get();
      return view('admin.categories.view_category3_affi' , compact('categories'));
    }
      
    
    
    
    
    
    
    
//Add Bank

 public function add_feature1(Request $request){
      if ($request->isMethod('post')) {
       
        $data = $request->all();

DB::table('a333')->insert([
          
            'remark'     => $data['remark'],
            'extra8'    => $data['extra8'],
            'extra3'    => $data['extra3'],
            'extra5'    => $data['extra5'],
        ]);

        
        
        
        
        return back()->with('message_success','Bank added successfully');
      }
      $lavels =DB::table('a333')->get();

      return View('admin.categories.add_feature1',compact('lavels'));
    }


      public function edit_feature1(Request $request , $id){
      if($request->isMethod('post')){
          
           $data = $request->all();
        DB::table('a333')->where('id', $id)->update([
 
          
            'remark'      => $data['remark'],

            'extra5'    => $data['extra5'],
            'extra3'    => $data['extra3'],
            'extra8'    => $data['extra8'],
   
          
          
          
          
        ]);
        
        
        return back()->with('message_success','Update Bank successfully');
      };
      $categories = DB::table('a333')->where(['id'=> $id])->first();
      $lavels =DB::table('a333')->get();
      return view('admin.categories.edit_feature1' ,compact('categories','lavels'));
    }



public function delete_feature1($id){
      if(!empty($id)){
        DB::table('a333')->where('id',$id)->delete();
        return back()->with('message_success','Bank deleted successfully');
      }
    }
    
    


    
    
    public function view_feature1(){
      $categories =DB::table('a333')->get();
      return view('admin.categories.view_feature1' , compact('feature1'));
    }
      
    
//end Bank
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function add_category(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

        if (empty($data['status'])) {
          $status =0;
        }else {
          $status = 1;
        }

        //echo "<pre>" ; print_r($data) ; die;
        $category = new Category;
        $category->name = $data['cat_name'];
        $category->parent_id = $data['parent_id'];
        $category->description = $data['cat_name'];
        $category->url = $data['url'];
        $category->status = 1;
        $category->save();
        return redirect('/admin/view-categories')->with('message_success','Category added successfully');
      }
      $lavels = Category::where('parent_id' , 0)->get();

      return View('admin.categories.add_category',compact('lavels'));
    }







    public function add_categoryc(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

     
     
     
      DB::table('child_category')->insert([
          'main_id'      => $data['main_id'],
          'sub_id'    => $data['sub_id'],
          'name'    => $data['name'],
     
        ]);
      

        return redirect('/admin/add-categoryc')->with('message_success','Category added successfully');
      }

      return View('admin.categories.add_categoryc');
    }








public function add_fund_a(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

     $admin=DB::table('users')->where('id',1)->first();
     
     
  if($data['pin'] == $admin->nid){
      
      
      
     if($data['fund_type'] == 1){
      
      
       DB::table('ac_main')->insert([
                           'user_id'         => $data['id'],
                          'amount'          => $data['amount'],
                          'remark'          => "",
                          'sender_number'   => "",
                          'status'          => 2,
      
       ]);
     }
     
     
         
      if($data['fund_type'] == 2){
      
       DB::table('ac_shop')->insert([
                           'user_id'         => $data['id'],
                          'amount'          => $data['amount'],
                          'remark'          => "",
                          'sender_number'   => "",
                          'status'          => 2,
      
       ]);
      }
     
     
      
      
  }
  else{
       return back()->with('message_success2','Wrong PIN');
    }
    
    
    
  }

      
      
      
      
      

        return back()->with('message_success','Add Fund successfully');
    }








































 public function add_coupon(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
        
          $count=DB::table('cupon_code')->where('code',$data['coupon_code'])->count();
        if($count>0){
              return back()->with('message_err','Already Use this number, Please try Another Code');
        }
        else{
        
         DB::table('cupon_code')->insert([
          'code'      => $data['coupon_code'],
          'valide_date'    => $data['expiry_date'],
          'commission'    => $data['amount'],
          'type'    => $data['amount_type'],
          'minimum_shop'    => $data['minimum_shop'],
          'status'    =>1,

     
        ]);
        
          return back()->with('message_success','Coupon Created successfully');
      }
      
        
}
     
      return View('admin.categories.add_coupon');
 }










     public function cuonedit(Request $request , $id){
      if($request->isMethod('post')){
        $data = $request->all();
        
        

        if(empty($data['enable'])){
            $status=2;
        }
        else{
          $status=1;  
        }
        
        

        DB::table('cupon_code')->where('id', $id)->update([
          'code' => $data['code'],
          'valide_date' => $data['valide_date'],
          'commission' => $data['commission'],
          'type' => $data['amount_type'],
          'minimum_shop' => $data['minimum_shop'],
          'status' => $status,
      
          
        ]);
        return back()->with('message_success','Update Coupon successfully');
      };
      $categories = DB::table('cupon_code')->where(['id'=> $id])->first();
      return view('admin.categories.cuonedit' ,compact('categories'));
    }







 public function view_coupon(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
}
     
      return View('admin.categories.view_coupon');
 }





 public function view_request(Request $request){
  
      return View('admin.categories.view_request');
 }



 
 
 


 public function add_category2(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

        if (empty($data['status'])) {
          $status =0;
        }else {
          $status = 1;
        }


DB::table('brands')->insert([
          'name'      => $data['cat_name'],
          'parent_id'    => $data['parent_id'],
          'description'    => $data['cat_name'],
          'url'   => $data['cat_name'],
          'status'           => $status
          
        ]);

        
        
        
        
        return redirect('/admin/view-categories2')->with('message_success','Brand added successfully');
      }
      $lavels =DB::table('brands')->where('parent_id' , 0)->get();

      return View('admin.categories.add_category2',compact('lavels'));
    }











 public function add_category2s(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

        if (empty($data['status'])) {
          $status =0;
        }else {
          $status = 1;
        }


DB::table('brands5')->insert([
          'name'      => $data['cat_name'],
          'parent_id'    => $data['phone'],
          'description'    => $data['address'],
          'url'   => $data['cat_name'],
          'status'           => $status
          
        ]);

        
        
        
        
        return redirect('/admin/view-categories2s')->with('message_success','Supplier added successfully');
      }
      $lavels =DB::table('brands5')->where('parent_id' , 0)->get();

      return View('admin.categories.add_category2s',compact('lavels'));
    }
















 public function add_category3(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

        if (empty($data['status'])) {
          $status =0;
        }else {
          $status = 1;
        }


DB::table('brands3')->insert([
          'name'      => $data['cat_name'],
          'parent_id'    => $data['parent_id'],
          'description'    => $data['cat_name'],
          'url'   => $data['cat_name'],
          'status'           => $status
          
        ]);

        
        
        
        
        return redirect('/admin/view-categories3')->with('message_success','Color added successfully');
      }
      $lavels =DB::table('brands3')->where('parent_id' , 0)->get();

      return View('admin.categories.add_category3',compact('lavels'));
    }


















 public function add_category3_ins(Request $request){
      if ($request->isMethod('post')) {
       
        $data = $request->all();

DB::table('rank_promotion2')->insert([
          'monthly_value'      => $data['monthly_value'],
          'comission'    => $data['comission'],
          'comission2'    => $data['comission2'],
          'rank_name'    => $data['rank'],
          'extra5'    => $data['comission3'],
          'extra3'    => $data['comission4'],
          'extra1'    => $data['comission5'],
        ]);

        
        
        
        
        return redirect('/admin/view-categories3_ins')->with('message_success','Color added successfully');
      }
      $lavels =DB::table('rank_promotion2')->get();

      return View('admin.categories.add_category3_ins',compact('lavels'));
    }












 public function add_category3_mont(Request $request){
      if ($request->isMethod('post')) {
       
        $data = $request->all();

DB::table('rank_promotion')->insert([
          'rank_name'      => $data['rank_name'],
          'extra8'    => $data['extra8'],
          'extra9'    => $data['extra9'],
          'extra5'    => $data['extra5'],
          'extra6'    => $data['extra6'],
          'extra7'    => $data['extra7'],
          'extra13'    => $data['extra13'],
        ]);

        
        
        
        
        return redirect('/admin/view-categories3_mont')->with('message_success','Circular added successfully');
      }
      $lavels =DB::table('rank_promotion')->get();

      return View('admin.categories.add_category3_mont',compact('lavels'));
    }

































 public function add_category4(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

        if (empty($data['status'])) {
          $status =0;
        }else {
          $status = 1;
        }


DB::table('brands4')->insert([
          'name'      => $data['cat_name'],
          'parent_id'    => $data['parent_id'],
          'description'    => $data['cat_name'],
          'url'   => $data['cat_name'],
          'status'           => $status
          
        ]);

        
        
        
        
        return redirect('/admin/view-categories4')->with('message_success','Size added successfully');
      }
      $lavels =DB::table('brands4')->where('parent_id' , 0)->get();

      return View('admin.categories.add_category4',compact('lavels'));
    }



    public function view_stock(){
      return view('admin.stock' , compact('stock'));
    }


    public function view_report(){
      return view('admin.report' , compact('report'));
    }


    public function view_category(){
      $categories = Category::orderby('parent_id','ASC')->get();
      return view('admin.categories.view_category' , compact('categories'));
    }


    public function view_category2(){
      $categories =DB::table('brands')->get();
      return view('admin.categories.view_category2' , compact('categories'));
    }


    public function view_category2s(){
      $categories =DB::table('brands5')->get();
      return view('admin.categories.view_category2s' , compact('categories'));
    }






    public function view_category3(){
      $categories =DB::table('brands3')->get();
      return view('admin.categories.view_category3' , compact('categories'));
    }
    
    
  
    public function view_category3_ins(){
      $categories =DB::table('rank_promotion2')->get();
      return view('admin.categories.view_category3_ins' , compact('categories'));
    }
      
    
    
    
    public function view_category3_mont(){
      $categories =DB::table('rank_promotion')->get();
      return view('admin.categories.view_category3_mont' , compact('categories'));
    }
    
    
    


    public function view_category4(){
      $categories =DB::table('brands4')->get();
      return view('admin.categories.view_category4' , compact('categories'));
    }


    public function edit_category(Request $request , $id){
      if($request->isMethod('post')){
        $data = $request->all();
        if (empty($data['enable'])) {
          $status = 0;
        }else{
          $status = 1;
        }
        
        if (empty($data['top'])) {
          $top = 0;
        }else{
          $top= 1;
        }
        
        
        
              if (isset($data['filter'])) {
          $filter =1;
        }else{
          $filter= 0;
        }  
        
        
        
              if (empty($data['oc'])) {
          $oc = "";
        }else{
          $oc= $data['oc'];
        }
          
        
         if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
              
              if($filter > 0){
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,9999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/category_icon/'.$filename;

            Image::make($image)->resize(100,100)->save($large_image_path);
              }
              else{
                              $extension = $image->getClientOriginalExtension();

                  $image = $request->file('image');
            $filename  = rand(111,9999999999).'.'.$extension;

$extension = $image->getClientOriginalExtension();
         // $name   = rand(111,9999999999).'.'.$extension;

                $destinationPath ='assets/admin/img/category_icon/';
                $imagePath = $destinationPath. "/".  $filename;
                $image->move($destinationPath, $filename);

              }


          }
        }else {
          $filename = $data['p_image'];
        }
        
        
        
        
        
        
        
        
         if ($request->hasFile('image2')) {
          $image2 = Input::file('image2');
          if ($image2->isValid()) {
            $extension2 = $image2->getClientOriginalExtension();
            $filename2  = rand(111,9999999999).'.'.$extension2;
            $large_image_path2 ='assets/admin/img/category_icon/'.$filename2;

            Image::make($image2)->resize(1150,200)->save($large_image_path2);

          }
        }else {
          $filename2 = $data['p_image2'];
        }
        
        
        
         
        
        
        
        
        

        Category::where('id', $id)->update([
          'name' => $data['cat_name'],
          'description' => $data['description'],
          
          
          'url' => $data['url'],
          'top' => $top,
          'img' => $filename,
          'b_img' => $filename2,
          'o_c' => $oc,

          'status' => $status
        ]);
        return back()->with('message_success','Update category successfully');
      };
      $categories = Category::where(['id'=> $id])->first();
      $lavels = Category::where('parent_id' , 0)->get();
      return view('admin.categories.edit_category' ,compact('categories','lavels'));
    }





















    public function edit_category2(Request $request , $id){
      if($request->isMethod('post')){
        $data = $request->all();
        if (empty($data['enable'])) {
          $status = 0;
        }else{
          $status = 1;
        }
        
        if (empty($data['top'])) {
          $top = 0;
        }else{
          $top= 1;
        }
        
        
         if ($request->hasFile('image')) {
          $image = Input::file('image');
          if ($image->isValid()) {
            $extension = $image->getClientOriginalExtension();
            $filename  = rand(111,9999999999).'.'.$extension;
            $large_image_path ='assets/admin/img/category_icon/'.$filename;

            Image::make($image)->resize(100,100)->save($large_image_path);

          }
        }else {
          $filename = $data['p_image'];
        }
        
        
        
        
        
        
        
        
         if ($request->hasFile('image2')) {
          $image2 = Input::file('image2');
          if ($image2->isValid()) {
            $extension2 = $image2->getClientOriginalExtension();
            $filename2  = rand(111,9999999999).'.'.$extension2;
            $large_image_path2 ='assets/admin/img/category_icon/'.$filename2;

            Image::make($image2)->resize(1150,200)->save($large_image_path2);

          }
        }else {
          $filename2 = $data['p_image2'];
        }
        
        
        
        
        
        
        
        
        

        DB::table('brands')->where('id', $id)->update([
          'name' => $data['cat_name'],
          'description' => $data['cat_name'],
          
          
          'url' => $data['cat_name'],
          'top' => $top,
          'img' => $filename,
          'b_img' => $filename2,

          'status' => $status
        ]);
        return back()->with('message_success','Update Brands successfully');
      };
      $categories = DB::table('brands')->where(['id'=> $id])->first();
      $lavels =DB::table('brands')->where('parent_id' , 0)->get();
      return view('admin.categories.edit_category2' ,compact('categories','lavels'));
    }

















    public function edit_category2s(Request $request , $id){
      if($request->isMethod('post')){
        $data = $request->all();
        if (empty($data['enable'])) {
          $status = 0;
        }else{
          $status = 1;
        }
        
        if (empty($data['top'])) {
          $top = 0;
        }else{
          $top= 1;
        }
        
        

        
        
        
        
        

        
        
        
        
        
        

        DB::table('brands5')->where('id', $id)->update([
          'name' => $data['cat_name'],
          'parent_id' => $data['parent_id'],
          'description' => $data['description'],
          
          
 
          'status' => $status
        ]);
        return back()->with('message_success','Update Supplier successfully');
      };
      $categories = DB::table('brands5')->where(['id'=> $id])->first();
      $lavels =DB::table('brands5')->where('parent_id' , 0)->get();
      return view('admin.categories.edit_category2s' ,compact('categories','lavels'));
    }
















    public function edit_category3(Request $request , $id){
      if($request->isMethod('post')){
        $data = $request->all();
        if (empty($data['enable'])) {
          $status = 0;
        }else{
          $status = 1;
        }
        
        if (empty($data['top'])) {
          $top = 0;
        }else{
          $top= 1;
        }
        

        
        
        
        
        
        
        

        DB::table('brands3')->where('id', $id)->update([
          'name' => $data['cat_name'],
          'description' => $data['cat_name'],
          
          

          'status' => $status
        ]);
        return back()->with('message_success','Update Color successfully');
      };
      $categories = DB::table('brands3')->where(['id'=> $id])->first();
      $lavels =DB::table('brands3')->where('parent_id' , 0)->get();
      return view('admin.categories.edit_category3' ,compact('categories','lavels'));
    }













    public function edit_category3_ins(Request $request , $id){
      if($request->isMethod('post')){
                  $data = $request->all();

        DB::table('rank_promotion2')->where('id', $id)->update([
          'monthly_value' => $data['monthly_value'],
          'comission' => $data['comission'],
          'comission2' => $data['comission2'],
          'rank_name' => $data['rank'],
          'extra5'    => $data['comission3'],
          'extra3'    => $data['comission4'],
          'extra1'    => $data['comission5'],
          
          
          
        ]);
        return back()->with('message_success','Update Rank successfully');
      };
      $categories = DB::table('rank_promotion2')->where(['id'=> $id])->first();
      $lavels =DB::table('rank_promotion2')->get();
      return view('admin.categories.edit_category3_ins' ,compact('categories','lavels'));
    }





    public function edit_category3_mont(Request $request , $id){
      if($request->isMethod('post')){
          
           $data = $request->all();
        DB::table('rank_promotion')->where('id', $id)->update([
 
          
          
          
        'rank_name'      => $data['rank_name'],
          'extra8'    => $data['extra8'],
          'extra9'    => $data['extra9'],
          'extra5'    => $data['extra5'],
          'extra6'    => $data['extra6'],
          'extra7'    => $data['extra7'],
          'extra13'    => $data['extra13']
          
          
          
          
        ]);
        
        
        return back()->with('message_success','Update Rank successfully');
      };
      $categories = DB::table('rank_promotion')->where(['id'=> $id])->first();
      $lavels =DB::table('rank_promotion')->get();
      return view('admin.categories.edit_category3_mont' ,compact('categories','lavels'));
    }
















    public function edit_category4(Request $request , $id){
      if($request->isMethod('post')){
        $data = $request->all();
        if (empty($data['enable'])) {
          $status = 0;
        }else{
          $status = 1;
        }
        
        if (empty($data['top'])) {
          $top = 0;
        }else{
          $top= 1;
        }
        

        
        
        
        
        
        
        

        DB::table('brands4')->where('id', $id)->update([
          'name' => $data['cat_name'],
          'description' => $data['cat_name'],
          
          

          'status' => $status
        ]);
        return back()->with('message_success','Update Color successfully');
      };
      $categories = DB::table('brands4')->where(['id'=> $id])->first();
      $lavels =DB::table('brands4')->where('parent_id' , 0)->get();
      return view('admin.categories.edit_category4' ,compact('categories','lavels'));
    }


































   public function delete_category($id){
      if(!empty($id)){
        Category::where('id',$id)->delete();
        return back()->with('message_success','Category deleted successfully');
      }
    }
    




    public function delete_category2($id){
      if(!empty($id)){
        DB::table('brands')->where('id',$id)->delete();
        return back()->with('message_success','Brand deleted successfully');
      }
    }
    
    
    
    
        public function delete_category2s($id){
      if(!empty($id)){
        DB::table('brands5')->where('id',$id)->delete();
        return back()->with('message_success','Supplier deleted successfully');
      }
    }
    
    
    
    
    
    
    
    
    
    
        public function delete_category3($id){
      if(!empty($id)){
        DB::table('brands3')->where('id',$id)->delete();
        return back()->with('message_success','Color deleted successfully');
      }
    }
    
    
            public function delete_category3_ins($id){
      if(!empty($id)){
        DB::table('rank_promotion2')->where('id',$id)->delete();
        return back()->with('message_success','Rank deleted successfully');
      }
    }
    
    
            public function delete_category3_mont($id){
      if(!empty($id)){
        DB::table('rank_promotion')->where('id',$id)->delete();
        return back()->with('message_success','Rank deleted successfully');
      }
    }
    
    
    
    
    
    
        
        public function delete_category4($id){
      if(!empty($id)){
        DB::table('brands4')->where('id',$id)->delete();
        return back()->with('message_success','Size deleted successfully');
      }
    }
    
    
    
    
    
    
    
}
