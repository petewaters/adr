<?php

namespace App\Blog\Responders;

use App\Blog\Domain\Models\Post;
use App\Core\Abstracts\Responder;
use App\Core\Contracts\Responders\ResponderInterface;

class CreatePostResponder extends Responder implements ResponderInterface
{
    public function respond()
    {
        return response()->json($this->response, 200);
    }
}