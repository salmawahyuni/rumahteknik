<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table ="transaksi";
    protected $primaryKey ="id";
    protected $fillable =[
        'id','email','namabarang','jumlah','namadosen','ruangkuliah','matakuliah',
        'waktupinjam','waktukembali','keterangan','statuspengembalian','petugas'];
}
