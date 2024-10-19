<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbCars extends Model
{
    use HasFactory;

    protected $primaryKey = 'idCars';
    protected $fillable = [
        'nomeCars',
        'modeloCars',
        'anoCars',
    ];
}
