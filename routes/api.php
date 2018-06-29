<?php

use App\Blog\Actions\CreatePostAction;

Route::post('/posts', CreatePostAction::class);
