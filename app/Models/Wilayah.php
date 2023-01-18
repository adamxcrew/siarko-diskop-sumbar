<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $table = 'tabel_wilayah';
    protected $primary_Key = 'ID';
    protected $fillable = ['ID','Jenis','Nama'];

    public function getKoperasi()
    {
        return $this->hasMany(Koperasi::class, 'id_kota','id');
    }
}
