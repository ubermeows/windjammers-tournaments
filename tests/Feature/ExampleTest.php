<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Tournament;
use Tests\Traits\DisabledLocalization;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase, DisabledLocalization;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        Tournament::factory()->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
