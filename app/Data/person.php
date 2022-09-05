<?php

namespace App\Data;
use Laravel\Sail\Console\PublishCommand;

class Person
{
    public function __construct(
        public string $firstName, 
        public string $lastName)
    {
        
    }
}