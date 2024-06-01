<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    use HasFactory;

    public $fillable = ['nama_pembeli','id_menu','id_pegawai','metode_pembayaran','uang_tunai','tanggal'];
    public $villable = ['nama_pembeli','id_menu','id_pegawai','metode_pembayaran','uang_tunai','tanggal'];
    public $timestamps = true;

    public function Menu(){
        return $this->belongsTo(Menu::class,'id_menu');
    }
    public function Pegawai(){
        return $this->belongsTo(Pegawai::class,'id_pegawai');
    }
}
