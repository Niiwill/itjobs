<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table='types';

    /**
    * Get the jobs for the types.
    */
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
}
