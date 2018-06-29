<?php

namespace App\Blog\Domain\Repositories;

use App\Blog\Domain\Models\Post;

class PostRepository 
{
    public function create(array $data)
    {
        return Post::create($data);
    }
}