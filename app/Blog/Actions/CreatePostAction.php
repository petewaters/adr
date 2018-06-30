<?php

namespace App\Blog\Actions;

use Illuminate\Http\Request;
use App\Blog\Responders\CreatePostResponder;
use App\Blog\Domain\Services\CreatePostService;

class CreatePostAction 
{
    protected $responder;
    protected $service;

    public function __construct(CreatePostResponder $responder, CreatePostService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        $post = $this->service->handle($request->only([
            'title',
            'body',
        ]));

        return $this->responder->with($post)->respond();    
    }
}