<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * fillable
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    public function posts()
    {
        return $this->hasMany(post::class);
    }
}
