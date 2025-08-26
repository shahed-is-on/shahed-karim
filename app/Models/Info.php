<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'email', 'phone', 'text', 'blog_id', 'name', 'profile_photo'
    ];

    public function blog()
    {
        return $this->belongsTo(\App\Models\Blog::class);
    }
}
