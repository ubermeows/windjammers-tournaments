<?php

namespace App\Repositories\Transformers;

use App;
use App\Models\Tournament;
use App\Models\Localization;
use League\Fractal\TransformerAbstract;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/**
 * Class ArtTransformer.
 *
 * @package namespace App\Transformers;
 */
class TournamentTransformer extends TransformerAbstract
{
    /**
     * Transform the Art entity.
     *
     * @param \App\Entities\Art $model
     *
     * @return array
     */
    public function transform(Tournament $tournament)
    {
        $attributes = $tournament->only([
            'title', 
            'challonge_url', 
            'winners',
            'video',
            'started_at',
        ]);
        
        $localization = $this->getLocalization($tournament);

        return $attributes + [
            'description' => $localization->description,
            'rules' => $localization->rules,
        ];
    }

    protected function getLocalization(Tournament $tournament): Localization
    {
        return $tournament
            ->localizations()
            ->where('locale', App::getLocale())
            ->first();
    }
}
