<?php

namespace Tests\Feature;

use Tests\TestCase;
use Tests\Traits\DisabledLocalization;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use DisabledLocalization;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
