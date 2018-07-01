<?php

namespace App\Blog\Domain\Services;

use App\Blog\Domain\Payloads\{ BasePayload, ValidationErrorPayload };
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
        if (($validator = $this->validate($data))->fails())
            return new ValidationErrorPayload($validator->getMessageBag());
            
        return new BasePayload($this->posts->create($data));
    }

    public function validate(array $data)
    {
        return validator($data, [
            'title' => 'required',
            'body'  => 'required',
        ]);
    }
}