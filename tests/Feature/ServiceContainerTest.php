<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Faker\Provider\vi_VN\Person;
use app\Data\Persons;

class ServiceContainerTest extends TestCase
{
    public function TestServiceContainer(){
        $foo1 = $this->app->make(Foo::class);
        $foo2 = $this->app->make(Foo::class);

        self::assertEquals("Foo",$foo1->foo());
        self::assertEquals("Foo",$foo2->foo());
        self::assertNotSame($foo1, $foo2);
    }

    public function testBind(){
        $this->app->bind(Person::class, function($app){
            return new Person("samm", "SAM");
        });

        $person1 = $this->app->make(Person::class);
        $person2 = $this->app->make(Person::class);

        self::assertEquals("Sam", $person1->$firstName);
        self::assertEquals("Sam", $person2->$firstName);
        self::assertNotSame($person1, $person2);


    }
}

