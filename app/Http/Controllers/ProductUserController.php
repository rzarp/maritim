<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Product_user;
use App\User;
use Illuminate\Http\Request;
use File;
use DB;
use Auth;
use DataTables;



class ProductUserController extends Controller
{
    
    public function inputproduct() 
    {
        return view('user-master.input-product');
    }

    public function lihatproduct(Request $request)
    {
         if ($request->ajax()) {
            $product  = DB::table('product_users')->where('user_id', Auth::id())->get();
            return Datatables::of($product)
                ->addIndexColumn()  
                ->addColumn('action', function($row) {
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="'.route('product.edit',['id' => $row->id]).'" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="'.route('product.destroy',['id' => $row->id]).'"  class="btn btn-danger btn-sm delete-confirm ">Hapus</a>
                            </div>
                        </div>
                    ';

                    
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('user-master.lihat-product');
    }

   
    public function store(Request $request)
    {
        $request->validate ([
            'judul'         => 'required',
            'harga'         => 'required',
            'wa'            => 'required',
            'gambar'        => 'max:1000|file|image',
            'desk'          => ' ',
            'alamat'        => ' ',
            
        ]);

        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/berita', $namaFile);
            DB::table('product_users')
                ->insert([
                    'judul'     => $request->judul,
                    'harga'     => $request->harga,
                    'wa'        => $request->wa,
                    'gambar'    => $path,
                    'desk'      => $request->desk,
                    'alamat'    => $request->alamat,
                    'user_id'   => auth()->id(),
                ]);
                
                return redirect(route('input.product'))->with('pesan','Data Berhasil ditambahkan');
                
                }
    }

    
    

    public function edit($id) {
        $product = Product_user::find($id);
        return view('user-master.edit-product',['product'=>$product]);
    }

   public function update(Request $request, $id) 
    {
        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'gambar-'.time().".".$extFile;
            $path = $request->gambar->move('img/berita', $namaFile);
            DB::table('product_users')
            ->where('id', $id)
            ->update([
                'judul'     => $request->judul,
                'harga'     => $request->harga,
                'wa'        => $request->wa,
                'gambar'    => $path,
                'desk'      => $request->desk,
                'alamat'    => $request->alamat,
                'user_id'   => auth()->id(),
                
            ]);

        return redirect(route('lihat.product'))->with('pesan','Data Berhasil diupdate');
        }
    }

    
    public function destroy($id)
    {
        $berita = DB::table('product_users')->where('id',$id)->first();
        if($berita->gambar != 'img/beritas/noimage.png') {
            File::delete($berita->gambar);
        }

        DB::table('product_users')->where('id',$id)->delete();

        return redirect(route('lihat.product'))->with('pesan','Data Berhasil dihapus!');
    }

    // setting
    public function setting() {
        $data['user']= DB::table('users')->where('id', Auth::id())->get();
        return view ('user-master.setting',$data);
    }

    public function edit_setting ($id) {
        $data['user'] = User::find($id);
        return view('user-master.edit-setting',$data);  
    }

    public function update_setting(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect(route('setting.user'))->with('pesan','Data Berhasil Disimpan');
    }


   
}
