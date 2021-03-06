<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Payloads\BasePayload;
use App\Core\Contracts\Domain\ServiceInterface;
use App\Blog\Domain\Repositories\PostRepository;

class GetPostService implements ServiceInterface
{
    protected $posts;
    protected $tags;
    
    public function __construct(PostRepository $posts)
    {
        $this->posts = $posts;
    }

    public function handle($data = [])
    {
        $post = $this->posts->get($data['postId']);
        $post->load('tags');

        return new BasePayload($post);
    }
}