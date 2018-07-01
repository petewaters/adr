<?php

namespace App\Blog\Responders;

use App\Blog\Domain\Models\Post;
use App\Core\Abstracts\Responder;
use App\Blog\Domain\Resources\PostResource;
use App\Core\Contracts\Responders\ResponderInterface;

class ListPostsResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return PostResource::collection($this->response->getData());
    }
}