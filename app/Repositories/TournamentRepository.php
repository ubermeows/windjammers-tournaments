<?php

namespace App\Repositories;

use App\Models\Tournament;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Traits\AddFirstOrFailEndpoint;
use App\Repositories\Presenters\TournamentPresenter;

class TournamentRepository extends BaseRepository 
{
	use AddFirstOrFailEndpoint;

    public function model()
    {
        return Tournament::class;
    }

    public function presenter()
    {
        return TournamentPresenter::class;
    }
}
