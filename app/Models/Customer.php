<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;


    protected $fillable =
     [
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];

    public function getGenderCodeAttribute()
    {
        return $this->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
    }

    public function Keluhan(){
        return $this->hasMany(Keluhan::class);
    }

}