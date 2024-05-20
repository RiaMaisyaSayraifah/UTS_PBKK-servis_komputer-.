<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_keluhan',
        'ongkos',
        'komputer_id',
        'customer_id',
        'pegawai_id',
    ];

    public function Kendaraan(){
        return $this->belongsTo(Komputer::class,'no_pol');
    }
    public function Customer(){
        return $this->belongsTo(Customers::class);
    }
    public function Pegawai(){
        return $this->belongsTo(Pegawai::class);
    }
}