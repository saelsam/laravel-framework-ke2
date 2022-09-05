<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Support\Facades\App;
use self;
use phpDocumentor\Reflection\PseudoTypes\True_;

class ExampleTest extends TestCase
{   
    public function testEnvDe()
    {   
        if(App::environment('testing')){
            echo"logic in local env". PHP_EOL;
            self::assertTrue(True);
        }
    }
}
