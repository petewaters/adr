<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Repositories\PostRepository;

class GetPostService 
{
    protected $posts;
    protected $tags;
    
    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    public function handle(int $postId)
    {
        $post = $this->posts->get($postId);

        $post->load('tags');

        return $post;
    }
}