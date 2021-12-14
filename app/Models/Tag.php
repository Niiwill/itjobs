<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table='tags';
    public $timestamps = false;

    /**
    * The jobs that belong to the tag.
    */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag','job_tag', 'tag_id', 'job_id');
    }

    public function scopeSearch($query, $column, $search){
        return $query->where($column, 'LIKE', "%{$search}%");

    }
}
