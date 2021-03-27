<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Illuminate\Database\Seeder;

class PopulateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tournament::factory()
            ->winners()
            ->youtube()
            ->create([
                'title' => 'Winter2021',
                'slug' => 'winter2021',
            ]);

        Tournament::factory()
            ->create([
                'title' => 'Winter2022',
                'slug' => 'winter2022',
                'started_at' => '2021-01-10 21:00 CET',
            ]);
    }
}
