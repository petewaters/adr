<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Payloads\BasePayload;
use App\Core\Contracts\Domain\ServiceInterface;
use App\Blog\Domain\Repositories\PostRepository;

class ListPostsService implements ServiceInterface
{
    protected $posts;
    protected $tags;
    
    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    public function handle($data = [])
    {
        $posts = $this->posts->all();

        // Load the tags for each post
        foreach ($posts as $post) {
            $post->load('tags');
        }
            
        return new BasePayload($posts);
    }
}