<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;

class ExampleTest extends TestCase
{
    public function testBasicTest()
    {
        $response = $this->get('/'); // Replace '/' with the route you want to test.

        $response->assertStatus(200); // Ensure the response status code is 200 (OK).
    }
}
