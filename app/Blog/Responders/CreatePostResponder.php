<?php

namespace App\Blog\Responders;

use App\Blog\Domain\Models\Post;
use App\Core\Contracts\Responders\ResponderInterface;

class CreatePostResponder implements ResponderInterface
{
    public function respond($data)
    {
        return response()->json($data, 200);
    }
}