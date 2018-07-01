<?php

use App\Blog\Actions\{ CreatePostAction, GetPostAction, ListPostsAction };

Route::get('/posts', ListPostsAction::class);
Route::get('/posts/{postId}', GetPostAction::class);

Route::post('/posts', CreatePostAction::class);
