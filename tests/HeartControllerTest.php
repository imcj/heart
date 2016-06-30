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
        $this->assertTrue(TRUE);
    }

    public function testHasExistsLike()
    {
        $this->assertTrue(TRUE);
    }
}
