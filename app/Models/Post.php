<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable=[
        'title',
        'image',
        'category_id',
        'content',
    ];
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
