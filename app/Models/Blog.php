<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'category_id',
        'name','slug','title','short_des','des','writer_name',
        'image_1','image_2','image_3',
        'keywords','meta_title','meta_des','image_alt_text','ai_help'
    ];

    protected static function booted()
    {
        static::creating(function (Blog $blog) {
            if (empty($blog->slug)) {
                $blog->slug = static::makeUniqueSlug($blog->name ?: $blog->title);
            }
        });

        static::updating(function (Blog $blog) {
            // If name changed and slug not manually set, refresh slug
            if ($blog->isDirty('name') && !$blog->isDirty('slug')) {
                $blog->slug = static::makeUniqueSlug($blog->name);
            }
        });
    }

    public static function makeUniqueSlug(?string $base): string
    {
        $base = Str::slug($base ?: Str::random(8));
        $slug = $base;
        $i = 2;
        while (static::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$i}";
            $i++;
        }
        return $slug;
    }

    public function getRouteKeyName(): string
    {
        return 'slug'; // route model binding by slug
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function infos()
{
    return $this->hasMany(\App\Models\Info::class);
}



}
