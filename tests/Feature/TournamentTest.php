<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Localization;
use Tests\Traits\DisabledLocalization;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TournamentTest extends TestCase
{
    use RefreshDatabase, DisabledLocalization;

    /**
     * @test
     */
    public function home()
    {
        $localization = Localization::factory()->create();

        $response = $this->followingRedirects()->get('/');

        $response
            ->assertStatus(200)
            ->assertSee($localization->tournament->title);
    }

    /**
     * @test
     */
    public function show()
    {
        $localization = Localization::factory()->create();

        $response = $this->get($localization->tournament->slug);

        $response
            ->assertStatus(200)
            ->assertSee($localization->tournament->title);
    }
}
