<?php

namespace App\Blog\Responders;

use App\Blog\Domain\Models\Post;

class CreatePostResponder
{
    public function respond(Post $post)
    {
        return response()->json($post, 200);
    }
}