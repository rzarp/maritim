<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Redirect;
use Session;
use App\Admin;
use App\User;

use File;
use DB;
use Auth;
use DataTables;
use App\Product_user;

use App\Contacts;

class AdminController extends Controller
{
    
    public function indexuser() 
    {
        $data['user']= User::all();
        return view('admin-master.lihat-user',$data);
    }


    public function create()
    {
        $data['is_admin'] = [0,1];
        return view('admin-master.input-user',$data);
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->is_admin;
        $user->save();

        return redirect(route('index.user'))->with('pesan','Data Berhasil Ditambahkan');
    }

 
    public function edit($id)
    {
        $data['is_admin'] = [0,1];
        $data['user'] = User::find($id);
        return view('admin-master/edit-user',$data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'is_admin' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_admin = $request->is_admin;
        $user->save();

        return redirect(route('index.user'))->with('pesan','Data Berhasil Disimpan');
    }

  
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect(route('index.user'))->with('pesan','Data Berhasil Dihapus');
    }


    // Product User bakal admin ngatur iklan mereka
    public function lihatproduct(Request $request)
    {
         if ($request->ajax()) {
            $product  = Product_user::all();
            return Datatables::of($product)
                ->addIndexColumn()  
                ->addColumn('action', function($row) {
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="'.route('product.hapus',['id' => $row->id]).'"  class="btn btn-danger btn-sm delete-confirm ">Hapus</a>
                            </div>
                        </div>
                    ';

                    
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin-master.lihat-product');
    }
    
    public function destroy_product($id)
    {
        $berita = DB::table('product_users')->where('id',$id)->first();
        if($berita->gambar != 'img/beritas/noimage.png') {
            File::delete($berita->gambar);
        }

        DB::table('product_users')->where('id',$id)->delete();

        return redirect(route('product.lihat'))->with('pesan','Data Berhasil dihapus!');
    }

    public function lihatcontact() {
        $contact = Contacts::all();
        return view('admin-master.lihat-contact',['contact'=>$contact]);
    }
    public function destroy_contact($id)
    {
        $contact = Contacts::find($id);
        $contact->delete();

        return redirect(route('lihat.contact'))->with('pesan','Data Berhasil dihapus!');
    }
     public function detail($id) {
        $contact['contact'] = DB::select('select * from contacts where id = ?', [$id]);
        return view('admin-master.detail-contact',$contact);
    }
}
