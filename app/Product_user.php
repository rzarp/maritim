<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product_user extends Model
{

    // protected $fillable = [
    //     'id','user_id','judul','harga','wa','gambar','desk','alamat'
    // ];
     public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
}
