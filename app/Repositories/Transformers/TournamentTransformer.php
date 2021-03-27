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
        $localization = $this->getLocalization($tournament);

        return $tournament->toArray() + [
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
