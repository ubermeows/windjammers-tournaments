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
                'started_at' => '2021-01-10 21:00 CET',
            ]);

        Localization::factory()
            ->count(2)
            ->state(new Sequence(
                [
                    'locale' => 'en',
                    'description' => 'blablabla c la description en anglais.',
                ],
                [
                    'locale' => 'fr',
                    'description' => 'blablabla c la description en francais.',
                ],
            ))
            ->create([
                'tournament_id' => $tournament->id,
                'rules' => [
                    'format Suisse',
                    'BO3/FT2',
                ],
            ]);
    }
}
