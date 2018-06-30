<?php

namespace App\Blog\Responders;

use App\Blog\Domain\Models\Post;

class GetPostResponder
{
    public function respond(Post $post)
    {
        return response()->json($post, 200);
    }
}