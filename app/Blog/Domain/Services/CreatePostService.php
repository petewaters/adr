<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Repositories\{ TagRepository, PostRepository };

class CreatePostService 
{
    protected $posts;
    protected $tags;
    
    public function __construct(PostRepository $posts, TagRepository $tags)
    {
        $this->posts = $posts;
        $this->tags = $tags;
    }

    public function handle(array $data)
    {
        return $this->posts->create($data);
    }
}