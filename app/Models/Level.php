<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    protected $table='levels';

    /**
    * Get the jobs for the city.
    */
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
}
