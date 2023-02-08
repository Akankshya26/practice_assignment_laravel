<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function states()
    {
        return $this->hasMany(State::class);
    }
    public function cities()
    {
        return $this->hasManyThrough(City::class, States::class);
    }
}
