<?php

namespace App\Blog\Domain\Models;

use App\Blog\Domain\Models\Tag;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    public static function boot()
    {
        parent::boot();

        static::created(function ($post) {
            $post->update([
                'slug' => str_slug($post->title . ' ' . uniqid()),
            ]);
        });
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
