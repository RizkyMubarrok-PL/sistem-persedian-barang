<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public function Transaksi (){
        return [
            $this->hasMany('Barang'),
            $this->hasMany('User')
        ];
    }
}
