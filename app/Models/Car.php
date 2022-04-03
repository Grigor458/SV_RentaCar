<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property-read Car $car
 */
class Car extends Model
{
    use HasFactory;

    public $fillable = ['name'];
    public function carAttributes(): hasMany
    {
        return $this->hasMany(CarAttributes::class);
    }
}
