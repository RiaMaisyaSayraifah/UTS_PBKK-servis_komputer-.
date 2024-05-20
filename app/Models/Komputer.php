<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;
    protected $primaryKey = 'komputer_id';
    protected $keyType = 'string';
    protected $fillable = [
        'komputer_id',
        'kelengkapan',
        'merek',
    ];

    public function Keluhan(){
        return $this->hasMany(Keluhan::class);
    }
}