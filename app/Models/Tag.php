<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table='tags';

    /**
    * The jobs that belong to the tag.
    */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','job_tag', 'tag_id', 'job_id');
    }
}
