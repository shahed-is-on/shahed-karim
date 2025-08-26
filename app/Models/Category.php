<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
     protected $fillable = ['name','slug'];

    protected static function booted()
    {
        static::creating(function (Category $cat) {
            if (empty($cat->slug)) {
                $cat->slug = static::makeUniqueSlug($cat->name);
            }
        });

        static::updating(function (Category $cat) {
            if ($cat->isDirty('name') && !$cat->isDirty('slug')) {
                $cat->slug = static::makeUniqueSlug($cat->name);
            }
        });
    }

    public static function makeUniqueSlug(string $base): string
    {
        $base = Str::slug($base);
        $slug = $base;
        $i = 2;
        while (static::where('slug', $slug)->exists()) {
            $slug = "{$base}-{$i}";
            $i++;
        }
        return $slug;
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
