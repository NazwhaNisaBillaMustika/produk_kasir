<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    public $fillable = ['nama_produk','gambar','jenis','harga','qty'];
    public $villable = ['nama_produk','gambar','jenis','harga','qty'];
    public $timestamps = true;

    public function DataPembelian(){
        return $this->hasMany(DataPembelian::class,'id_menu');
    }

    public function deleteImage(){
        if ($this->gambar && file_exists(public_path('images/gambar/' .$this->gambar))) {
            return unlink(public_path('images/gambar/' .$this->gambar));
        }
    }
}
