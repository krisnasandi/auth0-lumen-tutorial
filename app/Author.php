<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'github', 
        'twitter', 
        'location', 
        'latest_article_published', 
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('app/User');
    }
}