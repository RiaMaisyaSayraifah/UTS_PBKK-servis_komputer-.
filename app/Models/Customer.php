<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'customer';

    // Define the fillable attributes
    protected $fillable = [
        'nama_customer',
        'alamat',
        'jenis_kelamin',
    ];
    public function keluhan()
    {
        return $this->hasMany(Keluhan::class, 'id_customer');
    }
}
