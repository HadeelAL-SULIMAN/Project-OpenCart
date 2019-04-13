<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
	public function AdminAuthCheck()
    {
      $admin_id=Session::get('admin_id');
      
      if ($admin_id) {
         return;
      }else{
         return Redirect::to('/admin')->send();
      }
    }
    public function index()
    {
    	 $this->AdminAuthCheck();
    	return view('admin.add_product');
    }

     public function save_product(Request $request)
   	{
      	$data=array();
        $data['product_name']=$request->product_name;
        $data['category']=$request->category;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $image=$request->file('prodcut-image');
    	if ($image) {
	       $image_name=str_random(20);
	       $ext=strtolower($image->getClientOriginalExtension());
	       $image_full_name=$image_name.'.'.$ext;
	       $upload_path='image/';
	       $image_url=$upload_path.$image_full_name;
	       $success=$image->move($upload_path,$image_full_name);
	       if ($success) {
	         $data['slug']=$image_url;
	            DB::table('tbl_products')->insert($data);
	            Session::put('message','Product added successfully!!');
	            return Redirect::to('/add-product');
        	}
    	}
    		$data['product_image']='';
            DB::table('tbl_products')->insert($data);
            Session::put('message','product added successfully without image!!');
            return Redirect::to('/add-product');
   	}
   	public function all_product()
	  {
       $all_product_info=DB::table('tbl_products')
                     ->select('tbl_products.*')
                     ->get();
       	return view('admin.all_product')
               ->with('all_product_info',$all_product_info);
                              
	 }
    
}
