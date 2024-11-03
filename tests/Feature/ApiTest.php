<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    public function test_api_hello()
    {
        $response = $this->get('/api/hello');
        $response->assertStatus(200);
        $response->assertSee('hello world');
    }

    public function test_api_hello_jose()
    {
        $response = $this->get('/api/hello/jose');
        $response->assertStatus(200);
        $response->assertSee('hello world jose');
    }

    public function test_api_params_hello(): void
        {   
    $response = $this->get('/api/params/hello?name=jose');

    $response->assertStatus(200);
    $response->assertSee('hello world jose');
        }
}
