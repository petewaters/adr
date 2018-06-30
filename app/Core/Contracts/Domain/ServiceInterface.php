<?php

namespace App\Core\Contracts\Domain;

interface ServiceInterface 
{
    public function handle($data = []);
}