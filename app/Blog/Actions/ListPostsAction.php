<?php

namespace App\Blog\Actions;

use Illuminate\Http\Request;
use App\Blog\Responders\ListPostsResponder;
use App\Blog\Domain\Services\ListPostsService;

class ListPostsAction 
{
    protected $responder;
    protected $service;

    public function __construct(ListPostsResponder $responder, ListPostsService $service)
    {
        $this->responder = $responder;
        $this->service = $service;
    }

    public function __invoke(Request $request)
    {
        return $this->responder->with(
            $this->service->handle()
        )->respond();    
    }
}