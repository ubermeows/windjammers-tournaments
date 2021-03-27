<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Localization;
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
        Localization::factory()->create();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
