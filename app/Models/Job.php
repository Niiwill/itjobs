<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // use HasFactory;


    /**
     * Get the category that owns job.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

     /**
     * Get the city that owns job.
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    /**
    * Get the company that owns jobw.
    */
    public function company()
    {
        return $this->belongsTo('App\Models\Company','user_id','user_id');

    }

    /**
    * Get the level that owns job.
    */
    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    /**
    * Get the typpes that for job.
    */
    public function type()
    {
        return $this->belongsTo('App\Models\Type');
    }

    /**
    * Tags that belongs to Jobs
    */

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','job_tag');
    }
}
