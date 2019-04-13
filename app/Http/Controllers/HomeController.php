<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function AdminAuthCheck()
    {
      $customer_id=Session::get('$customer_id');
      
      if ($customer_id) {
         return;
      }else{
         return Redirect::to('/admin')->send();
      }
    } 
    public function index()
  	{

  		 $all_product_info=DB::table('tbl_products')
                     ->select('tbl_products.*')
                     ->get();
         return view('layout')
               ->with('all_product_info',$all_product_info);
  		
  	}
  	public function view_product($product_id)
    {
       
       $product_info=DB::table('tbl_products')
                 ->select('tbl_products.*')
                 ->where('id',$product_id)
                 ->first();

       return view('view_product')
               ->with('product_info',$product_info); 
        
    }
  	
}
