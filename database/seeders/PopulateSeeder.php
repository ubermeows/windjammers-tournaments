<?php

namespace Database\Seeders;

use App\Models\Tournament;
use App\Models\Localization;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

class PopulateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tournament = Tournament::factory()
            ->winners()
            ->youtube()
            ->create([
                'title' => 'Winter2021',
                'slug' => 'winter2021',
            ]);

        Localization::factory()
            ->count(2)
            ->state(new Sequence(
                ['locale' => 'en'],
                ['locale' => 'fr'],
            ))
            ->create([
                'tournament_id' => $tournament->id,
                'description' => 'blablabla c la description',
                'rules' => [
                    'format Suisse',
                    'BO3/FT2',
                ],
            ]);
    }
}
