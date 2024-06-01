<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    public $fillable = ['nama','bio'];
    public $villable = ['nama','bio'];
    public $timestamps = true;

    public function DataPembelian(){
        return $this->hasMany(DataPembelian::class,'id_pegawai');
    }
}
