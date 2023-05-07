<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use App\User;
use DB;


class CouponController extends Controller
{
    public function addCoupon(Request $request){
      if ($request->isMethod('post')) {
        $data = $request->all();
        $coupon =new Coupon;

        $coupon->coupon_code = $data['coupon_code'];
        $coupon->amount = $data['amount'];
        $coupon->amount_type = $data['amount_type'];
        $coupon->expiry_date = $data['expiry_date'];
        if (empty($data['status'])) {
          $status = 0;
        }else{
          $status = 1;
        }
        $coupon->status = $status;
        $coupon->save();

        return back()->with('message_success','Coupon added Successfully');
      }
      return view('admin.coupons.add_coupon');
    }

    public function editCoupon(Request $request,$id){
      $all_coupon = Coupon::where('id',$id)->first();

      if ($request->isMethod('post')) {
        $data = $request->all();
        if (empty($data['status'])) {
          $status = 0;
        }else{
          $status = 1;
        }

        Coupon::where('id',$id)->update([
          'coupon_code' => $data['coupon_code'],
          'amount' => $data['amount'],
          'amount_type' => $data['amount_type'],
          'expiry_date' => $data['expiry_date'],
          'status' => $status
        ]);
        return back()->with('message_success','Update category successfully');
      }

      return view('admin.coupons.edit_coupon',compact('all_coupon'));
    }



/*    public function viewCoupon(Request $request){
      $coupons = Coupon::get();
      return view('admin.coupons.view_coupon',compact('coupons'));
    }
*/

    public function viewCoupon(){

      
            $coupons=DB::table('users')->whereNull('rank')->where('id','>',10)->get();
            

      return view('admin.coupons.view_coupon',compact('coupons'));
    }
    
    
        
    public function viewCouponn(){

      
            $coupons=DB::table('news')->orderby('id','DESE')->get();
            

      return view('admin.coupons.view_couponn',compact('coupons'));
    }
    
    
    public function viewCouponm(){

      
            $coupons=DB::table('shops')->orderby('id','DESE')->get();
            

      return view('admin.coupons.view_couponm',compact('coupons'));
    }
    
    
    
      public function viewCoupon2(){
      $coupons = Coupon::orderby('id','DESC')->get();
      return view('admin.coupons.view_coupon2',compact('coupons'));
    }   
    
    
    
      public function viewCoupon3($id){
      $coupons = Coupon::where('id',$id)->get();
      return view('admin.coupons.view_coupon3',compact('coupons'));
    }   
    




      public function viewCoupon7(){
      return view('admin.coupons.view_coupon7');
    }   
    
    






    public function deleteCoupon($id){
      if(!empty($id)){
        Coupon::where('id',$id)->delete();
        return back()->with('message_success','Coupon deleted successfully');
      }
    }
}
