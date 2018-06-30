<?php

namespace App\Blog\Domain\Repositories;

use App\Blog\Domain\Models\Post;

class PostRepository 
{
    public function get(int $postId)
    {
        return Post::find($postId);
    }

    public function create(array $data)
    {
        return Post::create($data);
    }
}