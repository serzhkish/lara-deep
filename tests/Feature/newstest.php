<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class newstest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testNews()
    {
        $response = $this->get('/news/1');

        $response->assertStatus(200)
            ->assertSeeText('news 1');
    }

    public function testNewsCard()
    {
        $response = $this->get('/news/card/1');

        $response->assertStatus(200)
            ->assertSeeText('news 1 content');
    }
}
