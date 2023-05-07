<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
Use DB;

class BannersController extends Controller
{
    public function addBanner(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();

        $banners = new Banner;

        if ($request->hasFile('image')) {
                $image = $request->file('image');

                $name = $image->getClientOriginalName();
                $destinationPath ='assets/admin/img/banners/';
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                $banners->image = $name;
        }else {
          $banners->image = '';
        }


        $banners->title = $data['title'];
        $banners->link = $data['b_link'];
        if (!empty($data['status'])) {
          $status = 1;
        }else{
          $status = 0;
        }
        $banners->status = $status;


        $banners->save();

        return back()->with('message_success','Banner added');
       }
      return view('admin.banners.add_banner');
    }

    public function viewBanner(){
      $banners = Banner::limit(50)
      ->where('id','<', 500)
      ->get();
      return view('admin.banners.view_banner',compact('banners'));
    }






    public function editBanner(Request $request ,$id){
      if ($request->isMethod('post')) {




$old_img=DB::table('banners')->where('id',$id)->first();


        $data = $request->all();

        if (empty($data['title'])) {
          $title = '';
        }else {
          $title = $data['title'];
        }

        if (empty($data['b_link'])) {
          $link = '';
        }else {
          $link = $data['b_link'];
        }



        if ($request->hasFile('image')) {
            
            
            

                    if(!empty($old_img->image)){
                      $path ='assets/admin/img/banners/'.$old_img->image;
                      if (file_exists($path)) {
                          unlink($path);
                      }
                      
                      
                    }
            
            
                $image = $request->file('image');

$unique=uniqid();

                $name =$unique.$image->getClientOriginalName();
                $destinationPath ='assets/admin/img/banners/';
                $imagePath = $destinationPath. "/".  $name;
                $image->move($destinationPath, $name);
                // $banners->image = $name;
                
                
        }else if (!empty($data['current_image'])) {
          $name = $data['current_image'];
        }
        else {
          $name = '';
        }
        
        
        Banner::where('id', $id)->update([
          'title' => $title,
          'link' => $link,
          'image' => $name
        ]);
        
        
                      

              
        
        
        return redirect()->back()->with('message_success','Banner has been edited Successfully');
      }

      $e_banners = Banner::where('id',$id)->get();
      return view('admin.banners.edit_banner',compact('e_banners'));
    }



    public function deleteBanner($id){
      Banner::where('id',$id)->delete();
      return back()->with('message_success', 'Banner has been deleted');
    }
}
