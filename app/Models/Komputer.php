<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;

    protected $table = 'komputer';

    protected $fillable = [
        'merk',
        'kelengkapan',
    ];
    public function keluhan()
    {
        return $this->hasMany(Keluhan::class, 'id_komputer');
    }
}
