<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_koperasi';
    protected $foreignKey = 'id_kotakab';
    public $timestamps = false;
    
    protected $fillable = [
        'nama_koperasi',
        'arsip_pendirian',
        'arsip_pad',
        'id_kotakab',
    ];

    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class, 'id_kotakab', 'id');
    }

}
