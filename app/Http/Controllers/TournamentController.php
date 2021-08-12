<?php

namespace App\Http\Controllers;

use App;
use View;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index(Request $request)
    {
        $tournament = Tournament::select('slug')
            ->isAlive()
            ->latest('started_at')
            ->first();  

        return redirect()->route('show', [
            'tournament_slug' => $tournament->slug,
        ]);
    }

    public function show(Tournament $tournament)
    {
        return View::make('tournaments.show', [
            'tournament' => $tournament->toArray(),
        ]); 
    }

    public function howTo()
    {
        $locale = App::getLocale();

        $view = $locale . '_how_to';

        return View::make('tournaments.' . $view); 
    }
}
