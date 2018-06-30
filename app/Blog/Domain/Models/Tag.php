<?php 

namespace App\Blog\Domain\Models;

use App\Blog\Domain\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag'
    ];

    public static function boot()
    {
        parent::boot();
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }
}