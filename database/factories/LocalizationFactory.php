<?php

namespace Database\Factories;

use App\Models\Tournament;
use App\Models\Localization;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Localization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tournament_id' => Tournament::factory()->winners()->create(),
            'locale' => 'en',
            'rules' => [
                'format Suisse',
                'BO3/FT2',
            ],
        ];
    }
}
