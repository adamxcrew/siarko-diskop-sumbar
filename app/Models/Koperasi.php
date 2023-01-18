<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $table = 'tabel_detail_wilayah';
    protected $primary_key = 'id_koperasi';
    protected $fillable = ['id_koperasi','nama_koperasi','arsip_pendirian','arsip_pad','id_kota'];

    public function wilayah()
    {
        return $this->hasOne(Wilayah::class, 'ID', 'id');
    }
}
