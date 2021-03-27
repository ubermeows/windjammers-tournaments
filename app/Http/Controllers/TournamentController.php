<?php

namespace App\Http\Controllers;

use View;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Repositories\Criterias\Where;
use App\Repositories\TournamentRepository;
use App\Repositories\Presenters\TournamentPresenter;

class TournamentController extends Controller
{
    public function __construct(
        protected TournamentRepository $repository
    ){}

    public function index()
    {
        $tournament = $this->repository
            ->orderBy('started_at', 'DESC')
            ->first();

        return View::make('tournaments.show', [
            'tournament' => $tournament['data'],
        ]); 
    }

    public function show(Request $request)
    {
        $tournament = $this->repository
            ->pushCriteria(new Where('slug', $request->slug))
            ->firstOrFail();

        return View::make('tournaments.show', [
            'tournament' => $tournament['data'],
        ]); 
    }

    public function rules()
    {
        return View::make('tournaments.rules'); 
    }
}
