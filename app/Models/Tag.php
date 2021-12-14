<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tag extends Model
{
    use HasFactory;

    protected $table='tags';
    public $timestamps = false;

    /**
    * The jobs that belong to the tag.
    */
    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }
    

    public function scopeSearch($query, $column, $search){
        return $query->where($column, 'LIKE', "%{$search}%");

    }
}
