<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Product_user;
use DB;

class DashboardController extends Controller
{
     public function shop() {
        $data['product'] = Product_user::all();
        return view('dashboard.shop',$data);
    }

    public function dashboard() {
        $data['product_random'] = DB::table('product_users')->inRandomOrder()->first();
        return view('dashboard.dashboard',$data);
    }
     public function berita() {
        return view('dashboard.berita');
    }

    public function contact() {
        return view('dashboard.contact');
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
