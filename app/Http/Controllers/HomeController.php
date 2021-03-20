<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use DB;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $data['product'] = DB::table('product_users')->count();
        return view('user-master.dashboard',$data);
    }

     public function adminHome()
    {
        $data['berita'] = DB::table('beritas')->count();
        $data['user'] = DB::table('users')->count();
        $data['contact'] = DB::table('contacts')->count();
        $data['product'] = DB::table('product_users')->count();
        return view('admin-master.dashboard',$data);
    }
   
}
