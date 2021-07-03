<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table ="barang";
    protected $primaryKey ="id";
    protected $fillable =[
        'id','kodebarang','namabarang','stok','kondisi','harga','spesifikasi','gambar'];

        public function transaksi()
        {
            return $this->hasMany(Transaksi::class);
        }
}

