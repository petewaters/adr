<?php

namespace App\Blog\Actions;

use Illuminate\Http\Request;
use App\Blog\Responders\CreatePostResponder;
use App\Blog\Domain\Repositories\PostRepository;

class CreatePostAction 
{
    protected $posts;
    protected $responder;

    public function __construct(PostRepository $posts, CreatePostResponder $responder)
    {
        $this->posts = $posts;
        $this->responder = $responder;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->respond(
            $this->posts->create($request->only([
                'title',
                'body',
            ])
        ));    
    }
}