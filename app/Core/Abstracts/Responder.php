<?php 

namespace App\Core\Abstracts;

abstract class Responder 
{
    protected $response;

    public function with($response)
    {            
        $this->response = $response;

        return $this;
    }
}