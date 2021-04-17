<?php

namespace Database\Factories;

use Str;
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
        $title = $this->title();

        $slug = Str::slug($title, '');

        return [
            'title' => $title,
            'subtitle' => 'du fun, du frais, du frisbee',
            'slug' => $slug,
            'challonge_url' => 'https://windjammersfr.challonge.com/fr/' . $slug,
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
                    'pyrotek',
                    'santa_with_muscles',
                    'otherend',
                ],
            ];
        });
    }

    protected function title(): string
    {
        $seasons = ['spring', 'summer', 'autumn', 'winter'];

        shuffle($seasons);

        return $seasons[0] . '20' . random_int(20, 99);
    }
}
