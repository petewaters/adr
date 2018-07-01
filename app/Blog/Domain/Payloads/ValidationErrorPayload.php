<?php

namespace App\Blog\Domain\Payloads;

use App\Core\Abstracts\Payload;

class ValidationErrorPayload extends Payload
{
    protected $status = 422;

    public function getData()
    {
        return [
            'errors' => $this->data,
        ];
    }
}