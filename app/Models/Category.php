<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';

    /**
    * Get the jobs for the category.
    */
    public function jobs()
    {
        return $this->hasMany('App\Models\Job');
    }
}
