<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Product_user;
use DB;
use App\Berita;
class DashboardController extends Controller
{
     public function shop() {
        $data['subtitle'] = "Shop";
        $data['product'] = Product_user::with('user')->paginate(6);
        return view('dashboard.shop',$data);
    }

    public function detail_shop($id) 
    {
        // $data['product'] = Product_user::with('user')->select('product_users','id');
        $data['subtitle'] = "Detail Shop";
        $data['product'] =  Product_user::with('user')
                            ->where('id',$id)->get();
        $data['product_random'] = Product_user::with('user')->inRandomOrder()->limit(5)->get();
        return view('dashboard.detail-shop',$data); 
    }
    public function dashboard() {
        $data['subtitle'] = "Dashboard";
        $data['product_random'] = Product_user::with('user')->inRandomOrder()->limit(5)->latest()->get();
        $data['berita_random'] = Berita::with('user')->inRandomOrder()->limit(5)->latest()->get();
        return view('dashboard.dashboard',$data);
    }
    
     public function berita() {
        $data['subtitle'] = "Berita";
        $data['berita'] = DB::table('beritas')->paginate(6);
        return view('dashboard.berita',$data);
    }

    public function detail_berita($id) {
        $data['subtitle'] = "Detail Berita";
        $data['berita'] =  Berita::with('user')
                            ->where('id',$id)->get();
        $data['berita_random'] = Berita::with('user')->inRandomOrder()->limit(5)->latest()->get();
        return view('dashboard.detail-berita',$data);
    }

    public function contact() {
        $data['subtitle'] = "Contact";
        return view('dashboard.contact',$data);
    }

     public function contact_store(Request $request) {
        $request->validate ([
            'name'      => 'required:contacts',
            'email'     => 'required',
            'message'   => ' ',
        ]);

        $contact = new Contacts();
        $contact->name      = $request->name;
        $contact->email     = $request->email;
        $contact->message   = $request->message;
        $contact->save();

        return redirect(route('dashboard.contact'))->with('pesan','Pesan Berhasil dikirim');
    }


    
}
