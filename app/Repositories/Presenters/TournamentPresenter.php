<?php

namespace App\Repositories\Presenters;

use Prettus\Repository\Presenter\FractalPresenter;
use App\Repositories\Transformers\TournamentTransformer;

/**
 * Class ArtPresenter.
 *
 * @package namespace App\Presenters;
 */
class TournamentPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TournamentTransformer();
    }
}
