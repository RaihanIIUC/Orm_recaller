<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaravelDev extends Model
{
    use HasFactory;


    protected  $fillable = [
        'title'
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
