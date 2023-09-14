<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testBasicTest()
    {
        $response = $this->get('/'); // Replace '/' with the route you want to test.

        $response->assertStatus(200); // Ensure the response status code is 200 (OK).
    }
}
