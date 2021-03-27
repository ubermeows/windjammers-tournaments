<?php

namespace Database\Factories;

use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;

class TournamentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tournament::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'slug' => $this->faker->slug,
            'challonge_url' => 'https://windjammersfr.challonge.com/fr/winterleague1',
            'winners' => null,
            'video' => null,
            'started_at' => null,
        ];
    }

    public function youtube()
    {
        return $this->state(function (array $attributes) {
            return [
                'video' => 'https://www.youtube.com/watch?v=WHGEc6lMVOA',
            ];
        });
    }

    public function twitch()
    {
        return $this->state(function (array $attributes) {
            return [
                'video' => 'https://www.twitch.tv/videos/944693518',
            ];
        });
    }

    public function winners()
    {
        return $this->state(function (array $attributes) {
            return [
                'winners' => [
                    'Pyrotek',
                    'Santa',
                    'Otherend',
                ],
            ];
        });
    }
}
