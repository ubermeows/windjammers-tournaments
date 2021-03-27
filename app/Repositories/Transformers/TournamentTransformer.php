<?php

namespace App\Repositories\Transformers;

use App\Models\Tournament;
use League\Fractal\TransformerAbstract;

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
        return $tournament->toArray();
    }
}
