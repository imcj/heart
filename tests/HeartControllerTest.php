<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HeartControllerTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIfNotHasSignin()
    {
        $this->assertTrue(TRUE);
    }

    public function testHasSign()
    {
        $this->assertTrue(TRUE);
    }

    public function testNotHasExistsLike()
    {
        $this->json("POST", '/api/heart', ['url' => 'http://google.com/']);
            // ->seeJson([
            //     'url' => 'http://google.com/',
            //     'description' => '1'
            // ]);
    }

    public function testHasExistsLike()
    {
        $this->assertTrue(TRUE);
    }
}
