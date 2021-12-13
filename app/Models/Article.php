<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $dates = ['article_event_date'];

    public function scopeSearch($query, $column, $search){
        return $query->where($column, 'LIKE', "%{$search}%");
    }
}
