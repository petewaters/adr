<?php

use App\Blog\Actions\{ CreatePostAction, GetPostAction };

Route::post('/posts', CreatePostAction::class);
Route::get('/posts/{postId}', GetPostAction::class);
