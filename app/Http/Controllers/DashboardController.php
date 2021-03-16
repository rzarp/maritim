<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class DashboardController extends Controller
{
     public function shop() {
        return view('dashboard.shop');
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
