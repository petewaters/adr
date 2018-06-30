<?php

namespace App\Blog\Actions;

use Illuminate\Http\Request;
use App\Blog\Responders\GetPostResponder;
use App\Blog\Domain\Services\GetPostService;

class GetPostAction 
{
    protected $responder;
    protected $service;

    public function __construct(GetPostResponder $responder, GetPostService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }

    public function __invoke(int $postId, Request $request)
    {
        return $this->responder->with(
            $this->service->handle([
                'postId' => $postId
            ])
        )->respond();    
    }
}