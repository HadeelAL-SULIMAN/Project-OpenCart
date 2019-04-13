<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SuperAdminController extends Controller
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
        $all_product_info=DB::table('tbl_products')
                     ->select('tbl_products.*')
                     ->get();
         return view('admin_layout')
               ->with('all_product_info',$all_product_info);
  
    }
     public function logout()
    {
    	
    	Session::flush();
    	return Redirect::to('/admin');
    }
     
}
