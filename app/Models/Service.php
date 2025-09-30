<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'image',
        'gallery_images',
        'video_url',
        'short_description',
        'body',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'is_active',
        'is_featured',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    // ✅ Link to Category model instead of ServiceCategory
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
