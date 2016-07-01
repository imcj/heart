<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RandomUserControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStorage()
    {
        $this->json("POST", '/api/user/random', [])
            ->seeJsonStructure([
                'id', 'name', 'email', 'password', 'createdAt'
            ]);
    }
}
