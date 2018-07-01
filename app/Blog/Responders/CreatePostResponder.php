<?php

namespace App\Blog\Responders;

use App\Blog\Domain\Models\Post;
use App\Core\Abstracts\Responder;
use App\Blog\Domain\Resources\PostResource;
use App\Blog\Domain\Payloads\ValidationErrorPayload;
use App\Core\Contracts\Responders\ResponderInterface;

class CreatePostResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        if ($this->response instanceof ValidationErrorPayload) 
            return response()->json($this->response->getData(), $this->response->getStatus());
            
        return (new PostResource($this->response->getData()))
            ->response()
            ->setStatusCode($this->response->getStatus());
    }
}