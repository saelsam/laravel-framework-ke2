<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfTest extends TestCase
{
    public function ConfTest(){
        $firstName = config("contoh.first");
        $lastName = config("contoh.last");

        self::assertEquals("sael", $firstName);
        self::assertEquals("sam", $lastName);
    }
}
