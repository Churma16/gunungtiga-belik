<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postImage()
    {
        return $this->hasMany(PostImage::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getPostFormatDateAttribute()
    {
        return $this->created_at->format('d F Y');
    }

    public function getPostExcerptAttribute()
    {
        $excerpt = implode(' ', array_slice(str_word_count($this->konten, 1), 0, 100));

        return $excerpt;
    }
}
